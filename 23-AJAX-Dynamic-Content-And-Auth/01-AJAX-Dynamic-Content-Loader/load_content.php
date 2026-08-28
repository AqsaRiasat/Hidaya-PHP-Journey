<?php
include("db.php");

if (!isset($_COOKIE['user_login'])) {
    echo "Please login first.";
    exit();
}

$current_user = base64_decode($_COOKIE['user_login']);

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else if (isset($_POST['page'])) {
    $page = $_POST['page'];
} else {
    $page = 'compose';
}

if (isset($_POST['send_email'])) {
    $to = $_POST['to'];
    $sub = $_POST['sub'];
    $cc = $_POST['cc'];
    $msg = $_POST['message'];
    $status = 'sent';

    $insert = "INSERT INTO emails (sender, receiver, subject, cc, message, status) VALUES ('$current_user', '$to', '$sub', '$cc', '$msg', '$status')";
    mysqli_query($conn, $insert);
    $page = 'sent';
}

if (isset($_POST['draft_email'])) {
    $to = $_POST['to'];
    $sub = $_POST['sub'];
    $cc = $_POST['cc'];
    $msg = $_POST['message'];
    $status = 'draft';

    $insert = "INSERT INTO emails (sender, receiver, subject, cc, message, status) VALUES ('$current_user', '$to', '$sub', '$cc', '$msg', '$status')";
    mysqli_query($conn, $insert);
    $page = 'draft';
}

if (isset($_POST['delete_emails'])) {
    if (isset($_POST['email_ids'])) {
        $ids = $_POST['email_ids'];
        foreach ($ids as $id) {
            $update = "UPDATE emails SET status='trash' WHERE id='$id'";
            mysqli_query($conn, $update);
        }
    }
}
?>

<?php if ($page == 'compose') { ?>
    <form id="emailForm" onsubmit="event.preventDefault();">
        <table class="form-table" cellpadding="5">
            <tr>
                <td>To:</td>
                <td><input type="text" name="to" required></td>
            </tr>
            <tr>
                <td>Subject:</td>
                <td><input type="text" name="sub" required></td>
            </tr>
            <tr>
                <td>Cc:</td>
                <td><input type="text" name="cc"></td>
            </tr>
            <tr>
                <td>Message:</td>
                <td><textarea name="message" rows="6" required></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="button" value="Draft" class="btn" onclick="saveDraft()">
                    <input type="button" value="Send" class="btn" onclick="sendEmail()">
                </td>
            </tr>
        </table>
    </form>
<?php } else { 
    if ($page == 'inbox') {
        $q = "SELECT * FROM emails WHERE receiver='$current_user' AND status='sent'";
    } 
    if ($page == 'sent') {
        $q = "SELECT * FROM emails WHERE sender='$current_user' AND status='sent'";
    } 
    if ($page == 'draft') {
        $q = "SELECT * FROM emails WHERE sender='$current_user' AND status='draft'";
    } 
    if ($page == 'trash') {
        $q = "SELECT * FROM emails WHERE (sender='$current_user' OR receiver='$current_user') AND status='trash'";
    }
    
    $res = mysqli_query($conn, $q);
?>
    <form id="emailListForm" onsubmit="event.preventDefault();">
        <table class="email-table">
            <tr>
                <th>Check</th>
                <th>Name</th>
                <th>Subject</th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($res)) { 
                if ($page == 'inbox') {
                    $display_name = $row['sender'];
                } else {
                    $display_name = $row['receiver'];
                }
            ?>
            <tr>
                <td><input type="checkbox" name="email_ids[]" value="<?php echo $row['id']; ?>"></td>
                <td><?php echo $display_name; ?></td>
                <td><?php echo $row['subject']; ?></td>
            </tr>
            <?php } ?>
        </table>
        <?php if ($page != 'trash') { ?>
            <br/>
            <input type="button" value="Delete" class="btn" onclick="deleteEmails('<?php echo $page; ?>')">
        <?php } ?>
    </form>
<?php } ?>
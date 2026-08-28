<?php
session_start();
date_default_timezone_set('asia/karachi');
require_once('database_connection.php');

if (isset($_REQUEST['register'])) {
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $check_query = "SELECT * FROM user WHERE email = '$email'";
    $check_result = mysqli_query($connection, $check_query);

    if ($check_result->num_rows > 0) {
        header('location:register.php?msg=Email already exists&color=red');
    } else {
        $insert_query = "INSERT INTO user (first_name, last_name, email, password, is_online) VALUES ('$first_name', '$last_name', '$email', '$password', 0)";
        mysqli_query($connection, $insert_query);
        header('location:index.php?msg=Registration Successful! Please Login.&color=green');
    }
}

else if (isset($_REQUEST['action']) && $_REQUEST['action'] == "send_message") {
    $message = $_REQUEST['message'];
    $user_id = $_SESSION['user']['user_id'];
    $time = time();

    $query = "INSERT INTO chat (message, user_id, sent_on) VALUES ('$message', '$user_id', '$time')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "<p style='text-align:center; color: green; font-weight:bold;'>Message Sent..!</p>";
    } else {
        echo "<p style='text-align:center; color: red; font-weight:bold;'>Something Went Wrong..!</p>";
    }
} 

else if (isset($_REQUEST['action']) && $_REQUEST['action'] == "show_messages") {
    $query = "SELECT * FROM chat, user WHERE chat.user_id = user.user_id ORDER BY chat.chat_id ASC";
    $result = mysqli_query($connection, $query);

    if ($result->num_rows > 0) {
        while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            
            $user_img = !empty($data['profile_picture']) ? $data['profile_picture'] : 'default.png';

            if ($data['user_id'] == $_SESSION['user']['user_id']) {
                ?>
                <div class="my-msg-card" style="display: flex; align-items: flex-start; justify-content: flex-end; gap: 8px; margin-bottom: 10px;">
                    <table class="bubble-table">
                        <tr>
                            <td style="padding-left: 5px;">
                                <b class="text-blue"><?php echo $_SESSION['user']['first_name'] . " " . $_SESSION['user']['last_name']; ?></b><br/>
                                <span class="text-dark"><?php echo $data['message']; ?></span><br/>
                                <small class="time-text"><?php echo date('d-m-y h:i:a', $data['sent_on']); ?></small>
                            </td>
                        </tr>
                    </table>
                    <img src="<?php echo $user_img; ?>" style="width: 35px; height: 35px; border-radius: 50%; object-fit: cover; border: 1px solid #cbd5e0; margin-top: 5px;">
                </div>
                <?php   
            } else {
                ?>
                <div class="other-msg-card" style="display: flex; align-items: flex-start; gap: 8px; margin-bottom: 10px;">
                    <img src="<?php echo $user_img; ?>" style="width: 35px; height: 35px; border-radius: 50%; object-fit: cover; border: 1px solid #cbd5e0; margin-top: 5px;">
                    <table class="bubble-table">
                        <tr>
                            <td style="padding-left: 5px;">
                                <b class="text-dark"><?php echo $data['first_name'] . " " . $data['last_name']; ?></b><br/>
                                <span class="text-dark"><?php echo $data['message']; ?></span><br/>
                                <small class="time-text"><?php echo date('d-m-y h:i:a', $data['sent_on']); ?></small>
                            </td>
                        </tr>
                    </table>
                </div>
                <?php
            }
        }
    }
}

else if (isset($_REQUEST['action']) && $_REQUEST['action'] == "show_online_users") {
    $query = "SELECT * FROM user WHERE is_online = 1";
    $result = mysqli_query($connection, $query);

    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            
            $user_img = !empty($user_data['profile_picture']) ? $user_data['profile_picture'] : 'default.png';
            ?>
            <div class="online-user-item" style="display: flex; align-items: center; margin-bottom: 8px;">
                <span class="online-dot"></span>
                <img src="<?php echo $user_img; ?>" style="width: 30px; height: 30px; border-radius: 50%; margin-right: 10px; object-fit: cover; border: 1px solid #cbd5e0;">
                <b><?php echo $user_data['first_name'] . " " . $user_data['last_name']; ?></b>
            </div>
            <?php
        }
    }
}
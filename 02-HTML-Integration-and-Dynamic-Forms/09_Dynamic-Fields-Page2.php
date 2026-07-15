<?php

if(isset($_POST['submit_btn'])) {
    $rows = $_POST['row_count'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2 - Dynamic Form</title>
</head>
<body>
    <h2>Enter <?php echo $rows; ?>Details Entries</h2>

    <form action="09_Dynamic-Fields-Page3.php" method="POST">
        <input type="hidden" name="total_rows" value="<?php echo $rows; ?>">

        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <td>Row</td>
                <td>Name</td>
                <td>Gender</td>
                <td>Country</td>
            </tr>
            <?php
              for($i = 1; $i <= $rows; $i++) {
                 
              }
            ?>
        </table>
    </form>
</body>
</html>
}

<?php
if (isset($_POST['submit1'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $objective = $_POST['objective'];
?>
<!DOCTYPE html>
<html>
<head><title>CV Step 2</title></head>
<body>
    <h2>Step 2: Educational Details</h2>
    <form action="10_CV_page3.php" method="POST">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="phone" value="<?php echo $phone; ?>">
        <input type="hidden" name="objective" value="<?php echo $objective; ?>">

        Degree Title: <input type="text" name="degree" required><br><br>
        Institute/University: <input type="text" name="institute" required><br><br>
        Passing Year: <input type="number" name="passing_year" required><br><br>
        <input type="submit" name="submit2" value="Next: Experience">
    </form>
</body>
</html>
<?php
} else { echo "Direct access not allowed."; }
?>
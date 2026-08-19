<?php
if (isset($_POST['submit2'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $objective = $_POST['objective'];
    $degree = $_POST['degree'];
    $institute = $_POST['institute'];
    $passing_year = $_POST['passing_year'];
?>
<!DOCTYPE html>
<html>
<head><title>CV Step 3</title></head>
<body>
    <h2>Step 3: Work Experience</h2>
    <form action="10_CV_page4.php" method="POST">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="phone" value="<?php echo $phone; ?>">
        <input type="hidden" name="objective" value="<?php echo $objective; ?>">
        <input type="hidden" name="degree" value="<?php echo $degree; ?>">
        <input type="hidden" name="institute" value="<?php echo $institute; ?>">
        <input type="hidden" name="passing_year" value="<?php echo $passing_year; ?>">

        Job Title: <input type="text" name="job_title"><br><br>
        Company Name: <input type="text" name="company"><br><br>
        Years of Experience: <input type="number" name="exp_years"><br><br>
        <input type="submit" name="submit3" value="Generate Final CV">
    </form>
</body>
</html>
<?php
} else { echo "Direct access not allowed."; }
?>
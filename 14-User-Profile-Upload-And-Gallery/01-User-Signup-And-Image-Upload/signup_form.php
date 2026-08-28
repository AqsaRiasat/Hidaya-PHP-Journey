<?php

$name_err = "";
$email_err = "";
$pass_err = "";
$image_err = "";


$success_msg = "";
$imgpath = "";

$name = "";
$email = "";

if (isset($_POST['submit'])) {
    
    
    $name     = $_POST['full_name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    
    $image_name = $_FILES['profile_image']['name'];
    $tmp_name   = $_FILES['profile_image']['tmp_name'];
    $image_size = $_FILES['profile_image']['size'];
    
    
    $is_valid = true;
    

    if (empty($name)) {
        $name_err = "Full name is required...!";
        $is_valid = false;
    }
    

    if (empty($email)) {
        $email_err = "Email address is required...!";
        $is_valid = false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_err = "Invalid email format (e.g., user@example.com)...!";
        $is_valid = false;
    }
    

    if (empty($password)) {
        $pass_err = "Password is required...!";
        $is_valid = false;
    } elseif (strlen($password) < 6) {
        $pass_err = "Password must be at least 6 characters long...!";
        $is_valid = false;
    }
    
    
    if (empty($image_name)) {
        $image_err = "Profile image is required...!";
        $is_valid = false;
    } else {

        $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
        
        if ($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
            $image_err = "Only JPG, JPEG, and PNG formats are allowed...!";
            $is_valid = false;
        } 
    
        elseif ($image_size > 2 * 1024 * 1024) {
            $image_err = "Image size must be less than 2MB...!";
            $is_valid = false;
        }
    }
    
    
    if ($is_valid == true) {
    
        $folder = "UserImages";
        if (!is_dir($folder)) {
            mkdir($folder);
        }
        
        
        $file_name = time() . "_" . $image_name;
        $path      = $folder . "/" . $file_name;
        
    
        if (move_uploaded_file($tmp_name, $path)) {
            $success_msg = "Registration & Image Upload Successful...!";
            $imgpath = $path; 
            
            
            $name = "";
            $email = "";
        } else {
            $image_err = "Failed to upload image to server...!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup Form with Proper Validation</title>
    <style>
        body {
            background-color: lightcyan;
            color: navy;
        }
        h1 {
            background-color: deepskyblue;
            color: black;
            text-align: center;
            font-family: cursive;
            padding: 10px;
            margin: 10px;
            border-radius: 6px;
            width: 70%;
        }
        fieldset {
            width: 450px;
            border-radius: 10px 0px 10px 0px;
        }
        .error {
            color: red;
            font-size: 13px;
            font-weight: bold;
            display: block;
            margin-top: 2px;
        }
        .success {
            color: green;
            font-weight: bold;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <center>
        <h1>User Registration Form</h1>
        
        <fieldset>
            <legend>Signup Details</legend>
            
            <form method="POST" action="signup_form.php" enctype="multipart/form-data">
                
                <?php if (!empty($success_msg)) { ?>
                    <p class="success"><?php echo $success_msg; ?></p>
                <?php } ?>
                
                <table cellpadding="5">
                    <tr>
                        <th>Full Name:</th>
                        <td>
                            <input type="text" name="full_name" value="<?php echo htmlspecialchars($name); ?>">
                            <?php if(!empty($name_err)) { echo "<span class='error'>$name_err</span>"; } ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>
                            <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
                            <?php if(!empty($email_err)) { echo "<span class='error'>$email_err</span>"; } ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Password:</th>
                        <td>
                            <input type="password" name="password">
                            <?php if(!empty($pass_err)) { echo "<span class='error'>$pass_err</span>"; } ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Profile Image:</th>
                        <td>
                            <input type="file" name="profile_image">
                            <?php if(!empty($image_err)) { echo "<span class='error'>$image_err</span>"; } ?>
                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type="submit" name="submit" value="Register"></td>
                    </tr>
                    
                    <?php if (!empty($imgpath)) { ?>
                    <tr>
                        <th>Uploaded Profile:</th>
                        <td><img style="border-radius: 10px 0px 10px 0px; width: 40%" src="<?php echo $imgpath; ?>"></td>
                    </tr>
                    <?php } ?>
                </table>
            </form>
        </fieldset>
    </center>
</body>
</html>
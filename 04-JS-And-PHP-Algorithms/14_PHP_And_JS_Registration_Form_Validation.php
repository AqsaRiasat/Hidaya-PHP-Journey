<!DOCTYPE html>
<html>

<head>
    <title>Registration Form (PHP & JS Validation)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            padding: 30px;
        }

        #form-box {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            display: inline-block;
            min-width: 450px;
            margin: 0 auto 25px auto;
        }

        fieldset {
            border: 2px solid #03045e;
            border-radius: 6px;
            padding: 15px 25px;
            text-align: left;
        }

        legend {
            font-weight: bold;
            color: #03045e;
            font-size: 1.2em;
            padding: 0 10px;
        }

        table {
            width: 100%;
        }

        td {
            padding: 8px 5px;
            vertical-align: middle;
        }

        label b {
            color: #03045e;
            font-size: 14px;
        }

        input[type="text"],
        input[type="password"],
        select,
        textarea {
            width: 200px;
            padding: 6px;
            border: 1px solid #03045e;
            border-radius: 4px;
            font-size: 14px;
        }

        .error-message {
            color: #d90429;
            font-size: 13px;
            font-weight: bold;
            padding-left: 5px;
        }

        .submit-btn {
            background-color: #03045e;
            color: white;
            border: none;
            padding: 8px 20px;
            font-size: 14px;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
        }

        h1,
        h3 {
            color: #03045e;
            margin-bottom: 10px;
        }

        .main-heading {
            color: #03045e;
        }

        .note-text {
            font-size: 13px;
            color: #333;
            margin-left: 5px;
        }

        .required-star {
            color: red;
        }

        .policies-label-td {
            vertical-align: top;
        }

        .cancel-btn {
            background-color: #6c757d;
        }
    </style>
</head>

<body>
    <center>

        <?php
        $firstname = $lastname = $email = $phone_number = $cnic = $about_you = $country = $gender = "";
        $policies = [];

        $errFirstname = $errLastname = $errEmail = $errPhone = $errCnic = $errAbout = $errCountry = $errGender = $errPolicies = "";
        
        $show_success = false;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $firstname    = trim($_POST['firstname'] ?? "");
            $lastname     = trim($_POST['lastname'] ?? "");
            $email        = trim($_POST['email'] ?? "");
            $phone_number = trim($_POST['phone_number'] ?? "");
            $cnic         = trim($_POST['cnic'] ?? "");
            $about_you    = trim($_POST['about_you'] ?? "");
            $country      = $_POST['country'] ?? "";
            $gender       = $_POST['gender'] ?? "";
            $policies     = $_POST['policies'] ?? [];

            $php_flag = false;

            $firstnamePattern = "/^[A-Za-z]{3,}$/";
            $emailPattern     = "/^[a-z]{3,}\d*@gmail\.(com|org)$/";
            $phonePattern     = "/^\+92\d{3}-\d{7}$/";
            $cnicPattern      = "/^\d{5}-\d{7}-\d{1}$/";

            if ($firstname == "") {
                $errFirstname = "* firstname field is required";
                $php_flag = true;
            } elseif (!preg_match($firstnamePattern, $firstname)) {
                $errFirstname = "* invalid format";
                $php_flag = true;
            }

            if ($lastname == "") {
                $errLastname = "* lastname field is required";
                $php_flag = true;
            }

            if ($email == "") {
                $errEmail = "* email field is required";
                $php_flag = true;
            } elseif (!preg_match($emailPattern, $email)) {
                $errEmail = "* invalid email format";
                $php_flag = true;
            }

            if ($phone_number == "") {
                $errPhone = "* phone field is required";
                $php_flag = true;
            } elseif (!preg_match($phonePattern, $phone_number)) {
                $errPhone = "* format: +92333-1234567";
                $php_flag = true;
            }

            if ($cnic == "") {
                $errCnic = "* cnic field is required";
                $php_flag = true;
            } elseif (!preg_match($cnicPattern, $cnic)) {
                $errCnic = "* format: 12345-1234567-9";
                $php_flag = true;
            }

            if ($about_you == "") {
                $errAbout = "* about field is required";
                $php_flag = true;
            }

            if ($country == "") {
                $errCountry = "* country field is required";
                $php_flag = true;
            }

            if ($gender == "") {
                $errGender = "* gender field is required";
                $php_flag = true;
            }

            if (count($policies) < 4) {
                $errPolicies = "* all policies must be checked";
                $php_flag = true;
            }

            if ($php_flag == false) {
                $show_success = true;
            }
        }
        ?>

        <h1 class="main-heading"> >> Register Form << </h1>

        <div id="form-box">
            <form action="" method="POST" onsubmit="return checkData(event)">
                <fieldset>
                    <legend>Register Now</legend>

                    <p class="note-text">Note: Required Fields Are Marked With <span class="required-star">*</span></p>

                    <table border="0">
                        <tr>
                            <td><label><b>First Name:</b> <span class="required-star">*</span></label></td>
                            <td><input type="text" name="firstname" id="firstname" value="<?php echo htmlspecialchars($firstname); ?>"></td>
                            <td><span id="error-firstname" class="error-message"><?php echo $errFirstname; ?></span></td>
                        </tr>

                        <tr>
                            <td><label><b>Last Name:</b></label></td>
                            <td><input type="text" name="lastname" id="lastname" value="<?php echo htmlspecialchars($lastname); ?>"></td>
                            <td><span id="error-lastname" class="error-message"><?php echo $errLastname; ?></span></td>
                        </tr>

                        <tr>
                            <td><label><b>Email:</b> <span class="required-star">*</span></label></td>
                            <td><input type="text" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>"></td>
                            <td><span id="error-email" class="error-message"><?php echo $errEmail; ?></span></td>
                        </tr>

                        <tr>
                            <td><label><b>Phone Number:</b> <span class="required-star">*</span></label></td>
                            <td><input type="text" name="phone_number" id="phone_number" value="<?php echo htmlspecialchars($phone_number); ?>"></td>
                            <td><span id="error-phone" class="error-message"><?php echo $errPhone; ?></span></td>
                        </tr>

                        <tr>
                            <td><label><b>CNIC Number:</b> <span class="required-star">*</span></label></td>
                            <td><input type="text" name="cnic" id="cnic" value="<?php echo htmlspecialchars($cnic); ?>"></td>
                            <td><span id="error-cnic" class="error-message"><?php echo $errCnic; ?></span></td>
                        </tr>

                        <tr>
                            <td><label><b>About You:</b> <span class="required-star">*</span></label></td>
                            <td><textarea name="about_you" id="about_you" rows="3" cols="22"><?php echo htmlspecialchars($about_you); ?></textarea></td>
                            <td><span id="error-about" class="error-message"><?php echo $errAbout; ?></span></td>
                        </tr>

                        <tr>
                            <td><label><b>Country:</b> <span class="required-star">*</span></label></td>
                            <td>
                                <select name="country" id="country">
                                    <option value="">--Select Country--</option>
                                    <option value="Pakistan" <?php if($country=="Pakistan") echo "selected"; ?>>Pakistan</option>
                                    <option value="China" <?php if($country=="China") echo "selected"; ?>>China</option>
                                    <option value="Turkey" <?php if($country=="Turkey") echo "selected"; ?>>Turkey</option>
                                </select>
                            </td>
                            <td><span id="error-country" class="error-message"><?php echo $errCountry; ?></span></td>
                        </tr>

                        <tr>
                            <td><label><b>Gender:</b> <span class="required-star">*</span></label></td>
                            <td>
                                <input type="radio" name="gender" value="Male" id="gender-male" <?php if($gender=="Male") echo "checked"; ?>> Male
                                <input type="radio" name="gender" value="Female" id="gender-female" <?php if($gender=="Female") echo "checked"; ?>> Female
                            </td>
                            <td><span id="error-gender" class="error-message"><?php echo $errGender; ?></span></td>
                        </tr>

                        <tr>
                            <td class="policies-label-td"><label><b>Policies:</b> <span class="required-star">*</span></label></td>
                            <td>
                                <input type="checkbox" name="policies[]" value="Attendance Policy" class="policy-checkbox" <?php if(in_array("Attendance Policy", $policies)) echo "checked"; ?>> Attendance Policy <br>
                                <input type="checkbox" name="policies[]" value="Assignment Policy" class="policy-checkbox" <?php if(in_array("Assignment Policy", $policies)) echo "checked"; ?>> Assignment Policy <br>
                                <input type="checkbox" name="policies[]" value="Test Policy" class="policy-checkbox" <?php if(in_array("Test Policy", $policies)) echo "checked"; ?>> Test Policy <br>
                                <input type="checkbox" name="policies[]" value="Stipend Policy" class="policy-checkbox" <?php if(in_array("Stipend Policy", $policies)) echo "checked"; ?>> Stipend Policy
                            </td>
                            <td><span id="error-policies" class="error-message"><?php echo $errPolicies; ?></span></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="Register" class="submit-btn">
                                <input type="reset" value="Cancel" class="submit-btn cancel-btn">
                            </td>
                            <td></td>
                        </tr>

                    </table>

                </fieldset>
            </form>
        </div>

        <br /><br />

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && $show_success == true) {
            echo "<h3>THANK YOU FOR YOUR ACCOUNT REGISTRATION</h3>";
        ?>
            <table border="1" cellpadding="10" cellspacing="0" width="60%">
                <tr>
                    <td><b>Field Name</b></td>
                    <td><b>Submitted Value</b></td>
                </tr>
                <tr>
                    <td><b>First Name</b></td>
                    <td><?php echo $firstname; ?></td>
                </tr>
                <tr>
                    <td><b>Last Name</b></td>
                    <td><?php echo $lastname; ?></td>
                </tr>
                <tr>
                    <td><b>Email</b></td>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <td><b>Phone Number</b></td>
                    <td><?php echo $phone_number; ?></td>
                </tr>
                <tr>
                    <td><b>CNIC Number</b></td>
                    <td><?php echo $cnic; ?></td>
                </tr>
                <tr>
                    <td><b>About You</b></td>
                    <td><?php echo $about_you; ?></td>
                </tr>
                <tr>
                    <td><b>Country</b></td>
                    <td><?php echo $country; ?></td>
                </tr>
                <tr>
                    <td><b>Gender</b></td>
                    <td><?php echo $gender; ?></td>
                </tr>
                <tr>
                    <td><b>Policies Selected</b></td>
                    <td>
                        <?php 
                            if (!empty($policies)) {
                                foreach ($policies as $policy) {
                                    echo $policy . "<br>";
                                }
                            } else {
                                echo "None";
                            }
                        ?>
                    </td>
                </tr>
            </table>
            <br><br>
        <?php
        }
        ?>

        <script>
            function checkData(event) {
                var firstnameInput = document.getElementById("firstname");
                var lastnameInput = document.getElementById("lastname");
                var emailInput = document.getElementById("email");
                var phoneInput = document.getElementById("phone_number");
                var cnicInput = document.getElementById("cnic");
                var aboutInput = document.getElementById("about_you");
                var countryInput = document.getElementById("country");

                var maleRadio = document.getElementById("gender-male");
                var femaleRadio = document.getElementById("gender-female");
                var genderValue = "";
                if (maleRadio.checked == true) { genderValue = "Male"; }
                if (femaleRadio.checked == true) { genderValue = "Female"; }

                var policyCheckboxes = document.getElementsByClassName("policy-checkbox");
                var checkedCount = 0;
                for (var i = 0; i < policyCheckboxes.length; i++) {
                    if (policyCheckboxes[i].checked == true) {
                        checkedCount++;
                    }
                }

                var errFirstname = document.getElementById("error-firstname");
                var errLastname = document.getElementById("error-lastname");
                var errEmail = document.getElementById("error-email");
                var errPhone = document.getElementById("error-phone");
                var errCnic = document.getElementById("error-cnic");
                var errAbout = document.getElementById("error-about");
                var errCountry = document.getElementById("error-country");
                var errGender = document.getElementById("error-gender");
                var errPolicies = document.getElementById("error-policies");

                var flag = false;

                var firstnamePattern = /^[A-Za-z]{3,}$/;
                var emailPattern = /^[a-z]{3,}\d*@gmail\.(com|org)$/;
                var phonePattern = /^\+92\d{3}-\d{7}$/;
                var cnicPattern = /^\d{5}-\d{7}-\d{1}$/;

                if (firstnameInput.value == "") {
                    errFirstname.innerHTML = "* firstname field is required";
                    flag = true;
                } else if (firstnamePattern.test(firstnameInput.value) == false) {
                    errFirstname.innerHTML = "* invalid format";
                    flag = true;
                } else {
                    errFirstname.innerHTML = "";
                }

                if (lastnameInput.value == "") {
                    errLastname.innerHTML = "* lastname field is required";
                    flag = true;
                } else {
                    errLastname.innerHTML = "";
                }

                if (emailInput.value == "") {
                    errEmail.innerHTML = "* email field is required";
                    flag = true;
                } else if (emailPattern.test(emailInput.value) == false) {
                    errEmail.innerHTML = "* invalid email format";
                    flag = true;
                } else {
                    errEmail.innerHTML = "";
                }

                if (phoneInput.value == "") {
                    errPhone.innerHTML = "* phone field is required";
                    flag = true;
                } else if (phonePattern.test(phoneInput.value) == false) {
                    errPhone.innerHTML = "* format: +92333-1234567";
                    flag = true;
                } else {
                    errPhone.innerHTML = "";
                }

                if (cnicInput.value == "") {
                    errCnic.innerHTML = "* cnic field is required";
                    flag = true;
                } else if (cnicPattern.test(cnicInput.value) == false) {
                    errCnic.innerHTML = "* format: 12345-1234567-9";
                    flag = true;
                } else {
                    errCnic.innerHTML = "";
                }

                if (aboutInput.value == "") {
                    errAbout.innerHTML = "* about field is required";
                    flag = true;
                } else {
                    errAbout.innerHTML = "";
                }

                if (countryInput.value == "") {
                    errCountry.innerHTML = "* country field is required";
                    flag = true;
                } else {
                    errCountry.innerHTML = "";
                }

                if (genderValue == "") {
                    errGender.innerHTML = "* gender field is required";
                    flag = true;
                } else {
                    errGender.innerHTML = "";
                }

                if (checkedCount < 4) {
                    errPolicies.innerHTML = "* all policies must be checked";
                    flag = true;
                } else {
                    errPolicies.innerHTML = "";
                }

                if (flag == true) {
                    event.preventDefault();
                    return false;
                }

                return true;
            }
        </script>

    </center>
</body>

</html>s
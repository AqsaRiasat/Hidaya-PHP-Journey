<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
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

        <h1 class="main-heading"> >> Regular Expression Form << </h1>

        <div id="form-box">
            <form action="" method="POST" onsubmit="return checkData(event)">
                <fieldset>
                    <legend>Register Now</legend>

                    <p class="note-text">Note: Required Fields Are Marked With <span class="required-star">*</span></p>

                    <table border="0">
                        <tr>
                            <td><label><b>First Name:</b> <span class="required-star">*</span></label></td>
                            <td><input type="text" name="firstname" id="firstname"></td>
                            <td><span id="error-firstname" class="error-message"></span></td>
                        </tr>

                        <tr>
                            <td><label><b>Last Name:</b></label></td>
                            <td><input type="text" name="lastname" id="lastname"></td>
                            <td><span id="error-lastname" class="error-message"></span></td>
                        </tr>

                        <tr>
                            <td><label><b>Email:</b> <span class="required-star">*</span></label></td>
                            <td><input type="text" name="email" id="email"></td>
                            <td><span id="error-email" class="error-message"></span></td>
                        </tr>

                        <tr>
                            <td><label><b>Phone Number:</b> <span class="required-star">*</span></label></td>
                            <td><input type="text" name="phone_number" id="phone_number"></td>
                            <td><span id="error-phone" class="error-message"></span></td>
                        </tr>

                        <tr>
                            <td><label><b>CNIC Number:</b> <span class="required-star">*</span></label></td>
                            <td><input type="text" name="cnic" id="cnic"></td>
                            <td><span id="error-cnic" class="error-message"></span></td>
                        </tr>

                        <tr>
                            <td><label><b>About You:</b> <span class="required-star">*</span></label></td>
                            <td><textarea name="about_you" id="about_you" rows="3" cols="22"></textarea></td>
                            <td><span id="error-about" class="error-message"></span></td>
                        </tr>

                        <tr>
                            <td><label><b>Country:</b> <span class="required-star">*</span></label></td>
                            <td>
                                <select name="country" id="country">
                                    <option value="">--Select Country--</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="China">China</option>
                                    <option value="Turkey">Turkey</option>
                                </select>
                            </td>
                            <td><span id="error-country" class="error-message"></span></td>
                        </tr>

                        <tr>
                            <td><label><b>Gender:</b> <span class="required-star">*</span></label></td>
                            <td>
                                <input type="radio" name="gender" value="Male" id="gender-male"> Male
                                <input type="radio" name="gender" value="Female" id="gender-female"> Female
                            </td>
                            <td><span id="error-gender" class="error-message"></span></td>
                        </tr>

                        <tr>
                            <td class="policies-label-td"><label><b>Policies:</b> <span class="required-star">*</span></label></td>
                            <td>
                                <input type="checkbox" name="policies[]" value="Attendance Policy" class="policy-checkbox"> Attendance Policy <br>
                                <input type="checkbox" name="policies[]" value="Assignment Policy" class="policy-checkbox"> Assignment Policy <br>
                                <input type="checkbox" name="policies[]" value="Test Policy" class="policy-checkbox"> Test Policy <br>
                                <input type="checkbox" name="policies[]" value="Stipend Policy" class="policy-checkbox"> Stipend Policy
                            </td>
                            <td><span id="error-policies" class="error-message"></span></td>
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

        <h3>THANK YOU FOR YOUR ACCOUNT REGISTRATION</h3>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<pre>";
                print_r($_POST);
                echo "</pre>";
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
                var isPolicyChecked = false;
                for (var i = 0; i < policyCheckboxes.length; i++) {
                    if (policyCheckboxes[i].checked == true) {
                        isPolicyChecked = true;
                        break;
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

                if (isPolicyChecked == false) {
                    errPolicies.innerHTML = "* select at least one policy";
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

</html>
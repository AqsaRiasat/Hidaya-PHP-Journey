<?php require_once("database_connection.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 50px 0;
            display: flex;
            justify-content: center;
        }

        form {
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 380px;
        }

        h2 {
            margin-top: 0;
            margin-bottom: 20px;
            color: #333333;
            text-align: center;
        }

        p {
            margin: 15px 0 5px 0;
            font-weight: bold;
            color: #555555;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            box-sizing: border-box; 
            font-size: 14px;
        }

        #email_error {
            font-size: 13px;
            font-weight: bold;
            margin-top: 5px;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #4caf50;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

    
        input[type="submit"]:disabled {
            background-color: #cccccc;
            color: #666666;
            cursor: not-allowed;
        }
    </style>

    <script>

        function loadCities() {
            let xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("city_dropdown").innerHTML = xhr.responseText;
                }
            };

            let countryId = document.getElementById("country_dropdown").value;

            xhr.open("GET", "process.php?action=get_cities&country_id=" + countryId);

            xhr.send();
        }


        function checkEmailUnique() {
            let xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {

                    if (xhr.responseText == "exists") {
                        document.getElementById("email_error").innerHTML = "Email Already Exists!";

                        document.getElementById("email_error").style.color = "red";

                        document.getElementById("submit_btn").disabled = true;
                    }
                    else {
                        document.getElementById("email_error").innerHTML = "Email Available";

                        document.getElementById("email_error").style.color = "green";

                        document.getElementById("submit_btn").disabled = false;
                    }
                }
            };

            let emailVal = document.getElementById("email_input").value;

            xhr.open("GET", "process.php?action=check_email&email=" + emailVal);
            
            xhr.send();
        }
    </script>
</head>

<body>

    <form action="process.php" method="POST">

        <h2>User Registration Form</h2>

        <p>Name: <input type="text" name="u_name" required></p>

        <p>Email: <input type="email" id="email_input" name="u_email" onblur="checkEmailUnique()" required></p>
        <div id="email_error"></div>
        <p>Password: <input type="password" name="u_password" required></p>

        <p>Country:
            <select id="country_dropdown" name="u_country" onchange="loadCities()" required>
                <option value="">-- Select Country --</option>

                <?php
                $q = "SELECT * FROM countries";
                $res = mysqli_query($connection, $q);
                
                while($row = mysqli_fetch_assoc($res)) {
                    echo "<option value='".$row['country_id']."'>".$row['country_name']."</option>";
                }

                ?>
            </select>
        </p>

        <p>City:
            <select id="city_dropdown" name="u_city" required>
                <option value="">-- Select City --</option>
            </select>
        </p>

        <input type="submit" id="submit_btn" name="register_submit" value="Register Now">
    </form>

</body>

</html>
<?php
require_once("database_connection.php"); //


if (isset($_REQUEST['action']) && $_REQUEST['action'] == "get_cities") {
    $country_id = $_REQUEST['country_id'];
    
    $query = "SELECT * FROM cities WHERE country_id = " . $country_id;
    $result = mysqli_query($connection, $query);
    
    echo "<option value=''>-- Select City --</option>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='" . $row['city_id'] . "'>" . $row['city_name'] . "</option>";
    }
}

if (isset($_REQUEST['action']) && $_REQUEST['action'] == "check_email") {
    $email = $_REQUEST['email'];
    
    $query = "SELECT * FROM users WHERE email = '" . $email . "'";
    $result = mysqli_query($connection, $query);
    
    
    if (mysqli_num_rows($result) > 0) {
        echo "exists"; 
    } else {
        echo "available";
    }
}

if (isset($_POST['register_submit'])) {
    $name = $_POST['u_name'];
    $email = $_POST['u_email'];
    $password = $_POST['u_password'];
    $country = $_POST['u_country'];
    $city = $_POST['u_city'];
    
    $query = "INSERT INTO users (name, email, password, country_id, city_id) 
              VALUES ('$name', '$email', '$password', '$country', '$city')";
              
    $result = mysqli_query($connection, $query);
    
    if ($result) {
        echo "Registration Successful!";
    } else {
        echo "Error saving data!";
    }
}
?>
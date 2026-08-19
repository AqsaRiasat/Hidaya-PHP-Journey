<?php

// Reusable Registration Form Generator Function
function my_register_form($action, $method) {
    echo '<form action="'.$action.'" method="'.$method.'">
        <h3>Registration</h3>
        Name: <input type="text" name="st_name"><br><br>
        Email: <input type="email" name="st_email"><br><br>
        Password: <input type="password" name="st_pass"><br><br>
        <input type="submit" value="Register Now">
    </form>';
}

// Reusable Login Form Generator Function
function my_login_form($action, $method) {
    echo '<form action="'.$action.'" method="'.$method.'">
        <h3>Login</h3>
        User: <input type="text" name="user"><br><br>
        Pass: <input type="password" name="pass"><br><br>
        <input type="submit" value="Login">
    </form>';
}
?>
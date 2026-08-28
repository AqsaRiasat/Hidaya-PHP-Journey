<?php
// --- Server details ---
$server = "localhost";
$user = "root";
$pass = "";

echo "<h2>Database Connection Status</h2>";

// 1. Pizza Shop Connection
$db1 = "pizza_shop";
$link1 = @mysqli_connect($server, $user, $pass, $db1);
if (mysqli_connect_errno()) {
    echo "Connection 1 ($db1) Failed: " . mysqli_connect_error() . "<br>";
} else {
    echo "Connection 1 ($db1) Successful!<br>";
}

// 2. Job Portal Connection
$db2 = "job_portal";
$link2 = @mysqli_connect($server, $user, $pass, $db2);
if (mysqli_connect_errno()) {
    echo "Connection 2 ($db2) Failed: " . mysqli_connect_error() . "<br>";
} else {
    echo "Connection 2 ($db2) Successful!<br>";
}

// 3. School Connection
$db3 = "school";
$link3 = @mysqli_connect($server, $user, $pass, $db3);
if (mysqli_connect_errno()) {
    echo "Connection 3 ($db3) Failed: " . mysqli_connect_error() . "<br>";
} else {
    echo "Connection 3 ($db3) Successful!<br>";
}

// 4. University DB Connection
$db4 = "university_db";
$link4 = @mysqli_connect($server, $user, $pass, $db4);
if (mysqli_connect_errno()) {
    echo "Connection 4 ($db4) Failed: " . mysqli_connect_error() . "<br>";
} else {
    echo "Connection 4 ($db4) Successful!<br>";
}

// 5. Assignment DB Connection
$db5 = "assignment_db";
$link5 = @mysqli_connect($server, $user, $pass, $db5);
if (mysqli_connect_errno()) {
    echo "Connection 5 ($db5) Failed: " . mysqli_connect_error() . "<br>";
} else {
    echo "Connection 5 ($db5) Successful!<br>";
}
?>
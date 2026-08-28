<?php
date_default_timezone_set('Asia/Karachi');

$msg = ""; 

if (isset($_POST['submit_btn'])) {
    $dob = $_POST['user_dob']; 
    
    if (!empty($dob)) {
        $birth_seconds = strtotime($dob);
        $current_seconds = time();
        
        $diff_seconds = $current_seconds - $birth_seconds;
        $year_seconds = 31536000;
        
        $age = floor($diff_seconds / $year_seconds);
        
        if ($age >= 0) {
            $msg = "Your Age is: " . $age . " Years";
            
            $connection = mysqli_connect('localhost', 'root', '', 'time_manipulation');
            
            if ($connection) {
                $current_date_time = date('Y-m-d H:i:s', $current_seconds);
                
                $query = "INSERT INTO date_time (date, date_time) VALUES ('$dob', '$current_date_time')";
                mysqli_query($connection, $query);
            }
        } else {
            $msg = "Invalid Date! Future date selected.";
        }
    } else {
        $msg = "Please select your Date of Birth.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Age Calculator</title>
    <style>
        body { 
            background-color: #f4f4f4; 
            font-family: Arial, sans-serif; 
            text-align: center; 
            margin-top: 100px; 
        }
        .main-box { 
            width: 300px; 
            margin: 0 auto; 
            background-color: white; 
            padding: 20px; 
            border: 2px solid green; 
            border-radius: 5px; 
        }
        h3 { 
            color: green; 
        }
        .result-text { 
            color: blue; 
            font-weight: bold; 
            font-size: 18px; 
            margin-bottom: 15px; 
        }
        input[type="date"] { 
            padding: 6px; 
            width: 80%; 
            margin-bottom: 15px; 
        }
        input[type="submit"] { 
            padding: 7px 20px; 
            background-color: green; 
            color: white; 
            border: none; 
            cursor: pointer; 
        }
    </style>
</head>
<body>

    <div class="main-box">
        <h3>Age Calculator</h3>
        
        <?php if (!empty($msg)) { ?>
            <p class="result-text"><?php echo $msg; ?></p>
        <?php } ?>

        <form method="POST" action="">
            <label>Enter Date of Birth:</label>
            <br/><br/>
            
            <input type="date" name="user_dob" required>
            <br/>
            
            <input type="submit" name="submit_btn" value="Calculate">
        </form>
    </div>

</body>
</html>
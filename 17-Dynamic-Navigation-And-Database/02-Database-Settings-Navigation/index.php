<?php
require_once("setting_database.php");

interface CrudInterface {
    public function insertRecord($title, $type);
    public function viewRecords();
}

abstract class BaseDatabaseConnection {
    protected $connect = NULL;
    private $h;
    private $u;
    private $p;
    private $d;

    public function __construct($host, $username, $password, $database) {
        $this->h = $host;
        $this->u = $username;
        $this->p = $password;
        $this->d = $database;
        $this->get_connection();
    }

    private function get_connection() {
        $this->connect = mysqli_connect($this->h, $this->u, $this->p, $this->d);
        if (mysqli_connect_error()) {
            die("Database Connection Failed: " . mysqli_connect_error());
        }
    }

    public function __destruct() {
        if ($this->connect) {
            mysqli_close($this->connect);
        }
    }
}

class CourseManager extends BaseDatabaseConnection implements CrudInterface {
    
    public function insertRecord($title, $type) {
        $title = mysqli_real_escape_string($this->connect, $title);
        $type = mysqli_real_escape_string($this->connect, $type);
        
        $query = "INSERT INTO courses (course_title, course_type) VALUES ('$title', '$type')";
        if (mysqli_query($this->connect, $query)) {
            return "<p class='alert-success'>✅ New Course Registered Successfully!</p>";
        } else {
            return "<p class='alert-danger'>❌ Error: " . mysqli_error($this->connect) . "</p>";
        }
    }

    public function viewRecords() {
        $query = "SELECT * FROM courses ORDER BY id DESC";
        $result = mysqli_query($this->connect, $query);
        $output = "";

        if (mysqli_num_rows($result) > 0) {
            $output .= "<table>
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Course Title</th>
                                <th>Shift/Batch Type</th>
                            </tr>
                        </thead>
                        <tbody>";
            $count = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $count++;
                $output .= "<tr>
                                <td>" . $count . "</td>
                                <td>" . $row['course_title'] . "</td>
                                <td>" . $row['course_type'] . "</td>
                            </tr>";
            }
            $output .= "</tbody></table>";
        } else {
            $output .= "<p style='text-align:center; color:#777; padding:15px;'>No courses available.</p>";
        }
        return $output;
    }
}

$manager = new CourseManager($host, $username, $password, $database);
$message = "";

if (isset($_POST['btn_save'])) {
    $message = $manager->insertRecord($_POST['c_title'], $_POST['c_type']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>HIST New Portal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            padding: 40px;
            margin: 0;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .container {
            width: 500px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            padding: 25px;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #fafafa;
        }
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            border: none;
            background-color: #007bff;
            color: white;
            font-weight: bold;
            font-size: 15px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f1f5f9;
            color: #333;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
            font-weight: bold;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h2>HIST New Course Portal</h2>

    <div class="container">
        <?= $message; ?>
        <form method="POST">
            <label>Course Name:</label>
            <input type="text" name="c_title" placeholder="Enter Course Title Here" required />

            <label>Batch Code/Shift:</label>
            <select name="c_type" required>
                <option value="Morning Batch">Morning Batch</option>
                <option value="Evening Batch">Evening Batch</option>
            </select>

            <input type="submit" name="btn_save" value="Register Course" />
        </form>
    </div>

    <div class="container" style="width: 650px;">
        <h3 style="margin-top:0; color:#333; border-bottom: 2px solid #eee; padding-bottom:10px;">Active Batches & Courses</h3>
        <?= $manager->viewRecords(); ?>
    </div>

</body>
</html>
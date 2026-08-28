<?php

class Person {
    public $type        = "Human Being";
    public $name        = NULL;
    public $city        = NULL;

    public function set_name($name) {
        $this->name = $name;
    }

    public function set_city($city) {
        $this->city = $city;
    }
}

class Student extends Person {
    public $roll_no     = NULL;
    public $department  = NULL;

    public function set_roll_no($roll_no) {
        $this->roll_no = $roll_no;
    }

    public function set_department($department) {
        $this->department = $department;
    }
}

class GraduateStudent extends Student {
    public $thesis_title = NULL;

    public function set_thesis_title($thesis_title) {
        $this->thesis_title = $thesis_title;
    }

    public function getStudentReport() {
        echo "<h3>--- Graduate Student Profile---</h3>";
        echo "<b>Classification:</b> " . $this->type . "<br />";
        echo "<b>Student Name:</b> " . $this->name . "<br />";
        echo "<b>Home City:</b> " . $this->city . "<br />";
        echo "<b>Roll Number:</b> " . $this->roll_no . "<br />";
        echo "<b>Academic Dept:</b> " . $this->department . "<br />";
        echo "<b>Research Thesis:</b> " . $this->thesis_title . "<br />";
    }
}

echo "<h2>--- Multi-Level Inheritance Assignment ---</h2>";
echo "<hr />";

$student_obj = new GraduateStudent();

$student_obj->set_name("Sherry Santos");
$student_obj->set_city("Hyderabad");

$student_obj->set_roll_no("2K24-CSE-85");
$student_obj->set_department("Computer Systems Engineering");

$student_obj->set_thesis_title("Automated Database Management Using PHP OOP");

$student_obj->getStudentReport();

echo "<hr />";
echo "PHP CODE END";

?>


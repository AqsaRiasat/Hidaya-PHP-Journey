<?php

interface CertificationInterface {
    public function issueCertificate();
}

abstract class HistTraining {
    public $center = NULL;
    public $courseName = NULL;

    public function __construct($center, $course) {
        $this->center = $center;
        $this->courseName = $course;
    }

    public function getCenterDetails() {
        return "Center Location: HIST " . $this->center;
    }

    abstract public function setTiming();
}

class MorningBatch extends HistTraining implements CertificationInterface {
    
    public function setTiming() {
        return " Timing: 09:00 AM to 12:00 PM (Morning Class)";
    }

    public function issueCertificate() {
        return " Certificate: Eligible! Will be issued at the end of " . $this->courseName;
    }
}

class EveningBatch extends HistTraining implements CertificationInterface {
    
    public function setTiming() {
        return " Timing: 04:00 PM to 07:00 PM (Evening Class)";
    }

    public function issueCertificate() {
        return " Certificate: Eligible! Will be issued at the end of " . $this->courseName;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Assignment</title>
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

        p.subtitle {
            text-align: center;
            color: #777;
            margin-bottom: 30px;
        }

        .training-card {
            width: 500px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            padding: 20px;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }

        .training-card h3 {
            margin-top: 0;
            color: #007bff;
            border-bottom: 2px solid #eee;
            padding-bottom: 8px;
        }

        .course-title {
            background-color: #e9ecef;
            color: #495057;
            padding: 6px 12px;
            font-size: 14px;
            font-weight: bold;
            border-radius: 4px;
            display: inline-block;
            margin-bottom: 15px;
        }

        .info-line {
            font-size: 15px;
            color: #333;
            background-color: #fafafa;
            padding: 10px;
            margin: 8px 0;
            border-left: 4px solid #007bff;
            border-radius: 4px;
        }

        .evening-theme h3 {
            color: #dc3545;
        }

        .evening-theme .info-line {
            border-left-color: #dc3545;
        }
    </style>
</head>

<body>

    <h2>HIST Training Portal</h2>
    <p class="subtitle">Abstract Classes & Interfaces Task</p>

    <?php
    $batch1 = new MorningBatch("Jamshoro", "PHP Basic");
    
    echo "<div class='training-card'>";
    echo "<h3>Morning Batch Allocation</h3>";
    echo "<div class='course-title'>Course: " . $batch1->courseName . "</div>";
    echo "<div class='info-line'>" . $batch1->getCenterDetails() . "</div>";
    echo "<div class='info-line'>" . $batch1->setTiming() . "</div>";
    echo "<div class='info-line'>" . $batch1->issueCertificate() . "</div>";
    echo "</div>";

    $batch2 = new EveningBatch("Karachi", "Web Development");
    
    echo "<div class='training-card evening-theme'>";
    echo "<h3>Evening Batch Allocation</h3>";
    echo "<div class='course-title'>Course: " . $batch2->courseName . "</div>";
    echo "<div class='info-line'>" . $batch2->getCenterDetails() . "</div>";
    echo "<div class='info-line'>" . $batch2->setTiming() . "</div>";
    echo "<div class='info-line'>" . $batch2->issueCertificate() . "</div>";
    echo "</div>";
    ?>

</body>

</html>
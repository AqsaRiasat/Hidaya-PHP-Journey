<!DOCTYPE html>
<html>
<head>
    <title>Marksheet Algorithms</title>
</head>
<body>

    <!-- Marksheet using Switch (JS) -->
    <script>
        var maths = 70, english = 85, urdu = 80, computer = 85, science = 65;
        var total_marks = 500;
        var obtained_marks = maths + english + urdu + computer + science;
        var percentage = (obtained_marks / total_marks) * 100;
        var grade;

        switch(true) {
            case (maths < 40 || english < 40 || urdu < 40 || computer < 40 || science < 40):
                grade = "FAIL";
                break;
            case (percentage >= 80): grade = "A1"; break;
            case (percentage >= 70): grade = "A"; break;
            case (percentage >= 60): grade = "B"; break;
            case (percentage >= 50): grade = "C"; break;
            case (percentage >= 40): grade = "D"; break;
            default: grade = "FAIL";
        }

        document.write("<h2>JS Marksheet (Switch Method)</h2>");
        document.write("Total Marks: " + total_marks + "<br>");
        document.write("Obtained Marks: " + obtained_marks + "<br>");
        document.write("Percentage: " + percentage + "%<br>");
        document.write("<b>Final Grade: " + grade + "</b>");
    </script>

    <hr>

    <!-- Marksheet using If (JS) -->
    <script>
        var m = 70, e = 85, u = 80, c = 85, s = 65;
        var total = 500;
        var obtained = m + e + u + c + s;
        var per = (obtained / total) * 100;
        var finalGrade = "";

        document.write("<h2>JS Marksheet (If Method)</h2>");

        if (m < 40 || e < 40 || u < 40 || c < 40 || s < 40) {
            finalGrade = "FAIL";
        }

        if (finalGrade != "FAIL") {
            if (per >= 80) { finalGrade = "A1"; }
            if (per >= 70 && per < 80) { finalGrade = "A"; }
            if (per >= 60 && per < 70) { finalGrade = "B"; }
            if (per >= 50 && per < 60) { finalGrade = "C"; }
            if (per >= 40 && per < 50) { finalGrade = "D"; }
            if (per < 40) { finalGrade = "FAIL"; }
        }

        document.write("Percentage: " + per + "%<br>");
        document.write("<b>Grade: " + finalGrade + "</b>");
    </script>

</body>
</html>
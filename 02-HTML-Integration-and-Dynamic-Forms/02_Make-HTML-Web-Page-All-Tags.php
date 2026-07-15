<?php
echo "<h1>HTML All Tags Integration Practice</h1>";
echo "<p>Displaying a complete semantic webpage structure with diverse layout elements.</p>";
echo "<hr>";
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Morning Routine Page</title>
</head>
<body>

    <h1 align="center">Good Morning!</h1>
    <h2 align="center">Starting HTML</h2>
    
    <hr> <h3>About Me</h3>
    <p>
        My name is <b>Aqsa</b>. <br>
        I am <i>very excited</i> to learn web development. <br>
        Today is a <u>beautiful day</u> to write some code!
    </p>

    <hr>

    <h3>Inspiration</h3>
    <p>I use <a href="https://www.google.com" target="_blank">Google</a></p>

    <hr>

    <h3>My Breakfast Unordered List</h3>
    <ul type="square">
        <li>Fried Eggs</li>
        <li>Toasted Bread</li>
        <li>Orange Juice</li>
    </ul>

    <hr>

    <h3>Morning Tasks Ordered List</h3>
    <ol type="1">
        <li>Pray/Meditate</li>
        <li>Take a Shower</li>
        <li>Start Coding Practice</li>
    </ol>

    <hr>

    <h3>Study Plan Nested List</h3>
    <ul>
        <li>HTML Basics
            <ol type="i">
                <li>Tags and Elements</li>
                <li>Lists and Tables</li>
            </ol>
        </li>
        <li>Practice Exercises</li>
    </ul>

    <hr>

    <h3>Coding Definition List</h3>
    <dl>
        <dt>Tag</dt>
        <dd>A command used in HTML to build a webpage.</dd>
        
        <dt>Body</dt>
        <dd>The main part of the webpage where content is visible.</dd>
    </dl>

    <hr>

    <h3>Schedule</h3>
    <table border>
        <tr>
            <th>Time</th>
            <th>Activity</th>
        </tr>
        <tr>
            <td>8:00 AM</td>
            <td>Breakfast</td>
        </tr>
        <tr>
            <td>9:00 AM</td>
            <td>Coding</td>
        </tr>
    </table>

    <hr>

    <h3>Contact Me</h3>
    <p>Type message:</p>
    <input type="text">
    <button type="button">Send</button>

    <br><br>
    <hr>
    
    <p align="center">
        <small>Created by AQSA</small> <br>
        <mark>Keep Learning Every Day!</mark>
    </p>


</body>
</html>
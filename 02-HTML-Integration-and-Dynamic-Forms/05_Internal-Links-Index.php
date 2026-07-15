<?php
echo "<h1>Internal Linking and Navigation</h1>";
echo "<p>Demonstrating anchor links, image-anchors, and multi-page routing.</p>";
echo "<hr>";
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Personal Blog</title>
</head>
<body>

    <h1>Welcome to My Life Blog</h1>
    <p>Exploring healthy habits and daily routines.</p>
    <hr>

    <h3>1. Quick Read</h3>
    <p>Check out my full routine here: <a href="05_Internal-Links-Routine.php">Morning Routine Page</a></p>

    <hr>

    <h3>2. Healthy Food (Image Link)</h3>
    <p>Click the fruit basket image to read about healthy eating habits:</p>
    <a href="05_Internal-Links-Routine.php">
        <img src="https://cdn-icons-png.flaticon.com/128/3194/3194591.png" alt="Healthy Food" width="100" border="1">
    </a>

    <hr>

    <h3>3. My Workspace (Image Link)</h3>
    <p>Click the icon below to see how I organize my study table:</p>
    <a href="05_Internal-Links-Workspace.php">
        <img src="https://cdn-icons-png.flaticon.com/128/3121/3121768.png" alt="Workspace" width="100" border="1">
    </a>

</body>
</html>
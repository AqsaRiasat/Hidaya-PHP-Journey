<?php
echo "<h1>XHTML Strict Document Practice</h1>";
echo "<p>Demonstrating XML-compliant markup with strict tag closures and lowercased elements.</p>";
echo "<hr>";

// ERROR FIX: XML ki line ko PHP echo mein daal diya taake PHP confuse na ho
echo '<?xml version="1.0" encoding="UTF-8"?>'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <title>XHTML Page</title>
</head>

<body>

    <h1>This is XHTML</h1>
    
    <p>In XHTML, all tags must be closed. For example, a line break looks like this: <br /></p>
    
    <p><b>Everything</b> must be in lowercase, and all attributes must be in quotes.</p>

    <hr />

    <ul>
        <li>Strict structure</li>
        <li>XML based</li>
        <li>Clean code</li>
    </ul>

</body>
</html>
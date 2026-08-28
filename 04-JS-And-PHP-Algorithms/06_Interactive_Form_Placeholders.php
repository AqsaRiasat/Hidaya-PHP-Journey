<!DOCTYPE html>
<html>
<head>
    <title>Interactive Form Fields</title>
</head>
<body>

    <h2>Dynamic Placeholder Handling via JS Events</h2>

    Name: <br>
    <input type="text" 
           value="Enter Name" 
           onfocus="if(this.value == 'Enter Name') { this.value = ''; }" 
           onblur="if(this.value == '') { this.value = 'Enter Name'; }">

    <br><br>

    Password: <br>
    <input type="text" 
           value="Enter Password" 
           onfocus="if(this.value == 'Enter Password') { this.value = ''; this.type = 'password'; }" 
           onblur="if(this.value == '') { this.type = 'text'; this.value = 'Enter Password'; }">

</body>
</html>
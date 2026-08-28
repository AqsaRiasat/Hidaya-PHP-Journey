<!DOCTYPE html>
<html>
<body>
    <h2>Page 2 Contact Info</h2>
    
    <form action="24870-AqsaRiyasat-Cv-page3.php" method="POST">
        <input type="hidden" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
        <input type="hidden" name="fname" value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : ''; ?>">
        <input type="hidden" name="gen" value="<?php echo isset($_POST['gen']) ? $_POST['gen'] : ''; ?>">
        <input type="hidden" name="country" value="<?php echo isset($_POST['country']) ? $_POST['country'] : ''; ?>">
      
        Email: <input type="email" name="email"><br><br>
        Contact Number: <input type="text" name="contact"><br><br>
        Address: <br>
        <textarea name="address" rows="4" cols="30"></textarea><br><br>
        
        <input type="submit" value="Next">
    </form>
</body>
</html>
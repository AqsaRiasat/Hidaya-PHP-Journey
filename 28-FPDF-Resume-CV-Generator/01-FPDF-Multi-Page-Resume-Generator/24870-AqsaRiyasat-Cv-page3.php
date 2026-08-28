<!DOCTYPE html>
<html>
<body>


</body>
</html><!DOCTYPE html>
<html>
<body>
    <h2>Page 3 Professional Info</h2>
    <form action="24870-AqsaRiyasat-Cv-page4.php" method="POST">

        <input type="hidden" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
        <input type="hidden" name="fname" value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : ''; ?>">
        <input type="hidden" name="gen" value="<?php echo isset($_POST['gen']) ? $_POST['gen'] : ''; ?>">
        <input type="hidden" name="country" value="<?php echo isset($_POST['country']) ? $_POST['country'] : ''; ?>">
        <input type="hidden" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
        <input type="hidden" name="contact" value="<?php echo isset($_POST['contact']) ? $_POST['contact'] : ''; ?>">
        <input type="hidden" name="address" value="<?php echo isset($_POST['address']) ? $_POST['address'] : ''; ?>">
      

        School: <input type="text" name="sch"><br><br>
        College: <input type="text" name="coll"><br><br>
        Uni: <input type="text" name="uni"><br><br>
        
        Summary:<br>
        <textarea name="summary"></textarea><br><br>
        
        <input type="submit" value="Generate CV">
    </form>
</body>
</html>
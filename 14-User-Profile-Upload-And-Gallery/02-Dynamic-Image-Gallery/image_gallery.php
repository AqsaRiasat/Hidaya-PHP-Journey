<?php

$conn = mysqli_connect("localhost", "root", "", "gallery_db");

$msg = "";


if (isset($_POST['submit'])) {
    
    $image_name = $_FILES['image_uploading']['name'];
    $tmp_name   = $_FILES['image_uploading']['tmp_name'];
    
    if (empty($image_name)) {
        $msg = "Please select an image first...!";
    } else {
        
        $folder = "MyImages";
        if (!is_dir($folder)) {
            mkdir($folder);
        }
        
    
        $file_name = time() . "_" . $image_name;
        $path      = $folder . "/" . $file_name;
        
    
        if (move_uploaded_file($tmp_name, $path)) {
            
            
            $query = "INSERT INTO images (image_path) VALUES ('$path')";
            mysqli_query($conn, $query);
            
            header("Location: image_gallery.php?msg=Image Uploaded Successfully...!");
            exit();
        } else {
            $msg = "Image Uploading Failed...!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Image Gallery</title>
    <style>
        body {
            background-color: lightcyan;
            color: navy;
        }
        h1 {
            background-color: deepskyblue;
            color: black;
            text-align: center;
            font-family: cursive;
            padding: 10px;
            margin: 10px;
            border-radius: 6px;
            border-style: dotted;
            border-color: green;
            width: 70%;
        }
        fieldset {
            width: 400px;
            border-radius: 10px 0px 10px 0px;
        }
    </style>
</head>
<body>
    <center>
        <h1>Dynamic Image Gallery</h1>
        
        <fieldset>
            <legend>Single File Uploading</legend>
            <form method="POST" action="image_gallery.php" enctype="multipart/form-data">
                
                <p style="color: green; font-weight: bold;"><?php echo $_GET['msg'] ?? $msg; ?></p>
                
                <table>
                    <tr>
                        <th>Select Image:</th>
                        <td><input type="file" name="image_uploading"></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type="submit" name="submit" value="Upload Now"></td>
                    </tr>
                </table>
            </form>
        </fieldset>

        <br><br>
        <h2>Gallery View</h2>
        <hr style="width: 70%; border: 1px dashed green;">

        <table cellpadding="10">
            <tr>
            <?php
        
            $select_query = "SELECT * FROM images ORDER BY id DESC";
            $result = mysqli_query($conn, $select_query);
            
            $count = 0;
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            
                    if ($count > 0 && $count % 4 == 0) {
                        echo "</tr><tr>";
                    }
                    ?>
                    <td>
                        <div style="background-color: white; border: 2px dotted green; padding: 5px; border-radius: 10px 0px 10px 0px;">
                            <img src="<?php echo $row['image_path']; ?>" width="150" height="120">
                        </div>
                    </td>
                    <?php
                    $count++;
                }
            } else {
                echo "<td colspan='4' style='color:gray; font-style:italic;'>No images uploaded yet...!</td>";
            }
            ?>
            </tr>
        </table>

    </center>
</body>
</html>
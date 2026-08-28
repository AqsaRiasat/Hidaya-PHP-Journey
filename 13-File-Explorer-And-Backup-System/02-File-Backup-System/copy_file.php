<?php
// Ek khali message variable banaya taake status ya errors screen par dikha sakein
$message = "";

// 1. Sir ke lecture ke mutabiq 2 parameters wala Copy Function banaya
function my_custom_copy($source, $target) {
    
    // VALIDATION 1: Check karenge ke kya source file path sahi hai aur file exist karti hai?
    if (!file_exists($source) || !is_file($source)) {
        return "Error: Wrong source file path! (Source file does not exist)";
    }
    
    // VALIDATION 2: Check karenge ke target file jis folder me ban rahi hai, kya wo folder sahi hai?
    $target_directory = dirname($target);
    if (!is_dir($target_directory)) {
        return "Error: Wrong target file path! (Target folder does not exist)";
    }
    
    // AGAR VALIDATIONS PASS HO JAYEIN: Toh Sir wala copy() function chalayenge
    if (copy($source, $target)) {
        return "Success: File copied successfully from '$source' to '$target'!";
    } else {
        return "Error: Something went wrong while copying the file.";
    }
}

// 2. Jab user button dabayega toh yeh hissa chalega
if (isset($_POST['submit_copy'])) {
    $source_path = $_POST['source_path'];
    $target_path = $_POST['target_path'];
    
    // Function ko call kiya aur jo bhi result aaya usay $message me daal diya
    $message = my_custom_copy($source_path, $target_path);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Copy File Assignment</title>
</head>
<body>

    <h1>File Copy Function Assignment</h1>
    <hr />

    <?php if (!empty($message)) { ?>
        <h3>Status: <?php echo $message; ?></h3>
        <hr />
    <?php } ?>

    <form method="POST" action="copy_file.php">
        <label>Source File Path:</label><br />
        <input type="text" name="source_path" placeholder="e.g., origin.txt" required><br /><br />

        <label>Target File Path:</label><br />
        <input type="text" name="target_path" placeholder="e.g., backup.txt" required><br /><br />

        <input type="submit" name="submit_copy" value="Copy File Now">
    </form>

</body>
</html>
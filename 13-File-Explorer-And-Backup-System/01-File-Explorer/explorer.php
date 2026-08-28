<?php
//  URL se check karenge ke user kis path par hai
$current_path = isset($_GET['path']) ? $_GET['path'] : '.';

echo "<h1>Simple File and Directory Explorer</h1>";
echo "<h3>Current Path: " . $current_path . "</h3>";
echo "<hr />";

//  AGAR USER KISI FILE PAR CLICK KARE 

if (is_file($current_path)) {
    echo "<h3>File Content:</h3>";
    

    echo file_get_contents($current_path);
    
    echo "<hr />";
    
    // Wapas pichle folder me jaane ke liye link
    $parent_dir = dirname($current_path);
    echo "<a href='explorer.php?path=$parent_dir'>Go Back to Folder</a>";
    
    exit(); // Yahan code rok denge taake neeche wala loop na chale
}

// AGAR USER FOLDER DIRECTORY PAR HO
if (is_dir($current_path)) {
    
    // Back button 
    if ($current_path != '.') {
        $parent_dir = dirname($current_path);
        echo "<a href='explorer.php?path=$parent_dir'>[..] Go to Parent Directory</a><br /><br />";
    }

    // scandir() se poore folder ki list array me le li
    $files_and_folders = scandir($current_path);

    // Loop chala kar array se ek ek item nikala
    foreach ($files_and_folders as $item) {
        
        // '.' aur '..' ko list me ignore karne ke liye continue 
        if ($item == '.' || $item == '..') {
            continue;
        }
        
        // Sahi path banane ke liye
        $full_path = $current_path . '/' . $item;
        
        // Check karenge  yeh folder hai?
        if (is_dir($full_path)) {
            echo "[DIR] <a href='explorer.php?path=$full_path'>$item</a><br />";
        } 
        // Agar folder nahi hai toh file hogi
        else {
            echo "[FILE] <a href='explorer.php?path=$full_path'>$item</a><br />";
        }
    }
}
?>
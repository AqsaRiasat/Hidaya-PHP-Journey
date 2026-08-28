<?php

$background_color = "white";
$text_color       = "black";


if (isset($_COOKIE['bg_cookie'])) { 
    $background_color = $_COOKIE['bg_cookie']; 
}
if (isset($_COOKIE['text_cookie'])) { 
    $text_color = $_COOKIE['text_cookie']; 
}


if (isset($_GET['bg_choice']) && isset($_GET['text_choice'])) {
    

    setcookie("bg_cookie", $_GET['bg_choice'], time() + 3600);
    setcookie("text_cookie", $_GET['text_choice'], time() + 3600);
    
    
    header("location: theme.php");
    exit();
}
?>

<body style="background: <?php echo $background_color; ?>; color: <?php echo $text_color; ?>;">

    <h2>Theme Changer</h2>
    <p>kisi bhi option par click karein, woh color aapki cookie mein save ho jayega:</p>

    <p>
        <a href="theme.php?bg_choice=lightblue&text_choice=red" style="color: <?php echo $text_color; ?>;">
            <b>Blue Background & Red Text</b>
        </a>
    </p>

    <p>
        <a href="theme.php?bg_choice=black&text_choice=white" style="color: <?php echo $text_color; ?>;">
            <b>Black Background & White Text</b>
        </a>
    </p>

    <p>
        <a href="theme.php?bg_choice=white&text_choice=black" style="color: <?php echo $text_color; ?>;">
            <b>Reset to Default White & Black</b>
        </a>
    </p>

</body>
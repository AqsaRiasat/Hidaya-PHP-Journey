<?php

include_once('FormClass.php');
$obj = new FormClass();


if (isset($_POST['keyword'])) {
    $keyword = $_POST['keyword'];
    
    if ($keyword != "") {
        $res = $obj->searchPosts($keyword);
        
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
    
                echo "<div class='item' onclick=\"selectItem('" . $row['id'] . "', '" . $row['title'] . "')\">
                        " . $row['title'] . "
                      </div>";
            }
        } else {
            echo "<div class='item'>No record found</div>";
        }
    }
    exit();
}


if (isset($_POST['id'])) {
    $id = $_POST['id'];
    
    $res = $obj->getPostById($id);
    $row = mysqli_fetch_assoc($res);
    
    
    echo "<h2>" . $row['title'] . "</h2>";
    echo "<p>" . $row['description'] . "</p>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Google Search</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <center>
        <h2>Google</h2>

        <div class="search-container">
            <div class="input-wrapper">
                <input type="text" id="keyword" onkeyup="loadData()" placeholder="Type to search...">
                <span class="search-icon">🔍</span>
            </div>

            <div id="box"></div>
        </div>


        <div id="result"></div>
    </center>

    <script>

        function loadData() {
            var val = document.getElementById("keyword").value;
            var box = document.getElementById("box");

            if (val != "") {
                var x = new XMLHttpRequest();
                x.open("POST", "", true);
                x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                x.onload = function () {
                    box.innerHTML = x.responseText;
                    box.style.display = "block";
                }
                x.send("keyword=" + val);
            } else {
                box.style.display = "none";
            }
        }


        function selectItem(id, title) {
            document.getElementById("keyword").value = title;

            document.getElementById("box").style.display = "none";


            var x2 = new XMLHttpRequest();
            x2.open("POST", "", true);
            
            x2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            x2.onload = function () {
                var resultDiv = document.getElementById("result");

                resultDiv.innerHTML = x2.responseText;

                resultDiv.style.display = "block";
            }
            x2.send("id=" + id);
        }
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox Selection & Image Slider</title>
</head>
<body>

    <h2>1. Checkbox Select / Unselect All</h2>
    <input type="checkbox" class="box">PHP Basic <br>
    <input type="checkbox" class="box">PHP Advanced <br>
    <input type="checkbox" class="box">OOP <br>
    <input type="checkbox" class="box">PHP Frameworks <br>
    <input type="checkbox" class="box">JavaScript <br><br>

    <button onclick="selectAll()">Select All</button> 
    <button onclick="unselectAll()">Unselect All</button>

    <script>
        function selectAll() {
            var list = document.querySelectorAll(".box");
            list.forEach(function(item) {
                item.checked = true;
            });
        }

        function unselectAll() {
            var list = document.querySelectorAll(".box");
            list.forEach(function(item) {
                item.checked = false;
            });
        }
    </script>

    <hr>

    <h2>2. Dynamic Image Slider</h2>
    <center>
        <img src="img-1.jpg" id="slider" width="80%" height="400" onmouseover="stopSlider()" onmouseout="startSlider()" style="border: 2px solid black; object-fit: cover;">
        <br><br>
        <button onclick="startSlider()">Start</button>
        <button onclick="stopSlider()">Stop</button>
        <button onclick="nextImage()">Next</button>
        <button onclick="previousImage()">Previous</button>
    </center>

    <script>
        var images = ["img-1.jpg", "img-2.jpg", "img-3.jpg", "img-4.jpg", "img-5.jpg"];
        var index = 0;
        var timerId = null;

        function nextImage() {
            index++;
            if(index >= images.length) {
                index = 0;
            }
            document.getElementById("slider").src = images[index];
        }

        function previousImage() {
            index--;
            if(index < 0) {
                index = images.length - 1;
            }
            document.getElementById("slider").src = images[index];
        }

        function startSlider() {
            if (timerId == null) {
                timerId = setInterval(nextImage, 2000);
            }
        }

        function stopSlider() {
            clearInterval(timerId);
            timerId = null;
        }
    </script>

</body>
</html>
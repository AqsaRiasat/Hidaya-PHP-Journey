<!DOCTYPE html>
<html>
<head>
    <title>Lightbox Image Gallery</title>
    <style>
        .thumb {
            width: 22%; 
            height: 150px;
            margin: 1%;
            cursor: pointer;
            transition: opacity 0.3s; 
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
       
        #container {
            opacity: 1;
        }

        #lightbox {
            display: none; 
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7); 
            text-align: center;
            z-index: 10; 
        }

        #large-img {
            width: 900px;
            height: 400px;
            margin-top: 100px; 
            border: 5px solid white;
            border-radius: 5px;
        }

        .close-btn {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 50px;
            color: white;
            cursor: pointer;
            background: none;
            border: none;
        }
    </style>
</head>
<body>

    <div id="container">
        <h2>Lightbox Gallery</h2>
        
        <img src="img1.jpg" class="thumb" onclick="openImage('img1.jpg')">
        <img src="img2.jpg" class="thumb" onclick="openImage('img2.jpg')">
        <img src="img3.jpg" class="thumb" onclick="openImage('img3.jpg')">
        <img src="img4.jpg" class="thumb" onclick="openImage('img4.jpg')">

        <img src="img5.jpg" class="thumb" onclick="openImage('img5.jpg')">
        <img src="img6.jpg" class="thumb" onclick="openImage('img6.jpg')">
        <img src="img7.jpg" class="thumb" onclick="openImage('img7.jpg')">
        <img src="img8.jpg" class="thumb" onclick="openImage('img8.jpg')">

        <img src="img9.jpg" class="thumb" onclick="openImage('img9.jpg')">
        <img src="img10.jpg" class="thumb" onclick="openImage('img10.jpg')">
        <img src="img11.jpg" class="thumb" onclick="openImage('img11.jpg')">
        <img src="img12.jpg" class="thumb" onclick="openImage('img12.jpg')">
    </div>

    <div id="lightbox">
        <button class="close-btn" onclick="closeImage()">&times;</button>
        <img id="large-img" src="">
    </div>

    <script>
        function openImage(imagePath) {
            document.getElementById("lightbox").style.display = "block";
            document.getElementById("large-img").src = imagePath;
            document.getElementById("container").style.opacity = "0.3";
        }

        function closeImage() {
            document.getElementById("lightbox").style.display = "none";
            document.getElementById("container").style.opacity = "1";
        }
    </script>

</body>
</html>
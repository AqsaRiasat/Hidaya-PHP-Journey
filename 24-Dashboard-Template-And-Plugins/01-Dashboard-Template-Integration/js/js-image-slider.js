document.addEventListener("DOMContentLoaded", function() {
    var slider = document.getElementById("slider");
    if (slider) {
        var images = slider.getElementsByTagName("img");
        if (images.length > 0) {
            images[0].style.display = "block";
            var currentIndex = 0;
            setInterval(function() {
                images[currentIndex].style.display = "none";
                currentIndex = (currentIndex + 1) % images.length;
                images[currentIndex].style.display = "block";
            }, 3000); // Har 3 second baad image badlegi
        }
    }
});
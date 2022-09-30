<?php
?>



<html>
    <head>
        <title></title>  
        <link rel="stylesheet" href="../css/slider.css">
    </head>
    <body>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="../imgs/home/slider1.jpg" style="width: 100%; height: 80%;">
                <div class="text">Caption Text</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="../imgs/home/slider2.jpg" style="width: 100%; height: 80%;">
                <div class="text">Caption Text</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="../imgs/home/slider3.jpg" style="width: 100%; height: 80%;">
                <div class="text">Caption Text</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094</a>
            <a class="next" onclick="plusSlides(1)">&#10095</a>

        </div>
        <br>
        <div style="text-align: center;">
            <span class="dot" onclick="currentSlides(1)"></span>
            <span class="dot" onclick="currentSlides(2"></span>
            <span class="dot" onclick="currentSlides(3)"></span>
        </div>

     <script src="../js/slider.js"></script>  
    </body>
</html>

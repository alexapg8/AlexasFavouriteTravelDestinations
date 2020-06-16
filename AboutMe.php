<?php
include "header.php";
?>

<div class="blogContent">
    <!--Image slideshow to be manipulated with javascript functions.-->
    <div class="slideshow">
        <div class="slideshow__slides">
            <img src="Images/sme_image1.jpg" class="slidesow__slides_img">
        </div>
        <div class="slideshow__slides">
            <img src="Images/shawaii_image4.jpg" class="slidesow__slides_img">
        </div>
        <div class="slideshow__slides">
            <img src="Images/snewyork_image2.jpg" class="slidesow__slides_img">
        </div>
        <div class="slideshow__slides">
            <img src="Images/ssanfran_image1.jpg" class="slidesow__slides_img">
        </div>
        <a class="slideshow__arrow_prev" onclick="slideshow__changeSlides(-1)">&#10094;</a>
        <a class="slideshow__arrow_next" onclick="slideshow__changeSlides(1)">&#10095;</a>
    </div>
    <!--script with functions to manipulate slideshow-->
    <script>
        var slides__num = 1;
        display__slides(slides__num);
        function slideshow__changeSlides(n) {
            display__slides(slides__num += n);
        }
        function display__slides(n) {
            var i;
            var slides = document.getElementsByClassName("slideshow__slides");
            if (n > slides.length) { slides__num = 1 }
            if (n < 1) { slides__num = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slides__num - 1].style.display = "block";
        }
    </script>
    <div class="loc_title"><img src="Images/locationicon.png" alt="Location Icon" class="location_icon"><h1 id="location">Toronto, Canada</h1></div>
    <p>My name is Alexa, I grew up in Tijuana, Mexico right at the border with the US in southern California. Living right next to the border I had access to California and was able to see a couple of places without really travelling far.</p>
    <p>As a traveler I always wanted to experience living and studying in a different country, I always had the idea on the back of my mind and once I graduated from university and started working that was put in the back burner and now I wanted to travel every chance I had.</p>
    <p>Now that I was making my own money and had no other responsibilities but work, I took every vacation I could and travelled to the places I always wanted to, and made the most of those experiences. Now a few years later I finally got to fully live in another country and experience even more.</p>
</div>
<?php
include "footer.php";
?>


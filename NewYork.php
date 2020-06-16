<!--google Maps API call for OpenWeather API-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=APIKEY">
</script>
<script src="scripts/OpenWeatherMap.js"></script>
<?php
include "header.php";
?>

<div class="blogContent">
    <!--Image slideshow to be manipulated with javascript functions.-->
    <div class="slideshow">
        <div class="slideshow__slides">
            <img src="Images/snewyork_image1.jpg" class="slidesow__slides_img">
        </div>
        <div class="slideshow__slides">
            <img src="Images/snewyork_image2.jpg" class="slidesow__slides_img">
        </div>
        <div class="slideshow__slides">
            <img src="Images/snewyork_image3.jpg" class="slidesow__slides_img">
        </div>
        <div class="slideshow__slides">
            <img src="Images/snewyork_image4.jpg" class="slidesow__slides_img">
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
    <div class="loc_title"><img src="Images/locationicon.png" alt="Location Icon" class="location_icon"><h1 id="location">New York, New York</h1></div>
    <p>Welcome to New York, throughout my visit to <strong>The Big Apple</strong> I could not get that song out of my head, and as the song says: <em>The lights are so bright</em>. Beautiful at night and during the day there is so much to do in <strong>New York City</strong>. I will also tell you about our encounter with <em>firefighters</em>, this trip was full of adventures and stories to tell!</p>
    <p><strong>Experience New York yourself!</strong></p>

    <div class="tip_title"><img src="Images/tipsicon.png" alt="Tips Icon" class="tips_icon"><h2 id="travel-tips-title">Travel Tips</h2></div>
    <p>Here are some useful tips about <strong>where to eat</strong> so you can have the local experience, as well as the my favourite option to <strong>stay the night</strong> and still be close to the attractions. It's always good to know what the <strong>weather</strong> is like, so I added a weather map for you!</p>
    <div class="travel-tips-mod">
        <img src="Images/restauranticon.png" alt="Restaurant Icon" title="Restaurant" class="tips_img">
        <div class="travel-tips-info">
            <p>While visiting a new place it's always nice to go to traditional places or have traditional foods, in this case, me and my friend went to a restaurant called <strong>Joe's Pizza</strong>, which has a couple of locations throughout New York, but we ended up going</p>
            <p>to the location just across the Williamsburgh Bridge.<em>(See map below)</em>.I've come to know that when you go to a place like this you don't only learn more about the food, but about the culture in general.</p>
            <p>This local spot is not only famous among  New Yorkers, but also a lot more famous people, with pictues in frames hanging on the wall of the cook with celebrities, you feel just like in a movie.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1512.0177022305372!2d-73.96003985622497!3d40.71723709989128!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8c192a5ea7058108!2sJoe&#39;s%20Pizza!5e0!3m2!1sen!2sca!4v1592264395688!5m2!1sen!2sca" width="100%" height="60%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <img src="Images/hostelicon.png" alt="Hostel Icon" title="Hostel" class="tips_img">
        <div class="travel-tips-info">
            <p>As a young traveler I have always liked the option of staying at hostels more than at a hotel, not only because it's cheaper, but because you can meet people from all over the world and have much more information about the place you are visiting.</p>
            <p>In this case when I went to New York City with my best friend we found a perfect hostel, <strong>Jazz on the Park Hostel</strong>, right next to Central Park <em>(See map below)</em>. There were a lot of tourist spots walking distance, and we had a room just for ourselves, which provided more comfort.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3020.3550306426387!2d-73.96201188326543!3d40.798191462837224!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x14a95ed5ac799686!2sJazz%20on%20The%20Park%20Hostel!5e0!3m2!1sen!2sca!4v1592264435941!5m2!1sen!2sca" width="100%" height="60%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <img src="Images/weathericon.png" alt="Weather Icon" title="Weather" class="tips_img">
        <div class="travel-tips-info">
            <p>This trip was during may so the weather was perfect, not too hot, just right. As a person that doesn't enjoy the heat much it was honestly perfect! At night the weather refreshes, but even then it's not too cold so you can still go out.</p>
            <p>Below there's a map where you can click on the clouds icon and you'll be able to see the <strong>current weather information</strong>.</p>
            <!-- div to hold OpenWeatherMap -->
            <div id="map-canvas"></div>
        </div>
    </div>

    <p>If you liked this blog entry don't forget to <strong>share on Facebook!</strong></p>
    <!--Facebook share button with href data-->
    <div class="fb-share-button" data-href="http://alexaperezg.com/HTTP5203-FinalProject-AlexaPerez/Honolulu.php" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Falexaperezg.com%2FHTTP5203-FinalProject-AlexaPerez%2FHonolulu.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"> Share </a></div>
</div>

<?php
include "footer.php";
?>

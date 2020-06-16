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
            <img src="Images/shawaii_image1.jpg" class="slidesow__slides_img">
        </div>
        <div class="slideshow__slides">
            <img src="Images/shawaii_image2.jpg" class="slidesow__slides_img">
        </div>
        <div class="slideshow__slides">
            <img src="Images/shawaii_image3.jpg" class="slidesow__slides_img">
        </div>
        <div class="slideshow__slides">
            <img src="Images/shawaii_image4.jpg" class="slidesow__slides_img">
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
    <div class="loc_title"><img src="Images/locationicon.png" alt="Location Icon" class="location_icon"><h1 id="location">Honolulu, Hawaii</h1></div>
    <p>On this Blogspot I will talk about my <strong>favourite cities</strong> I’ve travelled to:<a href="NewYork.php">New York</a>, <a href="SanFrancisco.php">San Francisco</a> and Honolulu, Hawaii. I will write what I liked about them as well as ways I <em>saved money</em> and made the most of my trips.</p>
    <p>For this <strong>first post</strong> I will focus on Oahu, mostly Waikiki beach. I’ve never been a fan of going to the beach, maybe it has something to do with living so close to it all of my life, however once you go to <strong>Waikiki Beach</strong> you fall in love. Oahu has the perfect weather in may, not too hot but <em>just perfect</em> for you to go to the beach, sightseeing and hiking.</p>
    <p>As always, I chose to stay at a <em>hostel</em> to save money, and this time it was at the <strong>perfect location</strong>, just walking distance of the busiest avenue and the beach! Waikiki's <strong>Kalakaua Ave</strong> is the perfect combination of <em>city stores and nature</em> with the beach just steps away, it’s safe and beautiful to walk either during the day as well as night time.</p>
    <p>During this trip was my first time <strong>snorkeling and surfing</strong>, and Hawai’i was the perfect place to experience both. Also, one of my favourite parts of this trip was going to <strong>Kualoa Ranch</strong>, where you don’t only see the beautiful flora Oahu has to offer but we also got to see movies and TV shows <em>filming locations</em>.</p>
    <p><strong>Experience Hononlulu yourself!</strong></p>

    <div class="tip_title"><img src="Images/tipsicon.png" alt="Tips Icon" class="tips_icon"><h2 id="travel-tips-title">Travel Tips</h2></div>
    <p>Here are some useful tips about <strong>where to eat</strong> so you can have the local experience, as well as the my favourite option to <strong>stay the night</strong> and still be close to the attractions. It's always good to know what the <strong>weather</strong> is like, so I added a weather map for you!</p>
    <div class="travel-tips-mod">
        <img src="Images/restauranticon.png" alt="Restaurant Icon" title="Restaurant" class="tips_img">
        <div class="travel-tips-info">
            <p>While visiting a new place it's always nice to go to traditional places or have traditional foods, in this case, me and my friend went to a restaurant called <strong>Duke's</strong>, which is right on Waikiki Beach <em>(See map below)</em> and is fairly famous among locals.</p>
            <p>I've come to know that when you go to a place like this you don't only learn more about the food, but about the culture in general. This restaurant had images all over the walls telling stories of Hawaiian people.</p>
            <p>As part of one of our tours, we tried the famous Hawaiian dessert, Shave Ice, which seems pretty easy to make but still, Hawaii has it's own style and I certainly had never had Shave Ice like the one there.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1858.9313461655631!2d-157.8285326095285!3d21.27690208397738!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfffee1e1a1e0c9f1!2sDuke&#39;s%20Waikiki!5e0!3m2!1sen!2sca!4v1592263635531!5m2!1sen!2sca" width="100%" height="60%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <img src="Images/hostelicon.png" alt="Hostel Icon" title="Hostel" class="tips_img">
        <div class="travel-tips-info">
            <p>As a young traveler I have always liked the option of staying at hostels more than at a hotel, not only because it's cheaper, but because you can meet people from all over the world and have much more information about the place you are visiting.</p>
            <p>In this case when I went to Honolulu with my best friend we found a perfect hostel, <strong>Seaside Hawaiian Hostel </strong>, just a couple of blocks away from Waikiki Beach <em>(See map below)</em>. There were a lot of tourist spots walking distance, and the hostel it self had a beach-y vibe about it.</p>
            <p>Everyone says going on vacation to Honolulu can be pricey, but most of that spent money goes into hotels so I think this place is the perfect example as to why sometimes it's better to stay at a hostel, just like a local.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3717.7634472942373!2d-157.8273595716259!3d21.280829277652266!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x283991fa642f9c8c!2sSeaside%20Hawaiian%20Hostel!5e0!3m2!1sen!2sca!4v1592264075746!5m2!1sen!2sca" width="100%" height="60%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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

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
            <img src="Images/ssanfran_image1.jpg" class="slidesow__slides_img">
        </div>
        <div class="slideshow__slides">
            <img src="Images/ssanfran_image2.jpg" class="slidesow__slides_img">
        </div>
        <div class="slideshow__slides">
            <img src="Images/ssanfran_image3.jpg" class="slidesow__slides_img">
        </div>
        <div class="slideshow__slides">
            <img src="Images/ssanfran_image4.jpg" class="slidesow__slides_img">
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
    <div class="loc_title"><img src="Images/locationicon.png" alt="Location Icon" class="location_icon"><h1 id="location">San Francisco, California</h1></div>
    <p>The city by the bay, San Francisco is one of the most beautiful cities I've been to, <strong>The Golden Gate Bridge</strong> is the highlight and there are so many spots to see it from to admire its <em>beauty</em>. Across from it you can go to a picturesque town called <strong>Sausalito</strong>.</p>
    <p><strong>Experience San Francisco yourself!</strong></p>

    <div class="tip_title"><img src="Images/tipsicon.png" alt="Tips Icon" class="tips_icon"><h2 id="travel-tips-title">Travel Tips</h2></div>
    <p>Here are some useful tips about <strong>where to eat</strong> so you can have the local experience, as well as the my favourite option to <strong>stay the night</strong> and still be close to the attractions. It's always good to know what the <strong>weather</strong> is like, so I added a weather map for you!</p>
    <div class="travel-tips-mod">
        <img src="Images/restauranticon.png" alt="Restaurant Icon" title="Restaurant" class="tips_img">
        <div class="travel-tips-info">
            <p>While visiting a new place it's always nice to go to traditional places or have traditional foods, in this case, me and my friend went to a restaurant called <strong>Boudin Bakery Cafe</strong>, which is right on Fishermans Wharf <em>(See map below)</em> and is fairly famous among locals.</p>
            <p>What I loved about this place was that they did not only sell sourdough bread or the famous "Soup on a bread", which was really good. They also had kind of a museum explaining the history of the place in the city and the sourdough.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1576.1010331307364!2d-122.41559230952846!3d37.8087357260257!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3f44089a41e5ac6e!2sBoudin%20Bakery%20Cafe!5e0!3m2!1sen!2sca!4v1592264278578!5m2!1sen!2sca" width="100%" height="60%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <img src="Images/hostelicon.png" alt="Hostel Icon" title="Hostel" class="tips_img">
        <div class="travel-tips-info">
            <p>As a young traveler I have always liked the option of staying at hostels more than at a hotel, not only because it's cheaper, but because you can meet people from all over the world and have much more information about the place you are visiting.</p>
            <p>In this case since I was travelling with my mom I decided to pick a Hotel, however I followed the same mindset of picking a cheap one, <strong>Aida Plaza Hotel</strong>, just a couple of blocks away from Union Square <em>(See map below)</em>. There were a lot of tourist spots walking distance, with it being right on Market St.</p>
            <p>San Francisco is probably the priciest place I've stayed, and the hotel was not the best, but it worked as intended, we just needed a place to sleep and during the day we would spend doing tourist stuff.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1576.6908397851498!2d-122.41335524154451!3d37.781094057383456!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa3286897344ab52b!2sAida%20Plaza!5e0!3m2!1sen!2sca!4v1592264340142!5m2!1sen!2sca" width="100%" height="60%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <img src="Images/weathericon.png" alt="Weather Icon" title="Weather" class="tips_img">
        <div class="travel-tips-info">
            <p>Even though the trip was around August and the sun was out most of the days, San Francisco is still a windy city and can be a bit cold even in the summer.</p>
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

<!--Header file to include on all other php files so that we don't have to rewrite code on each file.-->
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> My Favourite Travel Destinations</title>
    <meta name="description" content="Favourite Travel Destinations">
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <script type="text/javascript" src="scripts/jquery-3.4.1.js"></script>
    <script src="scripts/general.js"></script>
</head>
<body>
<!--Facebook sharer script-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=519882992025454&autoLogAppEvents=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="page-container">
    <header id="header">
        <div id="logo-blogname">
            <img src="Images/alexa-logo.png" id="logo" alt="Alexa's Favourite Travel Destinations"/>
            <h1 id="blog-name" class="hidden">Alexa's Favourite Travel Destinations</h1>
        </div>
        <nav id="main-navigation">
            <h2 class="hidden">Main navigation</h2>
            <ul class="menu" id="main-menu">
                <li><a href="index.php">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-item dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                       aria-expanded="false">Travel Destinations</a>
                    <ul>
                        <li><a href="Honolulu.php">Honolulu,HI</a></li>
                        <li><a href="SanFrancisco.php">San Francisco, CA</a></li>
                        <li><a href="NewYork.php">New York, NY</a></li>
                    </ul>
                </li>
                <li><a href="AboutMe.php">About Me</a></li>
            </ul>
        </nav>
    </header>



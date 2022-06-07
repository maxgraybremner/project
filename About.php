<?php
require_once"db/queryDb.php";

if (isset($_GET['eventname'])){
    $search = $_GET['eventname'];
} else {
    $search = null;
}

$events = getEvents($search);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Max Bremner"/>
    <meta name="description" content="A list of facilities that can be found when visiting Snowy Mountain Ski Field, along with a trail map and events that are coming up this season."/>
    <title>About us | Snowy Mountain Ski Field</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="./images/favicon.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <nav id="nav" class="nav">
            <div id="logo">
                <img id="icon-pic" src="./images/mountain-icon.png" alt="Snowy Mountain icon" type="image/png">
                <h1 id="logo-h1">Snowy Mountain</h1>
                <p id="logo-p">Ski Field</p>
            </div>
            <label for="nav-toggle" class="nav-toggle-icon"><span>☰</span></label>
            <ul id="nav-list">
                <li class="list-element"><a href="index.html">Home</a></li>
                <li class="list-element"><a href="About.php">About us</a></li>
                <li class="list-element"><a href="beginner.html">First Time</a></li>
                <li class="list-element">
                    <a href="index.html"><img id="logo-pic" src="./images/favicon.svg" alt="Home menu icon"></a>
                </li>
                <li class="list-element"><a href="passes.html">Passes</a></li>
                <li class="list-element"><a href="ski-hire.html">Ski Hire</a></li>
                <li class="list-element"><a href="weather.html">Weather</a></li>
            </ul>
        </nav>

    </header>
    <picture>
        <source media="(min-width: 900px)" srcset="./images/resized/ski-pic3-1600.jpg">
        <img class="header-img" src="./images/resized/ski-pic3-1600.jpg">
        <source media="(max-width: 899px)" srcset="./images/resized/portrait.background3-600.jpg">
        <img class="header-img-2" src="./images/resized/portrait.background3-600.jpg" alt="">
    </picture>

    <main>
        <div class="header">
            <h1 class="header-h1">About us @ Snowy Mountain</h1>

        </div>
        <section class="section-1">
            <video video autoplay muted loop class="section-1-pic" width="400px" height="250px">
                <source src="./images/ski-video.mp4" type="video/mp4" alt="Man skiing down a snowly slope" >
            </video>
            <div class="section-1-info">
                <h2 class="section-1-h2">Whats here?</h2>
                <p class="section-1-p">
                    <ul>
                        <li>2,157 acres of beginner to advanced ski trails</li>
                        <li>30 Chair lifts</li>
                        <li>Longest run of 4.7kms</li>
                        <li>Brand new Terrain Park</li>
                        <li>Delicious Cafe</li>
                        <li>Day-care for the little ones</li>
                        <li>Ski Hire and Ski Shop and more...</li>
                    </ul>
            </div>
        </section>
        <section class="trail-map-container">
            <h2 class="heading">Trail Map</h2>
            <img class="trail-map" src="./images/Trail Map.png" alt="Map of the mountain Trails">
        </section>
        <section id="events">
            <h2 class="heading">Events</h2>
            <form action="About.php" method="get">
                    <input class="submit-input" type="text" id="eventname" name="eventname" placeholder="Event Search Here">
                
                <input class="submit" type="submit" value="Submit">
            </form>
            <div class="event-card-container">
                
                    <?php
                    foreach($events as $event){
                        echo "<div class='event-card'>";
                        echo "<img class='event-pic' src=".$event['IMAGE'].">";
                        echo "<div class='event-info'>";
                        echo "<h2 class='event-info-h2'>". $event['EVENTNAME']."</h2>";
                        echo "<p class='event-info-p'>", $event['DESCRIPTION']. "</p>";
                        echo "</div>";
                        echo "<div class='event-date'>";
                        echo "<p class='date-p'>".$event['DATE']. "</p>";
                        echo "<p class='time-p'>". $event['TIME']. "</p>";
                        echo "</div>";
                        echo "</div>";
                    }
                    ?>
            </div>  
        </section>
    </main>
    <footer>
        <div class="social">
            <p>© 2022 - Max Bremner</p>
            <div class="social-links">
                <a href="https://github.com/maxgraybremner/">
                    <img class="social-logo" src="images/link-logo/GitHub-Mark-64px.png" alt="github logo">
                </a>
                <a href="https://www.linkedin.com/in/max-bremner-957516188/">
                    <img class="social-logo" src="images/link-logo/LI-In-Bug.png" alt="Linkedin">
                </a>
                <a href="https://www.maxgraybremner.com/">
                    <img class="social-logo" src="images/link-logo/Elegant Minimalist Modern Initials Studio Logo.png" alt="max gray bremner website logo">
                </a>
            </div>
        </div>
        <ul class="footer-ul">
            <li class="list-item"><a class="list-a" href="index.html">Home</a></li>
            <li class="list-item"><a class="list-a" href="About.php">About us</a></li>
            <li class="list-item"><a class="list-a" href="beginner.html">First Time</a></li>
            <li class="list-item"><a class="list-a" href="passes.html">Passes</a></li>
            <li class="list-item"><a class="list-a" href="ski-hire.html">Ski Hire</a></li>
            <li class="list-item"><a class="list-a" href="weather.html">Weather</a></li>
            <li class="list-item"><a class="list-a" href="contact-us.php">Contact Us</a></li>
        </ul>
    </footer>
</body>
<script src="script.js"></script>

</html>
<?php
require_once"db/queryDb.php";

if (isset($_GET['first-name'])){
    $fname = $_GET['first-name'];
} else {
    $fname = "";
}

if (isset($_GET['last-name'])){
    $lname = $_GET['last-name'];
} else {
    $lname = "";
}

if (isset($_GET['ph-number'])){
    $phone = $_GET['ph-number'];
} else {
    $phone = "";
}

if (isset($_GET['email-address'])){
    $address = $_GET['email-address'];
} else {
    $address = "";
}

if (isset($_GET['concern'])){
    $concern = $_GET['concern'];
} else {
    $concern = "";
}

$contact = addCustomer($fname, $lname, $phone, $address, $concern);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Max Bremner"/>
    <meta name="description" content="Please contact us through our email or phone number. our department will respond as soon as possible."/>
    <title>Contact Us | Snowy Mountain Ski Field</title>
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
    <div id="page">
            <div class="contact-us">
            <h2 class="contact-title">Please get in touch!</h2>
                <fieldset id="contact-info">
                    <section class="input-form">
                    <form class="fist-name" action="contact-us.php" method="get">
                            <label class="form-label" id="first-name" for="first-name">First name</label>
                            <input class="formType" type="text" id="first-name" name="first-name" placeholder="Type your first name here" required>
                        </section>
                        <section class="input-form">
                            <label class="form-label" id="last-name" for="last-name">Last name</label>
                            <input class="formType" type="text" id="last-name" name="last-name" placeholder="Type your Last name here" required>
                        </section>
                        <section class="input-form" id="ph-number">
                            <label class="form-label" for="ph-number">Mobile Number</label>
                            <input class="formType" type="tel" id="ph-number" name="ph-number" size="12" maxlength="12" placeholder="0412345678">
                        </section>
                        <section class="input-form">
                            <label class="form-label" for="concern">How can we help?</label>
                            <textarea class="formType" id="concern" name="concern" rows="5" cols="30" placeholder="Type response here." required></textarea>
                        <section class="input-form" id="email-address">
                            <label id="email-address" for="email-address">E-Mail Address</label>
                            <input class="formType" name="email-address" id="email-address" type="text" maxlength="40" placeholder="E-mail" required>
                            <input class="submit-btn" id="submit" type="submit" value="Submit">
                        </section>
                    </form>
                    <p>
                        <?php
                        if (isset($_GET['first-name'])){
                            $first_name = $_GET['first-name'];
                            echo 'Thank you for your message '.$first_name."!";
                        } else {
                            $first_name = null;
                            echo "Thank you for your message!";
                        }
                        
                        ?>
                    </p>
                </fieldset>
            </div>
        <div class="company-details" itemscope itemtype="https://schema.org/Person">
            <h2 class="contact-title">Or contact us dirctly</h2>
            <p><span>Phone Number: </span><span itemprop="telephone">(+61)0412 345 678</span></p>
            <p><span>E-Mail: </span><span itemprop="email">contactus@snowymountain.com</span></p>
            <p><span>Address: </span><span itemprop="streetAddress">170 Emily Rd, </span><span itemprop="addressLocality">Nathan </span><span itemprop="addressRegion">QLD </span><span itemprop="postalCode">4111</span></p>
            <img class="contact-us-img" src="./images/resized/ski-lodge-400.jpg" width="300px" height="250px" alt="map of griffith university nathan campus.">
        </div>
    </div>
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

</html>
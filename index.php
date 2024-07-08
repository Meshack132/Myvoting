<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>South Africa Electoral Consignment</title>
    <link rel="stylesheet" href="css/template.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        #wrapper {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        #logo {
            text-align: center;
            margin-bottom: 20px;
        }
        #logo img {
            height: 105px;
            width: 132px;
            vertical-align: middle;
        }
        #image img {
            height: 30px;
            width: auto;
            vertical-align: middle;
            margin-left: 10px;
        }
        nav {
            text-align: center;
            margin-bottom: 20px;
        }
        nav a {
            margin-right: 10px;
            text-decoration: none;
            color: #333;
        }
        #content {
            margin-bottom: 20px;
        }
        #slideshow {
            margin-bottom: 20px;
        }
        .mySlides {
            display: none;
        }
        #bottom {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }
        #bottom h4 {
            margin-bottom: 10px;
        }
        #bottom p {
            margin: 5px 0;
        }
        #links a {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: #333;
        }
        #footer {
            margin-top: 20px;
            color: #666;
        }
    </style>
</head>
<body>
<div id="wrapper">
    <div id="logo">
        <div id="image">
            <img src="images/Wil Logo.png" alt="Wil Logo" height="105" width="132">
            <img src="images/sace.png" alt="SACE Logo">
        </div>
    </div>
    <nav>
        <a href="index.php">Home |</a>
        <a href="parties.html">Parties |</a>
        <a href="login.php">Login And Cast Your Vote |</a>
        <a href="station.html">Station |</a>
        <a href="contact-us.html">Contact Us |</a>
        <a href="about-us.html">About Us |</a>
        <a href="register.php">Register To Vote</a>
    </nav>
    <div id="content">
        <div id="slideshow">
            <div align="center">
                <img class="mySlides" src="images/Decomcracy.jpg" alt="Democracy" height="201" width="1064">
            </div>
            <div align="center">
                <img class="mySlides" src="images/Vote.jpg" alt="Vote" height="201" width="1068">
            </div>
            <div align="center">
                <img class="mySlides" src="images/VotingQueue.jpg" alt="Voting Queue" height="201" width="1069">
            </div>
            <div align="center">
                <img class="mySlides" src="images/VotingStation.png" alt="Voting Station" height="201" width="1070">
            </div>
            <div align="center">
                <img class="mySlides" src="images/Voters.jpg" alt="Voters" height="201" width="1066">
            </div>
        </div>
        <script>
            var slideIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > x.length) { slideIndex = 1 }
                x[slideIndex - 1].style.display = "block";
                setTimeout(carousel, 5000); // Change image every 5 seconds
            }
        </script>
        <h1>Welcome to the South Africa Electoral Consignment</h1>
        <p>We are the eVoting system for South Africa's elections. We provide a new way for South Africans to voice their opinions.</p>
        <div id="vote">
            <p>If you want to vote, you must register. Once registered, you can cast your vote in the system. All voting stations will be displayed on the site.</p>
            <h2>The Technical Way To Vote</h2>
            <p>Register and vote for your party.</p>
            <div id="party1">
                <p><img src="images/vote1.jpg" alt="Vote" height="60" width="60"> Voting also takes place at voting stations located across the country.</p>
                <p>The locations of the stations can be found on the map under the Station page. Please check to find the station nearest to you.</p>
            </div>
        </div>
    </div>
    <div id="bottom">
        <div>
            <h4>Like and Follow Us</h4>
            <p>Facebook <img src="icons/1476208982_facebook.png" alt="Facebook" width="25" height="25"></p>
            <p>Twitter <img src="icons/1476208871_twitter.png" alt="Twitter" width="25" height="25"></p>
        </div>
        <div id="links">
            <h4>Links To Check</h4>
            <a href="http://www.departmentofhomeaffair.gov">Home Affairs</a>
        </div>
        <div id="footer">
            <p>&copy;2016 The South Africa Electoral Consignment - Developed by Tech 6</p>
        </div>
    </div>
</div>
</body>
</html>

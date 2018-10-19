<!DOCTYPE html>
<html>
<head>
    <!-- Basic Needs !-->
    <meta charset="utf-8">
    <title>MBHS SGA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS !-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="http://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="page">
        <!-- Begin Navbar !-->
        <!-- Begin Navbar !-->
        <div id="headercontainer" class="unselectable">
            <div id="headerfull">
                <div id="headerleft" class="titleleft">
                    <span style="font-size: 28pt; font-weight: bold;">Montgomery Blair SGA</span>
                    <br><span style="font-size: 16pt;"><a href="https://twitter.com/mbhs_sga">@Blair_SGA</a></span>
                </div>
                <div id="headerright" class="navlinks">
                    <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="aboutus.html">About</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="clubs.html">Clubs</a></li>
                    <li><a href="blairwear.html">Blairwear</a></li>
                    <li><a href="congress.html">Congress</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="docs.html">Forms</a></li>
                    <li><a href="calendar.html">Calendar</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>

            </div>
          </div>
        <!-- End Navbar !-->
        <!-- End Navbar !-->
        <!-- Comment the search box -->
        <!--<gcse:searchresults></gcse:searchresults>-->
        <div id="push"></div>
        <!-- Begin News !-->
        <div id ="announcement">
            <h1>Thank you for your input!</h1>
            <?php
$headers = "From: \"" . $_POST['name'] . "\"<" . $_POST['email'] . ">\r\n";
mail("mbsga.blazers@gmail.com", $_POST['subject'], $_POST['message'], $headers);
?>
       </div>
        <!-- End News !-->
    <div id="footer">
            &copy Montgomery Blair High School | Designed and Created by: <a href="credits.html">The Blair SGA Web Team</a>
            </div>
    </div>
<!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.dropotron.min.js"></script>
    <script src="js/jquery.scrolly.min.js"></script>
    <script src="js/jquery.onvisible.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/util.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.0/isotope.pkgd.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- Init Animation lag !-->
    <script>
        new WOW().init();
    </script>
</html>

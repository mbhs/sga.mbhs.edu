<?php 
session_start();

if(isset($_POST['password'])) {
	$hash = file_get_contents('hash.conf');
	$salt = file_get_contents('salt.conf');

	if(hash('sha256', $_POST['password'] . $salt) == $hash) {
		$_SESSION['auth'] = 'aye';
		header("Location: " . (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . "/staff/");
		exit();
	}
}
?>
<html>
<head>
	<!-- Basic Needs !-->
	<meta charset="utf-8">
	<title>MBHS SGA</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS !-->
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link href="http://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Begin Page !-->
    <div id="page">
        <!-- Begin Navbar !-->
        <div id="headercontainer" class="unselectable">
            <div id="headerfull">
				<div id="headerleft" class="titleleft">
					<span style="font-size: 28pt; font-weight: bold;">Montgomery Blair SGA</span>
					<br><span style="font-size: 16pt;"><a href="https://twitter.com/mbhs_sga">@Blair_SGA</a></span>
				</div>
                <div id="headerright" class="navlinks">
					<ul>
                    <li><a href="/index.html">Home</a></li>
					<li><a href="/aboutus.html">About</a></li>
                    <li><a href="/events.html">Events</a></li>
					<li><a href="/clubs.html">Clubs</a></li>
					<li><a href="/blairwear.html">Blairwear</a></li>
                    <li><a href="/congress.html">Congress</a></li>
					<li><a href="/gallery.html">Gallery</a></li>
                    <li><a href="/docs.html">Forms</a></li>
                    <li><a href="/calendar.html">Calendar</a></li>
                    <li><a href="/contact.html">Contact</a></li> 
					</ul>
                </div>
				
            </div>
  		</div>
        <!-- End Navbar !-->
		
		<form action="/staff/login.php" method="post">
			Password: <br><input type="password" name="password"><br>
			<br><input type="submit">
		</form>
		
	   
        <div id="footer">
			&copy Montgomery Blair High School | Designed and Created by: <a href="/credits.html">The Blair SGA Web Team</a>
		</div>
       
    <!-- End Page !-->
    </div>
    <div id="push"></div>
    </div>

</body>
</html>

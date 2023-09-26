<?php
// подключение необходимых файлов обработчиков
include_once("functions.php");
//include_once("log.php");
//include_once("session.php");
include_once("db.php");
include_once('process.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Music Website</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="header-content">
        <h1>My Music Collection</h1>
        </div>
	<div class="header-buttons">
                <a href="signup.php" class="button">Sign Up</a>
                <a href="login.php" class="button">Login</a>
            </div>
    </header>
    <nav class="futuristic-menu">
        <ul>
            <li><a href="artists.html">Artists</a></li>
            <li><a href="#">Albums</a></li>
            <li><a href="#">Songs</a></li>
            <li><a href="#">Favorites</a></li>
	<li><a href="contact_us.html">Contact us</a></li>
        </ul>
    </nav>
    <main>
 <aside class="sidebar">
            <h2>Music Categories</h2>
            <ul>
                <li><a href="#">Rock</a></li>
                <li><a href="#">Pop</a></li>
                <li><a href="#">Jazz</a></li>
                <li><a href="#">Hip-Hop</a></li>
                
            </ul>
        </aside>
        <section class="song-list">
            <h2>Songs</h2>
            <ul>
<li><audio controls>
        	<source src="musicc/Billie Eilish-COPYCAT.mp3" type="audio/mpeg"></audio>
    	<a href="#">Billie Eilish-COPYCAT</a></li>
<li><audio controls>
        	<source src="musicc/Billie Eilish-i love you.mp3" type="audio/mpeg"></audio>
    	<a href="#">Billie Eilish-i love you</a></li>
<li><audio controls>
        	<source src="musicc/Billie Eilish-my boy.mp3" type="audio/mpeg"></audio>
    	<a href="#">Billie Eilish-my boy</a></li>
<li><audio controls>
        	<source src="musicc/Billie Eilish-party favor.mp3" type="audio/mpeg"></audio>
    	<a href="#">Billie Eilish-party favor</a></li>
<li><audio controls>
        	<source src="musicc/Billie Eilish-Six Feet Under.mp3" type="audio/mpeg"></audio>
    	<a href="#">Billie Eilish-Six Feet Under</a></li>
<li><audio controls>
        	<source src="musicc/Billie Eilish-watch.mp3" type="audio/mpeg"></audio>
    	<a href="#">Billie Eilish-watch</a></li>
<li><audio controls>
        	<source src="musicc/Billie Eilish-xanny.mp3" type="audio/mpeg"></audio>
    	<a href="#">Billie Eilish-xanny</a></li>
<li><audio controls>
        	<source src="musicc/Billie Eilish-you should see me in a crown.mp3" type="audio/mpeg"></audio>
    	<a href="#">Billie Eilish-you should see me in a crown</a></li>
<li><audio controls>
        	<source src="musicc/Billie_Eilish_Vince_Staple.mp3" type="audio/mpeg"></audio>
    	<a href="#">Billie_Eilish_Vince_Staple</a></li>
<li><audio controls>
        	<source src="musicc/billie-eilish_-_all-the-good-girls-go-to-hell.mp3" type="audio/mpeg"></audio>
    	<a href="#">Billie-eilish_-_all-the-good-girls-go-to-hell</a></li>

            </ul>
        </section>
    </main>
    <footer>
    <div class="footer-options">
        <ul>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>
    <div class="copyright">
        <p>&copy; 2023 My Music Website</p>
    </div>
</footer>

</body>
</html>

<?php
    error_reporting(E_ALL & ~E_NOTICE);
    session_start();

    include_once("connection.php");

    $sql_about = "SELECT info, competition, sponsors FROM about WHERE Current = true";
    $query_about =  mysqli_query($dbCon, $sql_about);

    if($query_about){
        $row_about = mysqli_fetch_row($query_about);
        $about_info = $row_about[0];
        $about_competition = $row_about[1];
        $about_sponsors = $row_about[2];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Titanium Tigers</title>
    <!-- <link rel="stylesheet" href="Robotics_about.css"> -->
    <style>
        /*Navigation styling */

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

li {
    display: inline;
    float: left;
}

div div ul {
    float:left;
    padding: 25px;
}

a:link, a:visited {
    display: block;
    width: 11.5em;
    height: 1.5em;
    font-weight: bold;
    color: #FFFFFF;
    background-color: silver;
    text-align: center;
    padding: .25em;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 100%;
}

li a:hover, li a:active {
    background-color: black;
}

#navbar {
    position: fixed;
	left: 43%;
	margin-left: -25em;
	top: .5em;
    z-index: 1;
}

/*Drop down menu styling*/

li ul {
    display: none;
}

li:hover ul {
    display: inline;
    position: fixed;
}

li:hover li {
    float: none;
}

/*End drop down styling*/

/*End Navigation styling */

/*Element Wrapper styling*/

#sliderFrame {
    margin-top: 7%;
    position: relative;
}

#bodyText {
    margin-top: 10%;
    position: relative;
    background-color: rgba(192,192,192,.5);
    padding: .05em .9em .05em .9em;
}

#sponsors {
    margin-top:8%;
    position: relative;
    background-color: rgba(192,192,192,.5);
    padding: .05em .9em .05em .9em;
    margin-bottom: 10%;
}

#copyright {
	color: #FFFFFF;
	font-size: .65em;
}

#ip {
	margin-left:80%;
}

/* End Element Wrapper styling*/

/*Background styling*/

body {
	background-size: cover;
	background-image: url("tigerbackground.jpg");
}

#body {
	margin: 7% 10% 0% 10%;
	background-color: rgba(192,192,192,.5);
	padding: .3em .4em .3em .4em;
}


#sponsors {
    margin-top: 4%;
    position: relative;
    background-color: rgba(192,192,192,.5);
    padding: .05em .9em .05em .9em;
}

#goals {
    margin-top: 4%;
    position: relative;
    background-color: rgba(192,192,192,.5);
    padding: .05em .9em .05em .9em;
}
    </style>
</head>
<body>
    <div id="navbar">
        <ul>
            <li><a href="index.php" id="nav1" class="nav">Home</a></li>
            <li><a href="ourteam.php" id="nav2" class="nav">Our Team</a>
                <ul>
                    <li><a href="ourteam.php/#ChasisBase">Chasis/Base</a></li>
                    <li><a href="ourteam.php/#Superstructure">Superstructure</a></li>
                    <li><a href="ourteam.php/#Electronics">Electronics</a></li>
                    <li><a href="ourteam.php/#Programming">Programming</a></li>
                </ul>
            </li>
            <li><a href="about.php" id="nav3" class="nav">About</a>
                <ul>
                    <li><a href="about.php/#OurGoals">Our Goals</a></li>
                    <li><a href="about.php/#Sponsors">Sponsors</a></li>
                </ul>
            </li>
            <li><a href="contact.php" id="nav4" class="nav">Contact</a></li>
            <li><a href="login.php" id="nav5" class="nav">Log In</a></li>
        </ul>
    </div>
    <div id="body">
        <h1>We are the Titanium Tigers</h1>
        <div id="goals"><p>
        	About our team<br>
            <?php echo $about_info ?>
        </p>
        </div>
        <div id="sponsors">
        <p>
            About the Competition:<br>
            <?php echo $about_competition ?>
        </p>
        </div>
        <div id="sponsors">
        <p>
            About our Sponsors:<br>
            <?php echo $about_sponsors ?>
        </div>
    </div>
    <div id="ip"><p id="copyright">Copyright &copy 2015 Noah Miller Johnson and Anja Shepard</p></div>
</body>
</html>

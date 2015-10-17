<?php
    error_reporting(E_ALL & ~E_NOTICE);
    session_start();

    include_once("connection.php");
    $sql = "SELECT * FROM team WHERE 1";
    $query = mysqli_query($dbCon, $sql);

    if ($query){
        print_r($query);
    }else{
        echo "failed";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Titanium Tigers</title>
    <!-- <link rel="stylesheet" href="Robotics_ourteam.css"> -->
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

.member_pic {
	height: 5em;
	width: auto;
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
        <h1>Welcome to our team!</h1>
        <br><br><br><br>
        <h2>Chasis/Base</h2><a id="ChasisBase" class="anchor"></a>
        <table>
		<tr>
			<td><img class="member_pic" src="https://pbs.twimg.com/profile_images/564195375616368641/LhZZx2W4_400x400.jpeg" alt="Eric Bonilla"></td>
			<td><p>Stuff</p></td>
		</tr>
	</table>
        <br><br><br>
        <h2>Superstructure</h2><a id="Superstructure" class="anchor"></a>
        <table>
		<tr>
			<td><img class="member_pic" src="http://www.heraldsun.com/archive/x909261990/g25825800000000000027ba404b24e4410e6b2267946d8034ce861640d5.jpg" alt="Eiley Hartzell-Jordan"></td>
			<td><p>Stuff</p></td>
		</tr>
		<tr>
			<td><img class="member_pic" src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/7/005/065/3ab/13fe215.jpg" alt="Jade Martens"></td>
			<td><p>Stuff</p></td>
		</tr>
        <?php 
            //for (){
                //echo "<tr><td><img class=\"member_pic\" src=\"".stuffhere."\" alt=\"".name."></td><td><p>".stuffhere."</p></td></tr>"
            //}
        ?>
	</table>
        <br><br><br>
        <h2>Electronics</h2><a id="Electronics" class="anchor"></a>
        <table>
		<tr>
			<td><img class="member_pic" src="https://pbs.twimg.com/profile_images/457328594067275776/aERLjA-O.jpeg" alt="Emily Molina"></td>
			<td><p>Stuff</p><td>
		</tr>
		<tr>
			<td><img class="member_pic" src="https://i.vimeocdn.com/video/517820935_640.jpg" alt="Olivia Wander"></td>
			<td><p>Stuff</p><td>
		</tr>
	</table>

        <br><br><br>
        <h2>Programming</h2><a id="Programming" class="anchor"></a>
        <table>
		<tr>
			<td><img class="member_pic" src="http://i625.photobucket.com/albums/tt338/merylisk/shepard/anja_headshot.png" alt="Anja Shepard"></td>
			<td><p>Stuff</p><td>
		</tr>
		<tr>
			<td><img class="member_pic" src="http://assets-s3.usmagazine.com/uploads/assets/articles/59703-january-jones-quietly-splits-with-sweetwater-screenwriter-noah-miller/1359472852_january-jones-article.jpg" alt="Noah Miller Johnson"></td>
			<td><p>Stuff</p><td>
		</tr>
		<tr>
			<td><img class="member_pic" src="http://api.ning.com/files/v2lbj4A*dlO0hLzT0QztQfpVhhx50ouuZgeBmwHUKTF3uVJLeiiPVoby44BEoTqYKj*7of9jwz3JKotQ-MGWxqG0Fa70nqPK/SEG_11.jpg" alt="Sayali Gove"></td>
			<td><p>Stuff</p><td>
		</tr>
	</table>
        <br><br><br>
    </div>
    <div id="ip"><p id="copyright">Copyright &copy 2015 Noah Miller Johnson and Anja Shepard</p></div>
</body>
</html>

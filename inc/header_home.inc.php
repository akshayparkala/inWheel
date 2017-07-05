<?php 

include ( "./inc/connect.inc.php" ); 
session_start();

if (!isset($_SESSION["user_login"])) {
    
}

else {
    $username = $_SESSION["user_login"];
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>inWheel</title>
		<link rel="stylesheet" type="text/css" href="./css/style1.css"/>
	</head>
	<body>
		<div class="headerMenu">
			<div id="wrapper">
				<div class="logo">
					<img src="./img/logo.png" />
				</div>
				<div class="search_box">
					<form action="search.php" method="get" id="search">
						<input type="text" name="q" size="60" placeholder="Search..."/>
					</form>
				</div>
				<div id="menu">
					<a href="home.php"/>Home</a>
					<a href="profile.php"/>Profile</a>
					<a href="logout.php"/>Logout</a>
					<a href="accset.php"/>Account Settings</a>
				</div>
			</div>
		</div>
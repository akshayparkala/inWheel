<?php include ( "./inc/header.inc.php" ); ?>
<?php
$reg = @$_POST['submit'];

$fn = "";
$ln = "";
$un = "";
$em = "";
$pswd = "";
$pswd2 = "";
$d = "";
$u_check = "";

$fn = strip_tags(@$_POST['fname']);
$ln = strip_tags(@$_POST['lname']);
$un = strip_tags(@$_POST['username']);
$em = strip_tags(@$_POST['email']);
$pswd = strip_tags(@$_POST['password']);
$pswd2 = strip_tags(@$_POST['password2']);
$d = date("Y-m-d");


if ($reg) {

$u_check = mysqli_query($connection,"SELECT username FROM users WHERE username = '$un'");
        
$check = mysqli_num_rows($u_check);

if ($check == 0) {

if ($fn && $ln && $un && $em && $pswd && $pswd2) {

if ($pswd == $pswd2) {
    
if(strlen($pswd)>30 || strlen($pswd)<5) {
    
echo "Your Password must be between 5 and 30 characters long!";
    
}

else {
    
$pswd = md5($pswd);
$pswd2 = md5($pswd2);
$query = mysqli_query($connection,"INSERT INTO users VALUES ('','$un','$fn','$ln','$em','$pswd','$d','0')");
echo "<script type='text/javascript'>alert('Registered successfully, login to your account to proceed!')</script>";
}
}
else{
echo "Your passwords dont match!";
}
}
else{
echo "Please fill in all of the fields!";
}
}
else{
echo "Username already taken..";
}
}

if (isset($_POST["user_login"]) && isset($_POST["pass_login"])) {
	$user_login = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["user_login"]); 
    $password_login = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["pass_login"]); 
	$md5password_login = md5($password_login);
    echo $md5password_login;
    echo $user_login;
    $sql =$connection->query("SELECT id FROM users WHERE username='$user_login' AND password='$md5password_login'");  //mysqli_query($connection,"SELECT id FROM users WHERE username='$user_login' AND password='$md5password_login' AND closed='no' LIMIT 1"); 
	$userCount = mysqli_num_rows($sql);
	if ($userCount) {
		while($row = mysqli_fetch_array($sql)){ 
             $id = $row["id"];
	}
		 //$_SESSION["id"] = $id;
		 $_SESSION["user_login"] = $user_login;
		 //$_SESSION["password_login"] = $password_login;
         header("location: home.php"); 
        //exit("<meta http-equiv=\"refresh\" content=\"0\">");
		} else {
		echo 'That information is incorrect, try again';
		exit();
	}
}
?>


		<div style="width: 800px; margin: 0px auto 0px auto;">
		<table>
			<tr>
				<td width="60%"  >
					<form action="index.php" method="post">
						<input type="text" name="user_login" size="25" placeholder="Username"/><br/><br/>
						<input type="text" name="pass_login" size="25" placeholder="Password"/><br/><br/>
						<input type="submit" name="login" value="Login">
					</form>
				</td>
				<td width="40%" >
					<div class="pic">
					<img src="./img/logo.png" width="300" height="300" />
				</div>
				</td>
			</tr>
			<br/><br/>
			<tr>
				<td width="60%">
					<h2 style="font-size:40px; padding-top: 2px; ">Join inWheel today!</h2>
					<br/>
					<h4 style="font-size: 20px; font-family: Calibri Light; color:#F53D44; padding-right:10px;">Planning a vacation but don't know how to go about it? Come be a part of the inWheel community and discover all the must-go destinations around you!</h4>
				</td>
				<td width="40%" valign="top">
					<h2 style="font-size: 16px; padding-left: 90px;">Sign up below!</h2>
					<form action="#" method="post">
						<input type="text" name="fname" size="25" placeholder="First Name"/><br/><br/>
						<input type="text" name="lname" size="25" placeholder="Last Name"/><br/><br/>
						<input type="text" name="username" size="25" placeholder="User Name"/><br/><br/>
						<input type="text" name="email" size="25" placeholder="E-mail"/><br/><br/>
						<input type="text" name="password" size="25" placeholder="Password"/><br/><br/>
						<input type="text" name="password2" size="25" placeholder="Confirm Password"/><br/><br/>
						<input type="submit" name="submit" value="Sign Up"/><br/><br/>
					</form>
				</td>
			</tr>
		</table>
<?php include ( "./inc/footer.inc.php" ); ?>

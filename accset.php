<?php include("./inc/header_home.inc.php"); ?> 
		<div id="wrapper2">
			<br/>
			
			<h2 style="font-size: 35px; color:#921313">Edit Your Account Settings</h2>
			
			<hr style="height: 2px;"/>
			<br/>
			<form action="#" method="post">
			<br/>
				<p><h4>CHANGE ACCOUNT PASSWORD</h4> </p><br/>
				<h5>Old password        :</h5><input type="password" name="oldpassword" id="oldpassword" size="40"><br/>
				<h5>New password        :</h5> <input type="password" name="newpassword" id="newpassword" size="40"><br/>
				<h5>Confirm new password:</h5> <input type="password" name="newpassword1" id="newpassword1" size="40"><br/><br/>
			<hr/>
			<br/>
				<p><h4>UPDATE PROFILE INFORMATION</h4> </p><br/>
				<h5>First Name          : </h5><input type="text" name="fname" id="fname" size="40"><br/>
				<h5>Last Name           : </h5><input type="text" name="lname" id="lname" size="40"><br/>
				<h5>About you           : </h5><textarea name="aboutyou" id="aboutyou" cols="50" rows="7"></textarea><br/><br/>
			<hr/>
			<br/>
				<input type="submit" name="senddata" id="senddata" value="Update " style="border-radius:0px; float: right;"/>
			</form>
			<br/>
			<br/>
			<br/>
			<br/>
		</div>
		<br/>
			<br/>
			<br/>
	</body>
</html>
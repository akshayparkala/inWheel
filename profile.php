<?php include ( "./inc/header_home.inc.php" ); ?>
<?php
if(isset($_GET['u'])) {
    $username = mysqli_real_escape_string($connection,$_GET['u']);
    if (ctype_alnum($username)) {
        $check = mysqli_query($connection,"SELECT username, first_name FROM users WHERE username = '$username'");
        if (mysqli_num_rows($check)==1){
            $get = mysqli_fetch_assoc($check);
            $username1 = $get['username'];
            $firstname = $get['first_name'];
        }
        else {
            echo "<meta http-equiv=\"refresh\" content=\"0; url=http://localhost/tutorials/findFriends/index.php\">";
            exit();
        }
    }
}
?>

		<br/><br/>
		<div id="wrapper1" >
			<div class="postForm">
				<form action="#" method="post">
					<textarea id="post" name="post" rows="6" cols="80"></textarea>
                    <?php 
                    
                    $request = new FacebookRequest($session,'GET','/{check-in-id}');
                    $response = $request->execute();
                    $graphObject = $response->getGraphObject();
                    
                    ?>
					<input type="submit" name="send" value="Post" style="background-color: #c62626; float: right; border-radius: 0px;border: 1px solid #666; width:50px; height: 30px; "/>
				</form>
			</div>
			<div class="profilePosts" >Your posts will go here...
			</div>
			<div class="profileleftSideContent"><img src="" height="250" width="200" /></div>
			<br/>
			<div class="textHeader"><?php echo "$username1"; ?>'s Profile</div>
			<div class="profileleftSideContent">Some information about <?php echo "$firstname"; ?></div>
			<div class="textHeader"><?php echo "$username"; ?>'s friends</div>
			<div class="profileleftSideContent">
				<img src="#" height="50" width="40"/>&nbsp;&nbsp;
				<img src="#" height="50" width="40"/>&nbsp;&nbsp;
				<img src="#" height="50" width="40"/>&nbsp;&nbsp;
				<img src="#" height="50" width="40"/>&nbsp;&nbsp;
				<img src="#" height="50" width="40"/>&nbsp;&nbsp;
				<img src="#" height="50" width="40"/>&nbsp;&nbsp;
				<img src="#" height="50" width="40"/>&nbsp;&nbsp;
				<img src="#" height="50" width="40"/>&nbsp;&nbsp;
			</div>
		</div>
		
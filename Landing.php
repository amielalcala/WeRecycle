
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
	
   
    if (isset($_REQUEST['submit'])){
		
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username); 
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		date_default_timezone_set('Asia/Manila');
		$date = date('Y/m/d');
	
        $query = "SELECT * FROM `user` WHERE username='$username' and password='$password';";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			session_start(); 
			$_SESSION['username'] = $username;
			//comment below is for audit logs
		/* 	$_SESSION['userID']= $row['userID'];
			$uid = $_SESSION['userID'];
			$query = "INSERT INTO `auditlogs` (`auditlogID`, `userID`, `date`, `activity`) VALUES (NULL, '$uid', '$date', 'Login');";
			  mysqli_query($db,$query); */
			header("Location: index.php"); 
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='Landing.php'>Login</a></div>";
				}
    }else{
?>
<div class="form">
<h1>Login</h1>
<form action="Landing.php" method="post" name="login">
Username :<input type="text" name="username" placeholder="Username" required /><br>
Password :<input type="password" name="password" placeholder="Password" required /><br>
<input name="submit" type="submit" value="Login" /></br>
<a href="regDonor.php">Don't have an account? Register here...</a>
</form>
</div>
<?php } ?>
</body>
</html>

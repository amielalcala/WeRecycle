<html>
<head>
<meta charset= "UTF-8">
<title>View-Account</title>
</head>
<body>
	<?php
	session_start();
	$db = new PDO("mysql:host=localhost; dbname=werecycle", "root", "");
	/*$query = "SELECT userID, usertypeID, username, password, lastname,
	firstname, street, barangay, city, zip, email, birthdate FROM user;";*/


	if(!isset($_SESSION["username"])){
  header("Location: Landing.php");
  exit(); }


	$query= "SELECT * FROM user WHERE username ='{$_SESSION['username']}'";



	$result = $db->query($query);



	$myrow= $result->fetch(PDO::FETCH_ASSOC);
	$userID = $myrow["userID"];
	$username= $myrow["username"];
	$lastname= $myrow["lastname"];
	$firstname = $myrow["firstname"];
	$street = $myrow["street"];
	$barangay = $myrow["barangay"];
	$city = $myrow["city"];
	$zip = $myrow["zip"];
	$email = $myrow["email"];
	$birthdate = $myrow["birthdate"];


	$usertypeID = $myrow["usertypeID"];

	?>
	<?php
	//yung h1 sa baba pang check yan kung pumapasok yung session\
	?>
  <h2>EDIT ACCOUNT</h2>
	<table>
	<tr><td><b>ID:</B></td>
	<td><input type="hidden" name="userID" value="<?php echo $userID; ?>"><?php echo $userID; ?></td>
	</tr>

	<TD><B>Usertype:</B><td>
	<input type="hidden" name="usertypeID" value="<?php echo $usertypeID; ?>"><?php echo $usertypeID;?></td>
	</tr>

  </td><TD><B>Username:</B><td>
	<input type="hidden" name="username" value="<?php echo $username; ?>"><?php echo $username;?></td>
	</tr>
	<TD><B>Lastname:</B><td>
	<input type="hidden" name="lastname" value="<?php echo $lastname; ?>"><?php echo $lastname; ?></td>
	</tr>
	<TD><B>Firstname:</B><td>
	<input type="hidden" name="firstname" value="<?php echo $firstname; ?>"><?php echo $firstname;?></td>
	</tr>
	<TD><B>Street:</B><td>
	<input type="hidden" name="street" value="<?php echo $street; ?>"><?php echo $street; ?></td>
	</tr>
	<TD><B>Barangay:</B><td>
	<input type="hidden" name="barangay" value="<?php echo $barangay; ?>"><?php echo $barangay; ?></td>
	</tr>
	<TD><B>City:</B><td>
	<input type="hidden" name="city" value="<?php echo $city; ?>"><?php echo $city; ?></td>
	</tr>
	<TD><B>Zip:</B><td>
	<input type="hidden" name="zip" value="<?php echo $zip; ?>"><?php echo $zip; ?></td>
	</tr>
	<TD><B>Email:</B><td>
	<input type="hidden" name="email" value="<?php echo $email; ?>"><?php echo $email; ?></td>
	</tr>
	<TD><B>Birthdate:</B><td>
	<input type="hidden" name="birthdate" value="<?php echo $birthdate; ?>"><?php echo $birthdate; ?></td>
	</tr>
	<TD><B>Password:</B><td>
	<?php
	echo "<a href=\"resetpass.php?id=$myrow[userID]\"><b>Update Password</b></a>"
	?>
	</table>
	</td></tr>
  <br>
	<?php
    echo "<a href=\"account-details.php?id=$myrow[userID]\"><b>Edit Account<b></a>"
	?>
	<a href="index.php"><b>Go back<b></a>
	</body>
</html>

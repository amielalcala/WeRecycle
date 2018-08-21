<html>
<head>
<meta charset="UTF-8">
<title>Account Details</title>
<?php
include_once("Configuration.php");
$id = $_GET['id'];
?>
</head>
<body>

<?php

$query = "SELECT * FROM user WHERE userID =$id";
$result = mysqli_query($mysqli, $query);

while($res = mysqli_fetch_array($result))
{
  $username = $res['username'];
  $lastname = $res['lastname'];
	$firstname = $res['firstname'];
  $street = $res['street'];
	$barangay = $res['barangay'];
	$city = $res['city'];
	$zip = $res['zip'];
	$email = $res['email'];
	$birthdate = $res['birthdate'];
}

?>
<form method="POST" action="update-account.php">
<table>
<tr><td><b>Username:</b></td>
<td><input type="text" name="username" value="<?php echo $username; ?>"></td>
</tr>
<tr><td><b>Lastname:</b></td>
<td><input type="text" name="lastname" value="<?php echo $lastname; ?>"></td>
</tr>
<tr><td><b>Firstname:</b></td>
<td><input type="text" name="firstname" value="<?php echo $firstname; ?>"></td>
</tr>
<tr><td><b>Street:</b></td>
<td><input type="text" name="street" value="<?php echo $street; ?>"></td>
</tr>
<tr><td><b>Barangay:</b></td>
<td><input type="text" name="barangay" value="<?php echo $barangay; ?>"></td>
</tr>
<tr><td><b>City:</b></td>
<td><input type="text" name="city" value="<?php echo $city; ?>"></td>
</tr>
<tr><td><b>Zip:</b></td>
<td><input type="number" name="zip" value="<?php echo $zip; ?>"></td>
</tr>
<tr><td><b>Email:</b></td>
<td><input type="email" name="email" value="<?php echo $email; ?>"></td>
</tr>
<tr><td><b>Birthdate:</b></td>
<td><input type="hidden" name="birthdate" value="<?php echo $birthdate; ?>"><?php echo $birthdate; ?></td>
 <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
</tr>

</table>
<input type="submit" name="submit" value="Save Changes">

  </form>
</body>
</html>

<html>
<head>
<meta charset="UTF-8">
<title>Account Details</title>
<?php
session_start();
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

  $password = $res['password'];
//  $rpassword = $res['rpassword'];

}

?>
<form method="POST" action="updatepass.php">
<table>
<h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>

<tr><td><b>New Password:</b></td>
<td><input type="password" name="password" value="" required ></td>
</tr>
<tr><td><b>Confirm Password:</b></td>
<td><input type="password" name="rpassword" value="" required ></td>
<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
</tr>
</table>
<input type="submit" name="submit" value="Save Changes">


  </form>
</body>
</html>

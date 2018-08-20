<?php
$db = mysqli_connect("localhost", "root", "", "werecycle");
if (isset($_POST['register_btn'])){
  $usertype = "1";
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $birthdate = $_POST['birthdate'];
  $barangay = $_POST['barangay'];
  $zip = $_POST['zip'];
  $street = $_POST['street'];
  $city = $_POST['city'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $rpassword = $_POST['rpassword'];
  if ($password == $rpassword) {
    $password = md5($password);
   
	$sql= "INSERT INTO `user` (`userID`, `usertypeID`, `username`, `password`, `lastname`, `firstname`, `street`, `barangay`, `city`, `zip`, `email`, `birthdate`, `pointsID`, `contactID`) 
	VALUES (NULL, '$usertype', '$username', '$password', '$lastname', '$firstname', '$street', '$barangay', '$city', '$zip', '$email', '$birthdate', NULL, NULL)";
	$sql1= ""
    mysqli_query($db,$sql);
    header("location: Landing.php");
  } else {
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <h2>Welcome to the registration page</h2>
  </head>
  <body>
    <form method="post" action="regDonor.php">
      <table>
        <tr>
          <td>First Name</td>
          <td><input type="text" name="firstname"/></td>
        </tr>

        <tr>
          <td>Last Name</td>
          <td><input type="text" name="lastname"/></td>
        </tr>

        <tr>
          <td>Email</td>
          <td><input type="email" name="email"/></td>
        </tr>

        <tr>
          <td>Birthday</td>
          <td><input type="date" name="birthdate"/></td>
        </tr>

        <tr>
          <td>Barangay</td>
          <td><input type="text" name="barangay"/></td>
        </tr>

        <tr>
          <td>Zip</td>
          <td><input type="number" name="zip"/></td>
        </tr>

        <tr>
          <td>Street</td>
          <td><input type="text" name="street"/></td>
        </tr>

        <tr>
          <td>City</td>
          <td><input type="text" name="city"/></td>
        </tr>

        <tr>
          <td>Username</td>
          <td><input type="text" name="username"/></td>
        </tr>

        <tr>
          <td>Password</td>
          <td><input type="password" name="password"/></td>
        </tr>

        <tr>
          <td>Repeat Password</td>
          <td><input type="password" name="rpassword"/></td>
        </tr>

        <tr>
          <td></td>
          <td><input type="submit" name="register_btn" value="Register"></td>
        </tr>
      </table>
    </form>
  </body>
</html>

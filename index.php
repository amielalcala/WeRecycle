<h1>Hello World</h1>
<?php
session_start();
//when user presses the logout this will be executed
 if (isset($_REQUEST['logout'])){
	session_destroy();
	header("Location: Landing.php");
    }
?>

<?php//checks if there is a user
if(!isset($_SESSION["username"])){
header("Location: Landing.php");
exit(); }
?>

<h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>

<?php
//this is for testing the userID
 /* echo $_SESSION['userID']; */
 ?>

<form action="index.php" method="post" name="logout">
<input name="logout" type="submit" value="Logout" />
</form>

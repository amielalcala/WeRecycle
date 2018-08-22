<?php
// including the database connection file
include("Configuration.php");

if(isset($_POST['submit']))
{
	$id = $_REQUEST['id'];
	$password = $_REQUEST['password'];
	$rpassword = $_REQUEST['rpassword'];

  if($password == $rpassword){
		$password = md5 ($password);
		 //updating the table
		$query ="UPDATE `user` SET `password`='$password' WHERE `userID` = $id;";

        $result = mysqli_query($mysqli, $query);

        //redirectig to the display page. In our case, it is index.php

        header("Location: view-account.php");
	}  else{
		echo "<font color='red'>There was an error...</font><br/>";
	}
}
?>

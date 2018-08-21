<?php
// including the database connection file
include_once("Configuration.php");

if(isset($_POST['submit']))
{
	$id = $_REQUEST['id'];
	$username = $_REQUEST['username'];
	$lastname = $_REQUEST['lastname'];
	$firstname = $_REQUEST['firstname'];
	$street = $_REQUEST['street'];
	$barangay = $_REQUEST['barangay'];
	$city = $_REQUEST['city'];
	$zip = $_REQUEST['zip'];
	$email = $_REQUEST['email'];
	$birthdate = $_REQUEST['birthdate'];


    // checking empty fields
    if(empty($username) || empty($lastname) || empty($firstname) || empty($street) || empty($barangay) || empty($city) || empty($zip)|| empty($email) || empty($birthdate)){
    if(empty($username)) {
          echo "<font color='red'>Username field is empty.</font><br/>";
        }
		if(empty($lastname)) {
            echo "<font color='red'>Lastname field is empty.</font><br/>";
        }
		if(empty($firstname)) {
            echo "<font color='red'>Firstname field is empty.</font><br/>";
        }
		if(empty($street)) {
            echo "<font color='red'>Street field is empty.</font><br/>";
        }

		if(empty($barangay)) {
            echo "<font color='red'>Barangay field is empty.</font><br/>";
        }

    if(empty($city)) {
            echo "<font color='red'>City field is empty.</font><br/>";
        }

		if(empty($zip)) {
            echo "<font color='red'>Zip field is empty.</font><br/>";
        }

		if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }

		if(empty($birthdate)) {
            echo "<font color='red'>Birthdate field is empty.</font><br/>";
        }

    } else {

    //updating the table
		$query ="UPDATE `user` SET `username`='$username',`lastname`='$lastname',`firstname`='$firstname',
    `street`='$street',`barangay`='$barangay',`city`='$city',`zip`= '$zip',`email`='$email',
    `birthdate`='$birthdate' WHERE `user`.`userID` = $id;";

        $result = mysqli_query($mysqli, $query);

        //redirectig to the display page. In our case, it is index.php

        header("Location: view-account.php");
    }
}
?>

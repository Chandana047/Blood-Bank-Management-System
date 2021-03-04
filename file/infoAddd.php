<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['rid']))
{
	header('location:login.php');
}
else {
	if(isset($_POST['add'])){
		$rid=$_SESSION['rid'];
		$bg=$_POST['bg'];
		$check_data = mysqli_query($conn, "SELECT rid FROM blooddinfo where rid='$rid' && bg='$bg'");
		if(mysqli_num_rows($check_data) > 0){
			$error= 'You have already added this blood sample.';
			header( "location:../blooddinfo.php?error=".$error );
}else{
		$sql = "INSERT INTO blooddinfo (bg, rid) VALUES ('$bg', '$rid')";
		if ($conn->query($sql) === TRUE) {
			$msg = "You have added record successfully.";
			header( "location:../blooddinfo.php?msg=".$msg );
		} else {
			$error = "Error: " . $sql . "<br>" . $conn->error;
            header( "location:../blooddinfo.php?error=".$error );
		}
		$conn->close();
	}
}
}
?>
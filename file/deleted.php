<?php
include "connection.php";
    $bdid=$_GET['bdid'];
	$sql = "delete from blooddinfo where bdid='$bdid'";
	if (mysqli_query($conn, $sql)) {
	$msg="You have deleted one blood sample.";
	header("location:../blooddinfo.php?msg=".$msg );
    } else {
    $error="Error deleting record: " . mysqli_error($conn);
    header("location:../blooddinfo.php?error=".$error );
    }
    mysqli_close($conn);
?>
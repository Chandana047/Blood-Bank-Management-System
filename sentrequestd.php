<?php 
require 'file/connection.php'; 
session_start();
  if(!isset($_SESSION['hid']))
  {
  header('location:login.php');
  }
  else {
    $hid = $_SESSION['hid'];
    $sql = "SELECT blooddonate.*, receivers.* from blooddonate, receivers where hid='$hid' && blooddonate.rid=receivers.id";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Sent Requests"; ?>
<?php require 'head.php'; ?>
<style>
    body{
    background: url(image/p4.jpg) no-repeat center;
    background-size: cover;
    min-height: 0;
    height: 650px;
  }
.login-form{
    width: calc(100% - 20px);
    max-height: 650px;
    max-width: 450px;
    background-color: white;
}
</style>
<body>
	<?php require 'header.php'; ?>
	<div class="container cont">

		<?php require 'message.php'; ?>

	<table class="table table-responsive table-striped rounded mb-5">
		<tr><th colspan="8" class="title">Sent requests</th></tr>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Email</th>
			<th>City</th>
			<th>Phone</th>
			<th>Blood Group</th>
			<th>Status</th>
			<th>Action</th>
		</tr>

		    <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">You have not requested yet. </b>';
            }
            ?>
            </div>

		<?php while($row = mysqli_fetch_array($result)) { ?>

		<tr>
			<td><?php echo ++$counter;?></td>
			<td><?php echo $row['rname'];?></td>
			<td><?php echo $row['remail'];?></td>
			<td><?php echo $row['rcity'];?></td>
			<td><?php echo $row['rphone'];?></td>
			<td><?php echo $row['bg'];?></td>
			<td><?php echo $row['status'];?></td>
			<td><?php if($row['status'] == 'Accepted'){ ?>
			<?php }
			else{ ?>
				<a href="file/canceld.php?donoid=<?php echo $row['donoid'];?>" class="btn btn-danger">Cancel</a>
			<?php } ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
    <?php require 'footer.php'; ?>
</body>
</html>
<?php } ?>
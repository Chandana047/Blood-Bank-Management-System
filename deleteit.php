<?php 
session_start();
require 'file/connection.php';
if(isset($_GET['search'])){
    $searchKey = $_GET['search'];
    $sql = "SELECT blooddinfo.*, receivers.* from blooddinfo, receivers where blooddinfo.rid=receivers.id && bg='$searchKey'";
}else{
    $sql = "SELECT blooddinfo.*, receivers.* from blooddinfo, receivers where blooddinfo.rid=receivers.id";
}
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Available Blood Samples"; ?>
<?php require 'head.php'; ?><style>
    body{
    
    background-size: cover;
    min-height: 0;
    height: 100%;
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
        
        <div class="row col-lg-8 col-md-8 col-sm-12 mb-3">
            <form method="get" action="" style="margin-top:-20px; ">
            <label class="font-weight-bolder">Select Blood Group:</label>
               <select name="search" class="form-control">
               <option><?php echo @$_GET['search']; ?></option>
               <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
               </select><br>
               <a href="deleteit.php" class="btn btn-info mr-4"> Reset</a>
               <input type="submit" name="submit" class="btn btn-info" value="search">
           </form>
        </div>

        <table class="table table-responsive table-striped rounded mb-5">
            <tr><th colspan="7" class="title">Donoting Blood Samples</th></tr>
            <tr>
                <th>#</th>
                <th>Donor Name</th>
                <th>Donor City</th>
                <th>Donor Email</th>
                <th>Donor Phone</th>
                <th>Donor Group</th>
                <th>Action</th>
            </tr>

            <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">Nothing to show.</b>';
            }
            ?>
            </div>

        <?php while($row = mysqli_fetch_array($result)) { ?>

            <tr>
                <td><?php echo ++$counter;?></td>
                <td><?php echo $row['rname'];?></td>
                <td><?php echo ($row['rcity']); ?></td>
                <td><?php echo ($row['remail']); ?></td>
                <td><?php echo ($row['rphone']); ?></td>
                <td><?php echo ($row['bg']); ?></td>

                <?php $bdid= $row['bdid'];?>
                <?php $rid= $row['rid'];?>
                <?php $bg= $row['bg'];?>
                <form action="file/requestd.php" method="post">
                    <input type="hidden" name="bdid" value="<?php echo $bdid; ?>">
                    <input type="hidden" name="rid" value="<?php echo $rid; ?>">
                    <input type="hidden" name="bg" value="<?php echo $bg; ?>">

                <?php if (isset($_SESSION['rid'])) { ?>
                <td><a href="javascript:void(0);" class="btn btn-info hospital">Request to donate Sample</a></td>
                <?php } else {(isset($_SESSION['hid']))  ?>
                <td><input type="submit" name="request" class="btn btn-info" value="Request Sample"></td>
                <?php } ?>
                
                </form>
            </tr>

        <?php } ?>
        </table>
    </div>
        <script type="text/javascript">
    $('.receivers').on('click', function(){
        alert("Hospital user can't request for blood.");
    });
</script>
    <?php require 'footer.php' ?>
</body>
</html>

<?php 
  require 'file/connection.php';
  session_start();
  if(!isset($_SESSION['rid']))
  {
  header('location:login.php');
  }
  else {
?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Add blood samples"; ?>
<?php require 'head.php'; ?>
<style>
    body{
    background: url(image/p2.png) no-repeat center;
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

      <div class="row justify-content-center">
          
         <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <div class="card">
            <div class="card-header title">Add blood group available in your known community</div>
        <div class="card-body">
        <form action="file/infoAddd.php" method="post">
          <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" title="click to see">Term & conditions. </a><br>
          <div class="collapse" id="collapseExample">
          If you or your Friends/Family have the mentioned(below) blood then only add Blood group(No spam).So,that the hospital can contact you with your given details if they are in need of you or your friends/family blood.You should have a blood sample tested by your doctor’s, nurse, or trained phlebotomist , at a pathology collection centre, clinic or hospital. Blood samples are most commonly taken from the inside of the elbow where the veins are usually closer to the surface.Make sure you have been eating healthy diet(No Smoking/Drinking)atleast for a week before you have to decided to donate Blood.By clicking tick mark you are promising that you are promising that you have read and accepted the above instructions and also willing to donate blood volunteerly.<br><br>
        </div>
          <input type="checkbox" name="condition" value="agree" required> Agree<br><br>
          <select class="form-control" name="bg" required="">
                
                <option>A-</option>
                <option>A+</option>
                <option>B-</option>
                <option>B+</option>
                <option>AB-</option>
                <option>AB+</option>
                <option>O-</option>
                <option>O+</option>
          </select><br>
          <input type="submit" name="add" value="Add" class="btn btn-primary btn-block"><br>
          <a href="Userpage.html" class="float-right" title="click here">Cancel</a>
        </form>
         </div>
       </div>
     </div>

<?php   if(isset($_SESSION['rid'])){
    $rid=$_SESSION['rid'];
    $sql = "SELECT * from blooddinfo where rid='$rid'";
    $result = mysqli_query($conn, $sql);
  }
  ?>
    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <table class="table table-striped table-responsive">
            <th colspan="4" class="title">User</th>
            <tr>
              <th>#</th>

              <th>User</th>
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
              <td><?php echo ++$counter; ?></td>

              <td><?php echo $row['bg'];?></td>
              <td><a href="file/deleted.php?bdid=<?php echo $row['bdid'];?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php } ?>
          </table>
      </div>

   </div>
</div>
<?php require 'footer.php' ?>
</body>
<?php } ?>
<?php
 include('../admin/cornection.php');

 ?>


<?php 
error_reporting(0);
 $fname=$_POST['firstName'];
 $lname= $_POST['lastName'];
 $StudentSex= $_POST['sex'];
 $Email= $_POST['Email'];
 $Pass= $_POST['Pass'];
  $newpass=md5($Pass);
if(isset($_POST['AddStudent']))
{
  $qry="INSERT INTO tblstudent (first_name, last_name, sex, email)
  VALUES('$fname','$lname','$StudentSex','$Email')";
  $InsertData=mysqli_query($conn, $qry);
  if($InsertData){
    echo 'Sucess';
  }
}
 if(isset($_GET['id']))
 {
  $btnUpdaate=true;
  $id=$_GET['id'];
  $qrySel="SELECT * FROM tblstudent WHERE Id='$id'";
  $dataSel=$conn->query($qrySel);
  $row=$dataSel->fetch_array();
  $name1=$row['first_name'];
  $name2=$row['last_name'];
  $email=$row['email'];
  $sex1=$row['sex'];
    if(isset($_POST['update']))
    {
    $fname=$_POST['firstName'];
    $lname= $_POST['lastName'];
    $StudentSex= $_POST['sex'];
    $Email= $_POST['Email'];
    $Pass= $_POST['Pass'];
    echo $newpass=md5($Pass);
    $qry="UPDATE tblstudent SET first_name='$fname', last_name='$lname', sex='$StudentSex', email='$Email' where id='$id'";
    $UpdatetData=mysqli_query($conn, $qry);
    if($UpdatetData){
      header('location:dataDetail.php');
    }
 }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="row justify-content-center fw-bold fs-2">
      Pleas Input Your imformation
    </div><br/>
  <form method="post">
    <div class="container text-center">
    <div class=".col-sm-">
    <label for="exampleInputEmail1" class="form-label" >First Name</label>
    <input type="text" class="form-control" name="firstName" value="<?php echo $name1?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="firstName">
  </div>
  <div class=".col-sm-">
    <label for="exampleInputPassword1" class="form-label" ">Last Name</label>
    <input type="text" name="lastName" class="form-control" value="<?php echo $name2; ?>" id="exampleInputPassword1"  name="lastName">
  </div>
  <div>
   <label class="control-label col-xs-2">Gender:</label>
                    <div class="col-xs-10">
                      <div>
                        Male<input type="radio" name="sex" value="Male" <?php
                        if($sex1=='Male')
                        {
                          echo "checked";
                        }
                        ?>>
                        Female<input type="radio" name="sex" value="Female"
                        <?php
                        if($sex1=='Female')
                        {
                          echo "checked";
                        }
                        ?>
                        >
                    </div>
  </div>
 
  <div class=".col-sm-">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="Email" class="form-control" value="<?php echo $email; ?>" id="exampleInputPassword1" name="Email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class=".col-sm-">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="Pass">
  </div><br/>
  <!-- <div class=".col-sm-">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <?php 
    if($btnUpdaate==false)
    {
      echo '<button type="submit" class="btn btn-primary" name="AddStudent" >Add Student</button>';
    }
    else{
      echo '<button type="submit" class="btn btn-primary" name="update" >Update</button>';
    }
  ?>
  <a href="index.php" class="btn btn-success">HOME</a>
  
</form>

    </div>
  
  <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

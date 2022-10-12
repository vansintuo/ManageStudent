<?php
     session_start();
     
     $connect=mysqli_connect("localhost","root","", "managestudent");
     if(isset($_POST["register"])){
          $UserName=$_POST["fName"];
          $Email=($_POST["Email"]);
          $Password=md5($_POST["Password"]);
          $CoPasswork=md5($_POST['CoPassword']);
          if($Password==$CoPasswork){
               $qry="INSERT INTO data (UserName,Email, Password) 
               VALUES('$UserName','$Email', '$Password')";
               $data=mysqli_query($connect, $qry);
              if($data) {
               header("location:index.php");
               $_SESSION["UserName"]=-$UserName;
              }else{
               echo "Pleas check your imformation";
              }               
          }
          else{
               echo "Your Passwork is not Mathed";
          }
     }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
  <div class="row justify-content-center fw-bold fs-2">
      Register
    </div><br/>
  <form method="post">
    <div class="container text-center">
    <div class=".col-sm-">
    <label for="exampleInputEmail1" class="form-laddddddddbel" >Full Name</label>
    <input type="text" class="form-control" name="fName"  id="exampleInputEmail1" aria-describedby="emailHelp" name="firstName">
  </div>
  <div class=".col-sm-">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="Email" class="form-control"  id="exampleInputPassword1" name="Email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class=".col-sm-">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="Password">
  </div>"
  <div class=".col-sm-">
    <label for="exampleInputPassword1" class="form-label">CoPassword</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="CoPassword">
  </div>"
  <div class=".col-sm mt-2">

     <button type="submit" class="btn btn-primary col-4" name="register" >Submit</button>
  </div>
  
</form>
  



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
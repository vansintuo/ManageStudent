<?php
     include('../admin/cornection.php');
    $qry="SELECT * FROM tblstudent";
	  $data=$conn->query($qry);


?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />
     <title>Document</title>
</head>
<body>
<a href="index.php" class="btn btn-success .col-sm mt-2">HOME</a><br/>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">last_name</th>
      <th scope="col">firstName</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">PassWord</th>
      <th scope="col">Action</th>
      <>
    </tr>
  </thead>
  <tbody>
   <tr>
           <?php
					while($rows=$data->fetch_array())
					{
				?>
					<tr>
						<td><?php echo $rows['first_name']?></td>
						<td><?php echo $rows['last_name']?></td>
						<td><?php echo $rows['sex']?></td>
						<td><?php echo $rows['email']?></td>
            <td><?php echo $rows['password']?></td>
            <td>
            <a href="form.php?id=<?php echo $rows['Id']?>"><button type="button" name="update" class="btn btn-success">Edit</button></a>
            <a href="delete-process.php?id=<?php echo $rows['Id']?>"><button type="button" class="btn btn-danger" onclick="myFunction()">Delete</button></a>
            </td>
					</tr>
				<?php
					}
				
				?>

   </tr>
  </tbody>
</table>
<script
function myFunction() {
  alert("Hello! I am an alert box!");
}
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

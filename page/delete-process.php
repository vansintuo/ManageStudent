<?php
include_once ('../admin/cornection.php');

if(isset($_GET['id']))
 {
  $id=$_GET['id'];
  

$sql ="DELETE FROM tblstudent WHERE Id='$id'";
    $dataDelete=mysqli_query($conn, $sql);
if ($dataDelete) {
    header('location:dataDetail.php');
    echo "Record deleted successfully";

    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

 }
?>
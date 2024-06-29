<?php
include('../connection/db.php');

$del = $_GET['del'];

$query = mysqli_query($conn,"delete from job_cetagory where id ='$del' ");
if($query){
//   echo " <script>alert('record deleted') </script>";
  header('location: category.php');
}
else{
  echo " <script>alert('record not deleted ') </script>";

}


?>
<?php
include('../connection/db.php');

$del = $_GET['del'];

$query = mysqli_query($conn,"delete from all_jobs where id ='$del' ");
if($query){
//   echo " <script>alert('record deleted') </script>";
  header('location: jobcreate.php');
}
else{
  echo " <script>alert('record not deleted ') </script>";

}


?>
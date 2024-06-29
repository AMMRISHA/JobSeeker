<?php
include('../connection/db.php');

$id = $_GET['id'];

$query = mysqli_query($conn,"delete from job_apply where id ='$id' ");
if($query){
//   echo " <script>alert('record deleted') </script>";
  header('location: apply-job.php');
}
else{
  echo " <script>alert('record not deleted ') </script>";

}


?>
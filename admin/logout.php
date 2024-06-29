<?php
session_start();
session_unset();
// header('location: admin_login.php');
include('../connection/db.php');
$query = mysqli_query($conn, "select * from admin_login where admin_email='{$_SESSION['emailaddress']}'  and admintype='2' ");
if($query){
    header('location:http://localhost/jobportalweb/');
}else{
header('location: http://localhost/jobportalweb/admin/admin_login.php');
}
 
?>

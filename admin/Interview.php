<?php

if(isset($_POST['submit'])){
    include ('../connection/db.php');
    $email=$_POST['to'];

    $candidate= "SELECT `id`, `first_name`, `last_name`, `dob`, `file`, `id_job`, `job_seeker`, `mobileno` FROM `job_apply` WHERE job_seeker='$email'";

    $select_can=($conn ,$candidate) or die("No such data");


    $interview_schedule = "INSERT INTO `interview_schedule`(`id`, `Name`, `email`, `phone`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')";
}


?>
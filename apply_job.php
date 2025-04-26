<?php
include ('connection/db.php');
if (isset($_POST['submit'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $mob=$_POST['mob'];
    $file = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $id_job = $_POST['id_job'];
    $job_seeker = $_POST['job_seeker'];
    $sql = mysqli_query($conn, "select * from job_apply where job_seeker='$job_seeker' and id_job='$id_job' ");
    if (mysqli_num_rows($sql) > 0) {

        // header('location:index.php');
        echo "<script>alert('you already applied this job!!please back')</script>";


    } else {

        move_uploaded_file($_FILES['file']['tmp_name'], 'files/' . $file);

        $query = mysqli_query($conn, "insert into job_apply(first_name,last_name,dob,file,id_job,job_seeker,mobileno)values
    ('$firstname' ,'$lastname','$dob','$file','$id_job','$job_seeker','$mob')");
        if ($query) {
            echo "<h2 style='color:green'>Your request has been successfully sent! Please wait, updates will be sent to your email.</h2>";
            echo "<a href='index.php' style='color:blue; text-decoration:underline;'>Go to Home</a>";
        } else {
            echo "<h2 style='color:red' >Your request can't send !!please check</h2>";

        }
    }

}

?>
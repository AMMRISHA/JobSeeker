<?Php
include('connection/db.php');
session_start();
$id=$_POST['id'];
 $loginemail = $_SESSION['emailaddress'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];
$mob = $_POST['mob'];



$query = "update jobseeker set firstname='$firstname',lastname='$lastname',DOB='$dob',mobileno='$mob' where id='$id' ";

    // Execute query
    $result = mysqli_query($conn, $query);

    // Check if query executed successfully
    if ($result) {
        echo "<div class='alert alert-success'>Data inserted successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
    }
?>
<?Php
include('../connection/db.php');
session_start();
 $loginemail = $_SESSION['emailaddress'];
$jobtitle = $_POST['jobtitle'];
$jobdescription = $_POST['jobdescription'];
$keyword = $_POST['keyword'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$category = $_POST['category'];


$query = "INSERT INTO all_jobs (customer_email, job_title, job_description, country, state, city,keyword,category)
              VALUES ('$loginemail', '$jobtitle', '$jobdescription', '$country', '$state', '$city','$keyword','$category')";

    // Execute query
    $result = mysqli_query($conn, $query);

    // Check if query executed successfully
    if ($result) {
        echo "<div class='alert alert-success'>Data inserted successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
    }
?>
<?Php
include('../connection/db.php');

 $cmpname =$_POST['cmpname'];
  $cmpdes = $_POST['cmpdes'];
  $admin = $_POST['admin'];



$query = "INSERT INTO company (name, description,admin)
              VALUES ('$cmpname', '$cmpdes' ,'$admin')";

    // Execute query
    $result = mysqli_query($conn, $query);

    // Check if query executed successfully
    if ($result) {
        echo "<div class='alert alert-success'>Data inserted successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
    }
?>
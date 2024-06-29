<?Php
include('../connection/db.php');

 $categoryname =$_POST['categoryname'];
  $categorydes = $_POST['categorydes'];


$query = "INSERT INTO job_cetagory (category, category_des)
              VALUES ('$categoryname', '$categorydes' )";

    // Execute query
    $result = mysqli_query($conn, $query);

    // Check if query executed successfully
    if ($result) {
        echo "<div class='alert alert-success'>Data inserted successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
    }
?>
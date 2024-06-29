<?Php
include('../connection/db.php');

 $email =$_POST['email'];
  $username = $_POST['username'];
$password = $_POST['password'];
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$adminType = $_POST['adminType'];

$query = "INSERT INTO admin_login (admin_email, admin_password, admin_username, firstname, lastname, admintype)
              VALUES ('$email', '$password', '$username', '$Firstname', '$Lastname', '$adminType')";

    // Execute query
    $result = mysqli_query($conn, $query);

    // Check if query executed successfully
    if ($result) {
        echo "<div class='alert alert-success'>Data inserted successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
    }
?>
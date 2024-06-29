<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login and sin in</title>
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <div class="main">
    <div class="box">
      <h3>Login </h3><br><br><br>
      <form action="job-post.php" method="post" name="login" id="login">
        <input type="email" name="email" id="email" placeholder=" Email">
        <input type="password" name="password" id="password" placeholder="Password"><br>

        <button class="sininbtn" type="submit" name="submit" id="submit"> Sin-in </button><br><br>
        <a href="sinup.php" >Create account or sign up</a> <a href="">forgot password ?</a>

      </form>

    </div>
  </div>
</body>

</html>

<?php
include ('connection/db.php');


if (isset($_POST['submit'])) {
  $emailaddress = $_POST['email'];
  $password = $_POST['password'];

  $query = mysqli_query($conn, "select * from jobseeker where email='$emailaddress' and password='$password' ");

  if ($query) {
    if (mysqli_num_rows($query) > 0) {
      $_SESSION['emailaddress'] = $emailaddress;
      header('location: index.php');

    } else {
      echo "<script>alert('wrong credential..please check email or password')</script>";
    }
  }


}

?>
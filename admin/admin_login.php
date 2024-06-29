<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="login.css" rel="stylesheet">
</head>

<body>
    <div class="main">
        <div class="container">
            <div class="box1">
                <img class="adminlogo" src="login.webp" alt="">
            </div>
            <div class="box2">
                <h4>Admin login</h4>
                <form action="admin_login.php" method="POST">

                    <label for="email">Email</label><br>
                    <input type="email" name="useremail" id="email" class="inputbox">
                    <br>
                    <label for="password">Password</label><br>
                    <input type="password" id="password" name="userpassword" class="inputbox">
                    <br>
                    <a href="">forgot password</a><br>
                    <button type="submit" class="submit-btn" name="submit">sin - in </button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>
<?php
include ('../connection/db.php');


if (isset($_POST['submit'])) {
    $emailaddress = $_POST['useremail'];
    $password = $_POST['userpassword'];

    $query = mysqli_query($conn, "select * from admin_login where admin_email='$emailaddress' and admin_password='$password' ");

    if ($query) {
        if (mysqli_num_rows($query) > 0) {
            $_SESSION['emailaddress'] =$emailaddress ;
            header('location: dashboard.php');

        } else {
            echo "<script>alert('wrong credential..please check email or password')</script>";
        }
    }


}

?>
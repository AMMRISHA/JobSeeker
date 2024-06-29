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
    
         
            <div class="box">
                <h3>Customer login</h3>
                <form action="new-post.php" method="POST">

             
                    <input type="email" name="useremail" id="email" class="inputbox" placeholder="Email">
                    <br>
                   
                    <input type="password" id="password" name="userpassword" class="inputbox" placeholder="Password">
                    <br>
                    
                    <button type="submit" class="sininbtn" name="submit">sin - in </button>
                </form>
            </div>
     

    </div>
</body>

</html>
<?php
include ('connection/db.php');


if (isset($_POST['submit'])) {
    $emailaddress = $_POST['useremail'];
    $password = $_POST['userpassword'];

    $query = mysqli_query($conn, "select * from admin_login where admin_email='$emailaddress' and admin_password='$password' and admintype='2' ");

    if ($query) {
        if (mysqli_num_rows($query) > 0) {
            $_SESSION['emailaddress'] =$emailaddress ;
            header('location: http://localhost/jobportalweb/admin/dashboard.php');

        } else {
            echo "<script>alert('wrong credential..please check email or password')</script>";
        }
    }


}

?>
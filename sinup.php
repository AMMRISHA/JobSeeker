<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login and sin in</title>
    <link rel="stylesheet" href="sinup.css">
</head>

<body>
    <div class="main">
        <div class="box">
            <h3>REGISTER YOURSELF</h3><br><br>
            <hr><br><br>
            <form action="" method="POST" name="sinupform" id="sinupform">
                <input type="email" name="email" id="email" placeholder=" Email">
                <br>
                <input type="password" name="password" id="password" placeholder="Password">
                <br>

                <input type="text" name="Firstname" id="Firstname" placeholder="Firstname">
                <br>

                <input type="text" name="Lastname" id="Lastname" placeholder="Lastname">

                <br>
                <input type="number" name="mobile" id="mobile" placeholder="Mobile No">
                <br>
                <input type="date" name="dob" id="dob" placeholder="Date of Birth">
                <br>
                <button type="submit" name="submit" id="submit" class="sininbtn">SIGN-UP </button><br><br>
                <a href="job-post.php">Already have account ?</a>
            </form>


        </div>
    </div>
</body>

</html>
<?php
include ('connection/db.php');
if (isset($_POST['submit'])){
    $email =$_POST['email'];
    $password =$_POST['password'];
    $Firstname =$_POST['Firstname'];
    $Lastname =$_POST['Lastname'];
    $mobile =$_POST['mobile'];
    $dob =$_POST['dob'];
    $query =mysqli_query($conn,"insert into jobseeker (email,password,firstname,lastname,mobileno,DOB)
    values('$email','$password','$Firstname','$Lastname','$mobile','$dob')");

    if ($query) {
        echo "<script>alert('register successfully')</script></div>";
        // header('location: job-post.php');
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
    }
}





?>
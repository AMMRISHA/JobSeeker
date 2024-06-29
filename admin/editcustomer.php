<?php
include('../include/header.php');
include('../include/sidebar.php');
include('../connection/db.php');

$edit = $_GET['edit'];

$query = mysqli_query($conn,"select * from admin_login where id ='$edit' ");
while($row=mysqli_fetch_array($query)){
    $email = $row['admin_email'];
    $username = $row['admin_username'];
    $password = $row['admin_password'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $adminType = $row['adminType'];


}

?>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2">Edit customer</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">

                        </div>

                    </div>
                </div>

                <!-- show customer code  --> 
                <div id="msg"></div>
                <div class="addform">
                    <form action="" method="POST" id="customer_editform" name="customer_editform">
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" id="email" value="<?php echo $email?>" name="email">
                        </div>
                        <div class="form-group">
                            <label for="username">username:</label>
                            <input type="text" class="form-control" id="username" 
                            value="<?php echo $username?>"
                            name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">password :</label>
                            <input type="password" class="form-control" id="password" 
                            value="<?php echo $password?>"
                            name="password">
                        </div>
                        <div class="form-group">
                            <label for="Firstname">First Name :</label>
                            <input type="text" class="form-control" id="Firstname" 
                            value="<?php echo $firstname?>"
                            name="Firstname">
                        </div>
                        <div class="form-group">
                            <label for="Lastname">Last Name :</label>
                            <input type="text" class="form-control" id="Lastname" 
                            value="<?php echo $lastname?>"
                            name="Lastname">
                        </div>
                        <div class="form-group">
                            <label for="admintype">Admin Type :</label>
                            <select name="adminType" id="adminType" value="<?php echo $adminType?>"class="form-control">
                                <option value="1">Super admin</option>
                                <option value="2">Customer admin</option>

                            </select>
                        </div>
                        <input type="hidden" name="id" id="id" value="<?php echo $_GET['edit'];?>" >
                        <button type="submit" name="update" id="update" class="btn btn-success">Update</button>
                    </form>
                </div>



                <canvas class="my-4" id="myChart" width="900" height="380"></canvas>




                <!-- Bootstrap core JavaScript
    ================================================== -->
                <!-- Placed at the end of the document so the pages load faster -->
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                    crossorigin="anonymous"></script>
                <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
                <!-- <script src="../../assets/js/vendor/popper.min.js"></script>
                <script src="../../dist/js/bootstrap.min.js"></script> -->
                <!-- <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script> -->

                <!-- Icons -->
                <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
                <script>
                    feather.replace()
                </script>
                <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
             

</body>

</html>
<?php
include('../connection/db.php');

if(isset($_POST['update'])){
    $id =$_POST['id'];
    $email =$_POST['email'];
     $username = $_POST['username'];
    $password = $_POST['password'];
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    $adminType = $_POST['adminType'];

    $query1 = mysqli_query($conn,"update admin_login set admin_email='$email',admin_password ='$password'
    ,admin_username='$username'  , firstname='$Firstname',lastname='$Lastname',admintype='$adminType' where id='$id' ");

if($query1){
 echo " <script>alert('record updated') </script>";
 header('location : coustomer.php');
}
else{
  echo " <script>alert('record not updated ') </script>";

}
}

?>
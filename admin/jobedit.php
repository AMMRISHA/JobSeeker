<?php
include('../include/header.php');
include('../include/sidebar.php');
include('../connection/db.php');

$edit = $_GET['edit'];

$query = mysqli_query($conn,"select * from all_jobs where id ='$edit' ");
while($row=mysqli_fetch_array($query)){
    // $customer_email = $row['customer_email'];
    $job_title = $row['job_title'];
    $job_description = $row['job_description'];
    $keyword = $row['keyword'];
    $country = $row['country'];
    $state = $row['state'];
    $city = $row['city'];
    $category =$row['category'];


}

?>
<?php
 include('../connection/db.php');

$query = mysqli_query($conn,"select * from job_cetagory");

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2">Edit job Opportunity</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">

                        </div>

                    </div>
                </div>

                <!-- show customer code  -->
                <div id="msg"></div>
                <div class="addform">
                    <form action="" method="POST" id="editjobform" name="editjobform">
                     
                        <div class="form-group">
                            <label for="jobtitle">Job title:</label>
                            <input type="text" class="form-control" id="jobtitle" value="<?php echo $job_title?>" name="jobtitle">
                        </div>
                        <div class="form-group">
                            <label for="jobdescription">Job description :</label>
                            <input type="text" class="form-control" id="jobdescription"  value="<?php echo $job_description?>"name="jobdescription">
                        </div>
                        <div class="form-group">
                            <label for="keyword">Job keyword :</label>
                            <input type="text" class="form-control" id="keyword"  value="<?php echo $keyword?>"name="keyword">
                        </div>
                        <div class="form-group">
                            <label for="country">Country :</label>
                            <input type="text" class="form-control" id="country"  value="<?php echo $country?>"name="country">
                        </div>
                        <div class="form-group">
                            <label for="state">State :</label>
                            <input type="text" class="form-control" id="state"  value="<?php echo $state?>"name="state">
                        </div>
                        <div class="form-group">
                            <label for="city">City :</label>
                            <input type="text" class="form-control" id="city" value="<?php echo $city?>" name="city">
                        </div>

                        <select class="form-control" aria-label="Default select example" id="category" name="category" value="<?php echo $category?>">   
                 <?php
                 while($row=mysqli_fetch_array($query)){
                 ?>
                    <option value="<?php echo $row['id']?>"><?php echo $row['category']; ?></option>         
               <?php
                 }
                ?>
                </select>
                        <input type="hidden" name="id" id="id" value="<?php echo $_GET['edit'];?>" >

                        <button type="submit" name="update" id="update" class="btn btn-success">update</button>
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
    // $email =$_POST['email'];
     $jobtitle = $_POST['jobtitle'];
    $jobdescription = $_POST['jobdescription'];
    $keyword = $_POST['keyword'];
    
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $category = $_POST['category'];


    $query1 = mysqli_query($conn,"update all_jobs set job_title='$jobtitle',job_description ='$jobdescription'
    ,keyword='$keyword',country='$country' , state='$state',city='$city', category='$category' where id='$id' ");

if($query1){
 echo " <script>alert('record updated') </script>";
 header('location : jobcreate.php');
}
else{
  echo " <script>alert('record not updated ') </script>";

}
}

?>
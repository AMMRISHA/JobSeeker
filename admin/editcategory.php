<?php
include('../include/header.php');
include('../include/sidebar.php');
include('../connection/db.php');

$edit = $_GET['edit'];

$query = mysqli_query($conn,"select * from job_cetagory where id ='$edit' ");
while($row=mysqli_fetch_array($query)){
    $category = $row['category'];
    $category_des = $row['category_des'];
  


}

?>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2">Edit Category</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">

                        </div>

                    </div>
                </div>

                <!-- show customer code  --> 

                <div id="msg"></div>
                <div class="addform">
                    <form action="" method="POST" id="categoryaddform" name="categoryaddform">
                        <div class="form-group">
                            <label for="categoryname">Category Name :</label>
                            <input type="text" class="form-control" id="categoryname" name="categoryname" value="<?php echo $category?>">
                        </div>
                        <div class="form-group">
                            <label for="categorydes">Category Description :</label>
                            <input type="text" class="form-control" id="categorydes" name="categorydes" value="<?php echo $category_des?>">
                        </div>
                <input type="hidden" name="id" id="id" value="<?php echo $_GET['edit'];?>" >
                       
                        </div>
                        <button type="submit" name="update" id="update" class="btn btn-success">Submit</button>
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
    $categoryname =$_POST['categoryname'];
    $categorydes = $_POST['categorydes'];
   

    $query1 = mysqli_query($conn,"update job_cetagory set category='$categoryname',category_des ='$categorydes'
     where id='$id' ");

if($query1){
 echo " <script>alert('record updated') </script>";
 header('location : category.php');
}
else{
  echo " <script>alert('record not updated ') </script>";

}
}

?>
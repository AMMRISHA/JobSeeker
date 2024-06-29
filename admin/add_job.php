<?php
include ('../include/header.php');
include ('../include/sidebar.php');
?>
<?php
 include('../connection/db.php');

$query = mysqli_query($conn,"select * from job_cetagory");

?>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Create job Opportunity</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">

            </div>

        </div>
    </div>
 
    <!-- show customer code  -->
    <div id="msg"></div>
    <div class="addform">
        <form action="" method="POST" id="addjobform" name="addjobform">
            
            <div class="form-group">
                <label for="jobtitle">Job title:</label>
                <input type="text" class="form-control" id="jobtitle" name="jobtitle">
            </div>
            <div class="form-group">
                <label for="jobdescription">Job description :</label>
                <input type="text" class="form-control" id="jobdescription" name="jobdescription">
            </div>

            <div class="form-group">
                <label for="keyword">Job keyword :</label>
                <input type="text" class="form-control" id="keyword" name="keyword">
            </div>
            <div class="form-group">
                <label for="country">Country :</label>
                <input type="text" class="form-control" id="country" name="country">
            </div>
            <div class="form-group">
                <label for="state">State :</label>
                <input type="text" class="form-control" id="state" name="state">
            </div>
            <div class="form-group">
                <label for="city">City :</label>
                <input type="text" class="form-control" id="city" name="city">
            </div>
            <div class="form-group">
                <label for="category">Job Category :</label>
                <select class="form-control" aria-label="Default select example" id="category" name="category">   
                 <?php
                 while($row=mysqli_fetch_array($query)){
                 ?>
                    <option value="<?php echo $row['id']?>"><?php echo $row['category']; ?></option>         
               <?php
                 }
                ?>
                </select>
            </div>
            <button type="submit" name="submit" id="submit" class="btn btn-success">Submit</button>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#submit").click(function () {
                // e.preventDefault();

                var jobtitle = $("#jobtitle").val();
                var jobdescription = $("#jobdescription").val();
                 var keyword = $("#keyword").val();
                var country = $("#country").val();
                var state = $("#state").val();
                var city = $("#city").val();
                var category = $("#category").val();

                var data = $("#addjobform").serialize();

                $.ajax({
                    type: "POST",
                    url: "jobaddbackend.php",
                    data: data,
                    success: function (data) {
                        $("#msg").html(data);
                        //alert(data);
                    },
                    error: function () {
                        $("#msg").html("<div class='alert alert-danger'>Error: Unable to submit form</div>");
                    }

                })

            })
        })
    </script>

    </body>

    </html>
    
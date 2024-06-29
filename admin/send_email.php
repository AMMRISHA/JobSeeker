<?php
include ('../include/header.php');
include ('../include/sidebar.php');
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Send Email to the candidate</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">

            </div>
            <!-- <a class=" btn btn-primary" href="add_job.php"> create job </a> -->
        </div>
    </div>

    <!-- show customer code  -->


    <form action="phpmailer.php" method="POST">


        <?php

        include ('../connection/db.php');
        $id = $_GET['id'];
        $query = mysqli_query($conn, "select * from job_apply LEFT JOIN all_jobs
            ON job_apply.id_job=all_jobs.id where id_job='$id' ");
        while ($row = mysqli_fetch_array($query)) {
            ?>

              <button type="disable" class="btn btn-primary"> candidate Name :-<?php echo $row['first_name']; ?>
              <?php echo $row['last_name']; ?></button><br><br>
            <!-- <td><?php echo $a; ?></td> -->
             <input type="hidden" name="id" id="id" value="<?php echo $id?>">
            <div class="form-group mb-2">

                <label for="to" style="font-weight: bold;">Email To : -</label>
                <input type="email" id="to" name="to" value="<?php echo $row['job_seeker'];?>" class="form-control">
             
            </div>

            <div class="form-group mb-2" >

                <label for="from" style="font-weight: bold;">Email From : -</label>
                <input type="email" id="from" name="from"  class="form-control">
        
            </div>
            <div class="form-group mb-2" >

                <label for="body" style="font-weight: bold;">Email Body : -</label>
                <textarea type="text" id="body" name="body"  class="form-control" cols="30" rows="8">
                    DEAR ,  <?php echo strtoupper($row['first_name']) ?>  <?php echo strtoupper($row['last_name']) ?>
                </textarea>
        
            </div>


        <?php } ?>
        <input type="submit" name="submit" id="submit" class="form-control btn btn-success" value="Send">

    </form>


    <canvas class="my-4" id="myChart" width="900" height="380"></canvas>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
    <!-- link for datatables -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script>
        new DataTable('#example');
    </script>
    </body>

    </html>
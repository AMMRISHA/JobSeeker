<?php
include ('../include/header.php');
include ('../include/sidebar.php');
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Applied jobs</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">

            </div>
            <!-- <a class=" btn btn-primary" href="add_job.php"> create job </a> -->
        </div>
    </div>

    <!-- show customer code  -->

  
    <form action="">


        <?php

        include ('../connection/db.php');
        $id = $_GET['id'];
        $query = mysqli_query($conn, "select * from job_apply LEFT JOIN all_jobs
            ON job_apply.id_job=all_jobs.id where id_job='$id' ");
        while ($row = mysqli_fetch_array($query)) {
            ?>


            <!-- <td><?php echo $a; ?></td> -->
            <div class="form-control mb-2" style="background:#E8DAEF">

                <label for="" style="font-weight: bold;">Job title :-</label>
                <td><?php echo $row['job_title']; ?></td>
            </div>

            <div class="form-control mb-2" style="background:#E8DAEF">
                <label for="" style="font-weight: bold;">Job Description :-</label>

                <td><?php echo $row['job_description']; ?></td>
            </div>

            <div class="form-control mb-2" style="background:#E8DAEF">

                <label for="" style="font-weight: bold;">cadidate Name :-</label>
                <td><?php echo $row['first_name']; ?>     <?php echo $row['last_name']; ?></td>
            </div>

            <div class="form-control mb-2" style="background:#E8DAEF">

                <label for="" style="font-weight: bold;">cadidate email :-</label>
                <td><?php echo $row['job_seeker']; ?></td>
            </div>
            <div class="form-control mb-2" style="background:#E8DAEF">
                <label for="" style="font-weight: bold;">cadidate Contact No :-</label>
                <td><?php echo $row['mobileno']; ?></td>
            </div>

            <div class="form-control mb-2" style="background:#E8DAEF">
                <label for="" style="font-weight: bold;">cadidate resume :-</label>
                <td>
                    <a href=" <?php echo $row['file']; ?>" download>
                        <?php echo $row['file']; ?>
                    </a>
                </td>
            </div>



            <div class="form-control ">
                <td>
                    <div class="row">
                        <div class="btn-group">
                            <a href="send_email.php?id=<?php echo $id ?>" class="btn btn-success pb-2 mr-2">Accept </a>
                            <a href="reject_job.php?id=<?php echo $id?>" class="btn btn-danger pb-2 mr-2">Reject</a>

                         <!-- <a href="view_applied_job.php?edit=<?php echo $row['id']; ?>" class="btn btn-success">View</a>  -->
                          

                        </div>
                    </div>
                </td>
            </div>


        <?php } ?>

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
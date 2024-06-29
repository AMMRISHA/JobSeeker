<?php
include('../include/header.php');
include('../include/sidebar.php');
?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Applied jobs</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
          
              </div>
              <!-- <a class=" btn btn-primary" href="add_job.php"> create job  </a> -->
            </div>
          </div>

  <!-- show customer code  -->

  <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>SL</th>
              
                <th>Job title</th>
                <th> Job Description</th> 
                <th>Job seeker name</th> 
                <th>Job seeker email</th> 
          
              
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            include('../connection/db.php');
            $a=1;
            $query = mysqli_query($conn ,"select * from job_apply LEFT JOIN all_jobs
            ON job_apply.id_job=all_jobs.id where customer_email='{$_SESSION['emailaddress']}' ");
            while($row=mysqli_fetch_array($query)){
            ?>
          
            <tr>
                <td><?php echo $a;?></td>
                
                <td><?php echo $row['job_title'];?></td>
                <td><?php echo $row['job_description'];?></td>
                <td><?php echo $row['first_name'];?> <?php echo $row['last_name'];?></td>

                <td><?php echo $row['job_seeker'];?></td>
        
                


                <td>
                  <div class="row">
                    <div class="btn-group">
                      <a href="view_applied_job.php?id=<?php echo $row['id'];?>" class="btn btn-success">View</a>
                      
                    </div>
                  </div>
                </td>
            </tr>
            <?php }?>
        </tbody>
        <tfoot>
              <tr>
              <th>SL</th>       
              <th>Job title</th>
              <th> Job Description</th> 
              <th>Job seeker name</th> 
              <th>Job seeker email</th> 
           
            
              <th>Action</th>
            </tr>
        </tfoot>
    </table>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

      
      

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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

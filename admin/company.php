<?php
include('../include/header.php');
include('../include/sidebar.php');
?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Company</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <!-- <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button> -->
              </div>
              <a class=" btn btn-primary" href="add_company.php"> Add company </a>
            </div>
          </div>

  <!-- show customer code  -->

  <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th> company Name</th>
                <th>Description</th>
                <th>Admin</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            include('../connection/db.php');
            $query = mysqli_query($conn ,"select * from company");
            while($row=mysqli_fetch_array($query)){
            ?>
          
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['description'];?></td>
                <td><?php echo $row['admin'];?></td>

               
                <td>
                  <div class="row">
                    <div class="btn-group">
                      <a href="editcompany.php?edit=<?php echo $row['id'];?>" class="btn btn-success">edit</a>
                      <a href="deletecompany.php?del=<?php echo $row['id'];?>" class="btn btn-danger">delete</a>
                    </div>
                  </div>
                </td>
            </tr>
            <?php }?>
        </tbody>
        <tfoot>
              <tr>
                 <th>ID</th>
                <th> company Name</th>
                <th>Description</th>
                <th>Admin</th>
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

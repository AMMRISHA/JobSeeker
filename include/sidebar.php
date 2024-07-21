<?php
// $conn = mysqli_connect("localhost","root","","job_portal");
include ('../connection/db.php');
$query = mysqli_query($conn, "select * from admin_login where admin_email='{$_SESSION['emailaddress']}' and admintype='1'");

if (mysqli_num_rows($query) > 0) {
  ?>
  <!-- <h2>super admin </h2> -->
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="dashboard.php">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
           
            </li>
            <li class="nav-item">
            
            </li>
            <li class="nav-item">
              <a class="nav-link" href="coustomer.php">
                <span data-feather="users"></span>
                Customers
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../admin/Interview.php">
                <span data-feather="layers"></span>
                Interview
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="jobcreate.php">
                <span data-feather="bar-chart-2"></span>
                Job create
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="company.php">
                <span data-feather="layers"></span>
                Company
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="d-flex align-items-center text-muted" href="#">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="category.php">
                <span data-feather="file-text"></span>
                 Category 
              </a>
            </li>
            <ul class="nav flex-column mb-2">
                <li class="nav-item">
                  <a class="nav-link" href="apply-job.php">
                    <span data-feather="file-text"></span>
                    Apply jobs
                  </a>
                </li>
            <li class="nav-item">
              <!-- <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Social engagement
              </a> -->
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Year-end sale
              </a> -->
            </li>
          </ul>
        </div>
      </nav>
      <!-- </div>
  </div> -->
      <?php
} else {
  ?>
<!-- customer admin  -->
      <div class="container-fluid">
        <div class="row">
          <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="dashboard.php">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <!-- <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a> -->
                </li>
                <li class="nav-item">
                  <!-- <a class="nav-link" href="#">
                <span data-feather="shopping-cart"></span>
                Products
              </a> -->
                </li>
                <li class="nav-item">
                  <!-- <a class="nav-link" href="coustomer.php">
                  <span data-feather="users"></span>
                  Customers
                </a> -->
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="jobcreate.php">
                    <span data-feather="bar-chart-2"></span>
                    Job create
                  </a>
                </li>
                <li class="nav-item">
                  <!-- <a class="nav-link" href="#">
                    <span data-feather="layers"></span>
                    Integrations
                  </a> -->
                </li>
              </ul>

              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Saved reports</span>
                <a class="d-flex align-items-center text-muted" href="#">
                  <span data-feather="plus-circle"></span>
                </a>
              </h6>
              <ul class="nav flex-column mb-2">
                <li class="nav-item">
                  <a class="nav-link" href="apply-job.php">
                    <span data-feather="file-text"></span>
                    Apply jobs
                  </a>
                </li>
                <li class="nav-item">
                 
                </li>
                <li class="nav-item">
                 
                </li>
                <li class="nav-item">
                 
                </li>
              </ul>
            </div>
          </nav>
          <!-- </div>
</div> -->
          <?php
}
?>

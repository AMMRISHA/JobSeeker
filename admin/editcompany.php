<?php
include ('../include/header.php');
include ('../include/sidebar.php');
include ('../connection/db.php');

$edit = $_GET['edit'];

$query = mysqli_query($conn, "select * from company where id ='$edit' ");
while ($row = mysqli_fetch_array($query)) {
    $name = $row['name'];
    $des = $row['description'];



}

?>
<?php
include ('../connection/db.php');

$query = mysqli_query($conn, "select * from admin_login where admintype='2'");

?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Company</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">

            </div>

        </div>
    </div>

    <!-- show customer code  -->
    <div id="msg"></div>
    <div class="addform">
        <form action="" method="POST" id="companyeditform" name="companyeditform">
            <div class="form-group">
                <label for="name">Company Name :</label>
                <input type="text" class="form-control" id="name" value="<?php echo $name ?>" name="name">
            </div>
            <div class="form-group">
                <label for="description">Description :</label>
                <input type="text" class="form-control" id="description" value="<?php echo $des ?>" name="description">
            </div>
            <div class="form-group">
                <label for="category">Admin email :</label>
                <select class="form-control" aria-label="Default select example" id="admin" name="admin">
                    <?php
                    while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <option value="<?php echo $row['admin_email'] ?>"><?php echo $row['admin_email']; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <input type="hidden" name="id" id="id" value="<?php echo $_GET['edit']; ?>">
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
    include ('../connection/db.php');

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $des = $_POST['description'];
        $admin = $_POST['admin'];



        $query1 = mysqli_query($conn, "update company set name='$name',description ='$des',admin='$admin'
     where id='$id' ");

        if ($query1) {
            echo " <script>alert('record updated') </script>";
            header('location : company.php');
        } else {
            echo " <script>alert('record not updated ') </script>";

        }
    }

    ?>
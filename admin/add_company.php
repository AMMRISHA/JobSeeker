<?php
include ('../include/header.php');
include ('../include/sidebar.php');
?>
<?php
 include('../connection/db.php');

$query = mysqli_query($conn,"select * from admin_login where admintype='2'");

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Company</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">

            </div>

        </div>
    </div>

    <!-- show customer code  -->
    <div id="msg"></div>
    <div class="addform">
        <form action="" method="POST" id="companyaddform" name="companyaddform">
            <div class="form-group">
                <label for="cmpname">Company Name :</label>
                <input type="text" class="form-control" id="cmpname" name="cmpname">
            </div>
            <div class="form-group">
                <label for="cmpdes">Description :</label>
                <input type="text" class="form-control" id="cmpdes" name="cmpdes">
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
                var cmpname = $("#cmpname").val();
                var cmpdes = $("#cmpdes").val();
                var admin = $("#admin").val();

                if (cmpname == '') {
                    alert(" please enter name");
                    return false;
                }
                if (cmpdes == '') {
                    alert(" please enter Description");
                    return false;
                }
                var data = $("#companyaddform").serialize();

                $.ajax({
                    type: "POST",
                    url: "companybackend.php",
                    data: data,
                    success: function (data) {
                        $("#msg").html(data);
                        //alert(data);
                    }
                    // error: function () {
                    //     $("#msg").html("<div class='alert alert-danger'>Error: Unable to submit form</div>");
                    // }

                })

            })
        })
    </script>

    </body>

    </html>
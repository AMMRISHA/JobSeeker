<?php
include('../include/header.php');
include('../include/sidebar.php');
?>


            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2">Add customer</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">

                        </div>

                    </div>
                </div>

                <!-- show customer code  -->
                <div id="msg"></div>
                <div class="addform">
                    <form action="" method="POST" id="customer_addform" name="customer_addform">
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="username">username:</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">password :</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="Firstname">First Name :</label>
                            <input type="text" class="form-control" id="Firstname" name="Firstname">
                        </div>
                        <div class="form-group">
                            <label for="Lastname">Last Name :</label>
                            <input type="text" class="form-control" id="Lastname" name="Lastname">
                        </div>
                        <div class="form-group">
                            <label for="admintype">Admin Type :</label>
                            <select name="adminType" id="adminType" class="form-control">
                                <option value="1">Super admin</option>
                                <option value="2">Customer admin</option>

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
                            var email = $("#email").val();
                            var username = $("#username").val();
                            var password = $("#password").val();
                            var Firstname = $("#Firstname").val();
                            var Lastname = $("#Lastname").val();
                            var adminType = $("#adminType").val();
                            var data = $("#customer_addform").serialize();

                            $.ajax({
                                type: "POST",
                                url: "Customer_add.php",
                                data: data,
                                success: function (data) {
                                      $("#msg").html(data);
                                    //alert(data);
                                },
                                // error: function () {
                                //     $("#msg").html("<div class='alert alert-danger'>Error: Unable to submit form</div>");
                                // }

                            })

                        })
                    })
                </script>

</body>

</html>
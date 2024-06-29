<?php
include('../include/header.php');
include('../include/sidebar.php');
?>


            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2">Add category</h1>
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
                            <input type="text" class="form-control" id="categoryname" name="categoryname">
                        </div>
                        <div class="form-group">
                            <label for="categorydes">Category Description :</label>
                            <input type="text" class="form-control" id="categorydes" name="categorydes">
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
                            var categoryname = $("#categoryname").val();
                            var categorydes = $("#categorydes").val();
                        if(categoryname == ''){
                            alert(" please enter name");
                            return false;
                        }
                        if(categorydes == ''){
                            alert(" please enter Description");
                            return false;
                        }
                            var data = $("#categoryaddform").serialize();

                            $.ajax({
                                type: "POST",
                                url: "categorylogic.php",
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
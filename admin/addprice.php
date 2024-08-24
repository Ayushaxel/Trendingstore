<?php
include("adminheader.php")
?>
<!doctype html>
<html lang="en">

<head>
    <title>dashboard page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.min.js"></script>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2"><span style=" color:#707070;">Admin</span>/ Add Price</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div>
                </div>
            </main>
        </div>
        <div class="row">
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="shadow">
                    <p class="py-3 ps-2 m-0" style="background-color: gray; font-weight:600;">Upper clothes Price</p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">S.No</th>
                                    <th scope="col">Admin Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Dublicate Price</th>
                                    <th scope="col">Discount</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <input type="text" id="email" value="<?php echo $adminemail ?>" class="d-none">
                                    <td scope="row">AUTO</td>
                                    <td><input type="text" name="" id="adminname" value="<?php echo $adminname ?>"></td>
                                    <td><input type="text" name="" id="price"></td>
                                    <td><input type="text" name="" id="dubprice"></td>
                                    <td><input type="text" name="" id="discount"></td>
                                    <td> <button class="border-primary text-primary bg-white py-2 px-3" onclick="addprice()">ADD</button></td>
                                </tr>


                            </tbody>
                        </table>
                        <div id="showprice">
                                    <script>
                                        $.post("alldatashow.php", {
                                                action: 'showprice'
                                            },
                                            function(data) {
                                                // alert(data);
                                                $("#showprice").html(data);
                                            });
                                    </script>

                                </div>
                        <script>
                            function addprice() {
                               
                                var adminname = $("#adminname").val();
                                var price = $("#price").val();
                                var dubprice = $("#dubprice").val();
                                var discount = $("#discount").val();
                                var email = $("#email").val();

                                $.post("adminphp.php", {
                                        action: "addprice",
                                        adminname: adminname,
                                        price: price,
                                        dubprice: dubprice,
                                        discount: discount,
                                        email: email
                                    },
                                    function(data) {
                                        alert(data);
                                        if (data=="insert") {
                                            $.post("alldatashow.php", {
                                                action: 'showprice'
                                            },
                                            function(data) {
                                                // alert(data);
                                                $("#showprice").html(data);
                                            });
                                            
                                        }

                                    })
                            }
                        </script>
                    </div>

                </div>
            </main>
        </div>
    </div>

</body>
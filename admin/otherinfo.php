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
                                    <th scope="col">Admin email</th>
                                    <th scope="col">Country of product</th>
                                    <th scope="col">Print type</th>
                                    <th scope="col">Sleeve</th>
                                    <th scope="col">Neck type</th>
                                    <th scope="col">Fit</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <input type="text" id="email" value="<?php echo $adminemail ?>" class="d-none">
                                    <td scope="row">AUTO</td>
                                    <td><input type="text" name="" id="adminname" value="<?php echo $adminname ?>"></td>
                                    <td><input type="text" name="" id="adminemail" value="<?php echo $adminemail ?>"></td>
                                    <td><input type="text" name="" id="cop"></td>
                                    <td><input type="text" name="" id="printtyp"></td>
                                    <td><input type="text" name="" id="sleeve"></td>
                                    <td><input type="text" name="" id="necktyp"></td>
                                    <td><input type="text" name="" id="fit"></td>
                                    <td> <button class="border-primary text-primary bg-white py-2 px-3" onclick="addinfo()">ADD</button></td>
                                </tr>

                            </tbody>
                        </table>
                        <script>
                            function addinfo() {
                            
                                
                                var adminname = $("#adminname").val();
                                var cop = $("#cop").val();
                                var printtyp = $("#printtyp").val();
                                var sleeve = $("#sleeve").val();
                                var necktyp = $("#necktyp").val();
                                var fit = $("#fit").val();
                                var email = $("#email").val();
                                // alert(cop);
                                $.post("adminphp.php", {
                                        action: "addinfo",
                                        adminname: adminname,
                                        cop: cop,
                                        printtyp: printtyp,
                                        sleeve: sleeve,
                                        necktyp:necktyp,
                                        email: email,
                                        fit:fit
                                    },
                                    function(data) {
                                        alert(data);

                                    })
                            }
                        </script>
                    </div>

                </div>
            </main>
        </div>
    </div>

</body>
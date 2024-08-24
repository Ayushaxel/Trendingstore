<?php
include("adminheader.php");
?>
<!doctype html>
<html lang="en">

<head>
    <title>uppercloth</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />


</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2"><span style=" color:#707070;">Admin</span>/ Drescription</h1>
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
    </div>
    <div class="row">
        <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="shadow">
                <p class="py-3 ps-2 m-0" style="background-color: gray; font-weight:600;">Add Upper Desription</p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">Admin Name</th>
                                <th scope="col">Cloth Name</th>
                                <th scope="col">Cloth Type</th>
                                <th scope="col">Add Drescription</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td scope="row">Auto</td>
                                <input type="email" name="" id="adminemail" value="<?php echo $adminemail ?>" class="d-none">

                                <td><input class="" style=" outline:none; " type="text" name="" id="adminname" value="<?php echo $adminname ?>"></td>
                                <td><input type="text" name="" id="" value="<?php echo $clothname ?>"></td>
                                <td><input type="text" name="" id="clothtyp" value="<?php echo $clothtype ?>"></td>
                                <td><textarea name="" id="description" cols="40" rows="10"></textarea></td>
                                <td> <button class="btn border border-primary text-primary" onclick="adddes()">Add</button></td>


                            </tr>
                                

                        </tbody>
                    </table>
                </div>
                <div id="showdata">
                                    <script>
                                        $.post("alldatashow.php", {
                                                action: 'showdata'
                                            },
                                            function(data) {
                                                // alert(data);
                                                $("#showdata").html(data);
                                            });
                                    </script>

                                </div>
                <script>
                    function adddes() {
                        // alert("i am working");
                        var adminemail = $('#adminemail').val();
                        var descrition = $('#description').val();
                        var adminname = $('#adminname').val();
                        var clothtyp = $('#clothtyp').val();


                        $.post(
                            "adminphp.php", {
                                action: "description",
                                des: descrition,
                                email: adminemail,
                                adminname: adminname,
                                clothtyp: clothtyp
                            },
                            function(response) {
                                alert(response);
                                if (response == "data insert") {
                                    $.post("alldatashow.php", {
                                            action: 'showdata'
                                        },
                                        function(data) {
                                            // alert(data);
                                            $("#showdata").html(data);
                                        });
                                }
                            }
                        )
                    }
                </script>

            </div>
            <main>
    </div>

</body>
<?php
include("adminheader.php");
// $data=$conn->query("SELECT * from (( description  INNER JOIN price on description.id=price.id) INNER JOIN uppcloth on description.id =uppcloth.id )");
// if (mysqli_num_rows($data)>0) {
//     while($result=mysqli_fetch_assoc($data)){
//         $adminemail=$result['adminemail'];
//         $clothtype=$result['clothtype'];
//         $description=$result['descriptionadd'];
//         $price=$result['price'];
//         $fabric=$result['fabric'];
//         $color=$result['color'];
//         $imageone=$result['imageone'];
//         $imagetwo=$result['imagetwo'];



//         // echo $adminname;
//     }
//     echo $adminname;
// }



?>
<!doctype html>
<html lang="en">

<head>
    <title>dashboard page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<style>

</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
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
            <div class="shadow p-2">
                <ul class="nav nav-tabs py-3 ">
                    <li class="nav-item">
                        <a href="" class="nav-link bg-primary text-white">Upper Order Table</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Botton Clothes Table</a>
                    </li>
                </ul>
                <div>
                    <p class=" py-2 m-0 d-flex align-items-center "
                        style="background-color: gray;font-size:22px; font-weight: 600;"> Upper Clothes
                        Tables</p>
                    <!-- <div class="table-responsive">
                        <table border="1" class="table table-bordered ">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 10%;">S.NO</th>
                                    <th scope="col" style="width: 10%;">Admin Name </th>
                                    <th scope="col" style="width: 10%;">Admin email</th>
                                    <th scope="col" style="width: 10%;">cloth type</th>
                                    <th scope="col" style="width: 10%;">description</th>
                                    <th scope="col" style="width: 10%;">Price</th>
                                   
                                    <th scope="col" style="width: 10%;">Fabric</th>
                                    <th scope="col" style="width: 10%;">Color</th>
                                    <th scope="col" style="width: 10%;">Imageone</th>
                                    <th scope="col" style="width: 10%;">Imagetwo</th>
                                    <th scope="col" style="width: 10%;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td scope="row"><input type="text" class="form-control" name="" id=""value='auto' disabled></td>
                                    <td><input type="text" class="form-control" value="<?PHP  echo $adminname?> " disabled></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><img src="../images/blackdress.webp" alt="" width="100px"></td>
                                    <td><img src="../images/blackdress.webp" alt="" width="100px"></td>
                                    <td>
                                        <div class=" text-center">
                                            <button class="px-3 py-2 rounded rounded-2 bg-white text-primary border border-primary">ADD</button>
                                        </div>
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </div> -->
                    
                    <div id="alldata">
                        <script>
                            $.post("alldatashow.php",{
                                action:"alldata"
                            },
                        function(data){
                            alert(data);
                            $("#alldata").html(data);
                        })
                        </script>
                    </div>

                </div>
            </div>
        </main>
    </div>

    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>
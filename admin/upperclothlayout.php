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

    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard </h1>
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
                <p class="py-3 ps-2" style="background-color: gray; font-weight:600;">Upper Cloth Layout</p>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row px-3">
                        <div class="col-lg-3" style="font-weight: 600;"> UPPER CLOTHES NAME </div>
                        <div class="col-lg-9">
                            <select class="w-100 py-2" name="cltname" id="cloths" onchange="clothname()">
                                <?php
                                $clothname = [
                                    'select' => '--select--',
                                    "TP" => "Tops",
                                    "Blouses" => "Blouses",
                                    "Coat" => "Coat",
                                    "Jacket" => "Jacket",
                                    "Croptop" => "Crop Top",
                                    "Shirt" => "Shirt",
                                    "Lingerie" => "Lingerie",
                                    "Bra" => "Bra",
                                    "Hoodie" => "Hoodie",
                                    "Sheath" => "Sheath Dress",
                                    "Cloak" => "Cloak",
                                    "Camisole" => "Camisole",
                                    "Bodysuit" => "Bodysuit",
                                    "Mini" => "Mini Dress",
                                    "Co-ord set" => "Co-ord Set",
                                ];
                                foreach ($clothname as $clothdata) {
                                    echo "<option> $clothdata </option>";
                                }
                                ?>
                            </select>
                            <script>
                                function clothname() {
                                    var cloths = document.getElementById('cloths').value;
                                    alert(cloths);
                                    $.post('getclothtype.php', {
                                        action: "getclothtype",
                                        clothsval: cloths,
                                    }, function(response) {
                                        $('#clothtypedatashow').html(response);
                                    });
                                }
                            </script>
                        </div>
                        <div class="col-lg-3 mt-3 " style="font-weight: 600;">UPPER CLOTHES NAME TYPE</div>
                        <div class="col-lg-9">
                            <!-- <select class="w-100 py-2 mt-2" name="clttyp" id="clothtypedatashow">
                            </select> -->
                            <input type="text" class="w-100 py-2 mt-2" name="clttyp" id="clothtypedatashow">
                        </div>
                        <div class="col-lg-3 mt-3 " style="font-weight: 600;">UPPER CLOTHES SIZE</div>
                        <div class="col-lg-9 mt-3 ">
                            <input type="text" name="sizes" id="" style="width: 19%;">
                            <input type="text" name="sizem" id="" style="width: 19%;">
                            <input type="text" name="sizel" id="" style="width: 19%;">
                            <input type="text" name="sizexl" id="" style="width: 19%;">
                            <input type="text" name="sizexxl" id="" style="width: 19%;">
                            
                        </div>
                        <div class="col-lg-3 mt-5" style="font-weight: 600;">FABRIC</div>
                        <div class="col-lg-9 mt-4">
                            <select class="w-100 py-2 mt-2" name="fabric" id="">
                                <?php
                                $fabric = [
                                    '--select' => 'select',
                                    'Li' => 'Linen',
                                    'Si' => 'silk',
                                    'Ch' => 'chiffon',
                                    'co' => 'cotton',
                                    'cr' => 'crepe',
                                    'De' => 'denim',
                                    'po' => 'polyester',
                                    'sa' => 'satin',
                                    've' => 'velvet',
                                    'le' => 'leather',
                                    'ba' => 'batiste',
                                    'la' => 'lace',
                                    'ny' => 'nylon',
                                    'br' => 'broadcloth',
                                    'broc' => 'brocade',
                                    'bu' => 'brocade',
                                    'ca' => 'cambric',
                                    'canvas' => 'canvas',
                                    'cashmere' => 'cashmere ',
                                    'chen' => 'chenile',
                                    'cor' => '',
                                    'fl' => 'fleece',
                                    'wo' => 'wool',
                                ];
                                foreach ($fabric as $value) {
                                    echo "<option>$value</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-lg-3 mt-3" style="font-weight: 600;">COLOR</div>
                        <div class="col-lg-9 mt-3"> <input type="text" name="color" id=""></div>
                        <div class="col-lg-3 mt-3" style="font-weight: 600;">Image 1</div>
                        <div class="col-lg-9 d-flex mt-3 ">
                            <img src="../images/dress-2.webp" name='' alt="" width="120px" height="120px">
                            <div>
                                <label for="upload"> 
                                    <span class="btn btn-primary">upload new photo</span>
                                    <input type="file" name="image1" id="upload" class="d-none">
                                </label>
                                <button onclick="upload()" class="btn btn-danger ms-3">Reset</button>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-3" style="font-weight: 600;">Image 2</div>
                        <div class="col-lg-9 d-flex mt-3 ">
                            <img src="../images/dress-2.webp" alt="" width="120px" height="120px">
                            <div>
                                <label for="upload1"> 
                                    <span class="btn btn-primary">upload new photo</span>
                                    <input type="file" name="image2" id="upload1" class="d-none">
                                </label>
                                <button onclick="upload()" class="btn btn-danger ms-3">Reset</button>
                            </div>
                        </div>
                        <button  class="btn my-3 btn-lg w-25 btn-primary ms-3" name="submit">sumbit</button>
                    </div>
                </form>
                <?php
                if(isset($_POST['submit'])){
                    $clothname=$_POST['cltname'];
                    $clothtype=$_POST['clttyp'];
                    $sizes=$_POST['sizes'];
                    echo $sizes;
                    $sizem=$_POST['sizem'];
                    $sizel=$_POST['sizel'];
                    $sizexl=$_POST['sizexl'];
                    $sizexxl=$_POST['sizexl'];
                    $fabricname=$_POST['fabric'];
                    $colour=$_POST['color'];
                    $imagename1 = $_FILES['image1']['name'];
                    $tempname1 = $_FILES['image1']['tmp_name'];
                    $address1="../upload/".$imagename1;

                    $imagename2 = $_FILES['image2']['name'];
                    $tempname2 = $_FILES['image2']['tmp_name'];
                    $address2="../upload/".$imagename2;

                    echo $imagename;
                    echo $tempname ."<br>";
                    echo $imagename2 ."<br>";
                    echo $tempname2 ."<br>";
                    $data=$conn->query("INSERT INTO `uppcloth`(`id`, `adminname`, `adminemail`, `clothname`, `clothtype`, `clothS`, `clothM`, `clothL`, `clothXL`, `clothXXL`, `fabric`, `color`, `imageone`, `imagetwo`)
                     VALUES (null,'$adminname','$adminemail',' $clothname','$clothtype','$sizes','$sizem','$sizel','$sizexl','$sizexxl','$fabricname','$colour','$imagename1','$imagename2')");
                     if($data){
                        echo "data insert ";
                        move_uploaded_file($tempname1,$address1);
                        move_uploaded_file($tempname2,$address2);

                     }
                    

                    
                    
                }
                
                
                ?>
                <img src="../upload/" alt="">
                

            </div>
        </main>
    </div>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
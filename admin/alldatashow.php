<?php
include("../user/connection.php");
$action = $_POST['action'];
if ($action == 'showdata') {
    $data = $conn->query("SELECT * FROM `description`");
    if (mysqli_num_rows($data) > 0) {
        $output = "
    <div class='table-responsive'>
                    <table class='table table-bordered'>
                        <thead>
                            <tr>
                                <th scope='col'>S.No</th>
                                <th scope='col'>Admin Name</th>
                                <th scope='col'>Cloth Type</th>
                                <th scope='col'>Add Drescription</th>
                                <th scope='col'>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                       
    ";
        while ($result = mysqli_fetch_assoc($data)) {
            $adminname = $result['adminname'];
            $adminemail = $result['adminemail'];
            $clothtyp = $result['clothtype'];
            $description = $result['descriptionadd'];
            $output .= " 
        <tr class=''> <td scope='row'>Auto</td>
        <td><input class='' style=' outline:none; ' type='text' name='' id='adminname' value=' $adminname '></td>
        <td><input type='text' name='' id='clothtyp' value='$clothtyp'></td>
        <td><input type='text' name='' id='clothtyp' value='$description'></td>
        <td> <button class='btn border border-primary text-primary' onclick='adddes()'>Add</button></td>
        </tr>";
        }
        $output .= "
    </tbody>
    </table >
    </div>
    ";
        echo $output;
    }
} else if ($action == 'showprice') {
    $data = $conn->query("SELECT * FROM `price`");
    if (mysqli_num_rows($data) > 0) {
        $output = "
            <div class='table-responsive'>
                        <table class='table table-bordered'>
                            <thead>
                                <tr>
                                    <th scope='col'>S.No</th>
                                    <th scope='col'>Admin Name</th>
                                    <th scope='col'>Price</th>
                                    <th scope='col'>Dublicate Price</th>
                                    <th scope='col'>Discount</th>
                                    <th scope='col'>Action</th>
                                </tr>
                            </thead>
                            <tbody>
            ";
        while ($result = mysqli_fetch_assoc($data)) {
            $adminname = $result['adminname'];
            $adminemail = $result['adminemail'];
            $price = $result['price'];
            $dubprice = $result['dubprice'];
            $discount = $result['discount'];
            $output .= "
            <tr class=''>
            
            <td scope='row'>AUTO</td>
            <td><input type='text' name='' id='adminname' value='$adminname'></td>
            <td><input type='text' name='' id='price' value='$price'></td>
            <td><input type='text' name='' id='dubprice' value='$dubprice'></td>
            <td><input type='text' name='' id='discount' value='$discount'></td>
            <td> <button class='border-primary text-primary bg-white py-2 px-3' onclick='addprice()'>ADD</button></td>
        </tr>
                ";
        }
        $output .= "
        </tbody>
        </table>
        </div>
        ";
        echo $output;
    }
} elseif ($action == "alldata") {
    $data = $conn->query("SELECT * from (( description  INNER JOIN price on description.id=price.id) INNER JOIN uppcloth on description.id =uppcloth.id )");
    
    if (mysqli_num_rows($data) > 0) {
        $output="
        <div class='table-responsive'>
                        <table border='1' class='table table-bordered '>
                            <thead>
                                <tr>
                                    <th scope='col' style='width: 10%;'>S.NO</th>
                                    <th scope='col' style='width: 10%;'>Admin Name </th>
                                    <th scope='col' style='width: 10%;'>Admin email</th>
                                    <th scope='col' style='width: 10%;'>cloth type</th>
                                    <th scope='col' style='width: 10%;'>description</th>
                                    <th scope='col' style='width: 10%;'>Price</th>
                                   
                                    <th scope='col' style='width: 10%;'>Fabric</th>
                                    <th scope='col' style='width: 10%;'>Color</th>
                                    <th scope='col' style='width: 10%;'>Imageone</th>
                                    <th scope='col' style='width: 10%;'>Imagetwo</th>
                                    <th scope='col' style='width: 10%;'>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
        ";
        while ($result = mysqli_fetch_assoc($data)) {
            $adminemail = $result['adminemail'];
            $adminname = $result['adminname'];
            $clothtype = $result['clothtype'];
            $description = $result['descriptionadd'];
            $price = $result['price'];
            $fabric = $result['fabric'];
            $color = $result['color'];
            $imageone = $result['imageone'];
            $imagetwo = $result['imagetwo'];
           

            $output.="
            <tr class=''>
            <td scope='row'><input type='text' class='form-control' name='' id=''value='auto' disabled></td>
            <td><input type='text' class='form-control' value=' $adminname ' disabled></td>
            <td><input type='text' class='form-control'>$adminemail</td>
            <td><input type='text' class='form-control'>$clothtype</td>
            <td><input type='text' class='form-control'>$description</td>
            
            <td><input type='text' class='form-control'>$price</td>
            <td><input type='text' class='form-control'>$fabric</td>
            <td><input type='text' class='form-control'> $color</td>
            <td><img src='../upload/$imageone' alt='no' width='100px'></td>
            <td><img src='../upload/$imagetwo' alt='' width='100px'></td>
            <td>
                <div class=' text-center'>
                    <button class='px-3 py-2 rounded rounded-2 bg-white text-primary border border-primary'>ADD</button>
                </div>
            </td>

        </tr>
            ";

        };
        $output.="
        </tbody>
        </table>
        </div>
        ";
        echo $output;
    }
}
else if($action=="show"){
    echo "hel";
    // $data=$conn->query("SELECT * FROM uppcloth INNER JOIN price on uppcloth.id=price.id");
    // if () {
    //     $output="";
    //   while($result=mysqli_fetch_assoc($data)){
    //     $clothname=$result['clothype'];
    //     $price=$result['price'];
    //     $dubprice=$result['dubprice'];
    //     $discount=$result['discount'];
    //     $imageone=$result['imageone'];
    //     echo $clothname;
    //     echo "yes";
    //     $output.="

    //     <swiper-slide>
    //     <div class='d-flex align-items-center   w-100 me-5 mt-5' style='width: 100%;' id='hoodieshow''>
    //     <span class=' mx-3 shadow'> <a href=''><img class='' src='../allimage/fort 5.webp' alt='' data-bs-toggle='tooltip' title='Oversized Hoodie' width='100%'></a>
    //         <div class=''>
    //             <span>
    //                 <a href='#' class='text-dark' style='text-decoration: none !important;'>Evil Eye
    //                     Oversized Hoodie</a>
    //                 <div class=''>
    //                     <span class='fs-6' style='text-decoration: line-through !important;'>Rs
    //                         1,700.00</span>
    //                     <span class='fs-6 text-danger'> Rs 1,200.00</span>
    //                     <br>
    //                     <span class='' style='font-size: 13px !important;'><i class='fa  fa-star checked'></i></span>
    //                     <span class='' style='font-size: 13px !important;'><i class='fa  fa-star checked'></i></span>
    //                     <span class='' style='font-size: 13px !important;'><i class='fa  fa-star checked'></i></span>
    //                     <span class='' style='font-size: 13px !important;'><i class='fa-regular fa-star'></i></span>
    //                     <span class='text-danger' style='font-size: 12px !important;'>( 30% off)</span>
    //                 </div>
    //             </span>
    //         </div>
    //         </span>
    //     </div>

    // </swiper-slide>
                        
    //     ";
    //   }
    //   $output.="";
    //   echo $output;
    // }
}
?>
<?php
include("connection.php");
$action = $_POST['action'];

if ($action == "homeshow") {

    $data = $conn->query("SELECT * FROM uppcloth INNER JOIN price on uppcloth.id=price.id");
    $total = mysqli_num_rows($data);

    if ($total > 0) {
        $output = "";
        while ($result = mysqli_fetch_assoc($data)){
            $id=$result['id'];
            // echo $id;
            $clothname = $result['clothtype'];
            $price = $result['price'];
            $dubprice = $result['dubprice'];
            $discount = $result['discount'];
            $imageone = $result['imageone'];
         

            $output .= "

        <swiper-slide style=''>
        <div class='d-flex align-items-center   w-100 me-5 mt-5 ' style='width: 100%;' >
        <div class=' ms-2  d-flex justify-content-center'>
        <span class=' mx-3 shadow'> <a href='photo.php?id=$id'><img class='' src='../allimage/$imageone' alt='' data-bs-toggle='tooltip' title='Oversized Hoodie' width='100%'></a>
            <div class='d-flex justify-content-center'>
                <span>
                    <a href='#' class='text-dark' style='text-decoration: none !important;'>$clothname</a>
                    <div class=''>
                        <span class='fs-6' style='text-decoration: line-through !important;'>Rs
                        $price</span>
                        <span class='fs-6 text-danger'> Rs $dubprice</span>
                        <br>
                        <span class='' style='font-size: 13px !important;'><i class='fa  fa-star checked'></i></span>
                        <span class='' style='font-size: 13px !important;'><i class='fa  fa-star checked'></i></span>
                        <span class='' style='font-size: 13px !important;'><i class='fa  fa-star checked'></i></span>
                        <span class='' style='font-size: 13px !important;'><i class='fa-regular fa-star'></i></span>
                        <span class='text-danger' style='font-size: 12px !important;'>( $discount off)</span>
                    </div>
                </span>
            </div>
            </span>
            </div>
        </div>

    </swiper-slide>
                        
        ";
        }
        $output .= "";
        echo $output;
    }
}
if($action=="addtocart"){
    $loginemail=$_POST['email'];
    
    $data = $conn->query("SELECT * FROM `addtocart` where email='$loginemail'");
    $total=mysqli_num_rows($data);
    if ($total>0) {
        $output="";
        while($result=mysqli_fetch_assoc($data)){
            $price=$result['price'];
            $proid=$result['productid'];
            $image1=$result['imageone'];
            $clothname=$result['itemname'];
            $output.="
             <div class='border  shadow p-2' >
                        <div class=' d-flex align-items-center'>
                            <div><img src='../allimage/$image1' alt='' width='100px'></div>
                            <div class=''>
                                <h5 class='ms-3'>eveil cloth desing</h5>
                                <h6 class='ms-3 text-danger'> Rs 1200</h6>
                            </div>
                            <div class='ms-3 '>
                                <button type='button' class='btn btn-close border bg-danger py-3 px-2' onclick='prodlt()'></button>
                            </div>
                               <input type='text' value='$proid' id='productid' class='d-none'>
                        </div>
                    </div>
            ";
        }
        $output.="";
        echo $output;

        
    }else{
        echo "
           <span class='text-center p-3 fs-1' style='margin-left: 155px !important;'><i class='fa-brands fa-shopify'></i></span>
                    <p class='ms-5 p-3'>You don't have any items in your cart.</p>
                    <a href='CONTINUESHOPING.php'>
                        <button class='mt-3  bt2 bg-dark text-white' style='margin-left: 98px !important; padding: 7px 40px 7px 40px !important;'>CONTINUE
                            SHOPING</button></a>
        ";
    }
     


}
if ($action=="cartdlt") {
   $productid=$_POST['id'];
   $data=$conn->query("DELETE FROM `addtocart` WHERE productid='$productid'"); 
   if ($data) {
    echo "dlt successful";
    
   }
}
if ($action=="carttotal") {
   $loginemail=$_POST['email'];
    $data2 = $conn->query("SELECT * FROM `addtocart` where email='$loginemail'");
    $carttotal = mysqli_num_rows($data2);
    echo $carttotal;
    
}

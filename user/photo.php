<?php
include("connection.php");
include("header.php");


$proid = $_GET['id'];
$data = $conn->query("SELECT * FROM uppcloth WHERE id='$proid'");
if (mysqli_num_rows($data) > 0) {
    $result = mysqli_fetch_assoc($data);
    $uppclothid = $result['id'];
    $clothname = $result['clothtype'];
    $fabric = $result['fabric'];
    $color = $result['color'];
    $image1 = $result['imageone'];
    $image2 = $result['imagetwo'];
    $clothtype = $result['clothname'];
    $s = $result['clothS'];
    $m = $result['clothM'];
    $l = $result['clothL'];
    $xl = $result['clothXL'];
    $xxl = $result['clothXXL'];

    # code...
}
$data2 = $conn->query("SELECT * FROM price WHERE id='$proid'");
if (mysqli_num_rows($data2) > 0) {
    $result2 = mysqli_fetch_assoc($data2);
    $price = $result2['price'];
    $dubprice = $result2['dubprice'];
    $discount = $result2['discount'];
}
$data3 = $conn->query("SELECT * FROM description where id='$proid'");
if (mysqli_num_rows($data3) > 0) {
    $result3 = mysqli_fetch_assoc($data3);
    $description = $result3['descriptionadd'];
}
$data4 = $conn->query("SELECT * FROM otherinfo where id='$proid'");
if (mysqli_num_rows($data4) > 0) {
    $result4 = mysqli_fetch_assoc($data4);
    $cop = $result4['countryproduct'];
    $printtype = $result4['printtype'];
    $sleeve = $result4['sleeve'];
    $necktype = $result4['necktype'];
    $fit = $result4['fit'];
}





?>


<!-- Home acounts add now ..///// -->

<div class="">
    <p class="p-2" style="font-size: 15px !important; background-color: aliceblue !important;"> <a href="" style="text-decoration: none;">Home</a> | Crazy Vibes
        Oversized Printed Hoodie
    </p>
</div>
<!-- swiper used now ./// -->

<div class="ms-5">
    <div class="row">
        <div class="col-lg-1 ">
            <div class="m-1 p-2">
                <img src="../allimage/<?php echo $image1 ?>" alt="" width="100%" height="100vh">
            </div>
            <div class="m-1 p-2">
                <img src="../allimage/<?php echo $image2 ?>" alt="" width="100%" height="100vh">
            </div>

        </div>

        <div class="col-lg-5  p-2">
            <span><img src="../allimage/<?php echo $image1 ?>" alt="" width="100%"></span>
        </div>
        <div class="col-lg-6  p-3">
            <h4 class="fw-bold"></h4>
            <div class="mt-3">
                <span class="text-danger fs-4 fw-bold">Rs.<?php echo $price ?></span>
                <span class="text-decoration-line-through fs-4"> Rs. <?php echo $dubprice ?></span>
                <span class="" style="font-size: 14px !important;">| Save Rs. 500.00</span>
                <span class="text-danger"> (<?php echo $discount ?> off)</span>
            </div>
            <div class="mt-4">
                <span class="bg-danger px-2 text-white p-1 ">Hurry, Only 10 left!</span>

            </div>
            <div class="mt-3">
                <span class="" style="font-size: 14px !important;">SIZE: S</span>
                <span class="ms-4 " style="font-size: 14px !important;"><i class="fa-solid fa-ruler-combined"></i>SIZE CHART</span>
            </div>
            <div class="mt-3">
                <button class="px-3 py-2 border border-0 "><?php
                                                            if ($s) {
                                                                echo $s;
                                                            } else {
                                                            }
                                                            ?></button>
                <button class="px-3 py-2 border border-0 bg-black text-white"><?php
                                                                                if ($m) {
                                                                                    echo $m;
                                                                                } else {
                                                                                }
                                                                                ?></button>
                <button class="px-3 py-2 border border-0"><?php
                                                            if ($l) {
                                                                echo $l;
                                                            } else {
                                                            }
                                                            ?></button>
                <button class="px-3 py-2 border border-0"><?php
                                                            if ($xl) {
                                                                echo $xl;
                                                            } else {
                                                            }
                                                            ?></button>
                <button class="px-3 py-2 border border-0"><?php
                                                            if ($xxl) {
                                                                echo $xxl;
                                                            } else {
                                                            }
                                                            ?></button>


            </div>
            <div class="mt-3 ">
                <span class=" " style="font-size: 12px !important;"><i class="fa-solid fa-envelope " data-bs-toggle="modal" data-bs-target="#msmodel2">Bulk
                        Enquiry</i></span>
            </div>
            <div class="mt-4 d-flex justify-content-start ">

                <div class="btn-group border">
                    <button type="button" class=" border-0 px-3" onclick="minusquantity()">–</button>

                    <div class="px-2 py-1" id="quantity" name=''>1</div>

                    <!-- <input id="quantity" class="form-control " type="text" name='quantity' value="1"> -->
                    <button type="button" class="border-0 py-2 px-3" onclick="addquantity()">+</button>
                </div>
                <script>
                    function addquantity() {
                        var quantity = document.getElementById('quantity').innerText;
                        quantity = parseInt(quantity);
                        if (quantity < 10) {
                            quantity++
                            document.getElementById('quantity').innerText = quantity;
                            document.getElementById('quantityint').value = quantity;

                        }
                    }

                    function minusquantity() {
                        var quantity = document.getElementById('quantity').innerText;
                        quantity = parseInt(quantity);
                        if (quantity > 1) {
                            quantity--
                            document.getElementById('quantity').innerText = quantity;
                            document.getElementById('quantityint').value = quantity;


                        }
                    }
                </script>
                <!-- <div class=""> -->
              
                <form action="" method="post">
                    <input type="text" value="1" id='quantityint' name="quantity" class="d-none">
                    <button class="btn btn-dark px-3 py-2" name="card"> Add to Card</button>


                    <!-- </div> -->
            </div>
            <div class="qw1">
                <button  class=" btn border-0 mt-3 fw-bold bg-danger text-white " style=" padding: 10px 20px 10px 20px !important;width: 100% !important;" name='buynow'>BUY NOW </button>
            </div>
            </form>
            <?php
            if (isset($_POST["card"])) {
                if (isset($_SESSION['email'])) {
                    $quantity = $_POST['quantity'];
                    // $data3 = $conn->query("SELECT * FROM addtocart WHERE ");
                    // if (mysqli_num_rows($data3) >= 0) {
                    $data2 = $conn->query("SELECT * FROM addtocart WHERE productid='$proid' and email='$loginemail' ");
                    if (mysqli_num_rows($data2) > 0) {
                        echo "<script> alert('product already add to cart') </script>";
                    } else {
                        $data = $conn->query("INSERT INTO `addtocart`(`id`, `productid`, `email`, `itemname`, `price`, `imageone`,`quantity`) VALUES (null,'$proid','$loginemail','$clothname','$price','$image1','$quantity')");
                        if ($data) {
                            echo "<script> alert('insert') </script>";
                        } else {
                            echo "";
                        }
                    }
                   
                } else {
                    echo "<script> alert('login ')
                                    window.location='login.php'
                                    </script>";
                }
            }

            ?>
            <?php
            if (isset($_POST["buynow"])) {
                if (isset($_SESSION['email'])) {
                    $quantity = $_POST['quantity'];
                    // $data3 = $conn->query("SELECT * FROM addtocart WHERE ");
                    // if (mysqli_num_rows($data3) >= 0) {
                    $data2 = $conn->query("SELECT * FROM addtocart WHERE productid='$proid' and email='$loginemail' ");
                    if (mysqli_num_rows($data2) > 0) {
                        echo "<script> alert('product already add to cart') </script>";
                    } else {
                        $data = $conn->query("INSERT INTO `addtocart`(`id`, `productid`, `email`, `itemname`, `price`, `imageone`,`quantity`) VALUES (null,'$proid','$loginemail','$clothname','$price','$image1','$quantity')");
                        if ($data) {
                            echo "<script> alert('insert');
                            window.location='buynow.php?id=$proid';
                            </script>";
                        } else {
                            echo "";
                        }
                    }
                } else {
                    echo "<script> alert('login ')
                                    window.location='login.php'
                                    </script>";
                }
            }

            ?>

            <div class="mt-4 ">
                <div class="mb-3">
                    <span><i class="fa-solid fa-truck-fast"></i></span>
                    <span class="fw-bold ms-2" style="font-size: 14px !important;">FREE SHIPPING</span><br>
                </div>
                <span><i class="fa-regular fa-clock"></i></span>
                <span class="ms-2" style="font-size: 15px !important;">Estimated delivery between</span>
                <span class="fw-bold ms-2">Monday 06 May - Thursday 09 May.</span>
            </div>
        </div>
    </div>
</div>
<!-- model show this now ../// -->
<!-- The Modal -->
<div class="">
    <div class="modal " id="msmodel2" style="margin-top: 20rem !important;">
        <div class="modal-dialog">
            <div class="modal-content ">

                <!-- Modal Header -->
                <div class="modal-header justify-content-between">
                    <h4 class="modal-title">Waveborn Dragon Printed Hoodie</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="">
                    <div class="">
                        <input type="text" placeholder="Name " class="w-100"><br>
                        <input type="text" placeholder="Email " class="w-100"><br>
                        <input type="text" placeholder="Phone Number " class="w-100">

                    </div>
                    <div class="">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Message" class="w-100"></textarea>
                    </div>
                </div>


                <!-- Modal body -->
                <!-- <div class="modal-body">
          Modal body..
        </div> -->

                <!-- Modal footer -->
                <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div> -->

            </div>
        </div>
    </div>
</div>

<div class="mt-5 mx-5">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active text-dark p-2" data-bs-toggle="tab" href="#home">PRODUCT DETAILS </a>
        </li>
        <li>
            <a class="nav-link text-dark p-2 " data-bs-toggle="tab" href="#menu1">SIZE & FIT</a>
        </li>
        <li>
            <a class="nav-link text-dark  p-2" data-bs-toggle="tab" href="#menu2">EXACHNAGE & RETURNS</a>
        </li>
        <li>
            <a class="nav-link text-dark p-2 " data-bs-toggle="tab" href="#menu3">OFFER & DISCOUNT</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane container active" id="home">
            <div class="mb-4 mt-4">
                <span class="fw-bold ">Product type : </span>
                <span style="font-size: 14px !important;"><?php echo $clothtype ?> </span>
            </div>
            <div class="mb-4">
                <span class="fw-bold">Fabric : </span>
                <span style="font-size: 14px !important;"><?php echo $fabric ?></span>
            </div>
            <div class="mb-4">
                <span class="fw-bold">Country of Production : </span>
                <span style="font-size: 14px !important;"><?php echo $cop ?></span>
            </div>
            <div class="mb-4">
                <span class="fw-bold">Print type : </span>
                <span style="font-size: 14px !important;"><?php echo $printtype ?> </span>
            </div>
            <div class="mb-4">
                <span class="fw-bold">Sleeve Length : </span>
                <span style="font-size: 14px !important;"><?php echo $sleeve ?></span>
            </div>
            <div class="mb-4">
                <span class="fw-bold">Neck Type : </span>
                <span style="font-size: 14px !important;"><?php echo $necktype ?> </span>
            </div>
            <div class="mb-4">
                <span class="fw-bold">Fit : </span>
                <span style="font-size: 14px !important;">Oversized Fit</span>
            </div>
            <div class="mt-5">
                <h6 class="mb-3 fw-bold">Product Description </h6>
                <span><?php echo $description ?></span>
            </div>
            <div class="mt-5 mb-5">
                <span class="fw-bold">𝘼𝙘𝙩𝙪𝙖𝙡 𝘾𝙤𝙡𝙤𝙧 𝙈𝙖𝙮 𝙎𝙡𝙞𝙜𝙝𝙩𝙡𝙮 𝙑𝙖𝙧𝙮 𝘿𝙚𝙥𝙚𝙣𝙙𝙞𝙣𝙜
                    𝙊𝙣 𝙔𝙤𝙪𝙧 𝙎𝙘𝙧𝙚𝙚𝙣 𝘽𝙧𝙞𝙜𝙝𝙩𝙣𝙚𝙨𝙨 . 𝘼𝙡𝙡 𝙏𝙝𝙚 𝙋𝙧𝙤𝙙𝙪𝙘𝙩𝙨 𝙃𝙖𝙫𝙚
                    𝙎𝙞𝙯𝙚 𝘾𝙝𝙖𝙧𝙩𝙨 , 𝘾𝙝𝙚𝙘𝙠 𝙏𝙝𝙚 𝙎𝙞𝙯𝙚 𝘾𝙝𝙖𝙧𝙩 𝙁𝙤𝙧 𝙋𝙚𝙧𝙛𝙚𝙘𝙩 𝙁𝙞𝙩
                    .</span>
            </div>
            <div class="mb-5" style="margin-top: 170px !important;">
                <span class="fw-bold ">Delivery Time Period - Average - 7 to 9 Days.</span>
            </div>
        </div>
        <div class="tab-pane container fade" id="menu1">

            <img src="../allimage/sizefit.webp" alt="" width="">
        </div>
        <div class="tab-pane container fade" id="menu2">

            <h2 class="fw-bold mt-4 mb-2">Exchange Policy:</h2>
            <ul class="ms-4">
                <li class="ms-5">Size-related or product dissatisfaction exchanges are free.</li>
                <li class="ms-5 mb-4">Size-related or product dissatisfaction exchanges are free.</li>
            </ul>
            <h2 class="mt-3 mb-3">Return and Refund Policy:</h2>
            <ul>
                <li class="ms-5">A nominal deduction of ₹250 for refund processing fee.</li>
                <li class="ms-5">Full refund initiated within 7 days upon receiving the product.</li>
                <li class="ms-5">Products must be in the original condition as delivered.</li>
            </ul>
            <div class="mt-5">
                <span class="fw-bold">Note:</span>
                <span class="" style="font-size: 13px !important;">We provide a 3-day window for exchanges and
                    refunds. Your satisfaction is our priority at TRENDIN STORE. For exchange and refund, mail us at
                    support@trendinstore.co.in. For the full procedure, please check our Exchange & Refund
                    policy.</span>
            </div>
        </div>
        <div class="tab-pane container fade" id="menu3">
            <div class="mt-4 my-3">
                <span class="ms-3  ">Buy 2 Get Extra 10% off - USE CODE - “MORE10”</span><br>
                <span class="ms-3">Buy 5 Get Extra 15% off - USE CODE - “MORE15”</span>
            </div>
        </div>

    </div>
</div>
<center>
    <h2>Recommended Products</h2>
</center>

<!-- swiper used show now ..//// -->
<!-- Swiper -->
<div class=" mt-5 mx-4">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="d-flex align-items-center w-100">
                    <span class="mx-2"><a href=""><img src="../allimage/fort 5.webp" alt=""></a>
                        <span><a href="" class="text-dark" style="text-decoration: none !important; font-size: 16px !important;">Winged Desert
                                legacy Printed Hoodie</a></span>
                        <span class="text-decoration-line-through" style="font-size: 15px !important;">Rs
                            1,700.00</span>
                        <span class="text-danger">Rs 1,200.00</span>
                    </span>

                    <span class="mx-2"><a href=""><img src="../allimage/classic1.webp" alt="" width="100%"></a>
                        <span><a href="" class="text-dark" style="text-decoration: none !important; font-size: 16px !important;">Winged Desert
                                legacy Printed Hoodie</a></span>
                        <span class="text-decoration-line-through" style="font-size: 15px !important;">Rs
                            1,700.00</span>
                        <span class="text-danger">Rs 1,200.00</span>
                    </span>
                    <span class="mx-2"><a href=""><img src="../allimage/fort 5.webp" alt=""></a>
                        <span><a href="" class="text-dark" style="text-decoration: none !important; font-size: 16px !important;">Winged Desert
                                legacy Printed Hoodie</a></span>
                        <span class="text-decoration-line-through" style="font-size: 15px !important;">Rs
                            1,700.00</span>
                        <span class="text-danger">Rs 1,200.00</span>
                    </span>
                    <span class="mx-2"><a href=""><img src="../allimage/fort 3.webp" alt=""></a>
                        <span><a href="" class="text-dark" style="text-decoration: none !important; font-size: 16px !important;">Dare Devil
                                Printed Hoodie</a></span><br>
                        <span class="text-decoration-line-through" style="font-size: 15px !important;">Rs
                            1,700.00</span>
                        <span class="text-danger">Rs 1,200.00</span>
                    </span>
                </div>
            </div>
            <div class="swiper-slide">

                <div class="d-flex align-items-center w-100">
                    <span class="mx-2"><a href=""><img src="../allimage/fort 5.webp" alt=""></a>
                        <span><a href="" class="text-dark" style="text-decoration: none !important; font-size: 16px !important;">Winged Desert
                                legacy Printed Hoodie</a></span>
                        <span class="text-decoration-line-through" style="font-size: 15px !important;">Rs
                            1,700.00</span>
                        <span class="text-danger">Rs 1,200.00</span>
                    </span>

                    <span class="mx-2"><a href=""><img src="../allimage/classic2.webp" alt="" width="100%"></a>
                        <span><a href="" class="text-dark" style="text-decoration: none !important; font-size: 16px !important;">Winged Desert
                                legacy Printed Hoodie</a></span>
                        <span class="text-decoration-line-through" style="font-size: 15px !important;">Rs
                            1,700.00</span>
                        <span class="text-danger">Rs 1,200.00</span>
                    </span>
                    <span class="mx-2"><a href=""><img src="../allimage/fort 5.webp" alt=""></a>
                        <span><a href="" class="text-dark" style="text-decoration: none !important; font-size: 16px !important;">Winged Desert
                                legacy Printed Hoodie</a></span>
                        <span class="text-decoration-line-through" style="font-size: 15px !important;">Rs
                            1,700.00</span>
                        <span class="text-danger">Rs 1,200.00</span>
                    </span>
                    <span class="mx-2"><a href=""><img src="../allimage/fort 3.webp" alt=""></a>
                        <span><a href="" class="text-dark" style="text-decoration: none !important; font-size: 16px !important;">Dare Devil
                                Printed Hoodie</a></span><br>
                        <span class="text-decoration-line-through" style="font-size: 15px !important;">Rs
                            1,700.00</span>
                        <span class="text-danger">Rs 1,200.00</span>
                    </span>
                </div>
            </div>

        </div>
        <div class="swiper-button-next" style="border-radius: 50% !important;padding: 12px !important; background-color: brown !important;">
        </div>
        <div class="swiper-button-prev" style="border-radius: 50% !important;padding: 12px !important; background-color: brown !important;">
        </div>
    </div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        rewind: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>

<!-- footer show in used now ..///// -->
<div class="mt-5" style="border-top: 1px solid white !important; background-color: black !important;">
    <div class="row bx001">
        <div class="col-lg-4 col-sm-4">
            <div class="mx-5 mt-5" style="flex-direction: column !important;">
                <h6 class="text-white mb-4 ">USEFUL LINKS</h6>
                <span class="mt-4"><a href="" class="text-white" style="text-decoration: none !important;">Home</a></span><br>
                <span><a href="" class="text-white" style="text-decoration: none !important;">Shop</a></span><br>
                <span><a href="" class="text-white" style="text-decoration: none !important;">Contact</a></span><br>
                <span><a href="" class="text-white" style="text-decoration: none !important;">About Us
                    </a></span><br>
                <span><a href="" class="text-white" style="text-decoration: none !important;">Track
                        Order</a></span><br>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4">
            <div class="mx-5 mt-5 " style="flex-direction: column !important;">
                <h6 class="text-white mb-4" style="text-decoration: none !important;">CUSTOMER SERVICES</h6>
                <span><a href="" class="text-white" style="text-decoration: none !important;">Tarms Or Services
                    </a></span><br>
                <span><a href="" class="text-white" style="text-decoration: none !important;">Privacy
                        Policy</a></span><br>
                <span><a href="" class="text-white" style="text-decoration: none !important;">Exchange & Refound
                        Policy</a></span><br>
                <span><a href="" class="text-white" style="text-decoration: none !important;">Shipping Policy
                    </a></span><br>
            </div>

        </div>
        <div class="col-lg-4 col-sm-4   ">
            <div class="mx-5 mt-5" style="flex-direction: column !important;">
                <h6 class="text-white">NEWSLETTER</h6>
                <p class="text-white mt-3">Subscribe to get special offers, free giveaways, and
                    once-in-a-lifetime
                    deals.</p>
                <div class=" my-4 bx11">
                    <input type="text" placeholder="Email address" data-bs-toggle="tooltip" title="Please fill in this field">
                    <div class="">
                        <button class="mt-4 text-white " style="border: none !important; background-color: black !important;" data-bs-toggle="popover" title="🖳︎" data-bs-content="Please fill in this field">SUBSCRIBE</button>
                        <script>
                            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
                            var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
                                return new bootstrap.Popover(popoverTriggerEl)
                            })
                        </script>
                    </div>
                </div>
                <div class="d-flex mt-5">
                    <span class="mx-3 text-white"><i class="fa-brands fa-facebook-f" data-bs-toggle="tooltip" title="TRENDIN On facebook"></i></span>
                    <span class="text-white"><i class="fa-brands fa-instagram" data-bs-toggle="tooltip" title="TRENDIN On Instagram"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="" style="background-color: black !important; border-top: 1px dotted white !important; height: 10vh !important;">
    <p class="py-4 ms-5 text-white">© Copyright 20x Trendin - JJ METAL</p>

</div>


</body>

</html>
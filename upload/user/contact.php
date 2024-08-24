<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./all iamge/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="trandstore.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="swiper.css">
    <link rel="stylesheet" href="contact.css">
    <title>Contact us </title>
</head>

<body>
    <marquee class="bg-black">
        <div class="py-2">
            <span class="ms-4 text-white"><i class="fa-brands fa-instagram"></i></span>
            <span class=" text-white"><i class="fa-brands fa-twitter"></i></span>
            <span class=" text-white"><i class="fa-brands fa-facebook-f"></i></span>
            <span class=" text-white me-4"><i class="fa-brands fa-google"></i></span>
            <span class="text-white">buy 2 get 10% Off - <span class="text-danger ">MORE10 </span></span> <span
                class="mx-5 text-white"> Buy 5 Get 15% Off - <span class="text-danger"> MORE15 <span></span> </span>
                <span class="ms-4"><i class="fa-brands fa-instagram"></i></span>
                <span class=""><i class="fa-brands fa-twitter"></i></span>
                <span class=""><i class="fa-brands fa-facebook-f"></i></span>
                <span class=""><i class="fa-brands fa-google"></i></span>

        </div>
    </marquee>
    <!-- header used now .///// -->
    <div class="x1">
        <nav class="navbar navbar-expand navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="./all iamge/trand.avif" alt=""></a>
                <!-- Button to open the offcanvas sidebar -->
                <button class="btnx  bot" type="button" data-bs-toggle="offcanvas" data-bs-target="#openoffcanvas">
                    <span class=""> <i class="fa-solid fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-between" id="collapsibleNavbar">
                    <ul class="navbar-nav   d-flex justify-content-center align-content-center "
                        style="margin-left:17rem !important; font-size: 13px !important;">
                        <li class="nav-item ted ">
                            <a class="nav-link text-dark mx-1 header-menu " href="trandstore.html"
                                style="color: red !important;">HOME</a>
                        </li>
                        <li class="nav-item">
                            <div class="hover1">
                                <div class="text-dark mx-1 allcollection header-menu" href="#">ALL COLLECTION
                                    <ul class="allcollection_dropdown shadow">
                                        <li><a href="halforversized.html" class="text-dark">HALF OVERSIZED HOODIE</a>
                                        </li>
                                        <li><a href="#" class="text-dark">ALL Over printed tee</a></li>
                                        <li><a href="#" class="text-dark">premium Oversized tee</a></li>
                                        <li><a href="#" class="text-dark">Oversizeed tee - buy 2 get 1 free</a></li>
                                        <li><a href="#" class="text-dark">Co-ord set</a></li>
                                        <li><a href="#" class="text-dark">printed HOODIE</a></li>
                                        <li><a href="#" class="text-dark">printed Sweatshirt</a></li>
                                        <li><a href="#" class="text-dark">Black printed Hoodie</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark mx-1 header-menu" href="contact.html">CONTACT US </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark mx-1 header-menu" href="trackorder.html">TRACK ORDER </a>
                        </li>
                    </ul>
                    <div class="">
                        <div class=" mx-5">
                            <span class="mx-2 fs-4" data-bs-toggle="offcanvas" data-bs-target="#seachopen"
                                data-bs-toggle="tooltip" title="search"><i
                                    class="fa-solid fa-magnifying-glass"></i></span>

                            <span class="mx-2 fs-4" data-bs-toggle="modal" data-bs-target="#myModal"
                                data-bs-toggle="tooltip" title="setting"><i class="fa-solid fa-user"></i></span>
                            <span class="mx-2 fs-4 " data-bs-toggle="offcanvas" data-bs-target="#shopingopen"
                                data-bs-toggle="tooltip" title="cart"><i class="fa-brands fa-shopify"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Offcanvas Sidebar -->
        <div class="offcanvas offcanvas-top" id="seachopen" style=" height: 40vh !important;">
            <div class="offcanvas-header justify-content-between ms-5 mt-5 ">
                <h5>What are you looking for ?</h5>
                <button type="button" class="btn-close text-reset me-3" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="">
                <div class=" d-flex p-4 ms-4 ">
                    <div class="w-100" style="border-bottom: 1px solid rgb(152, 151, 151);">
                        <input type="" class="" style=" border: 0; outline: none!important; width: 97%;"
                            placeholder="search for products, brands and more..">
                        <i class="fa-solid fa-magnifying-glass " style="color: rgb(184, 179, 179);"></i>
                    </div>
                </div>
                <div class="ms-5 d-flex  align-items-center">
                    <p>popular searches : <a href=" #" class=" m-3 text-dark">Jeans</a></p>
                    <a href="" class=" text-dark m-3">Dears</a>
                    <a href="" class=" text-dark m-3">top</a>
                    <a href="" class=" text-dark m-3">summer</a>

                </div>
            </div>
        </div>
        <!-- modal used now  -->

        <div class="modal fade " id="myModal" style="height: 150vh !important;">
            <div class="modal-dialog  w-50 " style="margin-left: 55rem !important; margin-top: 163px !important; ">
                <div class="modal-content w-75">
                    <!-- Modal Header -->
                    <div class="">
                        <a href="login.php">
                            <button class=" mt-4 text-white"
                                style="padding: 5px 120px 5px 120px !important; margin-left: 45px !important; border: none !important;  background-color:black !important;">LOGIN</button></a>
                    </div>
                    <div class="">
                        <p class="text-center mt-3">NEW USER? : <a href="" class="text-dark"> REGISTER NOW</a></p>
                    </div>
                    <div class="">
                        <h6 class="mt-4 ms-3">LANGAUGE</h6>
                        <button class="ms-3 mt-3 mb-4 text-danger "
                            style="padding: 0px 5px 0px 5px !important; border: none !important; border: 1.0px solid red !important; font-size: 13px !important;">ENGLISH</button>
                    </div>

                </div>
            </div>
        </div>
        <!-- <div class="offcanvas offcanvas-top" id="">
            <div class="offcanvas-header">
                <h1 class="offcanvas-title"> Heading vvvvvvvvv</h1>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>

            <div class="offcanvas-body">
                <p>Some text lorem ipsum.</p>
                <p>Some text lorem ipsum.</p>
                <button class="btn btn-secondary" type="button">dark mode</button>
            </div>
        </div> -->

        <div class="offcanvas offcanvas-end" id="shopingopen">
            <div class="offcanvas-header justify-content-between mx-4 mt-5  ">
                <h5>YOUR CART ( 0 )</h5>
                <button type="button" class="btn-close text-reset ms-5" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body  " style="margin-top: 70px !important;">
                <div class="  mt-5 mx-4 ">
                    <span class="text-center p-3 fs-1" style="margin-left: 155px !important;"><i
                            class="fa-brands fa-shopify"></i></span>
                    <p class="ms-5 p-3">You don't have any items in your cart.</p>
                    <button class="mt-3  bt2 bg-dark text-white"
                        style="margin-left: 98px !important; padding: 7px 40px 7px 40px !important;">CONTINUE
                        SHOPING</button>
                </div>

            </div>
        </div>
        <!-- laptop navbar end -->
    </div>
    <div class="box22">
        <div class=" d-flex justify-content-center align-items-center mx-3 ">
            <div class=" mx-5  ">
                <button class="btnx fs-5 " type="button" data-bs-toggle="offcanvas" data-bs-target="#openoffcanvas">
                    <span class=""> <i class="fa-solid fa-bars"></i></span>
                </button>
                <span class="mx-2 fs-4 box3" data-bs-toggle="offcanvas" data-bs-target="#smseachopen"><i
                        class="fa-solid fa-magnifying-glass" data-bs-toggle="offcanvas"
                        data-bs-target="#shoping2"></i></span>
            </div>
            <div class="">
                <a class="navbar-brand" href="#"><img src="./all iamge/trand.avif" alt="" height="80px"
                        style="align-items: center !important; margin-right: 33px !important;"></a>
            </div>
            <div class="  " style="margin-right:px !important;">
                <span class="mx-2 fs-4"><i class="fa-solid fa-user" data-bs-toggle="modal"
                        data-bs-target="#smmodal"></i></span>
                <!-- smtoggle -->
                <!-- sot form///////// -->
                <span class="mx-2 fs-4"><i class="fa-brands fa-shopify" data-bs-toggle="offcanvas"
                        data-bs-target="#sofy"></i></span>
            </div>
            <div class="offcanvas offcanvas-start w-75 " id="openoffcanvas">
                <div class="offcanvas-header">
                    <!-- <a href=" #" class="text-dark" style="text-decoration: none !important;">Home</a>
                <button type="button" class="btn-close text-reset " data-bs-dismiss="offcanvas"></button> -->
                </div>
                <div class="offcanvas-body" style="background-color: black !important;">
                    <ul class="allborder-red">
                        <li><a href="#">HOME</a></li>
                        <li><a href="#" data-bs-toggle="collapse" class="d-flex align-items-center"
                                data-bs-target="#demo1">ALL COLLACTION
                                <span class="text-end text-white  d-block w-50 fs-4"> +</span>
                            </a>
                        </li>
                        <div id="demo1" class="collapse">
                            <ul class="bg-white text-dark ">
                                <li><a href="#" class=""
                                        style="color: black !important; border-bottom: 1px soild black !important;">PREMIUM
                                        OVERSIZED TEE</a></li>
                                <li><a href="#" class="" style="color: black !important;">ALL OVERPRINTED TEE </a>
                                </li>
                                <li><a href="#" class="" style="color: black !important;">HALF OVERSIZED HOODIE</a>
                                </li>
                                <li><a href="#" class="" style="color: black !important;">BUY 2 GET 1 FEE</a></li>
                                <li><a href="#" class="" style="color: black !important;">CO - ORD SET</a></li>
                                <li><a href="#" class="" style="color: black !important;">PRINTED HOODIE</a></li>
                                <li><a href="#" class="" style="color: black !important;">PRINTED SWEATSHIRT</a>
                                </li>
                            </ul>
                        </div>
                        <li><a href="#">NEW DROP-MAR 24 </a></li>
                        <li><a href="#">ON SALF- 40%OFF </a></li>
                        <li><a href="contact.php">CONTACT US</a></li>
                        <li><a href="#">TRACK ORDER</a></li>
                        <li><a href="#">WISHLIST</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="smmodal">
        <div class="modal-dialog shadow bg-white w-75 "
            style="margin-top: 8rem !important; margin-left: 74px !important; border: none !important;">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <div class="">
                        <button class="ms-5 mt-4 text-white"
                            style=" padding: 0px 80px 0px 80px !important; border: none !important; border: 2px solid rgb(6, 6, 6) !important; background-color: black !important;margin-left: 45px !important ">LOGIN</button>
                    </div>
                </div>
                <div class="">
                    <p class="text-center mt-4">NEW USER?<a href="" class="text-dark ms-3"> REGISTER NOW</a> </p>
                </div>
                <div class="">
                    <h5 class="mt-4 ms-4 mb-3 fs-6">LANGAUGE2222</h5>
                    <BUtton class="ms-4 mb-3 text-danger"
                        style="padding: 0px 10px 0px 10px !important; border: none !important; border: 1.0px solid rgb(237, 7, 7) !important;">ENGLISH</BUtton>
                </div>

                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>
    <div class="offcanvas offcanvas-top " id="shoping2">
        <div class="offcanvas-header justify-content-between ms-3 mt-2 mb-4">
            <h5>What are you looking for ?</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="">
            <div class=" d-flex p-2 w-100 mb-3  ">
                <div class="w-100" style="border-bottom: 1px solid black;">
                    <input type="" class="" style=" border: 0; outline: none!important;width: 90%;"
                        placeholder="search for products, brands and more..">
                    <i class="fa-solid fa-magnifying-glass " style="color: rgb(180, 176, 176) !important;"></i>
                </div>
            </div>
            <div class="ms-3 d-flex justify-content-between ">
                <p>popular searches : <a href=" #" class="ms-2 text-dark">Jeans</a></p>
                <a href="" class=" text-dark">Dears</a>
                <a href="" class=" text-dark">top</a>
                <a href="" class=" text-dark me-2">Summer</a>
            </div>
        </div>
    </div>
    <div class="offcanvas offcanvas-end " id="sofy" style="width: 90% !important;">
        <div class="offcanvas-header justify-content-between ms-4 mt-4">
            <h5>YOUR CART ( 0 )</h5>
            <button type="button" class="btn-close text-reset me-4 " data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="mt-5  ">
            <span class="text-center " style="margin-left: 155px !important; font-size: 40px !important;"><i
                    class="fa-brands fa-shopify"></i></span>
        </div>
        <div class="">
            <p class="text-center">You don't have any items in your cart.</p>
            <button class="mt-5  bt2 bg-dark text-white"
                style="margin-left: 50px !important; padding: 7px 50px 7px 50px !important;">CONTINUE
                SHOPING</button>
        </div>
    </div>
    <!-- Home acounts add now ..///// -->

    <div class="">
        <p class="p-2" style="font-size: 15px !important; background-color: aliceblue !important;">Home | Contact
        </p>
    </div>

    <div class="">
        <p class="ms-5 mt-4">At TRENDIN, we value our customers and aim to provide excellent customer service. You can
            contact us using the following methods:</p>
        <p class="ms-5 mt-4 me-4">If you have any questions or concerns regarding our products, shipping, returns, or
            anything else, please feel free to contact us via phone, email, or by visiting our store. Our team is always
            ready to assist you and provide you with the best possible solutions.</p>
    </div>
    <div class="mt-5">
        <div class="row">
            <div class="col-lg-8  ">
                <center>
                    <h4 class="mt-3">Contact Us</h4>
                    <p class="mt-3">Get in touch and let us know how we can help. Have a question but aren’t sure who to
                        contact? Get
                        in touch and a member of our team will reach out to you.</p>
                </center>
                <div class="mx-4 mt-4 ">
                    <div class="d-flex inpu">
                        <input type="text" placeholder="Name" class="w-50 py-2 ps-3">
                        <input type="text" placeholder="Email" class="w-50 py-2 ps-3 ms-3">
                    </div>
                    <div class="inpu">
                        <input type="text" placeholder="Phone Number" class="w-100 py-2 ps-3 mt-3 mb-3"><br>
                        <input type="text" placeholder="Subject" class="w-100 py-2 ps-3 mb-3"><br>
                        <textarea name="" id="" cols="20" rows="10" placeholder="Message"
                            class="w-100 py-2 ps-3"></textarea>
                    </div>
                </div>
                <div class="btu">
                    <button class="ms-4 bg-black text-white"
                        style="border: none !important; border: 1px solid black !important; padding: 5px 14px 5px 14px !important;">SEND</button>
                </div>
            </div>
            <div class="col-lg-4  ">
                <div class=" mx-3 clr">
                    <h6 class="mt-5 ms-4 mt-4">ADDRESS:</h6>
                    <p class="ms-4">342 New No.1/429 PVT no 9, Friends Colony</p>
                    <p class="ms-4 mb-3">Industrial Area, Delhi - 110095</p>
                    <p class="ms-4 mb-2">PHONE: +918851706339</p>
                    <p class="mb-5 ms-4">EMAIL: support@trendinstore.co.in</p>
                    <div class="" style="border-top: 1px dotted white !important;">
                        <h6 class="ms-4 mt-4">OPENING HOURS</h6>
                        <h6 class="ms-4 mt-4 mb-5">Mon - Sat : 11am - 6pm</h6>
                        <div class="" style="border-top: 1px dotted white !important;">
                            <p class="ms-4 mt-4 mb-2">STAY CONNECTED</p>
                            <span class="ms-4 "><i class="fa-brands fa-facebook"></i></span>
                            <span class="ms-2"><i class="fa-brands fa-instagram"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer show in used now ..///// -->
    <div class="mt-5" style="border-top: 1px solid white !important; background-color: black !important;">
        <div class="row bx001">
            <div class="col-lg-4 col-sm-4">
                <div class="mx-5 mt-5" style="flex-direction: column !important;">
                    <h6 class="text-white mb-4 ">USEFUL LINKS</h6>
                    <span class="mt-4"><a href="" class="text-white"
                            style="text-decoration: none !important;">Home</a></span><br>
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
                        <input type="text" placeholder="Email address" data-bs-toggle="tooltip"
                            title="Please fill in this field">
                        <div class="">
                            <button class="mt-4 text-white "
                                style="border: none !important; background-color: black !important;"
                                data-bs-toggle="popover" title="🖳︎"
                                data-bs-content="Please fill in this field">SUBSCRIBE</button>
                            <script>
                                var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
                                var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                                    return new bootstrap.Popover(popoverTriggerEl)
                                })
                            </script>
                        </div>
                    </div>
                    <div class="d-flex mt-5">
                        <span class="mx-3 text-white"><i class="fa-brands fa-facebook-f" data-bs-toggle="tooltip"
                                title="TRENDIN On facebook"></i></span>
                        <span class="text-white"><i class="fa-brands fa-instagram" data-bs-toggle="tooltip"
                                title="TRENDIN On Instagram"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class=""
        style="background-color: black !important; border-top: 1px dotted white !important; height: 10vh !important;">
        <p class="py-4 ms-5 text-white">© Copyright 2023 Trendin - JJ METAL</p>

    </div>
</body>

</html>
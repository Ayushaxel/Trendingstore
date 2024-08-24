<?php
include("header.php");



?>


<body>


    <!-- Swiper used now  -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="../allimage/tee 2.webp" alt="no image found"></div>
            <div class="swiper-slide"><img src="../allimage/tee 2.webp" alt="no image found"></div>
            <div class="swiper-slide"><img src="../allimage/tee 2.webp" alt="no image found"></div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <div class="container">
        <div class=" swiper-img">
            <div class="container me-5 ">
                <a href="photo.php"><img class="ms-5" src="../allimage/tees1.webp " alt="no image found" width="120px" height="120px"></a>
                <a href="photo.php"> <img class="ms-5" src="../allimage/tees2.webp " alt="no image found" width="120px" height="120px"></a>
                <a href="photo.php"> <img class="ms-5" src="../allimage/tees3.webp " alt="no image found" width="120px" height="120px"></a>
                <a href="photo.php"> <img class="ms-5" src="../allimage/tees4.webp " alt="no image found" width="120px" height="120px"></a>
                <a href="photo.php"> <img class="ms-5" src="../allimage/tees5.webp " alt="no image found" width="120px" height="120px"></a>
                <a href="photo.php"><img class="ms-5" src="../allimage/tees6.webp" alt="no image found" width="120px" height="120px"></a>

            </div>
        </div>
    </div>
    <!-- second swiper used now /// -->

    <div class="swiper myswiper1" style="display: none;">
        <div class="swiper-wrapper ">
            <div class="swiper-slide">
                <div class="d-flex align-items-center  mt-2 ms-3 me-3 w-75" style="height: 16vh; width: 100%;">
                    <img class="h-100" src="../allimage/tees1.webp" alt="no image found">
                    <img class="" src="../allimage/tees2.webp" alt="no image found">
                    <img class="" src="../allimage/tees3.webp " alt="no image found">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="d-flex align-items-center mt-2 ms-3 me-3 w-75" style="height: 17vh; width: 100%;">
                    <img class="" src="../allimage/tees4.webp " alt="no image found">
                    <img class="" src="../allimage/tees5.webp " alt="no image found">
                    <img class="" src="../allimage/tees6.webp" alt="no image found">
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".myswiper1", {
            pagination: {
                el: ".swiper-pagination",
                type: "progressbar",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <div class="">
        <div class="mt-5 mb-5">
            <h3 class="text-center">
                ｡ 🎀🎉 𝗦𝗨𝗠𝗠𝗘𝗥 𝗢𝗩𝗘𝗥𝗦𝗜𝗭𝗘𝗗 𝗛𝗢𝗢𝗗𝗜𝗘 🎉🎀 ｡</h3>
            <p class="text-center mt-3" style="font-size: 18px !important;"> ꧁ New Drop Grab Now !! ✿◉●•◦</p>
        </div>
    </div>

    <!-- /* thirds swiper used now with show//// */ -->
    <div class="mx-4 box11 ">
        

      
        <div style="width: 100%; " class=" ms-3">
            <swiper-container pagination="true" pagination-clickable="true" space-between="30" slides-per-view="4" id="hoodieshow">
            </swiper-container>

            <script>
                $.post("showhomepage.php", {
                    action: "homeshow"
                }, function(data) {
             

                    $("#hoodieshow").html(data);
                })
            </script>


            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
        </div>
      

        <!-- mobile1 sized web screen //// / -->
        <div class="mt ">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <!-- <div class="swiper-slide">
                    <div class="d-flex align-items-center mt-4  ">
                        <span class="mx-2">
                            <a href=""> <img src="../allimage/fort 1.webp" alt=""></a>
                            <div class="">
                                <span class=""> <a href="#" class="text-dark"
                                        style="text-decoration: none !important; font-size: 14px !important;">Evil Eye
                                        Oversized Hoodie</a></span>
                                <span class=""
                                    style="font-size: 15px !important; text-decoration: line-through !important;"> Rs
                                    1700.00</span>
                                <span class="text-danger" style="font-size: 16px !important;"> Rs 1200.00</span>
                            </div>
                        </span>
                        <span class="mx-2">
                            <a href=""> <img src="../allimage/fort 1.webp" alt=""></a>
                            <div class="">
                                <span> <a href="#" class="text-dark"
                                        style="text-decoration: none !important; font-size: 14px !important;">Evil Eye
                                        Oversized Hoodie</a></span>
                                <span class=""
                                    style="font-size: 15px !important; text-decoration: line-through !important;"> Rs
                                    1700.00</span>
                                <span class="text-danger" style="font-size: 16px !important;"> Rs 1200.00</span>

                            </div>
                        </span>
                    </div>
                </div> -->
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center mt-4 ">
                            <span class="mx-2">
                                <a href=""> <img src="../allimage/fort 1.webp" alt=""></a>
                                <div class="">
                                    <span class=""> <a href="#" class="text-dark" style="text-decoration: none !important; font-size: 14px !important;">Evil Eye
                                            Oversized Hoodie</a></span>
                                    <span class="" style="font-size: 15px !important; text-decoration: line-through !important;"> Rs
                                        1700.00</span>
                                    <span class="text-danger" style="font-size: 16px !important;"> Rs 1200.00</span>
                                </div>
                            </span>
                            <span class="mx-2">
                                <a href=""> <img src="../allimage/fort 1.webp" alt=""></a>
                                <div class="">
                                    <span> <a href="#" class="text-dark" style="text-decoration: none !important; font-size: 14px !important;">Evil Eye
                                            Oversized Hoodie</a></span>
                                    <span class="" style="font-size: 15px !important; text-decoration: line-through !important;"> Rs
                                        1700.00</span>
                                    <span class="text-danger" style="font-size: 16px !important;"> Rs 1200.00</span>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next" style="margin-left: 90px !important; background-color: brown !important; border-radius: 70% !important; padding: 14px !important;">
                </div>
                <div class="swiper-button-prev" style="margin-right: 90px !important; background-color: brown !important; border-radius: 70px !important; padding: 14px !important;">
                </div>
            </div>
            <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
            </script>
        </div>
        <!-- slide intailize button show then /// -->
        <div class="">
            <div class=" ">
                <center class="mt-5 mb-3">
                    <button class="bg-black text-white x11 " style="padding: 8px 20px 8px 20px !important;border: none !important; border: 1px solid black !important; ">𝗩𝗜𝗘𝗪
                        𝗔𝗟𝗟</button>
                </center>
                <H3 class="text-center ">ALL OVER PRINTED T-SHIRT</H3>
            </div>
        </div>
        <!-- fourth swiper used now /// -->
        <div class=" box12 mx-4">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class=" d-flex align-items-center   w-100 mt-5" style="width: 100%;">
                            <span class="mx-3 tx1 shadow"><a href=""> <img src="../allimage/new1.webp" alt="" data-bs-toggle="tooltip" title="Bustle Printed Tee"></a>
                                <span> <a href="photo.html" class="text-dark " style="text-decoration: none !important;">Hustle And
                                        Bustle Printed Tee</a> </span>
                                <div class="">
                                    <span class="" style="font-size: 15px !important; text-decoration: line-through !important;">Rs.
                                        1,150.00</span>
                                    <span class=" text-danger" style="font-size: 15px !important;">Rs. 795.00</span><br>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                                    <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>
                                </div>
                            </span>
                            <span class="mx-3 tx2 shadow"><a href=""> <img src="../allimage/new4.webp" alt="" data-bs-toggle="tooltip" title="Bustle Printed Tee"></a>
                                <span> <a href="" class="text-dark " style="text-decoration: none !important;">Hustle And
                                        Bustle Printed Tee</a> </span>
                                <div class="">
                                    <span class="" style="font-size: 15px !important; text-decoration: line-through !important;">Rs.
                                        1,150.00</span>
                                    <span class=" text-danger" style="font-size: 15px !important;">Rs. 795.00</span><br>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                                    <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>

                                </div>
                            </span>
                            <span class="mx-3 shadow"><a href=""> <img src="../allimage/new1.webp" alt="" data-bs-toggle="tooltip" title="Bustle Printed Tee"></a>
                                <span> <a href="" class="text-dark " style="text-decoration: none !important;">Hustle And
                                        Bustle Printed Tee</a> </span>
                                <div class="">
                                    <span class="" style="font-size: 15px !important; text-decoration: line-through !important;">Rs.
                                        1,150.00</span>
                                    <span class=" text-danger" style="font-size: 15px !important;">Rs. 795.00</span><br>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                                    <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>
                                </div>
                            </span>
                            <span class="mx-3 shadow"><a href=""> <img src="../allimage/new4.webp" alt="" data-bs-toggle="tooltip" title="Bustle Printed Tee"></a>
                                <span> <a href="" class="text-dark " style="text-decoration: none !important;">Hustle And
                                        Bustle Printed Tee</a> </span>
                                <div class="">
                                    <span class="" style="font-size: 15px !important; text-decoration: line-through !important;">Rs.
                                        1,150.00</span>
                                    <span class=" text-danger" style="font-size: 15px !important;">Rs. 795.00</span><br>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                                    <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class=" d-flex align-items-center   w-100 mt-5 " style="width: 100%;">
                            <span class="mx-3 shadow"><a href=""> <img src="../allimage/new1.webp" alt="" data-bs-toggle="tooltip" title="Bustle Printed Tee"></a>
                                <span> <a href="" class="text-dark " style="text-decoration: none !important;">Hustle And
                                        Bustle Printed Tee</a> </span>
                                <div class="">
                                    <span class="" style="font-size: 15px !important; text-decoration: line-through !important;">Rs.
                                        1,150.00</span>
                                    <span class=" text-danger " style="font-size: 15px !important;">Rs. 795.00</span><br>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                                    <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>
                                </div>
                            </span>
                            <span class="mx-3 shadow"><a href=""> <img src="../allimage/new4.webp" alt="" data-bs-toggle="tooltip" title="Bustle Printed Tee"></a>
                                <span> <a href="" class="text-dark " style="text-decoration: none !important;">Hustle And
                                        Bustle Printed Tee</a> </span>
                                <div class="">
                                    <span class="" style="font-size: 15px !important; text-decoration: line-through !important;">Rs.
                                        1,150.00</span>
                                    <span class=" text-danger" style="font-size: 15px !important;">Rs. 795.00</span><br>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                                    <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>

                                </div>
                            </span>
                            <span class="mx-3 shadow"><a href=""> <img src="../allimage/new1.webp" alt="" data-bs-toggle="tooltip" title="Bustle Printed Tee"></a>
                                <span> <a href="" class="text-dark " style="text-decoration: none !important;">Hustle And
                                        Bustle Printed Tee</a> </span>
                                <div class="">
                                    <span class="" style="font-size: 15px !important; text-decoration: line-through !important;">Rs.
                                        1,150.00</span>
                                    <span class=" text-danger" style="font-size: 15px !important;">Rs. 795.00</span><br>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                                    <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>

                                </div>
                            </span>
                            <span class="mx-3 shadow"><a href=""> <img src="../allimage/new4.webp" alt="" data-bs-toggle="tooltip" title="Bustle Printed Tee"></a>
                                <span> <a href="" class="text-dark " style="text-decoration: none !important;">Hustle And
                                        Bustle Printed Tee</a> </span>
                                <div class="">
                                    <span class="" style="font-size: 15px !important; text-decoration: line-through !important;">Rs.
                                        1,150.00</span>
                                    <span class=" text-danger" style="font-size: 15px !important;">Rs. 795.00</span><br>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                    <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                                    <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>
                                </div>
                            </span>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next" style="border-radius: 50% !important; background-color: brown !important; padding: 13px !important;">
                </div>
                <div class="swiper-button-prev" style="border-radius: 50% !important; background-color: brown !important; padding: 13px !important;">
                </div>
            </div>
        </div>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>

        <!-- mobile2 used swiper used now //// -->
        <div class="ms-3  mt-4 mt4">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class=" d-flex align-items-center">
                            <span> <a href=""> <img src="../allimage/new1.webp" alt=""></a>
                                <div class="">
                                    <span class=""> <a href="#" class="text-dark" style="text-decoration: none !important; font-size: 14px !important;">Evil Eye
                                            Oversized Hoodie</a></span>
                                    <span class="" style="font-size: 15px !important; text-decoration: line-through !important;"> Rs
                                        1700.00</span>
                                    <span class="text-danger" style="font-size: 16px !important;"> Rs 1200.00</span>
                                </div>
                            </span>
                            <span class="mx-3">
                                <a href=""> <img src="../allimage/new4.webp" alt=""></a>
                                <div class="">
                                    <span class=""> <a href="#" class="text-dark" style="text-decoration: none !important; font-size: 14px !important;">Evil Eye
                                            Oversized Hoodie</a></span>
                                    <span class="" style="font-size: 15px !important; text-decoration: line-through !important;"> Rs
                                        1700.00</span>
                                    <span class="text-danger" style="font-size: 16px !important;"> Rs 1200.00</span>
                                </div>
                            </span>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class=" d-flex align-items-center">
                            <span> <a href=""> <img src="../allimage/new1.webp" alt=""></a>
                                <div class="">
                                    <span class=""> <a href="#" class="text-dark" style="text-decoration: none !important; font-size: 14px !important;">Evil Eye
                                            Oversized Hoodie</a></span>
                                    <span class="" style="font-size: 15px !important; text-decoration: line-through !important;"> Rs
                                        1700.00</span>
                                    <span class="text-danger" style="font-size: 16px !important;"> Rs 1200.00</span>
                                </div>
                            </span>
                            <span class="mx-3">
                                <a href=""> <img src="../allimage/new4.webp" alt=""></a>
                                <div class="">
                                    <span class=""> <a href="#" class="text-dark" style="text-decoration: none !important; font-size: 14px !important;">Evil Eye
                                            Oversized Hoodie</a></span>
                                    <span class="" style="font-size: 15px !important; text-decoration: line-through !important;"> Rs
                                        1700.00</span>
                                    <span class="text-danger" style="font-size: 16px !important;"> Rs 1200.00</span>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next" style="background-color: brown !important; border-radius: 50% !important; padding: 13px !important;">
                </div>
                <div class="swiper-button-prev" style="background-color: brown !important; border-radius: 50% !important; padding: 13px !important;">
                </div>
            </div>
        </div>
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>
        <center class="mt-5 tx ">

            <button class="bg-black text-white" style="border: none !important; border: 1px solid black !important; padding: 8px 20px 8px 20px !important;">𝗩𝗜𝗘𝗪
                𝗔𝗟𝗟</button>

            <h3 class="mt-4">𝗖𝗢𝗧𝗧𝗢𝗡 𝗖𝗢-𝗢𝗥𝗗𝗦</h3>

        </center>

        <!-- fiveth swiper used now ///  -->
        <div class="mx-3 mt-4 tx21">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center  w-100">
                            <span class="mx-3"><a href=""><img src="../allimage/sort1.webp" alt="" data-bs-toggle="tooltip" title="Hawali shirt And short set cotton"></a>
                                <span><a href="" class="text-dark" style="text-decoration: none !important;">Hawali shirt
                                        And short set | 100% Pure Cotton</a></span><br>
                                <span style="text-decoration: line-through !important; font-size: 15px !important;"> Rs
                                    1700.00</span>
                                <span class="text-danger" style="font: 16px !important;"> Rs 1200.00</span><br>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                                <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>

                            </span>
                            <span class="mx-3"><a href=""><img src="../allimage/sort1.webp" alt="" data-bs-toggle="tooltip" title="Hawali shirt And short set cotton"></a>
                                <span><a href="" class="text-dark" style="text-decoration: none !important; font-size: 15px !important">Hawali shirt
                                        And short set | 100% Pure Cotton</a></span><br>
                                <span class="" style="text-decoration: line-through !important; font-size: 15px !important;"> Rs
                                    1700.00</span>
                                <span class="text-danger" style="font: 16px !important;"> Rs 1200.00</span><br>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                                <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>
                            </span>
                            <span class="mx-3"><a href=""><img src="../allimage/sort1.webp" alt="" data-bs-toggle="tooltip" title="Hawali shirt And short set cotton"></a>
                                <span class=""><a href="" class="text-dark" style="text-decoration: none !important ; font-size: 15px !important">Hawali shirt
                                        And short set | 100% Pure Cotton</a></span><br>
                                <span style="text-decoration: line-through !important; font-size: 15px !important;"> Rs
                                    1700.00</span>
                                <span class="text-danger" style="font: 16px !important;"> Rs 1200.00</span><br>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                                <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>

                            </span>
                            <span class="mx-3"><a href=""><img src="../allimage/sort1.webp" alt="" data-bs-toggle="tooltip" title="Hawali shirt And short set cotton"></a>
                                <span><a href="" class="text-dark mt-4" style="text-decoration: none !important; font-size: 15px !important;">Hawali shirt
                                        And short set | 100% Pure Cotton</a></span><br>
                                <span style="text-decoration: line-through !important; font-size: 15px !important;"> Rs
                                    1700.00</span>
                                <span class="text-danger" style="font: 16px !important;"> Rs 1200.00</span><br>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                                <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>

                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center  w-100">
                            <span class="mx-3"><a href=""><img src="../allimage/sort1.webp" alt="" data-bs-toggle="tooltip" title="Hawali shirt And short set cotton"></a>
                                <span><a href="" class="text-dark" style="text-decoration: none !important; font-size: 15px !important">Hawali shirt
                                        And short set | 100% Pure Cotton</a></span><br>
                                <span style="text-decoration: line-through !important; font-size: 15px !important;"> Rs
                                    1700.00</span>
                                <span class="text-danger" style="font: 16px !important;"> Rs 1200.00</span><br>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                                <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>

                            </span>
                            <span class="mx-3"><a href=""><img src="../allimage/sort1.webp" alt="" data-bs-toggle="tooltip" title="Hawali shirt And short set cotton"></a>
                                <span><a href="" class="text-dark" style="text-decoration: none !important; font-size: 15px !important">Hawali shirt
                                        And short set | 100% Pure Cotton</a></span><br>
                                <span class="" style="text-decoration: line-through !important; font-size: 15px !important;"> Rs
                                    1700.00</span>
                                <span class="text-danger" style="font: 16px !important;"> Rs 1200.00</span><br>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                                <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>

                            </span>
                            <span class="mx-3"><a href=""><img src="../allimage/sort1.webp" alt="" data-bs-toggle="tooltip" title="Hawali shirt And short set cotton"></a>
                                <span class=""><a href="" class="text-dark" style="text-decoration: none !important ; font-size: 15px !important">Hawali shirt
                                        And short set | 100% Pure Cotton</a></span><br>
                                <span style="text-decoration: line-through !important; font-size: 15px !important;"> Rs
                                    1700.00</span>
                                <span class="text-danger" style="font: 16px !important;"> Rs 1200.00</span><br>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                                <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>

                            </span>
                            <span class="mx-3"><a href=""><img src="../allimage/sort1.webp" alt="" data-bs-toggle="tooltip" title="Hawali shirt And short set cotton"></a>
                                <span><a href="" class="text-dark mt-4" style="text-decoration: none !important; font-size: 15px !important;">Hawali shirt
                                        And short set | 100% Pure Cotton</a></span><br>
                                <span style="text-decoration: line-through !important; font-size: 15px !important;"> Rs
                                    1700.00</span>
                                <span class="text-danger" style="font: 16px !important;"> Rs 1200.00</span><br>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                                <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>
                            </span>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next" style="background-color: burlywood !important; border-radius: 50% !important; padding: 14px !important;">
                </div>
                <div class="swiper-button-prev" style="background-color: burlywood !important; border-radius: 50% !important; padding: 14px !important;">
                </div>
            </div>
            <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
            </script>
        </div>
        <!-- mobile swiper used now /////  -->
        <div class="mx-2 mt-4 xt12">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class=" d-flex align-items-center mt-4">
                            <span class="mx-2"><a href=""><img src="../allimage/sort2.webp" alt=""></a>
                                <span> <a href="" class="text-dark" style="text-decoration: none !important; font-size: 16px !important;"> Hawali shirt
                                        And short set | 100% Pure Cotton</a></span><br>
                                <span class="" style="font-size: 17px !important; text-decoration: line-through !important;">Rs
                                    1700.00</span>
                                <span class="" style="font-size: 15px !important;">Rs 1200.00</span>
                            </span>
                            <span class=""><a href=""><img src="../allimage/sort2.webp" alt=""></a>
                                <span> <a href="" class="text-dark" style="text-decoration: none !important; font-size: 16px !important;"> Hawali shirt
                                        And short set | 100% Pure Cotton</a></span><br>
                                <span class="" style="font-size: 17px !important; text-decoration: line-through !important;">Rs
                                    1700.00</span>
                                <span class="" style="font-size: 15px !important;">Rs 1200.00</span>
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class=" d-flex align-items-center mt-4">
                            <span class="mx-2"><a href=""><img src="../allimage/sort2.webp" alt=""></a>
                                <span class="text-dark"> <a href="" class="text-dark" style="text-decoration: none !important; font-size: 16px !important;"> Hawali shirt
                                        And short set | 100% Pure Cotton</a></span><br>
                                <span class="" style="font-size: 17px !important; text-decoration: line-through !important;">Rs
                                    1700.00</span>
                                <span class="" style="font-size: 15px !important;">Rs 1200.00</span>
                            </span>
                            <span class=""><a href=""><img src="../allimage/sort2.webp" alt=""></a>
                                <span> <a href="" class="text-dark" style="text-decoration: none !important; font-size: 16px !important;"> Hawali shirt
                                        And short set | 100% Pure Cotton</a></span><br>
                                <span class="" style="font-size: 17px !important; text-decoration: line-through !important;">Rs
                                    1700.00</span>
                                <span class="" style="font-size: 15px !important;">Rs 1200.00</span>
                            </span>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next" style="background-color: brown !important; border-radius: 50% !important; padding: 13px !important;">
                </div>
                <div class="swiper-button-prev" style="background-color: brown !important; border-radius: 50% !important; padding: 13px !important;">
                </div>
            </div>

            <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
            </script>
        </div>
        <div class="">
            <center class="mt-5 tx ">
                <button class="bg-black text-white mt-4" style="border: none !important; border: 1px solid black !important; padding: 8px 20px 8px 20px !important;">𝗩𝗜𝗘𝗪
                    𝗔𝗟𝗟</button>

                <h3 class="mt-5"> ✿◉●•◦ 𝗣𝗥𝗘𝗠𝗜𝗨𝗠 𝗢𝗩𝗘𝗥𝗦𝗜𝗭𝗘 𝗧𝗘𝗘𝗦 🎉♛ 🎀 🐼</h3>
                <p>Latest trendy collection</p>

            </center>
        </div>

        <!-- six swiper used now /// -->
        <!-- Swiper -->
        <div class="mx-4 mt-5 wt1">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center ">
                            <span class="mx-2"><a href=""><img src="../allimage/black1.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="text-decoration: none !important; font-size: 18px !important;">Money kills
                                        printed Oversized Tee</a></span><br>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important;">Rs
                                    1600.00</span>
                                <span class="text-danger">Rs 900.00</span>
                            </span>
                            <span class="mx-2"><a href=""><img src="../allimage/black2.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="text-decoration: none !important; font-size: 18px !important;">Money kills
                                        printed Oversized Tee</a></span><br>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important;">Rs
                                    1500.00</span>
                                <span class="text-danger">Rs 850.00</span>
                            </span>
                            <span class="mx-2"><a href=""><img src="../allimage/black5.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="text-decoration: none !important; font-size: 18px !important;">Money kills
                                        printed Oversized Tee</a></span><br>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important;">Rs
                                    1600.00</span>
                                <span class="text-danger">Rs 800.00</span>
                            </span>
                            <span class="mx-2"><a href=""><img src="../allimage/black4.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="text-decoration: none !important; font-size: 18px !important;">Money kills
                                        printed Oversized Tee</a></span><br>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important;">Rs
                                    1700.00</span>
                                <span class="text-danger">Rs 900.00</span>
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center ">
                            <span class="mx-2"><a href=""><img src="../allimage/black1.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="text-decoration: none !important; font-size: 18px !important;">Money kills
                                        printed Oversized Tee</a></span><br>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important;">Rs
                                    1600.00</span>
                                <span class="text-danger">Rs 900.00</span>
                            </span>
                            <span class="mx-2"><a href=""><img src="../allimage/black2.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="text-decoration: none !important; font-size: 18px !important;">Money kills
                                        printed Oversized Tee</a></span><br>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important;">Rs
                                    1500.00</span>
                                <span class="text-danger">Rs 850.00</span>
                            </span>
                            <span class="mx-2"><a href=""><img src="../allimage/black5.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="text-decoration: none !important; font-size: 18px !important;">Money kills
                                        printed Oversized Tee</a></span><br>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important;">Rs
                                    1600.00</span>
                                <span class="text-danger">Rs 800.00</span>
                            </span>
                            <span><a href=""><img src="../allimage/black4.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="text-decoration: none !important; font-size: 18px !important;">Money kills
                                        printed Oversized Tee</a></span><br>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important;">Rs
                                    1700.00</span>
                                <span class="text-danger">Rs 900.00</span>
                            </span>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next" style=" border-radius: 50% !important; padding: 13px !important;  color: rgb(246, 243, 243) !important; background-color: red !important;">
                </div>
                <div class="swiper-button-prev" style="color: rgb(244, 238, 238) !important; border-radius: 50% !important; padding: 13px !important; background-color: red !important;">
                </div>
            </div>

            <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
            </script>
        </div>
        <!-- mobile swiper used now ////  -->
        <div class="">
            <!-- Swiper -->
            <div class="mx-1 mt-5 tx10">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="d-flex align-items-center">
                                <span><a href=""><img src="../allimage/black5.webp" alt=""></a>
                                    <span><a href="" class="text-dark" style="text-decoration: none !important; font-size: 17px !important;">Money
                                            kills printed Oversized Tee</a></span><br>
                                    <span class="" style="font-size: 16px !important; text-decoration: line-through !important"> Rs
                                        1600.00</span>
                                    <span class="text-danger" style="font-size: 17px !important;">Rs 900.00</span>
                                </span>
                                <span><a href=""><img src="../allimage/black1.webp" alt=""></a>
                                    <span><a href="" class="text-dark" style="text-decoration: none !important; font-size: 17px !important;">Money
                                            kills printed Oversized Tee</a></span><br>
                                    <span class="" style="font-size: 16px !important;text-decoration: line-through !important; "> Rs
                                        1700.00</span>
                                    <span class="text-danger" style="font-size: 17px !important;"> Rs 800.00</span>
                                </span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-items-center ">
                                <span><a href=""><img src="../allimage/black2.webp" alt=""></a>
                                    <span><a href="" class="text-dark" style="text-decoration: none !important; font-size: 17px !important;">Money
                                            kills printed Oversized Tee</a></span><br>
                                    <span class="" style="font-size: 16px !important;text-decoration: line-through !important; ">Rs
                                        1200.00</span>
                                    <span class="text-danger" style="font-size: 17px !important;">Rs 750.00</span>
                                </span>
                                <span><a href=""><img src="../allimage/black4.webp" alt=""></a>
                                    <span><a href="" class="text-dark" style="text-decoration: none !important; font-size: 17px !important;">Money
                                            kills printed Oversized Tee</a></span><br>
                                    <span style="font-size: 16px !important; text-decoration:  line-through !important;">Rs
                                        1500.00</span>
                                    <span class="text-danger" style="font-size: 17px !important;">Rs 800.00</span>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-button-next" style="border-radius: 50% !important; color: black !important; border: 1px solid black !important; padding: 10px !important;">
                    </div>
                    <div class="swiper-button-prev" style="border-radius: 50% !important; color: black !important; border: 1px solid black !important; padding: 10px !important;">
                    </div>
                </div>

                <!-- Swiper JS -->
                <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

                <!-- Initialize Swiper -->
                <script>
                    var swiper = new Swiper(".mySwiper", {
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev",
                        },
                    });
                </script>
            </div>
        </div>
        <div class="">
            <center class="mt-5 tx ">
                <button class="bg-black text-white mt-4 mb-4" style="border: none !important; border: 1px solid black !important; padding: 8px 20px 8px 20px !important;">𝗩𝗜𝗘𝗪
                    𝗔𝗟𝗟</button>

                <!-- <h3 class="mt-5">𝗣𝗥𝗘𝗠𝗜𝗨𝗠 𝗢𝗩𝗘𝗥𝗦𝗜𝗭𝗘 𝗧𝗘𝗘𝗦</h3>
            <p>Latest trendy collection</p> -->

            </center>
        </div>
        <div class="container">
            <span class="txx10"><img src="./all iamge/mainphoto.webp" alt=""></span>
        </div>
        <div class="mx-5">
            <div class=" d-flex justify-content-between  ">
                <div class="  ">
                    <span class="photo2  ms-3"><i class="fa-solid fa-truck"></i></span><br>
                    <span class="" style="font-size: 11px !important;">FREE SHIPPING</span><br>
                    <span class="ms-3" style="font-size: 10px !important;">Pan India</span>
                </div>
                <div class=" ">
                    <span class="ms-4"><i class="fa-solid fa-arrow-rotate-left"></i></span><br>
                    <span class="ms-2" style="font-size: 11px !important;">FREE SHIPPING</span><br>
                    <span class="" style="font-size: 10px !important;">7 days Return policy</span>
                </div>
                <div class=" ">
                    <span class="ms-4"><i class="fa-regular fa-message"></i></span><br>
                    <span class="ms-2" style="font-size: 11px !important;">FREE SHIPPING</span><br>
                    <span class="" style="font-size: 10px !important;">Any query or return related</span>
                </div>

            </div>
        </div>
        <!-- seventh swiper used now .//// -->
        <!-- Swiper -->
        <center>
            <h3 class="mt-4 mb-5">𝗣𝗥𝗜𝗡𝗧𝗘𝗗 𝗛𝗢𝗢𝗗𝗜𝗘</h3>
        </center>
        <div class="mx-4 x10">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <!-- <div class="swiper-slide">
                    <div class="d-flex align-items-center ">
                        <span class="mx-3"><a href=""><img src="../allimage/hoodie1.webp" alt=""></a>
                            <span><a href="" class="text-dark"
                                    style="font-size: 15px !important;text-decoration: none !important;">Legendary
                                    stance - Printed Hoodie #13</a></span>
                            <span class=""
                                style="font-size: 16px !important; text-decoration: line-through !important;">Rs
                                2,500.00</span>
                            <span class="text-danger">Rs 1,300.00</span><br>
                            <span class="" style="font-size: 13px !important;"><i
                                    class="fa  fa-star checked"></i></span>
                            <span class="" style="font-size: 13px !important;"><i
                                    class="fa  fa-star checked"></i></span>
                            <span class="" style="font-size: 13px !important;"><i
                                    class="fa  fa-star checked"></i></span>
                            <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                            <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>
                        </span>
                        <span class="mx-3"><a href=""><img src="../allimage/hoodie3.webp" alt=""></a>
                            <span><a href="" class="text-dark"
                                    style="font-size: 15px !important;text-decoration: none !important;">Wild Cigar -
                                    Printed Hoodie #11</a></span><br>
                            <span class=""
                                style="font-size: 16px !important; text-decoration: line-through !important;">Rs
                                2,500.00</span>
                            <span class="text-danger">Rs 1,250.00</span><br>
                            <span class="" style="font-size: 13px !important;"><i
                                    class="fa  fa-star checked"></i></span>
                            <span class="" style="font-size: 13px !important;"><i
                                    class="fa  fa-star checked"></i></span>
                            <span class="" style="font-size: 13px !important;"><i
                                    class="fa  fa-star checked"></i></span>
                            <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                            <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>

                        </span>
                        <span class="mx-3"><a href=""><img src="../allimage/hoodie5.webp" alt=""></a>
                            <span><a href="" class="text-dark"
                                    style="font-size: 15px !important;text-decoration: none !important;">Wild Cigar -
                                    Printed Hoodie #11</a></span><br>
                            <span class=""
                                style="font-size: 16px !important; text-decoration: line-through !important;"> Rs
                                2,500.00</span>
                            <span class="text-danger">Rs 1,200.00</span><br>
                            <span class="" style="font-size: 13px !important;"><i
                                    class="fa  fa-star checked"></i></span>
                            <span class="" style="font-size: 13px !important;"><i
                                    class="fa  fa-star checked"></i></span>
                            <span class="" style="font-size: 13px !important;"><i
                                    class="fa  fa-star checked"></i></span>
                            <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                            <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>
                        </span>
                        <span class="mx-3"><a href=""><img src="../allimage/hoodie4.webp" alt=""></a>
                            <span><a href="" class="text-dark"
                                    style="font-size: 15px !important;text-decoration: none !important;">Wild Cigar -
                                    Printed Hoodie #11</a></span><br>
                            <span class=""
                                style="font-size: 16px !important; text-decoration: line-through !important;">Rs
                                2,500.00</span>
                            <span class="text-danger">Rs 1,200.00</span><br>
                            <span class="" style="font-size: 13px !important;"><i
                                    class="fa  fa-star checked"></i></span>
                            <span class="" style="font-size: 13px !important;"><i
                                    class="fa  fa-star checked"></i></span>
                            <span class="" style="font-size: 13px !important;"><i
                                    class="fa  fa-star checked"></i></span>
                            <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                            <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>
                        </span>
                    </div>
                </div> -->
                    <div class="swiper-slide">

                        <div class="d-flex align-items-center ">
                            <span class="mx-3"><a href=""><img src="../allimage/hoodie4.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="font-size: 15px !important;text-decoration: none !important;">Legendary
                                        stance - Printed Hoodie #13</a></span>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important;">Rs
                                    2,500.00</span>
                                <span class="text-danger">Rs 1,300.00</span><br>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                                <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>
                            </span>
                            <span class="mx-3"><a href=""><img src="../allimage/hoodie3.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="font-size: 15px !important;text-decoration: none !important;">Wild Cigar -
                                        Printed Hoodie #11</a></span><br>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important;">Rs
                                    2,500.00</span>
                                <span class="text-danger">Rs 1,250.00</span><br>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                                <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>

                            </span>
                            <span class="mx-3"><a href=""><img src="../allimage/hoodie5.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="font-size: 15px !important;text-decoration: none !important;">Wild Cigar -
                                        Printed Hoodie #11</a></span><br>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important;"> Rs
                                    2,500.00</span>
                                <span class="text-danger">Rs 1,200.00</span><br>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                                <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>
                            </span>
                            <span class="mx-3"><a href=""><img src="../allimage/hoodie4.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="font-size: 15px !important;text-decoration: none !important;">Wild Cigar -
                                        Printed Hoodie #11</a></span><br>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important;">Rs
                                    2,500.00</span>
                                <span class="text-danger">Rs 1,200.00</span><br>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa  fa-star checked"></i></span>
                                <span class="" style="font-size: 13px !important;"><i class="fa-regular fa-star"></i></span>
                                <span class="text-danger" style="font-size: 12px !important;">( 30% off)</span>
                            </span>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next" style="background-color: black !important; border-radius: 50%; padding: 10px !important; color: white !important;">
                </div>
                <div class="swiper-button-prev" style="background-color: black !important; border-radius: 50%; padding: 10px !important; color: white !important;">
                </div>
            </div>

            <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
            </script>
        </div>
        <!-- mobile swiper used now ./// -->
        <!-- Swiper -->
        <div class="x01">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center">
                            <span class="mx-2"><a href=""><img src="../allimage/hoodie4.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="font-size: 17px !important; text-decoration: none !important;">Legendary
                                        stance - Printed Hoodie #13</a></span><br>
                                <span class="" style="font-size: 15px !important; text-decoration: line-through !important;">Rs
                                    2,500.00</span>
                                <span class="text-danger" style="font-size: 17px !important;">Rs 1,200.00</span>
                            </span>
                            <span class="mx-2"><a href=""><img src="../allimage/hoodie3.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="font-size: 17px !important; text-decoration: none !important;">Wild Cigar -
                                        Printed Hoodie #11</a></span><br>
                                <span class="" style="font-size: 15px !important; text-decoration: line-through !important;">Rs
                                    2,500.00</span>
                                <span class="text-danger" style="font-size: 17px !important;">Rs 1,300.00</span>
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center">
                            <span class="mx-2"><a href=""><img src="../allimage/hoodie4.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="font-size: 17px !important; text-decoration: none !important;">Legendary
                                        stance - Printed Hoodie #13</a></span><br>
                                <span class="" style="font-size: 15px !important; text-decoration: line-through !important;">Rs
                                    2,500.00</span>
                                <span class="text-danger" style="font-size: 17px !important;">Rs 1,200.00</span>
                            </span>
                            <span class="mx-2"><a href=""><img src="../allimage/hoodie2.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="font-size: 17px !important; text-decoration: none !important;">Wild Cigar -
                                        Printed Hoodie #11</a></span><br>
                                <span class="" style="font-size: 15px !important; text-decoration: line-through !important;">Rs
                                    2,500.00</span>
                                <span class="text-danger" style="font-size: 17px !important;">Rs 1,300.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next" style="background-color: black !important; border-radius: 50%; padding: 14px !important; color: white !important;">
                </div>
                <div class="swiper-button-prev" style="background-color: black !important; border-radius: 50%; padding: 14px !important; color: white !important;">
                </div>
            </div>

            <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
            </script>
        </div>
        <div class="">
            <center class="mt-5 tx ">
                <button class="bg-black text-white mt-4" style="border: none !important; border: 1px solid black !important; padding: 8px 20px 8px 20px !important;">𝗩𝗜𝗘𝗪
                    𝗔𝗟𝗟</button>

                <h3 class="mt-5"> 🎀𝗣𝗥𝗜𝗡𝗧𝗘𝗗 𝗦𝗪𝗘𝗔𝗧𝗦𝗛𝗜𝗥𝗧 🎀</h3>
                <!-- <p>Latest trendy collection</p> -->

            </center>
        </div>

        <!-- eight swiper used now ..///// -->
        <!-- Swiper -->
        <div class="mx-4 mt-4 x10">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center">
                            <span class="mx-3"><a href=""><img src="../allimage/newhoodie1.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="font-size: 18px !important; text-decoration: none !important; ">Primium
                                        Printed Sweatshirt #6</a></span><br>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important; ">Rs
                                    1,999.00</span>
                                <span class="text-danger">Rs 999.00</span>
                            </span>
                            <span class="mx-3"><a href=""><img src="../allimage/newhoodie5.webp" alt="no image found"></a>
                                <span><a href="" class=" text-dark" style="font-size: 18px !important; text-decoration: none !important; ">Primium
                                        Printed Sweatshirt #3</a></span><br>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important; ">Rs
                                    1,999.00</span>
                                <span class="text-danger">Rs 999.00</span>
                            </span>
                            <span class="mx-3"><a href=""><img src="../allimage/newhoodie3.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="font-size: 18px !important; text-decoration: none !important; ">Primium
                                        Printed Sweatshirt #7</a></span><br>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important; ">Rs
                                    1,999.00</span>
                                <span class="text-danger">Rs 999.00</span>
                            </span>
                            <span class="mx-3"><a href=""><img src="../allimage/newhoodie5.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="font-size: 18px !important; text-decoration: none !important; ">Primium
                                        Printed Sweatshirt #6</a></span><br>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important; ">Rs
                                    1,999.00</span>
                                <span class="text-danger">Rs 999.00</span>
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center">
                            <span class="mx-3"><a href=""><img src="../allimage/newhoodie1.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="font-size: 18px !important; text-decoration: none !important; ">Primium
                                        Printed Sweatshirt #6</a></span><br>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important; ">Rs
                                    1,999.00</span>
                                <span class="text-danger">Rs 999.00</span>
                            </span>
                            <span class="mx-3"><a href=""><img src="../allimage/newhoodie5.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="font-size: 18px !important; text-decoration: none !important; ">Primium
                                        Printed Sweatshirt #3</a></span><br>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important; ">Rs
                                    1,999.00</span>
                                <span class="text-danger">Rs 999.00</span>
                            </span>
                            <span class="mx-3"><a href=""><img src="../allimage/newhoodie3.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="font-size: 18px !important; text-decoration: none !important; ">Primium
                                        Printed Sweatshirt #7</a></span><br>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important; ">Rs
                                    1,999.00</span>
                                <span class="text-danger">Rs 999.00</span>
                            </span>
                            <span class="mx-3"><a href=""><img src="../allimage/newhoodie5.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="font-size: 18px !important; text-decoration: none !important; ">Primium
                                        Printed Sweatshirt #6</a></span><br>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important; ">Rs
                                    1,999.00</span>
                                <span class="text-danger">Rs 999.00</span>
                            </span>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next" style="background-color: black !important; border-radius: 50%; padding: 11px !important; color: white !important;">
                </div>
                <div class="swiper-button-prev" style="background-color: black !important; border-radius: 50%; padding: 11px !important; color: white !important;">
                </div>
            </div>

            <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
            </script>
        </div>

        <!-- mobile swiper used now ..//// -->
        <!-- Swiper -->
        <div class="mx-2 mt-4 x01">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center">
                            <span class="mx-2"><a href=""><img src="../allimage/newhoodie3.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="font-size: 18px !important; text-decoration: none !important; ">Primium
                                        Printed Sweatshirt #6</a></span><br>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important; ">Rs
                                    1,999.00</span>
                                <span class="text-danger">Rs 999.00</span>
                            </span>
                            <span class="mx-2"> <a href=""><img src="../allimage/newhoodie2.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="font-size: 18px !important; text-decoration: none !important; ">Primium
                                        Printed Sweatshirt #3</a></span><br>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important; ">Rs
                                    1,999.00</span>
                                <span class="text-danger">Rs 999.00</span>
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center">
                            <span class="mx-2"><a href=""><img src="../allimage/newhoodie1.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="font-size: 18px !important; text-decoration: none !important; ">Primium
                                        Printed Sweatshirt #6</a></span><br>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important; ">Rs
                                    1,999.00</span>
                                <span class="text-danger">Rs 999.00</span>
                            </span>
                            <span class="mx-2"><a href=""><img src="../allimage/newhoodie3.webp" alt=""></a>
                                <span><a href="" class="text-dark" style="font-size: 18px !important; text-decoration: none !important; ">Primium
                                        Printed Sweatshirt #3</a></span><br>
                                <span class="" style="font-size: 16px !important; text-decoration: line-through !important; ">Rs
                                    1,999.00</span>
                                <span class="text-danger">Rs 999.00</span>
                            </span>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next" style="background-color: black !important; border-radius: 50%; padding: 14px !important; color: white !important;">
                </div>
                <div class="swiper-button-prev" style="background-color: black !important; border-radius: 50%; padding: 14px !important; color: white !important;">
                </div>
            </div>

            <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
            </script>
        </div>
        <div class="">
            <center class="mt-3 tx  ">
                <button class="bg-black text-white mt-4 mx-2 mb-2" style="border: none !important; border: 1px solid black !important; padding: 8px 20px 8px 20px !important;">𝗩𝗜𝗘𝗪
                    𝗔𝗟𝗟</button>

                <!-- <h3 class="mt-5">𝗣𝗥𝗘𝗠𝗜𝗨𝗠 𝗢𝗩𝗘𝗥𝗦𝗜𝗭𝗘 𝗧𝗘𝗘𝗦</h3>
            <p>Latest trendy collection</p> -->

            </center>
        </div>
        <div class="">
            <div class="row row-text">
                <div class="col-lg-6 ">
                    <img src="../allimage/primiumfull.webp" alt="" width="100%" style="height: max-content !important;">
                </div>
                <div class="col-lg-6  bg-dark text-white" style="background-color: black !important;">
                    <h1 class="mt-5 mx-5">Unleash Your Style, Embrace the Comfort: Premium Oversized Tee Await You!</h1>

                    <div class="">
                        <div class=" mx-5 ">
                            <span class="" style="font-size: 19px !important;">1. Luxurious Quality:</span> <span class="" style="font-size: 16px !important;"> Crafted with precision, our Oversize Tee exudes
                                sophistication and comfort.</span>
                        </div>
                        <div class="mx-5">
                            <span class="" style="font-size: 19px !important;">2.Made in India:</span> <span class="" style="font-size: 16px !important;"> Crafted with precision, our Oversize Tee exudes
                                sophistication and comfort.</span>
                        </div>
                        <div class=" mx-5 ">
                            <span class="" style="font-size: 19px !important;">3. Supreme Comfort: </span> <span class="" style="font-size: 16px !important;"> Crafted with precision, our Oversize Tee exudes
                                sophistication and comfort.</span>
                        </div>
                        <div class=" mx-5 ">
                            <span class="" style="font-size: 19px !important;">4.Supreme Comfort: </span> <span class="" style="font-size: 16px !important;"> Crafted with precision, our Oversize Tee exudes
                                sophistication and comfort.</span>
                        </div>
                        <div class=" mx-5">
                            <span class="" style="font-size: 19px !important;">5. Bio Washed: </span> <span class="" style="font-size: 16px !important;"> Crafted with precision, our Oversize Tee exudes
                                sophistication and comfort.</span>
                        </div>
                        <div class="mx-5">
                            <span class="" style="font-size: 19px !important;">6. Elevated Style: </span> <span class="" style="font-size: 16px !important;"> Crafted with precision, our Oversize Tee exudes
                                sophistication and comfort. ✿◉●•◦🎉♛🎀🐼</span>
                        </div>
                        <div class="mx-5">
                            <button class="mt-5 ms-3 mb-3" style="border: none !important; border: 1px solid white !important;  padding: 8px 20px 8px 20px !important;">SHOP
                                NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include("footer.php");

        ?>

</body>
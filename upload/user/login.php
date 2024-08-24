<?php
include("header.php");

?>

<!-- Home acounts add now ..///// -->

<div class="">
    <p class="p-2" style="font-size: 15px !important; background-color: aliceblue !important;">Home | Account
    </p>
</div>
<div class="">
    <center class="mt-3">
        <h4>My Account</h4>
    </center>
</div>
<div class="">
    <div class="row w33">
        <div class="col-lg-6 mt-4 ">
            <div class="  w1 me-4" style="height: 50vh !important; border: 1px solid rgb(237, 230, 230) !important;">
                <h5 class="ms-5 mt-4 mb-3">LOIGN</h5>
                <p class="ms-5">If you have an account with us, please log in.</p>
                <input id="checkemail" type="email" placeholder="Email" class="w-75 mb-3 ms-5 mt-4 ps-3 py-2 bx11" autofocus><br>
                <input id="pass" type="password" placeholder="password" class="w-75  ms-5  ps-3 py-2  bx11">
                <div class="d-flex">
                    <div class="bx01">
                        <button class="ms-5 mt-4 bg-black text-white bx01 " style="padding: 4px 18px 4px 18px !important; border: none !important; border: 1px solid black !important;" onclick="signup()">SIGN
                            IN </button>
                    </div>
                    <div class="bx2">
                        <P class="mt-4 ms-5 ">Forgot your password?</P>
                    </div>
                </div>
                <script>
                    function signup() {
                        var email = $("#checkemail").val();
                        var pass = $("#pass").val();
                        $.post("allphp.php", {
                                action: "login",
                                email: email,
                                pass: pass
                            },
                            function(data) {
                                alert(data);
                                if (data == 1) {    
                                    window.location.href = "trandstore.php";
                                } else if(data==0) {
                                    alert("plase check your details");
                                    // window.location.href = "REGISTER.php";

                                }else if(data==2){
                                    window.location.href = "../admin/dashboard.php";
                                }
                            });

                    }
                </script>
            </div>

        </div>
        <div class="col-lg-6 mt-4" style="height: 50vh !important;">
            <div class="  me-3 w3" style="height: 50vh !important;border: 1px solid rgb(237, 230, 230) !important;">
                <h5 class="mt-4 ms-5 mb-4">NEW CUSTOMER?</h5>
                <div class="mx-5">
                    <p class="">Registering for this site allows you to access your order</p>
                    <p class="">status and history. We’ll get a new account set up for</p>
                    <p class="">you in no time. For this will only ask you for information</p>
                    <p class="">necessary to make the purchase process faster and</p>
                    <p>easier</p>
                </div>
                <div class="bx01">
                    <a href="REGISTER.html">
                        <button class="ms-5 mt-3  text-white bg-black " style="border: none !important; border: 1px solid black !important; padding: 5px 20px 5px 20px !important; ">CEARTE
                            AN ACCOUNT</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer show in used now ..///// -->
<div class="" style="border-top: 1px solid white !important; background-color: black !important;">
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
    <p class="py-4 ms-5 text-white">© Copyright 2023 Trendin - JJ METAL</p>

</div>
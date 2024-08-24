<?php
include("connection.php");
include("header.php");
$data4=$conn->query("SELECT * FROM registerdata WHERE email='$loginemail'");
if (mysqli_num_rows($data4)>0) {
    $result=mysqli_fetch_assoc($data4);
    $username=$result['name'];

}



?>
<style>
    .fc {

        font-family: 'Lato', sans-serif;
        color: rgba(116, 116, 116, 0.667);

    }

    .fc2 {
        color: #BA68C8;
    }
</style>

<body>
    <input type="text" id="orderemail" class="d-none" value="<?php echo $loginemail?>">
    <div class="container-fluid d-flex justify-content-center" style="height: 100vh; background: linear-gradient(140deg , #fff , 50% , #BA68C8);">

        <div class="container bg-white m-2 p-4" style="width: 80%;">
            <div class="d-flex mt-3  align-items-center justify-content-between">
                <h3 class="fc">Thanks for your Order <span class="fc2"><?php echo $username?></span></h3>
                <a class="navbar-brand" href="#"><img src="../allimage/trand.avif" alt=""></a>
            </div>
            <h2 class="mt-3 fc2">Receipt</h2>
            <div class="border shadow mt-3" id="ordershow">
               <script>
                var orderemail=$("#orderemail").val();
                
                $.post("allphp.php",{
                    action:"ordershow",
                    orderemail:orderemail

                },function(data){
                
                    $("#ordershow").html(data);
                });

               </script>
            </div>
            <div class="mt-5 d-flex justify-content-between">
                <div class="">
                    <h4>Order Details</h4>
                    <p class="fc mt-2">Invoice : 78964</p>
                    <p class="fc">Recepits Voucher: 18KU-34IL</p>
                </div>
                <div class="fc">
                    <p>total : 4486</p>
                    <p>Discount : 150</p>
                    <p>GST 18%  : 845</p>
                    <p>Delivery Charges  : free</p>
                </div>
            </div>
        </div>

    </div>



    </div>



</body>

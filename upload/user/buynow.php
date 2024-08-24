<?php
include("connection.php");
include("header.php");

?>
<style>
    .c-45595b{
        color: #45595b;
    }
    .c-747D88{
        color: #747D88;
    }
</style>


<body>
    <div class="container px-4">
        <div class="container py-5">
            <div class="container py-5">
                <h1 class="mb-4 c-45595b">Billing details</h1>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6 col-lg-7">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <label for="First-name" class="my-3 c-747D88">First Name <sup>*</sup></label>
                                    <input class="form-control" type="text" id="Firstname" name="fname">
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="Last-name" class="my-3 c-747D88">Last Name <sup>*</sup></label>
                                    <input class="form-control" type="text" id="Lastname" name="lname">
                                </div>
                            </div>

                            <div class="">
                                <label class="my-3 c-747D88" for="Address">Address <sup>*</sup></label>
                                <input class="form-control" type="text" name="Address" id="Address" placeholder="House Number Street Name">
                            </div>
                            <div class="">
                                <label for="city" class="my-3 c-747D88">Town/city <sup>*</sup></label>
                                <input type="text" id="city" name="city" class="form-control">
                            </div>
                            <div class="">
                                <label class="my-3 c-747D88" for="postcode">Poatcode/Zip <sup>*</sup></label>
                                <input type="text" name="zip" class="form-control" id="postcode">
                            </div>
                            <div class="">
                                <label class="my-3 c-747D88" for="landmark">Land Mark <sup>*</sup></label>
                                <input type="text" class="form-control" name="landmark" id="landmark">
                            </div>
                            <div class="">
                                <label for="Mobile" class="my-3 c-747D88">Mobile <sup>*</sup></label>
                                <input type="text" name="phone" id="Mobile" class="form-control">
                            </div>
                            <div class="">
                                <label for="Email" class="my-3 c-747D88">Email Adress <sup>*</sup></label>
                                <input type="text" name="email" id="Email" class="form-control">
                            </div>
                            <hr>
                            <div class="my-3">
                                <input type="checkbox" name="" id="ship-a">
                                <label class="c-747D88" for="ship-a">Ship to a different adreess</label>
                            </div>
                            <!-- <div class="">
                                <textarea class="form-control" name="" id="" cols="30" rows="11" placeholder="Order Notes (optional)"></textarea>
                            </div> -->
                        </div>


                        <!-- showdata -->
                        <div class="col-md-1 col-lg-1">
                        </div>


                        <div class="col-md-5 col-lg-4">
                            <div>
                                <?php
                                $data = $conn->query("SELECT * FROM addtocart where email='$loginemail' ");
                                if (mysqli_num_rows($data) > 0) {
                                    $output = " <div class='table-responsive'>
                                 <table class='table '>
                                    <thead>
                                         <tr>
                                             <th scope='col' class='c-747D88'>products</th>
                                             <th scope='col' class='c-747D88'> Name </th>
                                             <th scope='col' class='c-747D88'>Price</th>
                                             <th scope='col' class='c-747D88'>Quantty</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>";
                                    while ($result = mysqli_fetch_assoc($data)) {
                                        $productimg = $result['imageone'];
                                        $productname = $result['itemname'];
                                        $price = $result['price'];
                                        $quantity = $result['quantity'];
                                        $output .= "
                                            <tr class=''>
                                                <td scope='row'>
                                                    <img class='rounded-circle'
                                                        src='../allimage/$productimg' alt=''
                                                        width='100px'>
                                                </td>
                                                <td>
                                                    <div class='pt-4 c-747D88'>$productname</div>
                                                </td>
                                                <td>
                                                    <div class='pt-4 c-747D88'>$price</div>
                                                </td>
                                                <td>
                                                    <div class='pt-4 c-747D88'>$quantity</div>
                                                </td>
                                              
                                            </tr>
                                    
                                    ";
                                    }
                                    $output .= "</tboody>
                                    </table>
                                </div> ";
                                    echo $output;
                                }

                                ?>
                            </div>

                            <div class="row border-bottom py-3">
                                <div class="col-lg-12">
                                    <div class="my-3">
                                        <input type="checkbox" id="d-bank" class="form-check-input bg-81c408">
                                        <label for="d-bank" class="c-747D88">Direct Bank Transfer</label>
                                        <p class="c-45595b">Make your payment directly into our bank
                                            account. Please use your Order ID as the payment reference. Your order
                                            will not be shipped until the funds have cleared in our account.</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-4 align-items-center border-bottom ">
                                <div class="col-lg-12">
                                    <input type="checkbox" id="c-pay" class="form-check-input bg-81c408">
                                    <label for="c-pay" class="c-747D88">Check Payment</label>
                                </div>
                            </div>
                            <div class="row py-4 align-items-center border-bottom ">
                                <div class="col-lg-12">
                                    <input type="checkbox" id="cod" class="form-check-input bg-81c408">
                                    <label for="cod" class="c-747D88">Cash On Delivery</label>
                                </div>
                            </div>
                            <div class="row py-4 align-items-center border-bottom ">
                                <div class="col-lg-12">
                                    <input type="checkbox" id="Paypal" class="form-check-input bg-81c408">
                                    <label for="Paypal" class="c-747D88">Paypal</label>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <button class="btn py-3 btn-h" style="border: 1px solid #ffb534; color: #81c408;" name='placeorder'>Place order</button>
                            </div>
                        </div>
                    </div>
                </form>
                <?php
                if (isset($_POST['placeorder'])) {
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $address = $_POST['Address'];
                    $city = $_POST['city'];
                    $zip = $_POST['zip'];
                    $landmark = $_POST['landmark'];
                    $mobile = $_POST['phone'];
                    $email = $_POST['email'];
                    $data=$conn->query("INSERT INTO `userorder`(`id`, `firstname`, `lastname`, `address`, `city`, `zipcode`, `landmark`, `mobile`, `email`, `productimage`, `productname`, `productprice`, `productquantity`) 
                    VALUES (NULL,'$fname','$lname','$address','$city','$zip','$landmark','$mobile','$email','$productimg','$productname','$price','$quantity')");
                     
                    if ($data) {
                        echo "<script> alert('Order successfull')
                                    window.location='userordershow.php'
                                    </script>";

                      
                    } else {
                        echo "erro";
                    }
                }


                ?>

            </div>
        </div>
    </div>

</body>
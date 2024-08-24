<?php
session_start();
include("connection.php");
$action = $_POST['action'];
if ($action == "action") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    echo $fname;
    $data2 = $conn->query("SELECT * FROM `registerdata` WHERE email='$email'and password='$pass'");
    if (mysqli_num_rows($data2) > 0) {
        echo "data alredy present";
    } else {
        $data = $conn->query("INSERT INTO `registerdata`(`id`, `name`, `lname`, `email`, `password`) VALUES ('null','$fname','$lname','$email','$pass')");
        if ($data) {
            echo "data successfully insert";
        } else {
            echo "erro";
        }
    }
}
if ($action == "login") {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // $data=$conn->query("SELECT * FROM `registerdata` WHERE  email='$email' and password='$pass'");
    $data = $conn->query("SELECT * FROM `registerdata` WHERE email='$email' and password='$pass'");
    
    if (mysqli_num_rows($data)>0) {
        echo 1;
        $_SESSION['email']= $email;

    }else{
        echo 0;
    }
    $data2 = $conn->query("SELECT * FROM `admin` where adminemail='$email' and adminpass='$pass' ");
   
    if (mysqli_num_rows($data2) > 0) {
        // $result = (mysqli_fetch_assoc($data));
        // $adminemail = $result['adminemail'];
        // $adminpass = $result['admin'];
        // echo $adminemail;
        $_SESSION['loginemail'] = $email;

        echo 2;
    }
}
if ($action=="ordershow") {
    $orderemail=$_POST['orderemail'];
    $data=$conn->query("SELECT *FROM userorder WHERE email='$orderemail'");
    if (mysqli_num_rows($data)>0) {
        $output="
        <div class='table-responsive'>
                    <table class='table bordered'>
                        <thead>
                            <tr>
                                <th scope='col' class='c-747D88'>product image</th>
                                <th scope='col' class='c-747D88'> Name </th>
                                <th scope='col' class='c-747D88'>Price</th>
                                <th scope='col' class='c-747D88'>Quantty</th>

                            </tr>
                        </thead>
                        <tbody>
        ";
        while($result=mysqli_fetch_assoc($data)){
           $productimage=$result['productimage'];
           $productname=$result['productname'];
           $productprice=$result['productprice'];
           $productquantity=$result['productquantity'];
            $output.="
             <tr class=''>
                                <td scope='row'>
                                    <img class='' src='../allimage/$productimage' alt='' width='120px'>
                                </td>
                                <td>
                                    <div class='pt-4 '>$productname</div>
                                </td>
                                <td>
                                    <div class='pt-4 '>$productprice</div>
                                </td>
                                <td>
                                    <div class='pt-4 '>$productquantity</div>
                                </td>

                            </tr>
            
            
            ";
        }
        $output.="
          </tboody>
                    </table>
                </div>
        ";
        echo $output;
     
    }
  
}

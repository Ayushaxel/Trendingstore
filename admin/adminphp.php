<?php
session_start();

include("../user/connection.php");


$action=$_POST['action'];
if($action=='description'){
    $description=$_POST['des'];
    $adminemail=$_POST['email'];
    $adminname=$_POST['adminname'];
    $clothtyp=$_POST['clothtyp'];
    $data=$conn->query("INSERT INTO `description`(`id`, `adminname`, `adminemail`, `clothtype`, `descriptionadd`) 
    VALUES (NULL,'$adminname','$adminemail','$clothtyp','$description')");
    if($data){
        echo "data insert";
    }else{
        echo "error";
    }

}
else if($action == 'addprice'){
    echo "yes";
    $adminname=$_POST["adminname"];
    $price=$_POST["price"];
    $dubprice=$_POST["dubprice"];
    $adminemail=$_POST["email"];
    $discount=$_POST['discount'];
    $data=$conn->query("INSERT INTO `price`(`id`, `adminname`, `adminemail`, `price`, `dubprice`, `discount`) 
    VALUES (NULL,'$adminname','$adminemail','$price','$dubprice','$discount')");
    if($data){
        echo "insert";
    }else{
        echo "errpt";
    } 
}
    else if($action == 'addinfo'){
        $adminname=$_POST["adminname"];
        $cop=$_POST["cop"];
        $printtyp=$_POST["printtyp"];
        $adminemail=$_POST["email"];
        $sleeve=$_POST['sleeve'];
        $necktyp=$_POST['necktyp'];
        $fit=$_POST['fit'];
       
        // echo $cop;
        $data=$conn->query("INSERT INTO `otherinfo`(`id`, `adminname`, `adminemail`, `countryproduct`, `printtype`, `sleeve`, `necktype`, `fit`)
         VALUES (NULL,'$adminname','$adminemail','$cop','$printtyp','$sleeve','$necktyp','$fit')");
        if($data){
            echo "insert";
        }else{
            echo "errpt";
        }
    }


?>

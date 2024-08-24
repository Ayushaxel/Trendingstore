<?php
$servername='localhost';
$username='root';
$password='';
$dbname='trendingstor';
$conn= new mysqli($servername,$username,$password,$dbname) ;
if ($conn) {
//    echo "successfully";
}
else {
    echo "connectin is not successfully";
}
?>
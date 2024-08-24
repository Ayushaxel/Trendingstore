<?php
// error_reporting(0);
session_start();
include("connection.php");
$loginemail = $_SESSION['email'];
echo $loginemail;
$data = $conn->query("SELECT * FROM registerdata where email='$loginemail'");
if (mysqli_num_rows($data) > 0) {
  $result = mysqli_fetch_assoc($data);
  $firstname = $result['name'];
  $lastname = $result['lname'];
  $emailid = $result['email'];
}
  $data2  = $conn->query("SELECT * FROM `updatedetails` WHERE email='$loginemail'");
   $ttt=mysqli_num_rows($data2);
   echo $ttt;
  if (mysqli_num_rows($data2) > 0) {
    while($result2 = mysqli_fetch_assoc($data2)){
      $profilepic=$result2['profilepic'];
    $address = $result2['address'];
    $mobile = $result2['phone'];
    // echo $address . "  " . $mobile;
    $emailiduser = $result['email'];
  }}



if (isset($_POST['logout'])) {
  // $loginemail = $_SESSION['email'];
  session_unset();
  $loginemail = $_SESSION['email'];
  header("location: trandstore.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

</body>

</html>
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-body-tertiary rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="trandstore.php">Home</a></li>
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">

          <div class="card-body text-center">
            <?php
              if (mysqli_num_rows($data2) == 0) {
             echo "<img src='../allimage/ava3 (1).webp' alt='avatar' class='rounded-circle img-fluid' style='width: 150px;'>";
            }
             else{
              echo "
              <img src='../upload/$profilepic' alt='avatar' class='rounded-circle img-fluid' style='width: 150px;'>
              
              ";
            
            }

            ?>
            <h5 class="my-3"><?php echo $firstname ?></h5>
            <?php
               if (mysqli_num_rows($data2) == 0) {
                 echo "
                 <p class='text-muted mb-4'></p>
                 " ;
               }else{
                echo "<p class='text-muted mb-4'><?php echo $address ?></p>";
               }
            ?>
            
            <div class="d-flex justify-content-center mb-2">
              <a href="updatedetails.php" type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">update</a>
              <a href="editdetails.php" type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary ms-1">Edit</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">

              <li class="list-group-item d-flex justify-content-between  align-items-center p-3">
                <div class="d-flex align-items-center justify-content-between w-100 px-2">
                  <div class="d-flex align-items-center w-100">
                    <i class="fa-solid fa-cube"></i>
                    <a href="userordershow.php" class="w-100"> <button class=" btn btn-lg text-start  w-100">Orders</button></a>
                  </div>
                  <i class="fa-solid fa-arrow-right"></i>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between  align-items-center p-3">
                <div class="d-flex align-items-center justify-content-between w-100 px-2">
                  <div class="d-flex align-items-center">
                    <i class="fa-solid fa-share-nodes"></i>
                    <a href="" class="w-100"> <button class=" btn btn-lg  w-100">Referrals</button></a>
                  </div>
                  <i class="fa-solid fa-arrow-right"></i>
                </div>

              </li>
              <li class="list-group-item d-flex justify-content-between  align-items-center p-3">
                <div class="d-flex align-items-center justify-content-between w-100 px-2">
                  <div class="d-flex align-items-center">
                    <i class="fa-solid fa-question"></i>
                    <a href="" class="w-100"> <button class=" btn btn-lg  w-100">Help & Support</button></a>
                  </div>
                  <i class="fa-solid fa-arrow-right"></i>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between  align-items-center p-3">
                <div class="d-flex align-items-center justify-content-between w-100 px-2" style="cursor: pointer;">
                  <div class="d-flex align-items-center  w-100">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <form action="" method="post" class="w-100">
                      <button class="w-100 btn btn-lg text-start" name="logout">Loguot</button>
                    </form>
                  </div>
                  <i class="fa-solid fa-arrow-right"></i>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <?php
            if (mysqli_num_rows($data2) == 0) {
              echo "
              <div class='row'>
              <div class='col-sm-3'>
                <p class='mb-0'>Full Name</p>
              </div>
              <div class='col-sm-9'>
                <p class='text-muted mb-0'> $firstname $lastname</p>
              </div>
            </div>
            <hr>
            <div class='row'>
              <div class='col-sm-3'>
                <p class='mb-0'>Email</p>
              </div>
              <div class='col-sm-9'>
                <p class='text-muted mb-0'> $loginemail</p>
              </div>
            </div>
            <hr>
            <div class='row'>
              <div class='col-sm-3'>
                <p class='mb-0'>Phone</p>
              </div>
              <div class='col-sm-9'>
              <p class='text-muted mb-0'>plase update your details</p>
            </div>
            
            </div>
            <hr>
            
            <div class='row'>
              <div class='col-sm-3'>
                <p class='mb-0'>Address</p>
              </div>
              <div class='col-sm-9'>
                <p class='text-muted mb-0'>plase update your details</p>
              </div>
            </div>
              
              ";
          
            } else {
              echo "
                <div class='row'>
              <div class='col-sm-3'>
                <p class='mb-0'>Full Name</p>
              </div>
              <div class='col-sm-9'>
                <p class='text-muted mb-0'> $firstname $lastname</p>
              </div>
            </div>
            <hr>
            <div class='row'>
              <div class='col-sm-3'>
                <p class='mb-0'>Email</p>
              </div>
              <div class='col-sm-9'>
                <p class='text-muted mb-0'> $loginemail</p>
              </div>
            </div>
            <hr>
            <div class='row'>
              <div class='col-sm-3'>
                <p class='mb-0'>Phone</p>
              </div>
              <div class='col-sm-9'>
              <p class='text-muted mb-0'> $mobile</p>
            </div>
            </div>
            <hr>
            
            <div class='row'>
              <div class='col-sm-3'>
                <p class='mb-0'>Address</p>
              </div>
              <div class='col-sm-9'>
                <p class='text-muted mb-0'> $address</p>
              </div>
            </div>
                ";
            }


            ?>
          </div>
        </div>
        <!--  -->
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Wallet</span> Balance
                </p>
                <div>
                  <i class="fa-solid fa-indian-rupee-sign"></i> <span>0</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Refferral </span> Balance
                </p>
                <div>
                  <i class="fa-solid fa-indian-rupee-sign"></i> <span>0</span>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
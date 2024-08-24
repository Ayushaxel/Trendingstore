<?php
session_start();
include("connection.php");
$loginemail = $_SESSION['email'];
$data = $conn->query("SELECT * FROM registerdata where email='$loginemail'");
if (mysqli_num_rows($data) > 0) {
    $result = mysqli_fetch_assoc($data);
    $firstname = $result['name'];
    $lastname = $result['lname'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>

</body>

</html>

<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-12">
                <a style="position: absolute; top: 0; left: 10px; font-size: 25px;" href="userprofile.php"><i class=" text-primary fa-solid fa-circle-arrow-left"></i></a>
                <h1 class="text-center text-primary">Update Details</h1>
                <div class="p-3 row">
                    <div class="col-lg-6">
                        <label for="name" class="form-label fs-5">Select profile pic<sup>*</sup></label>
                        <input type="file" class="form-control_1 form-control d-block" name="image" id="image" value="">
                    </div>
                    <div class="col-lg-6">
                        <label for="name" class="form-label fs-5">Name <sup>*</sup></label>
                        <input type="text" class="form-control_1 form-control d-block" name="firstname" id="firstname" value="<?php echo $firstname ?>">
                    </div>
                    <div class="col-lg-6">
                        <label for="name" class="form-label fs-5">Last <sup>*</sup></label>
                        <input type="text" class="form-control form-control_1 form-control" name="lastname" id="lastname" value="<?php echo $lastname ?>">
                    </div>
                    <div class="col-lg-6">
                        <label for="name" class="form-label fs-5">Email <sup>*</sup></label>
                        <input type="text" class="form-control form-control_1" name="email" id="email" value="<?php echo $loginemail ?>">
                    </div>
                    <div class="col-lg-6">
                        <label for="phone" class="form-label fs-5">Phone <sup>*</sup></label>
                        <input type="number" class="form-control form-control_1" name="phone" id="phone" value="">
                    </div>
                    <div class="col-lg-6">
                        <label for="address" class="form-label fs-5">Address <sup>*</sup></label>
                        <input type="text" class="form-control form-control_1" name="address" id="address" value="">
                    </div>
                    <p id="error" class="text-center pt-3 text-danger"></p>
                    <button style=" color: white;" class="btn mt-3 bg-primary" name='update'>Update</button>
                </div>
            </div>
        </div>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $imagename = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        $name = $_POST['firstname'];
        $last = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $useraddres = $_POST['address'];
        $addres = "../upload/" . $imagename;
        $data = $conn->query("INSERT INTO `updatedetails`( `firstname`, `lastname`, `email`, `phone`, `address`, `profilepic`)
                             VALUES ('$name','$last','$email','$phone','$useraddres','$imagename')");
        if ($data) {
            move_uploaded_file($tempname, $addres);
            echo "   <script> 
                          alert('update');
                    </script>";
            header('location:trandstore.php');
        } else {
            echo "code error";
        }
    }

    ?>

</div>
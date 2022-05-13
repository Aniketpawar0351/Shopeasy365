<?php
session_start();
include("database.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopeasy365</title>
    <link rel="shortcut icon" href="img/webi1.png"/>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />

  <style type="text/css">
		.container{
			margin-top: 1%;
			width: 350px;
			border: ridge 1.4px white;
			padding: 20px;
		}
		body{
			background: #E0EAFC;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #CFDEF3, #E0EAFC);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #CFDEF3, #E0EAFC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}
	</style>
</head>
<body>
  <div class="container">
    <h2>Registration Form</h2>
  <form action="registore_page.php" method="post">
    <div class="form-group">
    <label for="full_name">Full Name</label>
    <input type="text" class="form-control" id="exampleInputfirstname" name="full_name" required>
  </div>
  <div class="form-group">
    <label for="shop_name">Shop Name</label>
    <input type="text" class="form-control" id="exampleInputlastname" name="shop_name" required>
  </div>
  <div class="form-group">
    <label for="phone_no">Phone Number</label>
    <input type="text" class="form-control" id="exampleInputphoneno" name="phone_no" required>
  </div>
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
  </div>
  <div class="form-group">
  <label for="ruser">Username</label>
  <input type="text" class="form-control" id="exampleInputEmail1"  name="ruser" required>
  </div>
  <div class="form-group">
    <label for="rpass">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword" name="rpass" required>
  </div>
  <div class="form-group">
    <label for="repeat_pass">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword" name="repeat_pass" required>
  </div>
  <button type="submit" class="btn btn-primary" name="rsub">Sign up</button>
  </form>
  </div>
</body>
</html>
<?php

if(isset($_REQUEST['rsub'])){
  $full_name=$_REQUEST['full_name'];
  $shop_name=$_REQUEST['shop_name'];
  $email=$_REQUEST['email'];
  $phone_no=$_REQUEST['phone_no'];
  $ruser=$_REQUEST['ruser'];
  $rpass=$_REQUEST['rpass'];
  $repeat_pass=$_REQUEST['repeat_pass'];
  $rdate=date('Y-m-d');
  $sql1="SELECT * FROM `1client_details` WHERE EMAIL='$email'";
  $result=mysqli_query($con,$sql1);
  $r=mysqli_num_rows($result);
  if($r>0){
    die("<script>Swal.fire({
  icon: 'alert',
  title: 'Oops...',
  text: 'Email Alredy Exist'
})</script>");
  }
  $sql3="SELECT * FROM `1admin` WHERE PASSWORD='$rpass'";
  $result1=mysqli_query($con,$sql3);
  $s=mysqli_num_rows($result1);
  if($s>0){
    die("<script>Swal.fire({
  icon: 'alert',
  title: 'Oops...',
  text: 'Password Alredy Exist'
})</script>");
  }
  elseif($rpass!=$repeat_pass){
    die("<script>Swal.fire({
  icon: 'alert',
  title: 'Oops...',
  text: 'Password Not Match'
})</script>");
  }
  else{
    $invoice_logo="demo.jpg";
    $sql=mysqli_query($con,"INSERT INTO `1client_details` (`cd_id`, `FULL_NAME`,`SHOP_NAME`,`SHOP_TYPE`,`INVOICE_LOGO`,`SK_ADDRESS`,`SHOP_ADDRESS`,`SK_PINCODE`,`AREA_PIN`, `EMAIL`,`SK_PHONE_NO`, `PHONE_NO`, `RUSERNAME`, `RPASSWORD`, `REPEAT_PASSWORD`,`OTP`,`is_expired`, `REGISTOR_DATE`) VALUES (NULL, '$full_name','$shop_name','0','$invoice_logo','0','0','0','0','$email','0','$phone_no','$ruser','$rpass','$repeat_pass','0','0','$rdate')");

    $result5=mysqli_query($con,"SELECT * FROM `1client_details` WHERE EMAIL='$email'");
    $row=mysqli_fetch_assoc($result5);
    $special=$row['cd_id'];
    $_SESSION['special_id']=$special;
    $sql2=mysqli_query($con,"INSERT INTO `1admin` (`id`,`USERNAME`, `PASSWORD`,`user_email`,`VERIFY_STATUS`,`special_id`,`sub_enddate`) VALUES (NULL, '$ruser', '$rpass','$email','0','$special','0')");
    if($sql){?>
      <script>Swal.fire({

        icon: 'success',
        title: 'Registore successfully',
        showConfirmButton: false,
        timer: 2050
  })</script><?php
      echo"<script>setTimeout(function() {
      openWindow = window.open('verify_email.php', '_self');
  }, 2300);</script>";
    }
    else{
      echo"<script>Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Connection Failed'
  })</script>";
    }
  }
}
 ?>

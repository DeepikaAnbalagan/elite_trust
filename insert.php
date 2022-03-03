<?php
// session_start();
include('db.php');
// $upload_dir = 'testimonial_upload/';
   
//    $selected=$_POST['select']; 
//       var_dump($selected);
$id=$_POST['id'];
 $fullname = $_POST['fullname'];
$dob = $_POST['dob'];
echo $dob;
$gender = $_POST['gender'];
$fathername = $_POST['fathername'];
$mothername= $_POST['mothername'];
 $contactnumber= $_POST['contactnumber'];
 $address= $_POST['address'];
 $email= $_POST['email'];
 $city= $_POST['city'];
 $district= $_POST['district'];
 $state=$_POST['state'];
// $image=$_FILES['user_imag']['tmp_name'];


echo $query = "INSERT into `elitetrust`(`id`,`fullname`,`dob`,`gender`,`fathername`,`mothername`,`contactnumber`,`address`,`email`,`city`,`district`,`state`) VALUES ('$id','$fullname','$dob','$gender','$fathername','$mothername','$contactnumber','$address','$email','$city','$district','$state')";
    $result = mysqli_query($conn,$query);
var_dump($result);

  ?>
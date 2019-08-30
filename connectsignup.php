<?php
session_start();

 $password = filter_input(INPUT_POST, 'password');
 $email  = filter_input(INPUT_POST, 'email');
 $fullname  = filter_input(INPUT_POST, 'fullname');

$password = password_hash( $password, PASSWORD_BCRYPT, array('cost => 12'));
$_SESSION["pass"] = $password;
$_SESSION["email"] = $email;
$_SESSION["fullname"] = $fullname;
 if (!empty($email)){
if (!empty($password)){
if (!empty($fullname)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "family";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
    $query = mysqli_query($conn, "SELECT * FROM `logininfo`WHERE email='".$email."'");

    if (!$query)
    {
        die('Error: ' . mysqli_error($con));
    }

    if(mysqli_num_rows($query) > 0){

    header("Location:alreadyuser.php");

    }else{

      $sql = "INSERT INTO `logininfo` (password,email,fullname)
      values ('$password','$email','$fullname')";
      if ($conn->query($sql)){
         echo "New record is inserted sucessfully";
      
          header("location: profilepage1.php");
      }
      else{
        echo "Error: ". $sql ." ". $conn->error;
       }
    
  $conn->close();

  }

}
}

else{
     header("Location:empypass.php");
    
    
  die();
}
 }
else{
     header("Location:empyuser.php");
  die();
 }}
else{
     header("Location:empyuser.php");
  die();}
?>



<?php

// the message
$msg = "You have just set up am account on Fmaily.org\nIf this wasn't you contact eniolaoguns@gmail.com ";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap ($msg,70) ;

// send email
mail($_SESSION['email'], "My subject", $msg);

if (isset($_POST['Sign up'])) {
    $to   = $_POST['email'];
    $subject    = $_POST['fullname'];
    $body = 'An account for Family.org has been made with your email';
}
?>
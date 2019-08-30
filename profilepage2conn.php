
<?php
session_start();



 $gender = filter_input(INPUT_POST, 'gender');

$_SESSION["gender"] = $gender;


if (!empty($gender)){
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

      $sql = ("UPDATE `logininfo` SET gender='$gender' WHERE email='".$_SESSION["email"]."'");
      if ($conn->query($sql)){
        
      
          header("location: profilepage3.php");
      }
      else{
        echo "Error: ". $sql ." ". $conn->error;
       }
    
  $conn->close();

  }

}


else{
     header("Location:empyuser.php");
  die();
 }
?>



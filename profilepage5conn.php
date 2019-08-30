
<?php
session_start();



 $interests = filter_input(INPUT_POST, 'interests');

$_SESSION["interests"] = $interests;


if (!empty($interests)){
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

      $sql = ("UPDATE `logininfo` SET interests='$interests' WHERE email='".$_SESSION["email"]."'");
      if ($conn->query($sql)){
        
      
          header("location: profilepage6.php");
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




<?php
session_start();



 $dob = filter_input(INPUT_POST, 'dob');

$_SESSION["dob"] = $dob;


if (!empty($dob)){
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

      $sql = ("UPDATE `logininfo` SET dateofb='$dob' WHERE email='".$_SESSION["email"]."'");
      if ($conn->query($sql)){
        
      
          header("location: profilepage5.php");
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



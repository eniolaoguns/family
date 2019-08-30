
<?php
session_start();



 $children = filter_input(INPUT_POST, 'children');

$_SESSION["gender"] = $gender;


if (!empty($children)){
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

      $sql = ("UPDATE `logininfo` SET numberofch='$children' WHERE email='".$_SESSION["email"]."'");
      if ($conn->query($sql)){
        
      
          header("location: profilepage4.php");
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



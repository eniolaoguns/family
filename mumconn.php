
<?php
session_start();



 $mum = filter_input(INPUT_POST, 'mum');

$_SESSION["mum"] = $mum;


if (!empty($mum)){
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
        
    $query = mysqli_query($conn, "SELECT * FROM `family` WHERE mum='".$mum."'");

    if (!$query)
    {
        die('Error: ' . mysqli_error($con));
    }

    if(mysqli_num_rows($query) > 0){

    header("Location:alreadyuser.php");

    }else{

      $sql = ("UPDATE `family` SET mum='$mum' WHERE email='".$_SESSION["email"]."'");
      if ($conn->query($sql)){
        
      
          header("location: dad.php");
      }
      else{
        echo "Error: ". $sql ." ". $conn->error;
       }
    
  $conn->close();

  }

}
}

else{
     header("Location:empyuser.php");
  die();
 }
?>




<?php
session_start();



 $dad = filter_input(INPUT_POST, 'dad');

$_SESSION["dad"] = $dad;


if (!empty($dad)){
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
        
    $query = mysqli_query($conn, "SELECT * FROM `family` WHERE dad='".$dad."'");

    if (!$query)
    {
        die('Error: ' . mysqli_error($con));
    }

    if(mysqli_num_rows($query) > 0){

    header("Location:alreadyuser.php");

    }else{

      $sql = ("UPDATE `family` SET dad='$dad' WHERE email='".$_SESSION["email"]."'");
      if ($conn->query($sql)){
        
      
          header("location: fam.php");
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



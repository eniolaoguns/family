
<?php
session_start();



 $username = filter_input(INPUT_POST, 'username');

$_SESSION["user"] = $username;


if (!empty($username)){
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
        
    $query = mysqli_query($conn, "SELECT * FROM `logininfo` WHERE username='".$username."'");

    if (!$query)
    {
        die('Error: ' . mysqli_error($con));
    }

    if(mysqli_num_rows($query) > 0){

    header("Location:alreadyuser.php");

    }else{

      $sql = ("UPDATE `logininfo` SET username='$username' WHERE email='".$_SESSION["email"]."'");
      if ($conn->query($sql)){
        
      
          header("location: profilepage2.php");
      }
      else{
        echo "Error: ". $sql ." ". $conn->error;
       }$
    
  $conn->close();

  }

}
}

else{
     header("Location:empyuser.php");
  die();
 }
?>



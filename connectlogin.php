
<?php

ob_start();

session_start();

$error = "";
 $connection = mysqli_connect ("localhost", "root", "", "family");   


 $username = filter_input(INPUT_POST, 'username');
 $password = filter_input(INPUT_POST, 'password');
$_SESSION["user"] = $username;
$_SESSION["pass"] = $password;
 if (!empty($username)){


if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
    $query = mysqli_query( $connection, "SELECT * FROM `logininfo` WHERE username='".$username."' AND password='".$password."'" );
    
    

    if (!$query)
    {
        die('Error: ' . mysqli_error($connection));
    }

    if(mysqli_num_rows($query) > 0){
        
        header("Location:profilepage.php");
       
        
 
      }else{
        header("Location:incorrectuserandpass.php");


  }

 }}
     
 else{
     header("Location:empyuser.php");
  die();
 }

?>


<?php
session_start();





$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "family";



$db = new mysqli($host, $dbusername, $dbpassword, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


$statusMsg = '';

$targetDir = "pictures/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = "pictures/".$fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("UPDATE `logininfo` SET file_name='$targetFilePath' WHERE email='".$_SESSION["email"]."'");

           if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                header("Location:profilepage.php");
               
               
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    header("Location:empyuser.php");
}


      $sql = ("UPDATE `logininfo` SET file_name='.$fileName.' WHERE email='".$_SESSION["email"]."'");

// Display status message
echo $statusMsg;
?>
?>
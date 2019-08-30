
<?php
session_start();
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "family";
$connection =  mysqli_connect ($host, $dbusername, $dbpassword, $dbname);
include"uploadpicture.php";
//$_FILES[‘file’][‘name’] = returns file name

//$_FILES[‘file’][‘type’] = returns file type (such as jpg, png, jpeg etc…)

//$_FILES[‘file’][‘size’] = returns file size in bytes

//$_FILES[‘file’][‘tmp_name’] = returns temporary filename

//move_uploaded_file() : move file from temporary to permanent location. this function 2 arguments file temporary name, target directory with file name.


//	create table image_table
//	(
//		img_id int auto_increment,
//		img_name varchar(50),
//		img_path varchar(100),
//		primary key(img_id)
//	)



	/*--- we created a variables to display the error message on design page ------*/
	$error = "";

	if (isset($_POST["btn_upload"]) == "Upload")
	{
		$uploadOk = 1;

		$file_tmp = $_FILES["fileImg"]["tmp_name"];
		$file_name = $_FILES["fileImg"]["name"];

		/*image name variable that you will insert in database ---*/
		$image_name = $_POST["img-name"];

		//image directory where actual image will be store
		$file_path = "photo/".$file_name;

		$target_file = $file_path . basename($file_name);	

	/*---------------- php textbox validation checking ------------------*/
	if($image_name == "")
	{
		$error = "Please enter caption";
	}

	/*-------- now insertion of image section has start -------------*/
	else
	{
		if(file_exists($file_path))
		{
			$error = "Sorry,The <b>".$image_name."</b> image already exist.";
			$uploadOk = 0;
		}
			else
			{
                $email = $_SESSION["email"];
                $host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "family";

    $result =  mysqli_connect ($host, $dbusername, $dbpassword, $dbname) or die("Connection error: ". mysqli_error());
	mysqli_select_db($result,$dbname) or die("Could not select the database." .mysqli_error());
	$image_query = mysqli_query($result,"SELECT username FROM `logininfo` WHERE email='".$_SESSION["email"]."'");
	while($rows = mysqli_fetch_array($image_query))
	{
		$username = $rows['username'];
    }
            
				$result =  mysqli_connect ("localhost", "root", "", "family") or die("Connection error: ". mysqli_error());
				mysqli_select_db($result, $dbname) or die("Could not Connect to Database: ". mysqli_error());
				mysqli_query($result,"INSERT INTO uploads(caption,img_path,email,username)
				VALUES('$image_name','$file_path','$email','$username')") or die ("image not inserted". mysqli_error());
				move_uploaded_file($file_tmp,$file_path);
				$error = "<p align=center>File ".$_FILES["fileImg"]["name"].""."<br />Image saved into Table.";
                
			}
		}
	}
?>






<html>
<head>
    
    
    <?php
  session_start();  
// Include the database configuration file

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "family";



$db = new mysqli($host, $dbusername, $dbpassword, $dbname);
    ?>
    
   <link rel ="stylesheet" href="profilepage.css"> 
    
        <title>profile page</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="keywords" content="Bekah Shaffer, home" />
        <meta name="description" content="Bekah Shaffer's personal website" />
        <link rel="stylesheet" type="text/css" href="style2.css">
        <link href='https://fonts.googleapis.com/css?family=Raleway:400' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet" type='text/css'>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/main.js"></script>
    </head>
    
    
    
    
    
    <body>

          <div class="profilepic">
                  
    
        <div id="filebutton">
            
            <?php
// Check connection v 

    die("Connection failed: " . $db->connect_error);
}

// Get images from the database
$query = $db->query("SELECT file_name FROM `logininfo` WHERE email='".$_SESSION["email"]."'");

    
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = $row["file_name"];
        
// get username from the database

?>
    <img src="<?php echo $imageURL; ?>" alt="" class="profilepic"/>
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>

        </div>

    
    </div>
        <div class="parent">
            <h1 class ="right uc"> <div class="wrapper">
                <span id="email">
                <a href="">
                <p class ="right uc">						 
					
					
		<?php


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

	?>

	<div class="user">
        	<div class="caption"><p><?php echo $username; ?></p></div>
	<br>
	</div>
	
	<?php
	}
                    ?> </p>
                <span class="cursor">|</span>
                <span class ="button">
                    <?php


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "helper";

    $result =  mysqli_connect ($host, $dbusername, $dbpassword, $dbname) or die("Connection error: ". mysqli_error());
	mysqli_select_db($result,$dbname) or die("Could not select the database." .mysqli_error());
	$image_query = mysqli_query($result,"select email from `signup/login` WHERE email='".$_SESSION["email"]."'");
	while($rows = mysqli_fetch_array($image_query))
	{
		$email = $rows['email'];

	?>

	
        	<p><?php echo $email; ?></p>

	
	<?php
	}
	?></span> 
               
                </span> 
            </div></h1> 
            <ul class="child hover fade-in">
            <li class="all25"><a href="portfolio.html">
                
                <?php


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "family";

    $result =  mysqli_connect ($host, $dbusername, $dbpassword, $dbname) or die("Connection error: ". mysqli_error());
	mysqli_select_db($result,$dbname) or die("Could not select the databse." .mysqli_error());
	$query = mysqli_query($result,"SELECT dateofb FROM `logininfo` WHERE email='".$_SESSION["email"]."'");
	while($rows = mysqli_fetch_array($query))
	{
		$dateofb = $rows['dateofb'];

	?>

	
        	<p><?php echo $dateofb; ?></p>

	
	<?php
	}
	?>
                
                
                
                
                </a></li>
                
                
                
                
                
                
            <li class="all25"><a href="resume.html">
                
                                <?php


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "family";

    $result =  mysqli_connect ($host, $dbusername, $dbpassword, $dbname) or die("Connection error: ". mysqli_error());
	mysqli_select_db($result,$dbname) or die("Could not select the databse." .mysqli_error());
	$query = mysqli_query($result,"SELECT fullname FROM `logininfo` WHERE email='".$_SESSION["email"]."'");
	while($rows = mysqli_fetch_array($query))
	{
		$fullname = $rows['fullname'];

	?>

	
        	<p><?php echo $fullname; ?></p>

	
	<?php
	}
	?>
      
                
                
                
                
                
                
                
                
                
                
                
                </a></li>
            <li class="all25"><a href="about.html">
                
                              
                                <?php


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "family";

    $result =  mysqli_connect ($host, $dbusername, $dbpassword, $dbname) or die("Connection error: ". mysqli_error());
	mysqli_select_db($result,$dbname) or die("Could not select the databse." .mysqli_error());
	$query = mysqli_query($result,"SELECT numberofch FROM `logininfo` WHERE email='".$_SESSION["email"]."'");
	while($rows = mysqli_fetch_array($query))
	{
		$children = $rows['numberofch'];

	?>

	
        	<p><?php echo $children; ?> children</p>

	
	<?php
	}
	?>
      
                
                
                
                </a></li>
            <li class="all25"><a href="contact.html">
                
                                               <?php


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "family";

    $result =  mysqli_connect ($host, $dbusername, $dbpassword, $dbname) or die("Connection error: ". mysqli_error());
	mysqli_select_db($result,$dbname) or die("Could not select the databse." .mysqli_error());
	$query = mysqli_query($result,"SELECT gender FROM `logininfo` WHERE email='".$_SESSION["email"]."'");
	while($rows = mysqli_fetch_array($query))
	{
		$gender = $rows['gender'];

	?>

	
        	<p><?php echo $gender; ?></p>

	
	<?php
	}
	?>
                
                
                
                
                
                
                
                
                </a></li>
            </ul>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    <div class="container">
		
		<ul class="social">

			<li class="facebook"><a href="http://localhost/family/uploadpicture.php" class="entypo-facebook"></a></li>
			<li class="twitter"><a href="http://localhost/family/showpicture.php" class="entypo-twitter"></a></li>
            <li class="sociali"><a href="http://localhost/family/allusers.php" class="entypo-mouse"></a></li>
			<li class="codepen"><a href="http://localhost/family/telephone.php" class="entypo-code"></a></li>
			<li class="mail"><a href="#" class="entypo-mail"></a></li>

		</ul>

	</div>
        
    </body>
</html>

<script>
$(document).ready(function() {
	
	setTimeout(function(){
		$('body').addClass('loaded');
	}, 3000);
	
});
</script>
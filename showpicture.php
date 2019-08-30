
<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
	<link rel="stylesheet" href="showpicture.css">
	<title>All Pictures</title>
	</head>


	<body>
        

        
        <div class="title" style="
    text-decoration-line: overline;
    font-size: 50px;
    margin-left: 42%;
    margin-top: 4%;
">
                <h3> All photos </h3>
            </div>
            <svg class="crop-shapes" style="margin-left: 41%;
">
            
    <defs>
        <pattern id="img1" patternUnits="userSpaceOnUse" width="100%" height="650">
            <image class="twombly" xlink:href="http://gastv.mx/wp-content/uploads/2014/05/jumex.jpg" x="-30" y="-30" width="380" height="267"></image>
        </pattern>

    </defs>
   
  <circle class="circ" cx="50" cy="50" r="50" fill="url(#img1)" filter="url(#sparklin)" onmouseover="evt.target.setAttribute('opacity', '0.5');" 13="" onmouseout="evt.target.setAttribute('opacity','1)');"></circle>
  
  <rect x="110" y="0" width="100" height="100" stroke="black" fill="url(#img1)" filter="url(#sparklin)"></rect>
  
  <polygon x="10" points="270,0  220,100 320,100" fill="url(#img1)" filter="url(#sparklin)"></polygon>
                
            </svg>

		<div class="container main">
  
  
        
			<div class="img-box">
	<?php

                

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "family";

    $result =  mysqli_connect ($host, $dbusername, $dbpassword, $dbname) or die("Connection error: ". mysqli_error());
	mysqli_select_db($result,$dbname) or die("Could not select the databse." .mysqli_error());
	$image_query = mysqli_query($result,"select caption ,img_path, email, username from uploads ");
	while($rows = mysqli_fetch_array($image_query))
	{
		$caption = $rows['caption'];
		$img_src = $rows['img_path'];
        $email = $rows['email'];
        $username = $rows['username'];
	?>

	<div class="img-block">
        
        <div class="caption" style="
    font-size: 19px;
    background-color: #ea4c88;
    text-align: center;
"><p><strong>Caption:<?php echo $caption; ?></strong></p></div>
        <div class="username" style="
    font-size: 31px;
    background-color: #ea4c88;
    text-align: center;
"><p><strong>Username:<?php echo $username; ?></strong></p></div>
        
        <div class="email" style="
    background-color: #ea4c88;
    font-size: 19px;
    text-align: center;
"><p><strong>Email:<?php echo $email; ?></strong></p></div>
    
	<div class="picture">        <img src="<?php echo $img_src; ?>" alt="" title="" class="img-responsive" style="
    width: 770px;
"><br></div>
        

	</div>
	
                

  
      
    
  </div>
	<?php
	}
	?>
     
               
			 
		</div>
       
<!--
        <body>
            <html lang="en">
<head>
  <meta charset="utf-8">
  <title>Document</title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="container clearfix">
  <div class="post-column-left">
    <img src="<?php echo $img_src; ?>" alt="Post photo">
  </div>
  <div class="post-column-right">
    <time class="post-date">13 september 2014</time>
    <h3 class="post-title"><?php echo $username; ?></h3>
    <p class="post-text"><?php echo $email; ?></p>
    <p class="post-text"><?php echo $caption; ?></p>
    <a class="btn" href="#">Read</a>
  </div>
</div>
</body>
</html>
-->
	</body>
	</html>

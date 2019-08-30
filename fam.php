<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
	<link rel="stylesheet" href="allusers.css">
	<title>Family</title>    
</head>
    

    
    	<body>

		<div class="container main">
            <div class="title">
                <h3> Family </h3>
            </div>
            <svg class="crop-shapes" style="margin-left: 41%;margin-top: -90;
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
  
        
			<div class="img-box">
	<?php

                

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "family";

    $result =  mysqli_connect ($host, $dbusername, $dbpassword, $dbname) or die("Connection error: ". mysqli_error());
	mysqli_select_db($result,$dbname) or die("Could not select the databse." .mysqli_error());
	$image_query = mysqli_query($result,"select mum ,dad from family ");
	while($rows = mysqli_fetch_array($image_query))
	{
		$mum = $rows['mum'];
		$dad = $rows['dad'];
    
    
	?>
<!--

	<div class="img-block">
        <div class="info">
        <div class="fullname"><h1><strong><?php echo $fullname; ?></strong></h1></div>
        <div class="username"><p><strong><?php echo $username; ?></strong></p></div>
        <div class="caption"><p><strong>Interests:<?php echo $interests; ?></strong></p></div>
        <div class="gender"><p><strong><?php echo $gender; ?></strong></p></div>
        <div class="email"><p><strong><?php echo $email; ?></strong></p></div>
        <div class="children"><p><strong><?php echo $children; ?> children</strong></p></div>
        <div class="birth"><p><strong><?php echo $dateofb; ?></strong></p></div>
        </div>
        
	<div class="picture"><img src="<?php echo $profilepic; ?>" alt="" title="" class="img-responsive" /></div><br>
	</div>
-->
                
                <div class="card">
  <div class="profile-cover-container">
    <img src="http://gastv.mx/wp-content/uploads/2014/05/jumex.jpg">
    <div class="cover-overlay"></div>
  </div>
  
  <div class="profile-picture">
    <div class="profile-picture-outer-radius"><img src="<?php echo $profilepic; ?>" alt="" title="" class="img-responsive" /></div>
  </div>
  
  <div class="infobox">
    <p class="infobox-username"><?php echo $fullname; ?></p>
    
    <div class="">
      <p class="align-left">MUM:</p><p class="align-right"><?php echo $mum; ?></p>  
    </div>
    
    <div class="clear-float">
      <p class="align-left">DAD:</p><p class="align-right"><?php echo $dad; ?></p>  
    </div>
 
    
  </div>
  
  <div class="floating-action-button"> + </div>
</div>
	
	<?php
	}
	?>
                
                
<!--
<section>
  <article>
    <div class="bild"><div class="picture"><img src="<?php echo $profilepic; ?>" alt="" title="" class="img-responsive" /></div></div>
    <div class="infos">
      <div class="fullname"><h1><strong><?php echo $fullname; ?></strong></h1></div>
     <div class="username"><p><strong><?php echo $username; ?></strong></p></div>
        <div class="caption"><p><strong>Interests:<?php echo $interests; ?></strong></p></div>
        <div class="gender"><p><strong><?php echo $gender; ?></strong></p></div>
        <div class="email"><p><strong><?php echo $email; ?></strong></p></div>
        <div class="children"><p><strong><?php echo $children; ?> children</strong></p></div>
        <div class="birth"><p><strong><?php echo $dateofb; ?></strong></p></div>
      <button>view profile</button>
    </div>
  </article>
</section>
-->
			</div>
          
		</div>
            
    </body></html>
          
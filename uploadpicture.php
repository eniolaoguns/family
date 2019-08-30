<html><head>  <link rel ="stylesheet" href="uploadpicture.css"> </head>
    
    
    <body>
    <svg class='crop-shapes'>
            
    <defs>
        <pattern id="img1" patternUnits="userSpaceOnUse" width="100%" height="650">
            <image class='twombly' xlink:href="http://gastv.mx/wp-content/uploads/2014/05/jumex.jpg" x="-30" y="-30"
                width="380" height="267" />
        </pattern>

    </defs>
   
  <circle class='circ' cx="50" cy="50" r="50" fill="url(#img1)" filter="url(#sparklin)" onmouseover="evt.target.setAttribute('opacity', '0.5');"
13
onmouseout="evt.target.setAttribute('opacity','1)');"/>
  
  <rect x="110" y="0" width="100" height="100" stroke="black" fill="url(#img1)" filter="url(#sparklin)"/>
  
  <polygon x="10" points="270,0  220,100 320,100" fill="url(#img1)" filter="url(#sparklin)"/>
  
</svg>
    
    
    <div id = "head">
    <h1> Upload </h1>
    </div>
    <div id = "header">
    <h1> Pictures</h1>
        </div>
    
    
          <form method="POST" name="upfrm" action="uploadpictureconn.php" enctype="multipart/form-data">
				<div class= "buttons">
                    <ul class="social">
					<li></li>
                        <input type="file" name="fileImg" class="file_input"  style="   margin-bottom: 5px;   border-radius: 25px;" >
                        <input type="text" placeholder="Enter caption" name="img-name" class="tb" style="position: absolute; margin-left: 27.25%; ">
                 

                        
                        
                        <input type="submit" value="Upload" name="btn_upload" class="btn" style=" width: 13%;   height: 40px;   margin-bottom: 5px;   padding-left: 5px;   border-radius: 25px; margin-left: 50%  margin-left: 28.5%">
                    </ul>
				</div>
			</form>
      
            <div id="go back" style="
    color: white;
    font-size: larger;
    margin-left: 48%;
">
        
            <p class="text--center"><a href="http://localhost/family/profilepage.php">Go back</a> <svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="assets/images/icons.svg#arrow-right"></use></svg></p>
        </div>
        

    </body>
    

    
    </html>
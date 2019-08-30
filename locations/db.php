<?php

$connection=mysqli_connect("localhost", "root", "", "family");
if(!$connection){
    die("Not connected: ".mysqli_connect_error());
}

?>
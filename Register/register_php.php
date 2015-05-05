<?php

if($_POST){

    include "../connectToDBforRead.php";
                

	$user	= filter_var($_POST["user"], FILTER_SANITIZE_STRING);
	$pass	= filter_var($_POST["pass"], FILTER_SANITIZE_STRING);
    
   $sql = mysql_query("SELECT Distinct U.Username FROM `Users` U WHERE U.Username='".$user."'",$con);
  
    
    if (mysql_fetch_array($sql)) {
        $message=false;
    } 
  else{
        $message=true ;  
  }
    $output = json_encode(array('message'=>$message));
    die($output);
	$con->close(); 
}

?>
<?php

if($_POST){
      $con =mysql_connect("localhost", "root", "261994akk");
        mysql_select_db("teedb");
        mysql_query ("set character_set_results='utf8'");

        if (!$con)
                echo "Cannot connect: ".mysql_error();
        else{
                mysql_select_db("root", $con);
                mysql_query ("set character_set_results='utf8'");
        }
                

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
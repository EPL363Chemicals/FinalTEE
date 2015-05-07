<?php

if($_POST){
      $con =mysql_connect("localhost", "root", "261994akk");
        mysql_select_db("teedb2");
        mysql_query ("set character_set_results='utf8'");

        if (!$con)
                echo "Cannot connect: ".mysql_error();
        else{
                mysql_select_db("root", $con);
                mysql_query ("set character_set_results='utf8'");
        }
 
   // $user="akkous01";
//$pass="123123";
	$type="";
    $typeOfCompany="";
	$user	= filter_var($_POST["user"], FILTER_SANITIZE_STRING);
 $pass	= filter_var($_POST["pass"], FILTER_SANITIZE_STRING);
     session_start();
    $_SESSION['Username']=$user;
	$message=true;
    $sql1 = mysql_query("SELECT Distinct U.* FROM `usertee` U WHERE U.username='".$user."' and U.password='".$pass."'",$con); 
    $sql = mysql_query("SELECT Distinct * FROM `Users` WHERE Users.Username='".$user."' and Users.Password='".$pass."' ",$con);
    
    $row1 = mysql_fetch_array($sql1);
    $row = mysql_fetch_array($sql);
   
    if($row1){
        $type=0;
    }else if($row){
        $sql3=mysql_query("SELECT * FROM `company`,`comperson` WHERE comperson.company=company.Company_Name && comperson.telephone='".$row['Comperson']."'");
        $row3 = mysql_fetch_array($sql3);
        $typeOfCompany=$row3['type'];
        $_SESSION['Telephone']=$row['Comperson'];
        $_SESSION['Company-Name']=$row3['Company_Name'];
        $_SESSION['Company-Type']= $typeOfCompany;
        $type=1;
       
    }else $message=false;
   
    $output = json_encode(array('message'=>$message,'user'=>$type,'Company'=>$typeOfCompany));
    
    die($output);
	$con->close(); 
}

?>
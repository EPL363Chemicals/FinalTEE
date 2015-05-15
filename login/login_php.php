<?php

if($_POST){

    include "../connectToDBforRead.php";

    $type="";
    $typeOfCompany="";
    $user	= filter_var($_POST["user"], FILTER_SANITIZE_STRING);
    $pass	= filter_var($_POST["pass"], FILTER_SANITIZE_STRING);

    $pass = md5($pass);

    session_start();
    session_unset();
    $_SESSION['username']=$user;
    $message=true;
//    $sql1 = mysql_query("SELECT Distinct U.* FROM `usertee` U WHERE U.username='".$user."' and U.password='".$pass."'",$con);
//    $sql = mysql_query("SELECT Distinct * FROM `Users` WHERE Users.Username='".$user."' and Users.Password='".$pass."' ",$con);

    $sql1 = mysql_query("SELECT Distinct U.* FROM `usertee` U WHERE U.username='".$user."'",$con);
    $sql = mysql_query("SELECT Distinct * FROM `Users` WHERE Users.Username='".$user."' ",$con);

    $row1 = mysql_fetch_array($sql1);
    $row = mysql_fetch_array($sql);

    if($row1){
        if ($pass == $row1["Password"]) {
            $type = 0;
            $_SESSION['Company-Type'] = 4;
        }else{
            $message=false;
        }
    }else if($row){
        if ($pass == $row["Password"]) {
            $sql3 = mysql_query("SELECT * FROM `comperson` WHERE  comperson.telephone='" . $row['Comperson'] . "'");
            $row3 = mysql_fetch_array($sql3);
            $typeOfCompany = $row3['type'];
            $_SESSION['Telephone'] = $row['Comperson'];
            $_SESSION['Company-Name'] = $row3['Company'];
            $_SESSION['Company-Type'] = $typeOfCompany;
            $_SESSION['chemicalsCount'] = 0;
            $_SESSION['suplCount'] = 0;
            $type = 1;
        }else{
            $message=false;
        }

    }else $message=false;

    $output = json_encode(array('message'=>$message,'user'=>$type,'Company'=>$typeOfCompany));

    die($output);
    $con->close();
}

?>
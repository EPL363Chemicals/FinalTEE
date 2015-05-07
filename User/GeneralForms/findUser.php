
<?php

$user=$_SESSION["username"];
$user_pass="";

$company="";
$company_comm="";
$other_company="";
$ls="";
$company_email="";
$company_address="";
$company_city="";
$company_pc="";
$company_tel="";
$company_fax="";
$company_info="";
$company_info="";
$company_info="";
$ceo="";

$user_name="";
$user_surname="";
$user_email="";
$user_tel="";
$user_city="";
$user_address="";
$user_pc="";



include "../../connectToDBforRead.php";


$result=mysql_query("SELECT U.* FROM Users  U WHERE U.Username='".$user."'" , $con);
$row = mysql_fetch_array($result);

while ($row){
    $user_pass = $row["Password"];
    $user_tel= $row['Comperson'];
    $row = mysql_fetch_array($result);
}

$result=mysql_query("SELECT C.* FROM Comperson C WHERE C.Telephone='".$user_tel."'" , $con);
$row = mysql_fetch_array($result);
while ($row){
    $user_name=$row['Name'];
    $user_surname=$row['Surname'];
    $user_email=$row['Email'];
    $user_address=$row['Address'];
    $user_city =$row['City'];
    $user_pc=$row['PostCode'];
    $user_fax=$row['Fax'];
    $company = $row['Company'];
    $row = mysql_fetch_array($result);
}


          if ($company != NULL){
              $result=mysql_query("SELECT P.* FROM Company P WHERE P.Commersial_Name=N'".$company."'" , $con);
              $row = mysql_fetch_array($result);
              while ($row) {
                  $ls = $row['Lequl_State'];
                  $company_email = $row['Email'];
                  $company_address = $row['Address'];
                  $company_city = $row['City'];
                  $company_pc = $row['PostCode'];
                  $company_tel = $row['Telephone'];
                  $company_fax = $row['Fax'];
                  $company_info = $row['info'];
                  $company_comm = $row['Commersial_Name'];
                  $other_company = $row['Other_Name'];
                  $ceo = $row['CEO'];
                  $row = mysql_fetch_array($result);
              }

          }



mysql_close($con);

$_SESSION["UserCompany"]=$company;

?>
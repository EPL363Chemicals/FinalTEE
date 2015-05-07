<?php

include "../../connectToDBforRead.php";

    $constCompany_Name= "";
    $constCompany_CommercialName= "";
    $constCompany_OtherName= "";
    $constCompany_legalForm= "";
    $constCompany_CEO= "";
    $constCompany_Address= "";
    $constCompany_PC= "";
    $constCompany_City= "";
    $constCompany_country= "";
    $constCompany_Phone= "";
    $constCompany_fax= "";
    $constCompany_email= "";
    $constCompany_info= "";

    $constEmpl_name= "";
    $constEmpl_Surname= "";
    $constEmpl_address= "";
    $constEmpl_pc= "";
    $constEmpl_city= "";
    $constEmpl_phone= "";
    $constEmpl_fax= "";
    $constEmpl_email= "";


$result=mysql_query("SELECT * FROM Product WHERE Commercial_Name=N'$product' and SavingDate='$date'" , $con);
$row = mysql_fetch_array($result);

if($row){
    $tel = $row["Constructor"];

    $sql1 = mysql_query("SELECT Distinct Comperson.* FROM `Comperson` WHERE Comperson.Telephone='".$tel."'",$con);
    $row1 = mysql_fetch_array($sql1);

    if ($row1) {
        $constEmpl_name=$row1["Name"];
        $constEmpl_Surname=$row1["Surname"];
        $constEmpl_address=$row1["Address"];
        $constEmpl_phone=$row1["Telephone"];
        $constEmpl_city=$row1["City"];
        $constEmpl_fax=$row1["Fax"];
        $constEmpl_email=$row1["Email"];
        $constEmpl_pc=$row1["PostCode"];
        $company = $row1["Company"];

        $sql = mysql_query("SELECT Distinct Company.* FROM `Company` WHERE Company.Commersial_Name=N'".$company."'",$con);
        $row = mysql_fetch_array($sql);

        if ($row) {
            $constCompany_Name=$row["Company_Name"];
            $constCompany_legalForm=$row["Lequl_State"];
            $constCompany_Address=$row["Address"];
            $constCompany_PC=$row["PostCode"];
            $constCompany_City=$row["City"];
            $constCompany_Phone=$row["Telephone"];
            $constCompany_fax=$row["Fax"];
            $constCompany_email=$row["Email"];
            $constCompany_info=$row["info"];
            $constCompany_CommercialName=$row["Commersial_Name"];
            $constCompany_OtherName=$row["Other_Name"];
            $constCompany_CEO=$row["CEO"];
            $constCompany_country=$row["Country"];
        }
    }




}

?>
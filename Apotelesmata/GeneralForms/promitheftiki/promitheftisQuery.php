
<?php

if($_POST){


    include "../../../connectToDBforRead.php";

    $num	= filter_var($_POST["num"], FILTER_SANITIZE_STRING);
    $tel		= filter_var($_POST["tel"], FILTER_SANITIZE_STRING);
//    $tel="998745632";
//$product = "Gif";
//$date = "2015-05-06";
//
    $product =  filter_var($_POST["product"], FILTER_SANITIZE_STRING);
    $date =  filter_var($_POST["date"], FILTER_SANITIZE_STRING);

    $sql1 = mysql_query("SELECT Distinct Comperson.* FROM `Comperson` WHERE Comperson.Telephone='".$tel."'",$con);
    $row1 = mysql_fetch_array($sql1);

    if ($row1) {
        $NamePer=$row1["Name"];
        $SurnamePer=$row1["Surname"];
        $AddressPer=$row1["Address"];
        $TelephonePer=$row1["Telephone"];
        $CityPer=$row1["City"];
        $FaxPer=$row1["Fax"];
        $EmailPer=$row1["Email"];
        $PostCodePer=$row1["PostCode"];

        $company = $row1["Company"];

        $sql = mysql_query("SELECT Distinct Company.* FROM `Company` WHERE Company.Commersial_Name=N'".$company."';",$con);

        $row = mysql_fetch_array($sql);

        if ($row) {
            $Name=$row["Company_Name"];
            $Ls=$row["Lequl_State"];
            $Address=$row["Address"];
            $PostCode=$row["PostCode"];
            $City=$row["City"];
            $Telephone=$row["Telephone"];
            $Fax=$row["Fax"];
            $Email=$row["Email"];
            $info=$row["info"];
            $ComName=$row["Commersial_Name"];
            $Oname=$row["Other_Name"];
            $Ceo=$row["CEO"];
            $Country=$row["Country"];

            $sql2 = mysql_query("SELECT Distinct Supply.* FROM `Supply` WHERE Supply.Supplier='".$tel."' and Supply.Product=N'".$product."' and Supply.Saving_Date='$date'",$con);
            $row2 = mysql_fetch_array($sql2);

            if ($row2) {
                $storeAdd = $row2["Address"];



            }
        }


    }
    $output = json_encode(array('Name' => $Name, 'Ls' => $Ls, 'Address' => $Address, 'PostCode' => $PostCode, 'City' => $City, 'Telephone' => $Telephone, 'Fax' => $Fax, 'Email' => $Email, 'info' => $info, 'ComName' => $ComName, 'Oname' => $Oname, 'Ceo' => $Ceo, 'Country' => $Country, 'NamePer' => $NamePer, 'SurnamePer' => $SurnamePer, 'AddressPer' => $AddressPer, 'TelephonePer' => $TelephonePer, 'CityPer' => $CityPer, 'FaxPer' => $FaxPer, 'EmailPer' => $EmailPer, 'PostCodePer' => $PostCodePer, 'StoreAdd' => $storeAdd));
    die($output);

//    $con->close();
}

?>
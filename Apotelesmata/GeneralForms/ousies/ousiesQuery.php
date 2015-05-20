
<?php


if($_POST) {
    $product =  filter_var($_POST["product"], FILTER_SANITIZE_STRING);
    $date =  filter_var($_POST["date"], FILTER_SANITIZE_STRING);

    $num = filter_var($_POST["num"], FILTER_SANITIZE_STRING);
    $Cas = filter_var($_POST["Cas"], FILTER_SANITIZE_STRING);

//    $product = "Gif";
//    $date = "2015-05-06";
//    $Cas="CASΧλ1";
    include "../../../connectToDBforRead.php";

    $sql = mysql_query("SELECT  substance.* FROM `substance` WHERE substance.Cas=N'$Cas' ", $con);
    $row = mysql_fetch_array($sql);
    $icon1= false;
    $icon2= false;
    $icon3= false;
    $icon4= false;
    $icon5= false;
    $icon6= false;
    $icon7= false;
    $icon8= false;
    $icon9= false;
    $Name = "";
    $Cas = "";
    $Ec = "";
    $Iupac = "";
    $Oname ="";

    $Sort = "";
    $icons = "";
    $P = "";
    $H = "";

    if ($row) {
        $Name = $row["Name"];
        $Cas = $row["Cas"];
        $Ec = $row["Ec"];
        $Iupac = $row["Iupac"];
        $Oname = $row["Other_Name"];

        $Sort = $row["Sort"];
        $icons = $row["CLPicon"];
        $P = $row["CLPp"];
        $H = $row["CLPh"];

        $token = strtok($icons, ",");

        while ($token !== false) {
            if (strcmp($token, "icon1chem")== 0){
                $icon1 = true;
            }
            if (strcmp($token, "icon2chem")== 0){
                $icon2 = true;
            }
            if (strcmp($token, "icon3chem")== 0){
                $icon3 = true;
            }
            if (strcmp($token, "icon4chem")== 0){
                $icon4 = true;
            }
            if (strcmp($token, "icon5chem")== 0){
                $icon5 = true;
            }
            if (strcmp($token, "icon6chem")== 0){
                $icon6 = true;
            }
            if (strcmp($token, "icon7chem")== 0){
                $icon7 = true;
            }
            if (strcmp($token, "icon8chem")== 0){
                $icon8 = true;
            }
            if (strcmp($token, "icon9chem")== 0){
                $icon9 = true;
            }
            $token = strtok(",");
        }


    }


    $sql2 = mysql_query("SELECT Distinct containschemical.* FROM `containschemical` WHERE  containschemical.Cas=N'".$Cas."' and containschemical.Name=N'".$product."' and containschemical.Saving_Date='$date'", $con);
    $row2 = mysql_fetch_array($sql2);

    $weight="";
    $weight_type="";
    if ($row2) {
        $weight = $row2["Quantity"];
        $weight_type = $row2["QuantityType"];
    }

    $output = json_encode(array('Name' => $Name, 'Cas' => $Cas, 'Ec' => $Ec, 'Iupac' => $Iupac, 'Oname' => $Oname,  'Sort' => $Sort, 'icon1' => $icon1, 'icon2' => $icon2, 'icon3' => $icon3, 'icon4' => $icon4, 'icon5' => $icon5, 'icon6' => $icon6, 'icon7' => $icon7, 'icon8' => $icon8, 'icon9' => $icon9, 'P' => $P, 'H' => $H, 'weight' =>$weight, 'weightType' => $weight_type));

    die($output);
    /*$con->close();*/
}

?>
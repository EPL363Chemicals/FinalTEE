<?php

include "../../connectToDBforRead.php";

$chemicalProduct_Name = "";
$chemicalProduct_CommName = "";
$chemicalProduct_use= "";
$chemicalProduct_extraChar= "";

$chemicalProduct_state= "";
$chemicalProduct_SDS= "";
$chemicalProduct_V= "";
$chemicalProduct_V_Type= "";
$icons ="";
$select_P= "";
$select_H= "";

$icon1="";
$icon2="";
$icon3="";
$icon4="";
$icon5="";
$icon6="";
$icon7="";
$icon8="";
$icon9="";

$result=mysql_query("SELECT * FROM Product WHERE Commercial_Name=N'$product' and SavingDate='$date'" , $con);
$row = mysql_fetch_array($result);
while ($row){

    $chemicalProduct_Name = $row["Chemical_Name"];
    $chemicalProduct_CommName = $row["Commercial_Name"];
    $chemicalProduct_use= $row["Uses"];
    $chemicalProduct_extraChar= $row["info"];

    $chemicalProduct_state= $row["State"];
    $chemicalProduct_SDS= $row["Sds"];
    $chemicalProduct_V= $row["Volume"];
    $chemicalProduct_V_Type= $row["VoluemType"];
    $icons = $row["CLPicon"];
    $select_P= $row["CLPp"];
    $select_H= $row["CLPh"];
    $row = mysql_fetch_array($result);
}

mysql_close($con);

$token = strtok($icons, ",");

while ($token !== false) {
    if (strcmp($token, "icon1")== 0){
        $icon1 = "checked";
    }
    if (strcmp($token, "icon2")== 0){
        $icon2 = "checked";
    }
    if (strcmp($token, "icon3")== 0){
        $icon3 = "checked";
    }
    if (strcmp($token, "icon4")== 0){
        $icon4 = "checked";
    }
    if (strcmp($token, "icon5")== 0){
        $icon5 = "checked";
    }
    if (strcmp($token, "icon6")== 0){
        $icon6 = "checked";
    }
    if (strcmp($token, "icon7")== 0){
        $icon7 = "checked";
    }
    if (strcmp($token, "icon8")== 0){
        $icon8 = "checked";
    }
    if (strcmp($token, "icon9")== 0){
        $icon9 = "checked";
    }
    $token = strtok(",");
}
?>
<?php

include "../../connectToDBforRead.php";

$result=mysql_query("SELECT * FROM Product WHERE Commercial_Name=N'$product' and SavingDate='$date'" , $con);
$row = mysql_fetch_array($result);

$temp = -1;
$final = -1;
$append=-1;
$pdf =-1;
$img=-1;

if ($row){

    $temp = $row["Temp"];
    $final = $row["Final"];
    $append= $row["Append"];
    $pdf = $row["Pdf_ID"];
    $img = $row["Image_ID"];

}

mysql_close($con);
?>
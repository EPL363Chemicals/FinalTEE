<?php
include "connectToDBforRead.php";
session_start();
$product=$_GET['product'];
$date=$_GET['date'];

$sql3=mysql_query("select * FROM `upload`, `product` where product.Commercial_Name='".$product."' and product.SavingDate='".$date."' and upload.id=product.Image_ID");
$row3 = mysql_fetch_array($sql3);
if($row3){
    $bytes = $row3['content'];
    header("Content-type:".$row3['type']);
    header('Content-disposition: attachment; filename='.$row3['name']);
    print $bytes;
}
?>
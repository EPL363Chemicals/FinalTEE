<?php

if($_POST){
   // $product='a';
     //$date='2015-05-15';
    $product=htmlspecialchars($_GET["product"]);
   $date=htmlspecialchars($_GET["date"]);
     include "connectToDBforRead.php";
    
   
    $sql=mysql_query("Delete from `Product` where product.Commercial_Name='".$product."' and product.SavingDate='".$date."'", $con);
    $output = json_encode(array('message'=>$sql));
    die($output);
	//$con->close(); 
}

?>
/*INSERT INTO `teedb2`.`product` (`Chemical_Name`, `CLPicon`, `Commercial_Name`, `Uses`, `State`, `Volume`, `VoluemType`, `info`, `Pdf_ID`, `Image_ID`, `Constructor`, `SavingDate`, `Temp`, `Final`, `Append`, `Valid`, `Sds`, `CLPh`, `CLPp`) VALUES ('a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '1', '1', '1', '2015-05-15', b'1', b'1', b'1', b'1', '1', '1', '1');*/
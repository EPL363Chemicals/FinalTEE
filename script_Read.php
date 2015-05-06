<?php
if($_POST){
     $Htable=array();
        $Ptable=array();
        $myfile = fopen("H.txt", "r") or die("Unable to open file!");
        while(!feof($myfile)) {
            array_push($Htable,fgets($myfile)); 
        }
        $myfile = fopen("P.txt", "r") or die("Unable to open file!");
        while(!feof($myfile)) {
            array_push($Ptable,fgets($myfile)); 
        }
        fclose($myfile);
  $output = json_encode(array('Ptable'=>$Ptable,'Htable'=>$Htable));
  die($output);    
 }

?>
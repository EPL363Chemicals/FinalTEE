<?php

if($_POST){
        
                
 session_start();
   
	$num	= filter_var($_POST["num"], FILTER_SANITIZE_STRING);
   
   $output = json_encode(array('Name'=>$_SESSION["chemical_Name_".$num], 'Cas' => $_SESSION["chemical_CAS_".$num],'Ec'=>$_SESSION["chemical_EINECS_".$num],'Iupac'=>$_SESSION["chemical_IUPAC_".$num],'Oname'=>$_SESSION["chemical_otherName_".$num],'Sort'=>$_SESSION["chemical_enarmonismeni_".$num],'Quantity'=>$_SESSION["chemical_weight_".$num],'Qtype'=>$_SESSION["chemical_weight_type_".$num],'CLPp'=>$_SESSION["convertP_".$num],'CLPh'=>$_SESSION["convertH_".$num],'CLPicons'=>$_SESSION["iconsChem_".$num]));
    
		die($output);
	
}

?>

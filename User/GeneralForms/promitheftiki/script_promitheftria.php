
<?php

if($_POST){
        
                
 session_start();
    
	$num	= filter_var($_POST["num"], FILTER_SANITIZE_STRING);
    $output = json_encode(array('Name'=> $_SESSION["suplCompany_Name_".$num],'ComName'=>$_SESSION["suplCompany_CommercialName_".$num],'Oname'=>$_SESSION["suplCompany_OtherName_".$num],'Ls'=>$_SESSION["suplCompany_legalForm_".$num],'Address'=>$_SESSION["suplCompany_Address_".$num],'PostCode'=>$_SESSION["suplCompany_PC_".$num],'City'=>$_SESSION["suplCompany_City_".$num],'Telephone'=>$_SESSION["suplCompany_Phone_".$num],'Fax'=>$_SESSION["suplCompany_fax_".$num],'Email'=>$_SESSION["suplCompany_email_".$num],'info'=>$_SESSION["suplCompany_info_".$num],'Ceo'=>$_SESSION["suplCompany_CEO_".$num],'NamePer'=>$_SESSION["suplEmpl_name_".$num],'SurnamePer'=>$_SESSION["suplEmpl_Surname_".$num],'AddressPer'=>$_SESSION["suplEmpl_address_".$num],'PostCodePer'=>$_SESSION["suplEmpl_pc_".$num],'CityPer'=>$_SESSION["suplEmpl_city_".$num],'TelephonePer'=>$_SESSION["suplEmpl_phone_".$num],'FaxPer'=>$_SESSION["suplEmpl_fax_".$num],'EmailPer'=>$_SESSION["suplEmpl_email_".$num]));
    
		die($output);
	
}

?>
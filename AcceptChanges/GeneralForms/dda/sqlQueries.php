<?php

    include "../../../connectToDB.php";

    /********************* PARASKEVASTIKI *************************/

    session_start();
    $constEmpl_phone=0;
    if($_SESSION["Company_Type"] == 0) {
        $constCompany_Name = $_SESSION["constCompany_Name"];
        $constCompany_CommercialName = $_SESSION["constCompany_CommercialName"];
        $constCompany_OtherName = $_SESSION["constCompany_OtherName"];
        $constCompany_legalForm = $_SESSION["constCompany_legalForm"];
        $constCompany_CEO = $_SESSION["constCompany_CEO"];
        $constCompany_Address = $_SESSION["constCompany_Address"];
        $constCompany_PC = $_SESSION["constCompany_PC"];
        $constCompany_City = $_SESSION["constCompany_City"];
        $constCompany_country = $_SESSION["constCompany_country"];
        $constCompany_Phone = $_SESSION["constCompany_Phone"];
        $constCompany_fax = $_SESSION["constCompany_fax"];
        $constCompany_email = $_SESSION["constCompany_email"];
        $constCompany_info = $_SESSION["constCompany_info"];

        $constEmpl_name = $_SESSION["constEmpl_name"];
        $constEmpl_Surname = $_SESSION["constEmpl_Surname"];
        $constEmpl_address = $_SESSION["constEmpl_address"];
        $constEmpl_pc = $_SESSION["constEmpl_pc"];
        $constEmpl_city = $_SESSION["constEmpl_city"];
        $constEmpl_phone = $_SESSION["constEmpl_phone"];
        $constEmpl_fax = $_SESSION["constEmpl_fax"];
        $constEmpl_email = $_SESSION["constEmpl_email"];


        $sqlConstEmpl = "INSERT INTO ComPerson (Name,Company, Surname, Address, Telephone, Fax, Email, PostCode, City, type)
                          VALUES (N'$constEmpl_name',N'$constCompany_CommercialName' , N'$constEmpl_Surname',N'$constEmpl_address', '$constEmpl_phone' ,'$constEmpl_fax', '$constEmpl_email' , '$constEmpl_pc',N'$constEmpl_city',1 );";

        $sqlConstComp = "INSERT INTO company (Company_Name, Lequl_State, Address, PostCode, City, Telephone, Fax, Email, info, Commersial_Name, Other_Name, CEO, Country)
                          VALUES (N'$constCompany_Name',N'$constCompany_legalForm',N'$constCompany_Address','$constCompany_PC',N'$constCompany_City','$constCompany_Phone','$constCompany_fax',N'$constCompany_email',
                          N'$constCompany_info',N'$constCompany_CommercialName',N'$constCompany_OtherName',N'$constCompany_CEO',N'$constCompany_country');";



        if ($conn->query($sqlConstComp) === TRUE) {
            if ($conn->query($sqlConstEmpl) === TRUE) {
                echo "OK Paraskevastis\n";
            } else {
                echo "Error: " . $sqlConstComp . "<br>" . $conn->error;
            }
        } else {
            echo "Error: " . $sqlConstEmpl . "<br>" . $conn->error;
        }
    }
    else{
        $constEmpl_phone=$_SESSION["Telephone"];
    }
    /********************* UPLOAD ***************************/

    /********************* PROION ***************************/


    $temp_save=0;
    $final_save=0;
    $append_save=0;
    $valid_save=0;

    if($_POST["save_mode"]==1){
        $temp_save=1;
        $final_save=0;
        $append_save=0;
        $valid_save=0;
    }
    elseif ($_POST["save_mode"]==2){
        $temp_save=0;
        $final_save=1;
        $append_save=0;
        $valid_save=0;
    }
    elseif($_POST["save_mode"]==3){
        $temp_save=0;
        $final_save=0;
        $append_save=1;
        $valid_save=0;
    }

    $chemicalProduct_Name = $_SESSION["chemicalProduct_Name"];
    $chemicalProduct_CommName = $_SESSION["chemicalProduct_CommName"];
    $chemicalProduct_use = $_SESSION["chemicalProduct_use"];
    $chemicalProduct_extraChar = $_SESSION["chemicalProduct_extraChar"];
    $chemicalProduct_state = $_SESSION["chemicalProduct_state"];
    $chemicalProduct_SDS = $_SESSION["chemicalProduct_SDS"];
    $chemicalProduct_V = $_SESSION["chemicalProduct_V"];
    $chemicalProduct_V_Type = $_SESSION["chemicalProduct_V_Type"];
    $strP = $_SESSION["strP"];
    $strH = $_SESSION["strH"];
    $icons=$_SESSION["icons"];


    $date = date('Y-m-d H:i:s');

    $dda = -1;
    $img = -1;
    if(isset($_SESSION["PDF_id"])){
        $dda = $_SESSION["PDF_id"];
    }
    if(isset($_SESSION["IMG_id"])){
        $img = $_SESSION["IMG_id"];
    }


    $sqlProion = "INSERT INTO product (Chemical_Name,CLPicon, Commercial_Name, Uses, State,Volume,VoluemType, info ,Pdf_ID,Image_ID, Constructor, SavingDate,Temp,Final,Append ,Valid,Sds,ClPh,CLPp)
                      VALUES (N'$chemicalProduct_Name','$icons', N'$chemicalProduct_CommName',N'$chemicalProduct_use',N'$chemicalProduct_state','$chemicalProduct_V', '$chemicalProduct_V_Type',
                              N'$chemicalProduct_extraChar','$dda','$img','$constEmpl_phone','$date',$temp_save,$final_save,$append_save,$valid_save,N'$chemicalProduct_SDS','$strH','$strP');";

    if ($conn->query($sqlProion) === TRUE) {
        echo "OK Product ";
    } else {
        echo "Error: " . $sqlProion . "<br>" . $conn->error;
    }


/********************* PROMITHEFTIKES + PROIO/PROMITHEFTIK  *************************/

    if($_SESSION["Company_Type"] == 0 || $_SESSION["Company_Type"] == 2 ){
        $suplEmpl_phone = $_SESSION["Telephone"];
        $sqlSupplyProduct = "INSERT INTO supply (Supplier,Product,Address,Saving_Date)
                                VALUE (N'$suplEmpl_phone',N'$chemicalProduct_CommName',NULL, '$date');";
        if ($conn->query($sqlSupplyProduct) === TRUE) {
            echo "ok Supl Prod";
        } else {
            echo "Error: " . $sqlSupplyProduct . "<br>" . $conn->error;
        }
    }
    else {
        for ($i = 1; $i <= $_SESSION["suplCount"]; $i++) {

            if (isset($_SESSION["suplCompany_Name_" . $i])) {

                $suplCompany_Name = $_SESSION["suplCompany_Name_" . $i];
                $suplCompany_CommercialName = $_SESSION["suplCompany_CommercialName_" . $i];
                $suplCompany_OtherName = $_SESSION["suplCompany_OtherName_" . $i];
                $suplCompany_legalForm = $_SESSION["suplCompany_legalForm_" . $i];
                $suplCompany_CEO = $_SESSION["suplCompany_CEO_" . $i];
                $suplCompany_Address = $_SESSION["suplCompany_Address_" . $i];
                $suplCompany_PC = $_SESSION["suplCompany_PC_" . $i];
                $suplCompany_City = $_SESSION["suplCompany_City_" . $i];
                $suplCompany_Phone = $_SESSION["suplCompany_Phone_" . $i];
                $suplCompany_fax = $_SESSION["suplCompany_fax_" . $i];
                $suplCompany_email = $_SESSION["suplCompany_email_" . $i];
                $suplCompany_storageAdd = $_SESSION["suplCompany_storageAdd_".$i];
                $suplCompany_info = $_SESSION["suplCompany_info_" . $i];
                $suplEmpl_name = $_SESSION["suplEmpl_name_" . $i];
                $suplEmpl_Surname = $_SESSION["suplEmpl_Surname_" . $i];
                $suplEmpl_address = $_SESSION["suplEmpl_address_" . $i];
                $suplEmpl_pc = $_SESSION["suplEmpl_pc_" . $i];
                $suplEmpl_city = $_SESSION["suplEmpl_city_" . $i];
                $suplEmpl_phone = $_SESSION["suplEmpl_phone_" . $i];
                $suplEmpl_fax = $_SESSION["suplEmpl_fax_" . $i];
                $suplEmpl_email = $_SESSION["suplEmpl_email_" . $i];

                $sqlSuplComp = "INSERT INTO company (Company_Name, Lequl_State, Address, PostCode, City, Telephone, Fax, Email, info, Commersial_Name, Other_Name, CEO, Country)
                            VALUES (N'$suplCompany_Name',N'$suplCompany_legalForm',N'$suplCompany_Address','$suplCompany_PC',N'$suplCompany_City',
                                    '$suplCompany_Phone','$suplCompany_fax',N'$suplCompany_email',N'$suplCompany_info',N'$suplCompany_CommercialName',
                                    N'$suplCompany_OtherName',N'$suplCompany_CEO','CY');";
                $sqlSuplEmp = "INSERT INTO ComPerson (Name,Company, Surname, Address, Telephone, Fax, Email, PostCode, City, type)
                            VALUES (N'$suplEmpl_name',N'$suplCompany_CommercialName' , N'$suplEmpl_Surname',N'$suplEmpl_address', '$suplEmpl_phone' ,'$suplEmpl_fax', '$suplEmpl_email' , '$suplEmpl_pc',N'$suplEmpl_city',0 );";

                if ($conn->query($sqlSuplComp) === TRUE) {
                    if ($conn->query($sqlSuplEmp) === TRUE) {
                        echo "OK Suplier " . $suplCompany_Name;
                    } else {
                        echo "Error: " .  $sqlSuplEmp. "<br>" . $conn->error;
                    }
                } else {
                    echo "Error: " . $sqlSuplComp . "<br>" . $conn->error;
                }

                $sqlSupplyProduct = "INSERT INTO supply (Supplier,Product,Address,Saving_Date)
                                VALUE ('$suplEmpl_phone',N'$chemicalProduct_CommName',N'$suplCompany_storageAdd', '$date');";
                if ($conn->query($sqlSupplyProduct) === TRUE) {
                    echo "ok Supl Prod";
                } else {
                    echo "Error: " . $sqlSupplyProduct . "<br>" . $conn->error;
                }
            }


        }
    }

/********************* chemicals + contains  *************************/


    for ( $i=1; $i<=$_SESSION["chemicalsCount"] ; $i++){
        echo $_SESSION["chemical_Name_".$i];
        if(isset($_SESSION["chemical_CAS_".$i])){
            $chemical_Name = $_SESSION["chemical_Name_".$i];
            $chemical_CAS = $_SESSION["chemical_CAS_".$i];
            $chemical_EINECS = $_SESSION["chemical_EINECS_".$i];
            $chemical_IUPAC = $_SESSION["chemical_IUPAC_".$i];
            $chemical_otherName = $_SESSION["chemical_otherName_".$i];
            $chemical_weight = $_SESSION["chemical_weight_".$i];
            $chemical_weight_type = $_SESSION["chemical_weight_type_".$i];
            $chemical_enarmonismeni = $_SESSION["chemical_enarmonismeni_".$i];
            $convertP = $_SESSION["convertP_".$i];
            $convertH = $_SESSION["convertH_".$i];
            $iconsChem = $_SESSION["iconsChem_".$i];

            $sqlChemical="INSERT INTO substance (Name,Cas, Ec ,Iupac,Other_Name,  Sort, CLPicon, CLPp, CLPh )
                              VALUE (N'$chemical_Name', N'$chemical_CAS', N'$chemical_EINECS', N'$chemical_IUPAC',N'$chemical_otherName',$chemical_enarmonismeni, '$iconsChem','$convertP','$convertH');";
            $sqlProductHaveChemical="INSERT INTO containschemical (Name, Cas,Quantity,QuantityType,Saving_Date )
                                          VALUE (N'$chemicalProduct_CommName',N'$chemical_CAS',$chemical_weight,'$chemical_weight_type','$date');";

            if ($conn->query($sqlChemical) === TRUE) {
                echo "OK Product ";
            } else {
                echo "Error: " . $sqlChemical . "<br>" . $conn->error;
            }
            if ($conn->query($sqlProductHaveChemical) === TRUE) {
                echo "OK Product ";
            } else {
                echo "Error: " . $sqlProductHaveChemical . "<br>" . $conn->error;
            }
        }
    }



    $conn->close();

    $username=$_SESSION["username"];
    $UserCompany=$_SESSION["UserCompany"];
    $t = $_SESSION["Company_Type"];
    $tel = $_SESSION["Telephone"];
    session_unset ();
    $_SESSION["username"] = $username;
    $_SESSION["suplCount"]=0;
    $_SESSION["chemicalsCount"]=0;
    $_SESSION["UserCompany"]=$UserCompany;
    $_SESSION["Telephone"] = $tel;
    $_SESSION["Company_Type"]=$t;
?>
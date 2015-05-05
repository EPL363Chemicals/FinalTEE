<?php 

    include  "../connectToDB.php";

    $userName="";
    $pass="";

    $comName="";
    $comSName="";
    $comEmail="";
    $comAddress="";
    $comPoli="";
    $comPC="";
    $comTel="";
    $comFax="";

    $isPerson="";
    $typeOfUser="";

    $CompName="";
    $CompLF="";
    $CompEmail="";
    $CompAddres="";
    $CompCity="";
    $CompPC="";
    $CompTel="";
    $CompFax="";
    $description="";
    $CompCommer="";
    $CompOtherN="";
    $CompCEO="";
    $CompCountry="";



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $userName=$_POST["userName"];
        $pass=$_POST["pass"];
        
        $comName=$_POST["comName"];
        $comSName=$_POST["comSName"];
        $comEmail=$_POST["comEmail"];
        $comAddress=$_POST["comAddress"];
        $comPoli=$_POST["comPoli"];
        $comPC=$_POST["comPC"];
        $comTel=$_POST["comTel"];
        $comFax=$_POST["comFax"];

        $isPerson = $_POST["isPerson"];
        $typeOfUser = $_POST["typeOfUser"];
        if ($isPerson == 0){

            $CompName =$_POST["CompName"];
            $CompLF=$_POST["CompLF"];
            $CompEmail=$_POST["CompEmail"];
            $CompAddres=$_POST["CompAddres"];
            $CompCity=$_POST["CompCity"];
            $CompPC=$_POST["CompPC"];
            $CompTel=$_POST["CompTel"];
            $CompFax=$_POST["CompFax"];
            $description=$_POST["description"];
            $CompCommer=$_POST["CompCommer"];
            $CompOtherN=$_POST["CompOtherN"];
            $CompCEO=$_POST["CompCEO"];
            $CompCountry=$_POST["CompCountry"];

            $sql = "INSERT INTO ComPerson (Name,Company, Surname, Address, Telephone, Fax, Email, PostCode, City, type) VALUES (N'$comName',N'$CompName',  N'$comSName',N'$comAddress', '$comTel' ,'$comFax', '$comEmail' , '$comPC',N'$comPoli','$typeOfUser' );";

            $sql2 = "INSERT INTO Company (Company_Name, Lequl_State, Address, PostCode, City, Telephone, Fax, Email, info, Commersial_Name, Other_Name, CEO, Country) VALUES (N'$CompName',  '$CompLF', N'$CompAddres' ,'$CompPC', N'$CompCity' ,'$CompFax', '$CompEmail', N'$description','$comTel', N'$CompCommer', N'$CompOtherN',N'$CompCEO', N'$CompCountry');";

            $sql3 = "INSERT INTO Users (Username, Password, Comperson) VALUES (N'$userName',N'$pass',N'$comTel');";


            if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE and $conn->query($sql3) === TRUE) {

            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                echo "Error: " . $sql2 . "<br>" . $conn->error;
                echo "Error: " . $sql3 . "<br>" . $conn->error;
            }

            $conn->close();


        }
        else{

            $sql = "INSERT INTO ComPerson (Name,Company, Surname, Address, Telephone, Fax, Email, PostCode, City, type) VALUES (N'$comName',NULL,  N'$comSName',N'$comAddress', '$comTel' ,'$comFax', '$comEmail' , '$comPC',N'$comPoli','$typeOfUser' );";

            $sql3 = "INSERT INTO Users (Username, Password, Comperson) VALUES (N'$userName',N'$pass',N'$comTel');";


            if ($conn->query($sql) === TRUE  and $conn->query($sql3) === TRUE) {

            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                echo "Error: " . $sql3 . "<br>" . $conn->error;
            }

            $conn->close();
        }

        

        // Start the session
        session_start();



        // Set session variables
        $_SESSION["username"] = $userName;
 

        header( "location: ../Profile_User/profile5.php");
    }

?>
    
<?php

if(isset($_FILES["myfile"])){
	

	$error =$_FILES["myfile"]["error"];
   {
    
    	if(!is_array($_FILES["myfile"]['name'])){
            $fileName = $_FILES['myfile']['name'];
            $tmpName  = $_FILES['myfile']['tmp_name'];
            $fileSize = $_FILES['myfile']['size'];
            $fileType = $_FILES['myfile']['type'];

            $fp      = fopen($tmpName, 'r');
            $content = fread($fp, filesize($tmpName));
            $content = addslashes($content);
            fclose($fp);

            if(!get_magic_quotes_gpc()){
                $fileName = addslashes($fileName);
            }


            include "../../../connectToDB.php";

            $query = "INSERT INTO upload (name, size, type, content ) ".
            "VALUES (N'$fileName', '$fileSize', '$fileType', '$content')";
            
            if ($conn->query($query) === TRUE) {
                echo "OK DDA ";
                session_start();
                $_SESSION["PDF_id"] = $conn->insert_id;


            } else {
                echo "Error: " . $query . "<br>" . $conn->error;
            }

            $conn->close();


            //include "../../../connectToDBforRead.php";

//            $getID = "SELECT id FROM uploads WHARE name= $fileName and size = $fileSize and type=$fileType;";
//
//            $result = mysql_query($getID,$con);
//            $row = mysql_fetch_array($result);
//
//            $id=-1;
//            if ($row){
//                $id = $row["id"];
//                //$row = mysql_fetch_array($result);
//            }


       	 
    	}
    
    }
    echo json_encode("File $fileName uploaded");
    print_r($_SESSION);
 
}

?>

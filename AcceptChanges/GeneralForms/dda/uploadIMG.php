<?php
//If directory doesnot exists create it.
$output_dir = "uploads/";

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

            if(!get_magic_quotes_gpc())
            {
                $fileName = addslashes($fileName);
            }


            include "../../../connectToDB.php";

            $query = "INSERT INTO upload (name, size, type, content ) ".
            "VALUES (N'$fileName', '$fileSize', '$fileType', '$content')";

            if ($conn->query($query) === TRUE) {
                echo "OK DDA ";
                session_start();
                $_SESSION["IMG_id"] = $conn->insert_id;

            } else {
                echo "Error: " . $query . "<br>" . $conn->error;
            }

            $conn->close();
            
       	 
    	}
    
    }
    echo json_encode("File $fileName uploaded IMG_ID: $id");
 
}

?>

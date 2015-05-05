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
            
            
            $servername = "localhost";
            $db = 'teedb';
            $username = 'root';
            $password = '261994akk';

            // Create connection
            $conn = new mysqli($servername, $username, $password, $db);


            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $query = "INSERT INTO upload (name, size, type, content ) ".
            "VALUES ('$fileName', '$fileSize', '$fileType', '$content')";
            
            if ($conn->query($query) === TRUE) {
                echo "OK DDA ";
            } else {
                echo "Error: " . $query . "<br>" . $conn->error;
            }
            
            $getID = "SELECT id FROM uploads WHARE name= $filename and size = $fileSize and type=$fileType;"
                
            $result = mysql_query($getID, $conn);
            $row = mysql_fetch_array($result);
            $id = $row["id"];
            
            session_start();
            $_SESSION["IMG_id"] = $id;

            $conn->close();
            
       	 
    	}
    
    }
    echo json_encode("File $fileName uploaded IMG_ID: $id");
 
}

?>

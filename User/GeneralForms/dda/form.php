
<?php

  $con =mysql_connect("localhost", "root", "261994akk");
            mysql_select_db("teedb");
            mysql_query ("set character_set_results='utf8'");

            if (!$con)
                echo "Cannot connect: ".mysql_error();
            else{
                mysql_select_db("root", $con);
                mysql_query ("set character_set_results='utf8'");
            
            }


if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0){
    $fileName = $_FILES['userfile']['name'];
    $tmpName  = $_FILES['userfile']['tmp_name'];
    $fileSize = $_FILES['userfile']['size'];
    $fileType = $_FILES['userfile']['type'];
   
    $fp      = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);

    if(!get_magic_quotes_gpc())
    {
        $fileName = addslashes($fileName);
    }
    /*include 'library/config.php';
    include 'library/opendb.php';
*/
    $sql1 = mysql_query("INSERT INTO upload (name, size, type, content ) VALUES ('$fileName', '$fileSize', '$fileType', '$content')",$con);
    mysql_query($sql1) or die('Error, query failed'); 
    include 'library/closedb.php';

    echo "<br>File $fileName uploaded<br>";
} 
?>
<!Doctype html>
<html>
    <head>
    </head>
    <body>
            <form method="post" enctype="multipart/form-data">
            <table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
            <tr> 
            <td width="246">
            <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
            <input name="userfile" type="file" id="userfile"> 
            </td>
            <td width="80"><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
            </tr>
            </table>
            </form>
    </body>
</html>
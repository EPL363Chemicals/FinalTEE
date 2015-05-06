<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <title>Log in</title>
   <!----------------------------------------------------------------->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="css_LogIn.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/scripts.js"></script>
    <script src="../js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.3.min.js" ></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
            
                    


  </head>
  <body> 
     <?php
                $myfile = fopen("H.txt", "r") or die("Unable to open file!");
                    echo fread($myfile,filesize("H.txt"));
                    fclose($myfile);
            ?>
  </body>
</html>
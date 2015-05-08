<?php
$product=htmlspecialchars($_GET["product"]);
$dateP=htmlspecialchars($_GET["date"]);

?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
          <title>Επικαιροπίηση</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta name="description" content="">
          <meta name="author" content="">
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">
            <link href="css/custom.css" rel="stylesheet" media="screen">
            <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
            <script type="text/javascript" src="js/jquery.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <script type="text/javascript" src="js/scripts.js"></script>
            <script src="js/jquery-1.9.1.js"></script>
            <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.3.min.js" ></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
            <script>
               $(document).ready(function() {
            $( "#submit" ).click(function() {
               
                var proceed = true;
                var x=document.getElementById("Yes").checked;
                var y= document.getElementById("No").checked;
                if(x){
                    proceed=false;
                }
                if(proceed){
                            post_data = {
                                'product'		: "",
                                
                                };
                            $.post('epikairopiisi_php.php?product='+`<?php echo $product;?>`+'&date='+`<?php echo $dateP;?>`, post_data, function(response){
                                    window.alert(response.message);
                                    
                                        
                            }, 'json');
                    
                   
                }
                
            });
                    
        });
                 
            </script>
        
    </head>
    <body style=" height:100%;">
        <div class="container">

           <div class="row clearfix">
               <div class="col-md-12 column">
                   <img src="images/banner_gr_Laa.png" width="100%" height="98">
               </div>
            </div>

           <div class="row clearfix">
               
                <div class="radio" style="text-align:center">
                    <label>Θέλεται να πραγματοποιηθεί η τροποποίηση για το προϊόν <?php echo $product;?>?</label>
                    <br>
                    <br>
                    <label ><input  name="radioGroup" id="Yes" type="radio">Ναι &nbsp&nbsp</label>
                    <label><input name="radioGroup"  id="No"type="radio"> Όχι</label>
               </div>
                <div class="col-md-8 column" style="text-align:right">
                    <button class="btn btn-default" type="submit" id="submit">Αποθήκευση</button>
                </div>
        </div>
    </body>
</html>
    
    
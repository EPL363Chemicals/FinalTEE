<?php session_start(); ?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
          <title>Λειτουργός</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta name="description" content="">
          <meta name="author" content="">

            <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
            <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
            <!--script src="js/less-1.3.3.min.js"></script-->
            <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
            <link href="../css/style.css" rel="stylesheet">
            <link href="../css/custom.css" rel="stylesheet" media="screen">
            <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
          <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
          <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
          <![endif]-->
        
            <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	       <script type="text/javascript" src="../js/scripts.js"></script>
            <link href="media/css/jquery.dataTables.css" rel="stylesheet">
        <script src="media/js/jquery.js"></script>
        <script src="media/js/jquery.dataTables.js"></script>
        
        <style>
            tfoot input {
                    width: 100%;
                    padding: 3px;
                    box-sizing: border-box;
                }
        </style>
        <script>
            $(document).ready(function() {
    var t = $('#example').DataTable();
    var counter = 1;
 
    $('#addRow').on( 'click', function () {
        t.row.add( [
            counter +'.1',
            counter +'.2',
            counter +'.3',
            counter +'.4',
            counter +'.5'
        ] ).draw();
 
        counter++;
    } );
 
    // Automatically add a first row of data
    $('#addRow').click();
} );
        </script>
    </head>
    
   
    <body style="overflow:visible;height:100%;">
    
        <div class="container">

           <div class="row clearfix">
               <div class="col-md-12 column">
                   <img src="../images/banner_gr_Laa.png" width="100%" height="98">
               </div>
               <div class="row clearfix">
                   <div class="col-md-4 column">
                       <h3><?php echo $_SESSION["username"]; ?></h3>
                   </div>
                   <div class="col-md-8 column" style="text-align: right"><h3></h3><button type="button" class="btn btn-link" onclick="location.href='../login/login.php'">Log Out</button></div>
               </div>
            </div>
            <hr>
            <div class="col-md-12 column">
                <div class="col-md-12 column">

                            <div role="tabpanel" class="tab-pane active" id="profile">
                                <?php include 'Profile_Leitourgou.php';?>
                            </div>
                        </div>


            </div>  
         </div>
    </body>
</html>
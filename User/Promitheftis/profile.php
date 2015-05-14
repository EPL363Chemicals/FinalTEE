<?php
// Start the session
session_start();

include "../GeneralForms/findUser.php";

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Προφίλ Χρήστη</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/scripts.js"></script>

    <script src="script_Prosthiki.js"></script>

    <script src="../GeneralForms/promitheftiki/script_promitheftria.js"></script>
    <script src="../GeneralForms/paraskevastiki/script_paraskevastikis.js"></script>
    <script src="../GeneralForms/proion/script_proion.js"></script>
    <script src="../GeneralForms/ousies/script_chimicon.js"></script>
    <script src="../GeneralForms/dda/script_dda.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/custom.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <link href="../../css/prettify.css" rel="stylesheet">
        <link href="../../Profile_Leitourgou/media/css/jquery.dataTables.css" rel="stylesheet">
        <script src="../../Profile_Leitourgou/media/js/jquery.js"></script>
        <script src="../../Profile_Leitourgou/media/js/jquery.dataTables.js"></script>

    <link href="https://rawgithub.com/hayageek/jquery-upload-file/master/css/uploadfile.css" rel="stylesheet">

    <script src="https://rawgithub.com/hayageek/jquery-upload-file/master/js/jquery.uploadfile.min.js"></script>


    <style>
        tfoot input {
            width: 100%;
            padding: 3px;
            box-sizing: border-box;
        }
    </style>



    <script>

        $(document).ready(function(){
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



            var a = "<?php echo $_SESSION["UserCompany"]?>";
            console.log(a);
            if(a == ""){
                document.getElementById("stixiaEteriasLi").style.display ="none";
                document.getElementById("stixiaEterias").style.display ="none";
            }
        });




    </script>




</head>



<body style="overflow:visible;height:100%;">

<div class="container">

    <div class="row clearfix">
        <div class="col-md-12 column">
            <img src="../../images/banner_gr_Laa.png" width="100%" height="98">
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-md-4 column">
            <h3><?php echo $_SESSION["username"]; ?></h3>
        </div>
        <div class="col-md-8 column" style="text-align: right"><h3></h3><button type="button" class="btn btn-link" onclick="location.href='../../login/login.php'">Log Out</button></div>
    </div>

    <div class="col-md-12 column">
        <div role="tabpanel" >
            <ul class="nav nav-tabs" role="tablist" id="tabsProfile">
                <li id="stixiaLi" role="presentation" class="active"><a id="stixiaTab" href="#stixia" aria-controls="stixia" role="tab" data-toggle="tab">Στοιχεία Χρήστη</a></li>
                <li id="stixiaEteriasLi" role="presentation" style="display: block"><a id="stixiaEteriasTab" href="#stixiaEterias" aria-controls="stixiaEterias" role="tab" data-toggle="tab">Στοιχεία Εταιρείας</a></li>
                <li id="prosthikiLi" role="presentation"><a id="prosthikiTab" href="#prosthiki" aria-controls="prosthiki" role="tab" data-toggle="tab">Πληροφορίες Χημικού προϊόντος</a></li>
                <li id="anazitisiLi"role="presentation"><a id="anazitisiTab" href="#anazitisi" aria-controls="anazitisi" role="tab" data-toggle="tab">Αναζήτηση προϊόντος</a></li>
            </ul>
            <div class="tab-content" style="height:100%">
                <div role="tabpanel" class="tab-pane active" id="stixia"><?php include '../GeneralForms/stixia_xristi.php';?></div>
                <div role="tabpanel" class="tab-pane" id="stixiaEterias"><?php include '../GeneralForms/stixia_eterias.php';?></div>
                <div role="tabpanel" class="tab-pane" id="prosthiki"><?php include 'prosthiki.php';?></div>
                <div role="tabpanel" class="tab-pane" id="anazitisi"><?php include '../GeneralForms/anazitisi_xristi.php';?></div>
            </div>
        </div>
    </div>
    <div id="asdf"></div>

</div>
</body>

</html>


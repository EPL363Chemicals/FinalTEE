
<style>
    .btn-file {
        position: relative;
        overflow: hidden;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        background: red;
        cursor: inherit;
        display: block;
    }
    input[readonly] {
        background-color: white !important;
        cursor: text !important;
    }
</style>
<script>
    $(document).ready(function(){
        var settings = {
            url: "../GeneralForms/dda/uploadIMG.php",
            method: "POST",
            allowedTypes:"pdf",
            fileName: "myfile",
            multiple: false,
            onSuccess:function(files,data,xhr){
                $("#statusIMG").html("<font color='green'>Upload is success</font>");
                console.log(xhr.response);
            },
            onError: function(files,status,errMsg){
                $("#statusIMG").html("<font color='red'>Upload is Failed</font>");
            }
        }
        $("#mulitplefileuploaderIMG").uploadFile(settings);
    });
</script>
<script>
    $(document).ready(function(){
        var settings = {
            url: "../GeneralForms/dda/uploadDDA.php",
            method: "POST",
            allowedTypes:"pdf",
            fileName: "myfile",
            multiple: false,
            onSuccess:function(files,data,xhr)
            {
                $("#statusDDA").html("<font color='green'>Upload is success</font>");
                console.log(xhr.responseText);
            },
            onError: function(files,status,errMsg)
            {
                $("#statusDDA").html("<font color='red'>Upload is Failed</font>");
            }
        }
        $("#mulitplefileuploaderDDA").uploadFile(settings);
    });
</script>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h4>Προσθήκη ΔΔΑ</h4>
            <div id="mulitplefileuploaderDDA">Upload</div>
            <div id="statusDDA"></div>
        </div>
        <div class="col-sm-6">
            <h4>Ανάκτηση ΔΔΑ</h4>
            <a href="../../DownloadDDA.php?product=<?php echo $product;?>&date=<?php echo $date;?>"><img src="../../images/pdf-icon.png"></a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <h4>Προσθήκη Ετικέτας Προϊόντος</h4>
            <div id="mulitplefileuploaderIMG">Upload</div>
            <div id="statusIMG"></div>
        </div>
        <div class="col-sm-6">
            <h4>Ανάκτηση Ετικέτας Προϊόντος</h4>
            <a href="../../DownloadDDA.php?product=<?php echo $product;?>&date=<?php echo $date;?>"><img src="../../images/pdf-icon.png"></a>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-sm-4">
            <button type="button" class="btn btn-info" id="temp_save" onclick="addToDB(1);">Προσορηνή Αποθήκευση</button>
            <button type="button" class="btn btn-danger" id="final_save" onclick="addToDB(2);">Τελική Αποθήκευση</button>
        </div>
    </div>
    <br><br>
</div>
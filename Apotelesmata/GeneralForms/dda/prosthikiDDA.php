<?php include "ddaQuery.php"; ?>
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
        var pdf = <?php echo $pdf; ?>;
        console.log(pdf);
        if(pdf <= 0) {
                $('#uploadedPDF').hide();
                $('#nouploadedPDF').show();
            }
            else {
                $('#uploadedPDF').show();
                $('#nouploadedPDF').hide();
            }

        var img = <?php echo $img ?>;
        console.log(img);
        if(img <= 0) {
            $('#uploadedIMG').hide();
            $('#nouploadedIMG').show();
        }
        else {
            $('#uploadedIMG').show();
            $('#nouploadedIMG').hide();
        }

        var tmp = <?php echo $temp;?>;
        if (tmp == 1){
            $('#tropopoiisi').show();
            $('#epikeropoiisi').hide();
        }
        else{
            $('#tropopoiisi').hide();
            $('#epikeropoiisi').show();
        }
    });


</script>
    
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                        <h4>ΔΔΑ</h4>

                        <div class="row" id="uploadedPDF" >
                           <div class="col-sm-5"> <h6 style="color: #195f91">Έχετε Ανεβάσει ΔΔΑ</h6> </div>
                            <div class="col-sm-4"><img src="../../images/pdf-icon.png" ></div>
                         </div>

                        <div id="nouploadedPDF" ><h6 style="color: #195f91">Δεν Έχετε Ανεβάσει ΔΔΑ</h6> </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    
                        <h4>Ετικέτας Προϊόντος</h4>
                    <div class="row" id="uploadedIMG" >
                        <div class="col-sm-5"> <h6 style="color: #195f91">Έχετε Ανεβάσει Ετικέτα</h6> </div>
                        <div class="col-sm-4"><img src="../../images/pdf-icon.png" ></div>
                    </div>

                    <div id="nouploadedIMG" ><h6 style="color: #195f91">Δεν Έχετε Ανεβάσει Ετικέτα</h6> </div>
                </div>
            </div>

            <br>
            <br>
            <div class="row">
                <div class="col-sm-4">
                <button type="button" class="btn btn-info" id="tropopoiisi" onclick="addToDB(1);">Τροποποίηση</button>
                <button type="button" class="btn btn-info" id="epikeropoiisi" onclick="addToDB(2);">Επικαιροποίηση</button>
                </div>
            </div>
            <br><br>

        </div>



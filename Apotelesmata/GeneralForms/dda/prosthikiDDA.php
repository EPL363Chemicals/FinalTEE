<?php
include "ddaQuery.php";
?>
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
        var l='<?php echo $_SESSION["Company-Type"];?>';
        if(l==4){
            $('#buttons').hide();
        }else{
            $('#buttons').show();
        }

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

        $('#tropopoiisi').click(function(){
            var type='<?php echo $_SESSION["Company-Type"];?>';

                switch(type){
                    case "0":window.location="../../AcceptChanges/Promitheftis/prosthiki.php?date="+"<?php echo $date;?>"+"&product="+"<?php echo $product;?>"+"&append="+0;
                        break;
                    case "1":window.location="../../AcceptChanges/Paraskevastis/prosthiki.php?date="+"<?php echo $date;?>"+"&product="+"<?php echo $product;?>"+"&append="+0;
                        break;
                    case "2":window.location="../../AcceptChanges/ParaskevastisPromitheftis/prosthiki.php?date="+"<?php echo $date;?>"+"&product="+"<?php echo $product;?>"+"&append="+0;
                        break;
                }
        })

        $("#submit_btn").click(function() {
            var proceed = true;
            $("#contact_form input[required=true], #contact_form textarea[required=true]").each(function(){
                $(this).css('border-color','');
                if(!$.trim($(this).val())){
                    $(this).css('border-color','red');
                    proceed = false;
                }
            });
            if(proceed) {
                post_data = {
                    'Reason'		: $('textarea[name=Reason]').val(),
                    'productName'		: $('input[name=productName]').val(),
                    'companyName'		: $('input[name=companyName]').val()
                };
                $.post('../GeneralForms/dda/sendEmail.php', post_data, function(response){
                    window.alert(response.text);
                    if(response.type == 'error'){ //load json data from server and output message
                        output = '<div class="error">'+response.text+'</div>';
                    }else{
                        output = '<div class="success">'+response.text+'</div>';

                    }
                    $("#contact_form #Resultmessage").hide().html(output).slideDown();
                    var type='<?php echo $_SESSION["Company-Type"];?>';
                    switch(type){
                        case "0":window.location="../../AcceptChanges/Promitheftis/prosthiki.php?date="+"<?php echo $date;?>"+"&product="+"<?php echo $product;?>"+"&append="+1;
                            break;
                        case "1":window.location="../../AcceptChanges/Paraskevastis/prosthiki.php?date="+"<?php echo $date;?>"+"&product="+"<?php echo $product;?>"+"&append="+1;
                            break;
                        case "2":window.location="../../AcceptChanges/ParaskevastisPromitheftis/prosthiki.php?date="+"<?php echo $date;?>"+"&product="+"<?php echo $product;?>"+"&append="+1;
                            break;
                    }
                }, 'json');
            }

        });
        $("#contact_form  input[required=true], #contact_form textarea[required=true]").keyup(function() {
            $(this).css('border-color','');
            $("#result").slideUp();

        });

    });




</script>
    
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                        <h4>ΔΔΑ</h4>

                        <div class="row" id="uploadedPDF" >
                           <div class="col-sm-5"> <h6 style="color: #195f91">Έχετε Ανεβάσει ΔΔΑ</h6> </div>
                            <div class="col-sm-4"><a href="../../DownloadDDA.php?product=<?php echo $product;?>&date=<?php echo $date;?>"><img src="../../images/pdf-icon.png" ></a></div>
                         </div>

                        <div id="nouploadedPDF" ><h6 style="color: #195f91">Δεν Έχετε Ανεβάσει ΔΔΑ</h6> </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    
                        <h4>Ετικέτας Προϊόντος</h4>
                    <div class="row" id="uploadedIMG" >
                        <div class="col-sm-5"> <h6 style="color: #195f91">Έχετε Ανεβάσει Ετικέτα</h6> </div>
                        <div class="col-sm-4"><a href="../../DownloadIMG.php?product=<?php echo $product;?>&date=<?php echo $date;?>"><img src="../../images/pdf-icon.png" ></a></div>
                    </div>

                    <div id="nouploadedIMG" ><h6 style="color: #195f91">Δεν Έχετε Ανεβάσει Ετικέτα</h6> </div>
                </div>
            </div>

            <br>
            <br>
            <div class="row" id="buttons">
                <div class="col-sm-4">
                <button type="button" class="btn btn-info" id="tropopoiisi" >Τροποποίηση</button>
                <button type="button" class="btn btn-info" id="epikeropoiisi" data-toggle="modal" data-target="#info-modal" >Επικαιροποίηση</button>
                </div>
            </div>
            <br><br>

        </div>



<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="info-modal" tabindex="-1" role="dialog" aria-labelledby="chemicalModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="chemicalModalLabel" style="color: #2CA4B0; font-family: 'Helvetica Neue', sans-serif;  font-weight: 100; letter-spacing: 1px; padding: 0 0 5px;">Πληροφορίες Σχετικά με την Επικαιροποίηση Στοιχείων Προϊόντος</h4>
            </div>
            <div class="modal-body">
                <!-------------------------------------------------------------------------------------------------------------------->

                <div class="container">
                    <div class="col-md-9 column">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="companyName">Όνομα Προιόντος</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" disabled="disabled" required="true" name="companyName" id="companyName" value="<?php echo $product;?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="productName">Όνομα Εταιρίας</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" required="true" name="productName" id="productName" />
                                </div>
                            </div>
                            <div class="row">
                                <label  for="chemical-Name">Παρακαλώ εξηγείστε εν συντομία τον λόγο για τον οποίο επιθυμείτε να <br> γίνει επικαιροποίηση</label>
                            </div>

                            </br>
                            <div class="row">
                                <div class="col-sm-7">
                                    <textarea class="form-control" required="true" rows="6" name="Reason" id="constCompany-info"></textarea>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                </br>
                </br>

                <!-------------------------------------------------------------------------------------------------------------------->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="submit_btn" class="btn btn-primary" data-dismiss="modal">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!------------------------------------------------------------------------------Modal End-->



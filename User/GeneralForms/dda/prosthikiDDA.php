
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
    
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                        <h4>Προσθήκη ΔΔΑ</h4>
                        <div id="mulitplefileuploaderDDA">Upload</div>

                        <div id="statusDDA"></div>
                       
                        <script>

                            $(document).ready(function()
                            {

                            var settings = {
                                url: "prosthiki/dda/uploadDDA.php",
                                method: "POST",
                                allowedTypes:"pdf",
                                fileName: "myfile",
                                multiple: false,
                                onSuccess:function(files,data,xhr)
                                {
                                    $("#statusDDA").html("<font color='green'>Upload is success</font>");

                                },
                                onError: function(files,status,errMsg)
                                {		
                                    $("#statusDDA").html("<font color='red'>Upload is Failed</font>");
                                }
                            }
                            $("#mulitplefileuploaderDDA").uploadFile(settings);

                            });
                        </script>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    
                        <h4>Προσθήκη Ετικέτας Προϊόντος</h4>
                        <div id="mulitplefileuploaderIMG">Upload</div>

                        <div id="statusIMG"></div>
                       
                        <script>

                            $(document).ready(function(){

                            var settings = {
                                url: "prosthiki/dda/uploadIMG.php",
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
            <div class="row">
                <div class="col-md-4 column"  style="text-align: left">
                   <input id="ButtonPrevious5" class="btn btn-default" type="button" value="Previous"  name="Step4" onclick="handleWizardPreviousStep5to4()" />
                </div>
                <div class="col-sm-4"></div>
                <div class="col-md-4 column" style="text-align: right">
                    <input id="ButtonNext5" class="btn btn-default" type="button" value="Next" disabled="disabled" />
                </div>
            </div>
        </div>



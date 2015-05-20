
<div class="container">

        <!------------------------------------------------------------------->
            <div class="row clearfix" >
                <div class="col-md-12 column" >
                   <table class="table table-hover"  id="tropopoiisi">
                        <tbody id="entrycol">
                        <tr>
                            <th>#</th>
                            <th>Επωνυμία Προμηθεύτριας Εταιρείας</th>
                            <th>Επεξεργασία</th>
                            <th>Διαγραφή</th>
                        </tr>
                        </tbody>
                    </table>
                  
                </div>    
            </div>
            <br><br><br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" onclick="changeButtons();" data-toggle="modal" data-target="#suplCompanyModal">Καταχώρηση Εταιρείας</button>

            <!-- Modal -->
            
            <form id="promitheftria-form">
            <div class="modal fade bs-example-modal-lg" id="suplCompanyModal" tabindex="-1" role="dialog" aria-labelledby="suplCompanyModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="suplCompanyModalLabel">Στοιχεία Προμηθεύτριας Εταιρείας</h4>
                  </div>
                  <div class="modal-body">
                    <!-------------------------------------------------------------------------------------------------------------------->
                        <div class="container">
        
                                <div class="col-md-9 column"> 

                                    <div class="row">
                                        <h4>Στοιχεία Εταιρείας</h4>
                                        
                                        <br>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany_Name">Επωνυμία Επιχείρησης:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" required=true id="suplCompany-Name" name="suplCompany_Name"type="text">
                                            </div>
                                        </div>

                                        <br><br>
                                        
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany_CommercialName">Εμπορική Επωνυμία Επιχείρησης:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplCompany-CommercialName" name="suplCompany_CommercialName"type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany_OtherName">Άλλη Επωνυμία:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplCompany-OtherName" name="suplCompany_OtherName" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany_legalForm">Νομική Μορφή:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" required=true id="suplCompany-legalForm" name="suplCompany_legalForm" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany_CEO">Όνομα Διευθυντή:</label>
                                            <div class="col-sm-4 ">
                                                <input class="form-control"  id="suplCompany-CEO" name="suplCompany_CEO" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany_Address">Διεύθυνση:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplCompany-Address" name="suplCompany_Address" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany_PC">T.K. :</label>
                                            <div class="col-sm-2">
                                                <input class="form-control" id="suplCompany-PC" name="suplCompany_PC" type="number">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany_City">Πόλη:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplCompany-City" name="suplCompany_City" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany_Phone">Τηλέφωνο:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplCompany-Phone" name="suplCompany_Phone" type="number">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany_fax">Φάξ:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplCompany-fax" name="suplCompany_fax" type="number">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany_email">Ηλεκτρονικό Ταχυδρομείο:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplCompany-email" name="suplCompany_email" type="email">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany_info">Άλλες Πληροφορίες:</label>
                                            <div class="col-sm-4">
                                                <textarea class="form-control" rows="5" id="suplCompany-info" name="suplCompany_info"></textarea>
                                            </div>
                                        </div>

                                        <br><br>

                                    </div>
                                    <br><br>
                                    <!--------------------------------------------------------------------------------------------------------------------------------->

                                    <div class="row">
                                        <h4>Στοιχεία Υπεύθυνου Επικοινωνίας</h4><br>
                                        
                                        <br>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplEmpl_name">Όνομα:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" required=true id="suplEmpl-name" name="suplEmpl_name"  type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplEmpl_Surname">Επίθετο:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" required=true id="suplEmpl-Surname" name="suplEmpl_Surname" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplEmpl_address">Διεύθυνση:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplEmpl-address" name="suplEmpl_address" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplEmpl_pc">T.K. :</label>
                                            <div class="col-sm-2">
                                                <input class="form-control" id="suplEmpl-pc" name="suplEmpl_pc" type="number">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplEmpl_city">Πόλη:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplEmpl-city" name="suplEmpl_city" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplEmpl_phone">Τηλέφωνο:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" required=true id="suplEmpl-phone" name="suplEmpl_phone" type="number">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplEmpl_fax">Φάξ:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplEmpl-fax" name="suplEmpl_fax" type="number">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplEmpl_email">Ηλεκτρονικό Ταχυδρομείο:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" required=true id="suplEmpl-email" name="suplEmpl_email" type="email">
                                            </div>
                                        </div>

                                        <br><br>
                                    </div>
                                </div>
                                <br><br>
                            </div>
                      <!-------------------------------------------------------------------------------------------------------------------->
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="clearInputsEterias()">Close</button>
                    <button type="button" id="saveSupplierCompany" class="btn btn-primary" data-dismiss="modal" onclick="addCompany();" name="addentry">Save changes</button>
                     <button type="button" id="tropopoiisiButton" class="btn btn-primary" data-dismiss="modal" onclick=" PostDataPromitheftiki('tropopoiisi');" name="addentry">Τροποποίηση</button>
                  </div>
                </div>
              </div>
            </div>
                </form>
            

           
         
        <!--------------------------------------------------------------->
        <br><br>

 
    </div> 

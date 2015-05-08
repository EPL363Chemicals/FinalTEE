
<?php include "paraskevastisQuery.php"; ?>
    <div class="container">

        <div class="col-md-12 column" name="paraskevastiki_form"> 
            
                <h3>Στοιχεία Παρασκευάστριας Εραιρίας</h3>
                <br>
         
            
            <div class="row">
                <h4>Στποχεία Εταιρίας</h4>
                <hr>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_Name">Επωνυμία Επιχείρησης:</label>
                    <div class="col-sm-4">
                        <input class="form-control" id="constCompany_Name"  name="constCompany_Name" type="text" value="<?php echo $constCompany_Name ?>">
                    </div>
                </div>
                
                <br><br>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_CommercialName">Εμπορική Επωνυμία Επιχείρησης:<label style="color:red;">*</label></label>
                    <div class="col-sm-4">
                        <input class="form-control" disabled="disabled" id="constCompany_CommercialName"  name="constCompany_CommercialName" type="text" value="<?php echo $constCompany_CommercialName ?>">
                    </div>
                </div>

                <br><br>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_OtherName">Άλλη Επωνυμία:</label>
                    <div class="col-sm-4">
                        <input class="form-control" id="constCompany_OtherName" name="constCompany_OtherName" type="text" value="<?php echo $constCompany_OtherName ?>">
                    </div>
                </div>

                <br><br>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_legalForm">Νομική Μορφή:</label>
                    <div class="col-sm-4">
                        <input class="form-control" id="constCompany_legalForm" name="constCompany_legalForm" type="text" value="<?php echo $constCompany_legalForm ?>">
                    </div>
                </div>

                <br><br>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_CEO">Όνομα Διευθυντή:</label>
                    <div class="col-sm-4 ">
                        <input class="form-control" id="constCompany_CEO" name="constCompany_CEO" type="text" value="<?php echo $constCompany_CEO ?>">
                    </div>
                </div>

                <br><br>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_Address">Διεύθυνση:<label style="color:red;">*</label></label>
                    <div class="col-sm-4">
                        <input class="form-control" id="constCompany_Address" name="constCompany_Address"  type="text" value="<?php echo $constCompany_Address ?>">
                    </div>
                </div>

                <br><br>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_PC">T.K. :<label style="color:red;">*</label></label>
                    <div class="col-sm-2">
                        <input class="form-control" id="constCompany_PC" name="constCompany_PC"  type="number" value="<?php echo $constCompany_PC ?>">
                    </div>
                </div>

                <br><br>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_City">Πόλη:<label style="color:red;">*</label></label>
                    <div class="col-sm-4">
                        <input class="form-control" id="constCompany_City" name="constCompany_City"  type="text" value="<?php echo $constCompany_City ?>">
                    </div>
                </div>

                <br><br>

                <div class="form-group">
                    <label class="col-sm-3 control-label"  name="constCompany_country" for="constCompany_country">Χώρα:<label style="color:red;">*</label></label>
                        <div class="col-sm-4">
                            <input class="form-control" id="constCompany_country" name="constCompany_country"  type="text" value="<?php echo $constCompany_country ?>">
                        </div>
                </div>

                <br><br>
              
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_Phone">Τηλέφωνο:<label style="color:red;">*</label></label>
                    <div class="col-sm-4">
                        <input class="form-control" name="constCompany_Phone"  id="constCompany_Phone" type="number" value="<?php echo $constCompany_Phone ?>">
                    </div>
                </div>

                <br><br>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_fax">Φάξ:<label style="color:red;">*</label></label>
                    <div class="col-sm-4">
                        <input class="form-control" name="constCompany_fax" id="constCompany_fax"  type="number" value="<?php echo $constCompany_fax ?>">
                    </div>
                </div>

                <br><br>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_email">Ηλεκτρονικό Ταχυδρομείο:</label>
                    <div class="col-sm-4">
                        <input class="form-control" name="constCompany_email"  id="constCompany_email" type="email" value="<?php echo $constCompany_email ?>">
                    </div>
                </div>

                <br><br>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_info">Άλλες Πληροφορίες:</label>
                    <div class="col-sm-4">
                        <textarea  class="form-control" rows="5" name="constCompany_info" id="constCompany_info"><?php echo $constCompany_info ?></textarea>
                    </div>
                </div>

                <br><br>
                
            </div>
            <br><br>
            <!--------------------------------------------------------------------------------------------------------------------------------->


            <div class="row">
                <h4>Στοιχεία Υπεύθυνου Επικοινωνίας</h4>
                <br>
                <hr>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constEmpl_name">Όνομα:<label style="color:red;">*</label></label>
                    <div class="col-sm-4">
                        <input class="form-control" name="constEmpl_name"  id="constEmpl_name" type="text" value="<?php echo $constEmpl_name ?>">
                    </div>
                </div>

                <br><br>
            
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constEmpl_Surname">Επίθετο:<label style="color:red;">*</label></label>
                    <div class="col-sm-4">
                        <input class="form-control" name="constEmpl_Surname"  id="constEmpl_Surname" type="text" value="<?php echo $constEmpl_Surname ?>">
                    </div>
                </div>
                
                <br><br>
                    
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constEmpl_address">Διεύθυνση:</label>
                    <div class="col-sm-4">
                        <input class="form-control" name="constEmpl_address" id="constEmpl_address" type="text" value="<?php echo $constEmpl_address ?>">
                    </div>
                </div>
                
                <br><br>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constEmpl_pc">T.K. :</label>
                    <div class="col-sm-2">
                        <input class="form-control" name="constEmpl_pc" id="constEmpl_pc" type="number" value="<?php echo $constEmpl_pc ?>">
                    </div>
                </div>
                
                <br><br>
                   
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constEmpl_city">Πόλη:</label>
                    <div class="col-sm-4">
                        <input class="form-control" name="constEmpl_city" id="constEmpl_city" type="text" value="<?php echo $constEmpl_city ?>">
                    </div>
                </div>
                    
                <br><br>

                <div class="form-group">
                    <label class="col-sm-3 control-label" disabled="disabled" for="constEmpl_phone">Τηλέφωνο:<label style="color:red;">*</label></label>
                    <div class="col-sm-4">
                        <input class="form-control" name="constEmpl_phone"  id="constEmpl_phone" type="number" value="<?php echo $constEmpl_phone ?>">
                    </div>
                </div>
                
                <br><br>
                    
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constEmpl_fax">Φάξ:</label>
                    <div class="col-sm-4">
                        <input class="form-control" name="constEmpl_fax" id="constEmpl_fax" type="number" value="<?php echo $constEmpl_fax ?>">
                    </div>
                </div>
                    
                <br><br>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constEmpl_email">Ηλεκτρονικό Ταχυδρομείο:<label style="color:red;">*</label></label>
                    <div class="col-sm-4">
                        <input class="form-control" name="constEmpl_email"  id="constEmpl_email" type="email" value="<?php echo $constEmpl_email ?>">
                    </div>

                </div>
                
                <br><br>
         
        </div>

        <br><br>

        
    </div>
        </div>


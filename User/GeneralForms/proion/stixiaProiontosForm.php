    <div class="col-md-12 ">
        <div class="container">
        	<div class="row">
                <form id="proionForm">
       	        <div class="panel-heading " >
                    <h2 class="panel-title col-sm-offset-1"><strong>Στοιχεία Χιμικού  Προϊόντος</strong></h2>
                </div>  
                <hr>              
                <br>
                                     
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_Name">Χημική Ονομασία Προϊόντος:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control"  name="chemicalProduct_Name" id="chemicalProduct_Name" />
                    </div>
                </div>
                  
                <br><br>
                
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_CommName">Εμπορική Ονομασία Προϊόντος:<label style="color:red;">*</label></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" required=true name="chemicalProduct_CommName" id="chemicalProduct_CommName" />
                    </div>
                </div>
                   
                <br><br>
                
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_use">Προβλεπόμενες Χρήσεις Προϊόντος:<label style="color:red;">*</label></label>
                    <div class="col-sm-6">
                        <textarea type="text" class="form-control" required=true rows="5" name="chemicalProduct_use" id="chemicalProduct_use" /></textarea>
                    </div>
                </div>
                  
                <br><br><br><br><br><br>
            
                 <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_extraChar">Πρόσθετα Χαρακτηριστικά ή άλλες επιπρόσθετες πληροφορίες για το μείγμα</label>
                    <div class="col-sm-6">
                        <textarea type="text" class="form-control" rows="5" name="chemicalProduct_extraChar" id="chemicalProduct_extraChar" /></textarea>
                    </div>
                </div>
                  
                <br><br><br><br><br><br>
            
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_state">Κατάσταση Προϊόντος:<label style="color:red;">*</label></label>
                    <div class="col-sm-6">
                        <select class="form-control" name="chemicalProduct_state" required=true id="chemicalProduct_state">
                          <option value="Αέριο">Αέριο</option>
                          <option value="Υγρό">Υγρό</option>
                          <option value="Στερεό">Στερεό</option>
                          <option value="Τζελ">Τζελ</option>
                          <option value="Pellets">Pellets</option>
                          <option value="Capsules">Capsules</option>
                          <option value="Άλλο">Άλλο</option>
                        </select>
                    </div>
                </div>
                        
                <br><br>

                   
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_SDS">Στοιχεία Ταξινόμησης και Επισήμανσης σύμφωνα με το Δελτίο Δεδομένων Ασφαλείας (SDS)<label style="color:red;">*</label></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="chemicalProduct_SDS" required=true id="chemicalProduct_SDS" />
                    </div>
                </div>
        
                <br><br><br>
        
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_CPL">Στοιχεία Ταξινόμησης και Επισήμανσης σύμφωνα με τον Κανονισμό 1272/2008 (Κανονισμός CLP)(αν είναι διαθέσιμα)<label style="color:red;">*</label></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="chemicalProduct_CPL" required=true id="chemicalProduct_CPL" />
                    </div>
                </div>
        
                <br><br><br>
                   
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_V">Συσκευασία:<label style="color:red;">*</label></label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control"  required=true name="chemicalProduct_V" id="chemicalProduct_V"/>
                    </div>
                    <div class="col-sm-2">
                        <select class="form-control" name="chemicalProduct_V_Type" id="chemicalProduct_V_Type">
                            <option value="Kg">Kg</option>
                            <option value="L">L</option>
                            <option value="gr">gr</option>
                            <option value="ml">ml</option>
                        </select>
                    </div>
                </div>
            <br><br>

                   <br><br>

            </form>
                 
            </div>  
        </div>
    </div>

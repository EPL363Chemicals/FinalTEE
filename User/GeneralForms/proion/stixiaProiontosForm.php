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
                    <label class="control-label col-sm-4" for="chemicalProduct_CommName">Εμπορική Ονομασία Προϊόντος:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" required=true name="chemicalProduct_CommName" id="chemicalProduct_CommName" />
                    </div>
                </div>
                   
                <br><br>
                
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_use">Προβλεπόμενες Χρήσεις Προϊόντος:</label>
                    <div class="col-sm-6">
                        <textarea type="text" class="form-control" rows="5" name="chemicalProduct_use" id="chemicalProduct_use" /></textarea>
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
                    <label class="control-label col-sm-4" for="chemicalProduct_state">Κατάσταση Προϊόντος:</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="chemicalProduct_state" id="chemicalProduct_state">
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
                    <label class="control-label col-sm-4" for="chemicalProduct_storageAdd">Διεύθυνση Αποθήκευσης Μείγματος:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="chemicalProduct_storageAdd" id="chemicalProduct_storageAdd" />
                    </div>
                </div>
                 
                <br><br>
                   
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_SDS">Στοιχεία Ταξινόμησης και Επισήμανσης σύμφωνα με το Δελτίο Δεδομένων Ασφαλείας (SDS)</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="chemicalProduct_SDS" id="chemicalProduct_SDS" />
                    </div>
                </div>
        
                <br><br><br>
        
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_CPL">Στοιχεία Ταξινόμησης και Επισήμανσης σύμφωνα με τον Κανονισμό 1272/2008 (Κανονισμός CLP)(αν είναι διαθέσιμα)</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="chemicalProduct_CPL" id="chemicalProduct_CPL" />
                    </div>
                </div>
        
                <br><br><br>
                   
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_V">Συσκευασία:</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" required=true name="chemicalProduct_V" id="chemicalProduct_V"/>
                    </div>
                </div>
            <br><br>

                   <br><br>

            </form>
                 
            </div>  
        </div>
    </div>

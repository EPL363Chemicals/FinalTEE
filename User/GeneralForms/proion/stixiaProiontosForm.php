    <div class="col-md-12 ">
        <div class="container">
        	<div class="row">
                <form id="proionForm">
       	        <div class="panel-heading " >
                    <h2 class="panel-title col-sm-offset-1"><strong>Στοιχεία Χιμικού  Προιόντος</strong></h2>
                </div>  
                <hr>              
                <br>
                                     
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_Name">Χημική Ονομασία:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" required=true name="chemicalProduct_Name" id="chemicalProduct_Name" />
                    </div>
                </div>
                  
                <br><br>
                
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_CommName">Εμπορική Ονομασία:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="chemicalProduct_CommName" id="chemicalProduct_CommName" />
                    </div>
                </div>
                   
                <br><br>
                
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_use">Προβλεπόμενες Χρήσεις:</label>
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
                    <label class="control-label col-sm-4" for="chemicalProduct_state">Κατάσταση:</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="chemicalProduct_state" id="chemicalProduct_state">
                          <option value="0">Αέριο</option>
                          <option value="1">Υγρό</option>
                          <option value="2">Στερεό</option>
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
                    <label class="control-label col-sm-4" for="chemicalProduct_V">Όγκος Συσκευασίας:</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" required=true name="chemicalProduct_V" id="chemicalProduct_V"/>
                    </div>
                </div>
            <br><br>
            <div class="row">
                <div class="col-md-4 column"  style="text-align: left">
                   <input id="ButtonPrevious3" class="btn btn-default" type="button" value="Previous"  name="Step2" onclick="handleWizardPreviousStep3to2()" />
                </div>
                <div class="col-sm-4"></div>
                <div class="col-md-4 column" style="text-align: right">
                    <input id="ButtonNext3" class="btn btn-default" type="submit" value="Next" name="Step4" onClick="checkInputProion()" />
                </div>
                </div>
            </form>
                 
            </div>  
        </div>
    </div>

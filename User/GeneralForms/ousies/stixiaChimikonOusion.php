        <div class="container">
            
            <div class="row clearfix" >
                <div class="col-md-12 column" >
                    <table class="table table-hover" name="chemicalTable" id="chemicalTable">
                        <tr>
                            <th>#</th>
                            <th>Χημική  Ουσία</th>
                            <th>Επεξεργασία</th>
                            <th>Διαγραφή</th>
                        </tr>
                    </table>
                  
                </div>    
            </div>
            <br><br><br>    
            
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#chemicalModal">Εισαγωγή στοιχείου</button>

            <!-- Modal -->
            <form id="chemicalForm" class="form-horizontal">
            <div class="modal fade bs-example-modal-lg" name="chemicalModal" id="chemicalModal" tabindex="-1" role="dialog" aria-labelledby="chemicalModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" name="" id="chemicalModalLabel">Χημική Σύνθεση Μείγματος</h4>
                  </div>
                  <div class="modal-body">
                    <!-------------------------------------------------------------------------------------------------------------------->
                        <div class="container">
                            
                            <div class="col-md-9 column">

                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" for="chemical_Name">Χημική ουσία</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" required=true name="chemical_Name" id="chemical_Name" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical_CAS" >Αριθμός CAS</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" required=true  name="chemical_CAS" id="chemical_CAS" />
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical_EINECS">Αριθμός EC/EINECS</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="chemical_EINECS" id="chemical_EINECS" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical_IUPAC">Ονοματολογία κατά IUPAC</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="chemical_IUPAC" id="chemical_IUPAC" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical_otherName">Άλλη Ονοματολογία</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="chemical_otherName" id="chemical_otherName" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical_weight">Ακριβής συγκέντρωση χημικής ουσίας στο μείγμα                                                                  (βάρος κατά βάρος)</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" required=true name="chemical_weight" id="chemical_weight" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical_CLP">Ταξινόμηση και Επισήμανση σύμφωνα με τον Κανονισμό 1272/2008 (Κανονισμός CLP)</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="chemical_CLP" id="chemical_CLP" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical_enarmonismeni">Εναρμονισμένη ταξινόμηση</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="chemical_enarmonismeni" id="chemical_enarmonismeni">
                                                <option value="1">Ναι</option>
                                                <option value="0">Όχι</option>
                                            </select>
                                        </div>
                                    </div>

                            </div>

                        </div>
                      <!-------------------------------------------------------------------------------------------------------------------->
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="clearInputsChimikon()">Close</button>
                    <button type="submit"  class="btn btn-primary" onclick="checkInputOusias();" name="addentry">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
            <br><br>
            <div class="row">
                <div class="col-md-4 column"  style="text-align: left">
                   <input id="ButtonPrevious4" class="btn btn-default" type="button" value="Previous" name="Step3" onclick="handleWizardPreviousStep4to3()" />
                </div>
                <div class="col-sm-4"></div>
                <div class="col-md-4 column" style="text-align: right">
                    <input id="ButtonNext4" class="btn btn-default" type="button" value="Next" name="Step5" onClick="handleWizardNextStep4To5()" />
                </div>
            </div>
</div>
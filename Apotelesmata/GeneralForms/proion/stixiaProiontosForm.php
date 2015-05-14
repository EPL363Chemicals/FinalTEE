<?php include "proionQuery.php"?>
<div class="col-md-12 ">
    <div class="container">
        <div class="row">
            <form id="proionForm">
                <div class="panel-heading " >
                    <h2 class="panel-title col-sm-offset-1"><strong>Στοιχεία Χημικού Μίγματος</strong></h2>
                </div>
                <hr>
                <br>

                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_Name">Χημική Ονομασία Προϊόντος:</label>
                    <div class="col-sm-6">
                        <input disabled="disabled" type="text" class="form-control"  disabled="disabled" name="chemicalProduct_Name" id="chemicalProduct_Name" value="<?php echo $chemicalProduct_Name; ?>"/>
                    </div>
                </div>

                <br><br>

                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_CommName">Εμπορική Ονομασία Προϊόντος:<label style="color:red;">*</label></label>
                    <div class="col-sm-6">
                        <input disabled="disabled" type="text" class="form-control"  name="chemicalProduct_CommName" id="chemicalProduct_CommName" value="<?php echo $chemicalProduct_CommName ?>" />
                    </div>
                </div>

                <br><br>

                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_use">Προβλεπόμενες Χρήσεις Προϊόντος:<label style="color:red;">*</label></label>
                    <div class="col-sm-6">
                        <textarea disabled="disabled" type="text" class="form-control"  rows="5" name="chemicalProduct_use" id="chemicalProduct_use"  /><?php echo $chemicalProduct_use ?></textarea>
                    </div>
                </div>

                <br><br><br><br><br><br>

                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_extraChar">Πρόσθετα Χαρακτηριστικά ή άλλες επιπρόσθετες πληροφορίες για το μείγμα</label>
                    <div class="col-sm-6">
                        <textarea disabled="disabled" type="text" class="form-control" rows="5" name="chemicalProduct_extraChar" id="chemicalProduct_extraChar"  /><?php echo $chemicalProduct_extraChar ?></textarea>
                    </div>
                </div>

                <br><br><br><br><br><br>

                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_state">Κατάσταση Προϊόντος:<label style="color:red;">*</label></label>
                    <div class="col-sm-6">
                        <input disabled="disabled" type="text" class="form-control" name="chemicalProduct_state"  id="chemicalProduct_state" value="<?php echo $chemicalProduct_state ?>" />
                    </div>
                </div>

                <br><br>


                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_SDS">Στοιχεία Ταξινόμησης και Επισήμανσης σύμφωνα με το Δελτίο Δεδομένων Ασφαλείας (SDS)<label style="color:red;">*</label></label>
                    <div class="col-sm-6">
                        <input disabled="disabled" type="text" class="form-control" name="chemicalProduct_SDS"  id="chemicalProduct_SDS" value="<?php echo $chemicalProduct_SDS ?>" />
                    </div>
                </div>

                <br><br><br>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_V">Συσκευασία:<label style="color:red;">*</label></label>
                    <div class="col-sm-4">
                        <input disabled="disabled" type="number" class="form-control"   name="chemicalProduct_V" id="chemicalProduct_V"value="<?php echo $chemicalProduct_V ?>" />
                    </div>
                    <div class="col-sm-2">
                        <input disabled="disabled" type="text" class="form-control"   name="chemicalProduct_V_Type" id="chemicalProduct_V_Type" value="<?php echo $chemicalProduct_V_Type ?>" />
                    </div>
                </div>
                <br><br><br>

                <div class="form-group">
                    <div class="col-sm-2"></div>
                    <label class="control-label col-sm-6" for="chemicalProduct_CPL" style="text-align: center">Στοιχεία Ταξινόμησης και Επισήμανσης σύμφωνα με τον Κανονισμό 1272/2008 (Κανονισμός CLP)(αν είναι διαθέσιμα)<label style="color:red;">*</label></label>
                    <div class="col-sm-3"></div>
                </div>
                <br><br><br>
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="control-label col-sm-3">GHS pictograms</label>

                        <div class="col-md-6">
                            <img src="../../DangerIcons/acid_red.gif" style="height:50px; width:50px ;margin:10px"><input disabled="disabled" type="checkbox" name="icon1" id="icon1" <?php echo $icon1?>>
                            <img src="../../DangerIcons/Aquatic-pollut-red.gif" style="height:50px; width:50px ;margin:10px"><input disabled="disabled" type="checkbox" name="icon2" id="icon2" <?php echo $icon2?>>
                            <img src="../../DangerIcons/bottle.gif" style="height:50px; width:50px ;margin:10px"><input disabled="disabled" type="checkbox" name="icon3" id="icon3" <?php echo $icon3?>>
                            <img src="../../DangerIcons/exclam.gif" style="height:50px; width:50px ;margin:10px"><input disabled="disabled" type="checkbox" name="icon4" id="icon4"<?php echo $icon4?> >
                            <img src="../../DangerIcons/explos.gif" style="height:50px; width:50px ;margin:10px"><input disabled="disabled" type="checkbox" name="icon5" id="icon5" <?php echo $icon5?>>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-3"></div>
                        <div class="col-md-6">
                            <img src="../../DangerIcons/flamme.gif" style="height:50px; width:50px ;margin:10px"><input disabled="disabled" type="checkbox" name="icon6" id="icon6" <?php echo $icon6?> >
                            <img src="../../DangerIcons/rondflam.gif" style="height:50px; width:50px ;margin:10px"><input disabled="disabled" type="checkbox" name="icon7" id="icon7"<?php echo $icon7?> >
                            <img src="../../DangerIcons/silhouete.gif" style="height:50px; width:50px ;margin:10px"><input disabled="disabled" type="checkbox" name="icon8" id="icon8" <?php echo $icon8?>>
                            <img src="../../DangerIcons/skull.gif" style="height:50px; width:50px ;margin:10px"><input disabled="disabled" type="checkbox" name="icon9" id="icon9" <?php echo $icon9?> >
                        </div>
                    </div>
                </div>

                <br><br><br>
                <br><br><br>
                <br><br><br>

                <div class="form-group">
                    <label class="control-label col-sm-4" for="select-P">Precautionary Statements</label>
                    <div class="col-md-6">
                        <textarea disabled="disabled" type="text" class="form-control" rows="2" name="select-P" id="select-P" /><?php echo $select_P ?></textarea>
                    </div>
                </div>



                <br><br><br>


                <div class="form-group">
                    <label class="control-label col-sm-4" for="select-H">Hazerd Statements</label>
                    <div class="col-md-6">
                        <textarea disabled="disabled" type="text" class="form-control" rows="2" name="select-H" id="select-H"/><?php echo $select_H ?></textarea>
                    </div>
                </div>



                <br><br><br><br>

            </form>

        </div>
    </div>
</div>


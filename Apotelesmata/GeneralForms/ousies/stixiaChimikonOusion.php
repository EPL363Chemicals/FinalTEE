<?php

include "../../connectToDBforRead.php";

$sql1 = mysql_query("SELECT Distinct substance.* FROM `substance`,`containschemical`,`Product` WHERE Product.Commercial_Name=N'".$product."' and Product.Commercial_Name=containschemical.Name and Product.SavingDate=containschemical.Saving_Date and containschemical.Cas=Substance.Cas", $con);
$row1 = mysql_fetch_array($sql1);
?>



<script type="text/javascript">
    $(document).ready(function() {
        tr = $('#display2').find('tr');


        tr.bind('click', function(event) {
            number=$(this).find("td.d1").html();
            Cas=$(this).find("td.d3").html();
            console.log(Cas);
            var proceed = true;
            if(proceed) {
                post_data = {
                    'num'		: number,
                    'Cas'		: Cas,
                    'product'   :"<?php echo $product;?>",
                    'date'  : <?php echo $date;?>
                };
                $.post('../GeneralForms/ousies/ousiesQuery.php', post_data, function(response){

                    $('#chemical_Name').val(response.Name);
                    $('#chemical_CAS').val(response.Cas);
                    $('#chemical_EINECS').val(response.Ec);
                    $('#chemical_IUPAC').val(response.Iupac);
                    $('#chemical_otherName').val(response.OName);
                    $('#chemical_weight').val(response.weight);
                    $('#chemical_weight_type').val(response.weightType);
                    $('#chemical_enarmonismeni').val(response.Sort);

                    $('#icon1chem').prop('checked',response.icon1);
                    $('#icon2chem').prop('checked',response.icon2);
                    $('#icon3chem').prop('checked',response.icon3);
                    $('#icon4chem').prop('checked',response.icon4);
                    $('#icon5chem').prop('checked',response.icon5);
                    $('#icon6chem').prop('checked',response.icon6);
                    $('#icon7chem').prop('checked',response.icon7);
                    $('#icon8chem').prop('checked',response.icon8);
                    $('#icon9chem').prop('checked',response.icon9);


                    $('#select-P-chem').val(response.P);
                    $('#select-H-chem').val(response.H);

                }, 'json');
            }

        });
    });
</script>

<div class="container">
            
            <div class="row clearfix" >
                <div class="col-md-12 column" >

                    <table class="table table-hover" id="display2">
                        <tr>
                            <th>#</th>
                            <th>Όνομα Χημικής ουσίας</th>
                            <th>CAS</th>
                        </tr>
                        <?php
                        $i=0;
                        while ($row1){
                            ?>
                            <!--data-toggle="modal" data-target="#suplCompanyModal"-->
                            <tr id="row1<?php echo $i?>" data-toggle="modal" data-target="#chemicalModal" class="click" >
                                <td class="d1"><?php echo $i ?></td>
                                <td class="d2"><?php echo $row1["Name"]?></td>
                                <td class="d3"><?php echo $row1["Cas"]?></td>
                            </tr>
                            <?php
                            $i=$i+1;
                            $row1 = mysql_fetch_array($sql1);
                        }
                        ?>
                    </table>
                  
                </div>    
            </div>
            <br><br><br>    


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
                                        <label class="control-label col-sm-3" for="chemical_Name">Όνομα Χημικής ουσίας<label style="color:red;">*</label></label>
                                        <div class="col-sm-4">
                                            <input disabled="disabled" type="text" class="form-control"  name="chemical_Name" id="chemical_Name" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical_CAS" >Αριθμός CAS<label style="color:red;">*</label></label>
                                        <div class="col-sm-4">
                                            <input disabled="disabled" type="text" class="form-control"   name="chemical_CAS" id="chemical_CAS" />
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical_EINECS">Αριθμός EC/EINECS</label>
                                        <div class="col-sm-4">
                                            <input disabled="disabled" type="text" class="form-control" name="chemical_EINECS" id="chemical_EINECS" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical_IUPAC">Ονοματολογία κατά IUPAC</label>
                                        <div class="col-sm-4">
                                            <input disabled="disabled" type="text" class="form-control" name="chemical_IUPAC" id="chemical_IUPAC" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical_otherName">Άλλη Ονοματολογία</label>
                                        <div class="col-sm-4">
                                            <input disabled="disabled" type="text" class="form-control" name="chemical_otherName" id="chemical_otherName" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical_weight">Ακριβής συγκέντρωση χημικής ουσίας στο μείγμα<label style="color:red;">*</label></label>
                                        <div class="col-sm-2">
                                            <input disabled="disabled" type="number" class="form-control"  name="chemical_weight" id="chemical_weight" />
                                        </div>
                                        <div class="col-sm-2">
                                            <input disabled="disabled" type="text" class="form-control"  name="chemical_weight_type" id="chemical_weight_type" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical_enarmonismeni">Εναρμονισμένη ταξινόμηση</label>
                                        <div class="col-sm-4">
                                            <input disabled="disabled" type="text" class="form-control"  name="chemical_enarmonismeni" id="chemical_enarmonismeni" />
                                        </div>
                                    </div>

                                <div class="form-group">
                                    <div class="col-sm-1"> </div>
                                    <label class="control-label col-sm-5" for="chemical_CLP">Ταξινόμηση και Επισήμανση σύμφωνα με τον Κανονισμό 1272/2008 (Κανονισμός CLP)</label>
                                </div>

                                <div class="form-group">

                                        <label class="control-label col-sm-2">GHS pictograms</label>

                                        <div class="col-md-5">
                                            <img src="../../DangerIcons/acid_red.gif" style="height:50px; width:50px ;margin:10px"><input disabled="disabled" type="checkbox" name="icon1" id="icon1chem">
                                            <img src="../../DangerIcons/Aquatic-pollut-red.gif" style="height:50px; width:50px ;margin:10px"><input disabled="disabled" type="checkbox" name="icon2" id="icon2chem">
                                            <img src="../../DangerIcons/bottle.gif" style="height:50px; width:50px ;margin:10px"><input disabled="disabled" type="checkbox" name="icon3" id="icon3chem">

                                        </div>
                                    </div>
                                <div class="form-group">

                                    <div class="col-sm-2"></div>
                                    <div class="col-md-5">
                                        <img src="../../DangerIcons/exclam.gif" style="height:50px; width:50px ;margin:10px"><input disabled="disabled" type="checkbox" name="icon4" id="icon4chem">
                                        <img src="../../DangerIcons/explos.gif" style="height:50px; width:50px ;margin:10px"><input disabled="disabled" type="checkbox" name="icon5" id="icon5chem">
                                        <img src="../../DangerIcons/flamme.gif" style="height:50px; width:50px ;margin:10px"><input disabled="disabled" type="checkbox" name="icon6" id="icon6chem">

                                    </div>
                                </div>
                                <div class="form-group">

                                        <div class="col-sm-2"></div>
                                        <div class="col-md-5">
                                            <img src="../../DangerIcons/rondflam.gif" style="height:50px; width:50px ;margin:10px"><input disabled="disabled" type="checkbox" name="icon7" id="icon7chem">
                                            <img src="../../DangerIcons/silhouete.gif" style="height:50px; width:50px ;margin:10px"><input disabled="disabled" type="checkbox" name="icon8" id="icon8chem">
                                            <img src="../../DangerIcons/skull.gif" style="height:50px; width:50px ;margin:10px"><input disabled="disabled" type="checkbox" name="icon9" id="icon9chem">
                                        </div>

                                </div>

                                <br><br>


                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="select-P">Precautionary Statements</label>
                                    <div class="col-md-4">
                                        <textarea disabled="disabled" type="text" class="form-control" rows="2" name="select-P-chem" id="select-P-chem" /></textarea>
                                    </div>
                                </div>



                                <br><br>


                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="select-H">Hazerd Statements</label>
                                    <div class="col-md-4">
                                        <textarea disabled="disabled" type="text" class="form-control" rows="2" name="select-H-chem" id="select-H-chem" /></textarea>
                                    </div>
                                </div>


                            </div>

                        </div>
                      <!-------------------------------------------------------------------------------------------------------------------->
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="clearInputsChimikon()">Close</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
            <br><br>

</div>
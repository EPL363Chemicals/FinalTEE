<?php

include "../../connectToDBforRead.php";

$sql1 = mysql_query("SELECT Distinct ComPerson.* FROM `Product`,`Supply`,`ComPerson` WHERE Supply.Product=N'".$product."' and ComPerson.Telephone=Supply.Supplier and Supply.Saving_Date='".$date."'", $con);
$row1 = mysql_fetch_array($sql1);

?>



<script type="text/javascript">
    $(document).ready(function() {
        tr1 = $('#display').find('tr');


        tr1.bind('click', function(event) {
            number=$(this).find("td.c1").html();
            name=$(this).find("td.c2").html();
            tel=parseInt($(this).find("td.c3").html());
            var proceed = true;


            if(proceed) {
                post_data = {
                    'num'		: number,
                    'tel'		: tel,
                    'product'   :"<?php echo $product;?>",
                    'date'  : "<?php echo $date;?>"

                };
                console.log(post_data.tel);
                console.log(post_data.product);
                console.log(post_data.date);

                $.post('../GeneralForms/promitheftiki/promitheftisQuery.php', post_data, function(response){
                    console.log(response.NamePer);
                    $('#suplCompany_Name').val(response.Name);
                    $('#suplCompany_legalForm').val(response.Ls);
                    $('#suplCompany_Address').val(response.Address);
                    $('#suplCompany_PC').val(response.PostCode);
                    $('#suplCompany_City').val(response.City);
                    $('#suplCompany_Phone').val(response.Telephone);
                    $('#suplCompany_fax').val(response.Fax);
                    $('#suplCompany_email').val(response.Email);
                    $('#suplCompany_info').val(response.info);
                    $('#suplCompany_CEO').val(response.Ceo);
                    $('#suplCompany_CommercialName').val(response.ComName);
                    $('#suplCompany_OtherName').val(response.Oname);
                    $('#suplCompany_storageAdd').val(response.StoreAdd);

                    $('#suplEmpl_name').val(response.NamePer);
                    $('#suplEmpl_Surname').val(response.SurnamePer);
                    $('#suplEmpl_address').val(response.AddressPer);
                    $('#suplEmpl_pc').val(response.PostCodePer);
                    $('#suplEmpl_city').val(response.CityPer);
                    $('#suplEmpl_phone').val(response.TelephonePer);
                    $('#suplEmpl_fax').val(response.FaxPer);
                    $('#suplEmpl_email').val(response.EmailPer);

                }, 'json');
            }

        });
    });
</script>

<div class="container">

    <!------------------------------------------------------------------->
    <div class="row clearfix" >
        <div class="col-md-12 column" >
            <table class="table table-hover" id="display">
                <tr>
                    <th>#</th>
                    <th>Επωνυμία Προμηθεύτριας Εταιρίας</th>
                    <th>Τηλέφωνο Υπεύθηνου Επικοινωνίας</th>
                </tr>
                <?php
                $i=0;
                while ($row1){
                    ?>
                    <tr id="row<?php echo $i?>" data-toggle="modal" data-target="#suplCompanyModal" class="click" >
                        <td class="c1"><?php echo $i ?></td>
                        <td class="c2"><?php echo $row1["Company"]?></td>
                        <td class="c3"><?php echo $row1["Telephone"]?></td>
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

    <form id="promitheftria-form">
        <div class="modal fade bs-example-modal-lg" id="suplCompanyModal" tabindex="-1" role="dialog" aria-labelledby="suplCompanyModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="suplCompanyModalLabel">Στοιχεία Προμηθεύτριας Εραιρίας</h4>
                    </div>
                    <div class="modal-body">
                        <!-------------------------------------------------------------------------------------------------------------------->
                        <div class="container">

                            <div class="col-md-9 column">

                                <div class="row">
                                    <h4>Στοιχεία Εταιρίας</h4>

                                    <br>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="suplCompany_Name">Επωνυμία Επιχείρησης:</label>
                                        <div class="col-sm-4">
                                            <input disabled="disabled" class="form-control" id="suplCompany_Name" name="suplCompany_Name"type="text">
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="suplCompany_CommercialName">Εμπορική Επωνυμία Επιχείρηση (Σύμφωνα με τον έφορο εταιριών):<label style="color:red;">*</label></label>
                                        <div class="col-sm-4">
                                            <input disabled="disabled" class="form-control" id="suplCompany_CommercialName"  name="suplCompany_CommercialName"type="text">
                                        </div>
                                    </div>

                                    <br><br><br>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="suplCompany_OtherName">Άλλη Επωνυμία:</label>
                                        <div class="col-sm-4">
                                            <input disabled="disabled" class="form-control" id="suplCompany_OtherName" name="suplCompany_OtherName" type="text">
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="suplCompany_legalForm">Νομική Μορφή:</label>
                                        <div class="col-sm-4">
                                            <input disabled="disabled" class="form-control" id="suplCompany_legalForm" name="suplCompany_legalForm" type="text">
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="suplCompany_CEO">Όνομα Διευθυντή:</label>
                                        <div class="col-sm-4 ">
                                            <input disabled="disabled" class="form-control"  id="suplCompany_CEO" name="suplCompany_CEO" type="text">
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="suplCompany_Address">Διεύθυνση:<label style="color:red;">*</label></label>
                                        <div class="col-sm-4">
                                            <input disabled="disabled" class="form-control" id="suplCompany_Address" name="suplCompany_Address"  type="text">
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="suplCompany_PC">T.K. :<label style="color:red;">*</label></label>
                                        <div class="col-sm-2">
                                            <input disabled="disabled" class="form-control" id="suplCompany_PC" name="suplCompany_PC"  type="number">
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="suplCompany_City">Πόλη:<label style="color:red;">*</label></label>
                                        <div class="col-sm-4">
                                            <input disabled="disabled" class="form-control" id="suplCompany_City" name="suplCompany_City"  type="text">
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="suplCompany_Phone">Τηλέφωνο:<label style="color:red;">*</label></label>
                                        <div class="col-sm-4">
                                            <input disabled="disabled" class="form-control" id="suplCompany_Phone" name="suplCompany_Phone"  type="number">
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="suplCompany_fax">Φάξ:<label style="color:red;">*</label></label>
                                        <div class="col-sm-4">
                                            <input disabled="disabled" class="form-control" id="suplCompany_fax" name="suplCompany_fax"  type="number">
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="suplCompany_email">Ηλεκτρονικό Ταχυδρομείο:</label>
                                        <div class="col-sm-4">
                                            <input disabled="disabled" class="form-control" id="suplCompany_email" name="suplCompany_email" type="email">
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="suplCompany_storageAdd">Διεύθυνση Αποθήκευσης Μείγματος:<label style="color:red;">*</label></label>
                                        <div class="col-sm-4">
                                            <input disabled="disabled" type="text" class="form-control" name="suplCompany_storageAdd"  id="suplCompany_storageAdd" />
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="suplCompany_info">Άλλες Πληροφορίες:</label>
                                        <div class="col-sm-4">
                                            <textarea disabled="disabled" class="form-control" rows="5" id="suplCompany_info" name="suplCompany_info"></textarea>
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
                                        <label class="col-sm-3 control-label" for="suplEmpl_name">Όνομα:<label style="color:red;">*</label></label>
                                        <div class="col-sm-4">
                                            <input disabled="disabled" class="form-control" id="suplEmpl_name" name="suplEmpl_name"  type="text">
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="suplEmpl_Surname">Επίθετο:<label style="color:red;">*</label></label>
                                        <div class="col-sm-4">
                                            <input disabled="disabled" class="form-control"  id="suplEmpl_Surname" name="suplEmpl_Surname" type="text">
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="suplEmpl_address">Διεύθυνση:</label>
                                        <div class="col-sm-4">
                                            <input disabled="disabled" class="form-control" id="suplEmpl_address" name="suplEmpl_address" type="text">
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="suplEmpl_pc">T.K. :</label>
                                        <div class="col-sm-2">
                                            <input disabled="disabled" class="form-control" id="suplEmpl_pc" name="suplEmpl_pc" type="number">
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="suplEmpl_city">Πόλη:</label>
                                        <div class="col-sm-4">
                                            <input disabled="disabled" class="form-control" id="suplEmpl_city" name="suplEmpl_city" type="text">
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="suplEmpl_phone">Τηλέφωνο:<label style="color:red;">*</label></label>
                                        <div class="col-sm-4">
                                            <input disabled="disabled" class="form-control"  id="suplEmpl_phone" name="suplEmpl_phone" type="number">
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="suplEmpl_fax">Φάξ:</label>
                                        <div class="col-sm-4">
                                            <input disabled="disabled" class="form-control" id="suplEmpl_fax" name="suplEmpl_fax" type="number">
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="suplEmpl_email">Ηλεκτρονικό Ταχυδρομείο:<label style="color:red;">*</label></label>
                                        <div class="col-sm-4">
                                            <input disabled="disabled" class="form-control"  id="suplEmpl_email" name="suplEmpl_email" type="email">
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
                    </div>
                </div>
            </div>
        </div>
    </form>




    <!--------------------------------------------------------------->
    <br><br>


</div>

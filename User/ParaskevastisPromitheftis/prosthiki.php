<div class="col-md-12">
    <div class="tab-pane" id="Prosthiki">
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <form id="SubscriptionWizard" action="" method="post">
                        <table class="table table-hover" cellpadding="5" cellspacing="0" id="HeaderTable">
                            <tr>
                                <td id="HeaderTableStep1" style="color:#66CCFF">1. Στοιχεία Χημικού Μείγματος</td>
                                <td id="HeaderTableStep2">2. Σύνθεση Χημικού Μείγματος</td>
                                <td id="HeaderTableStep3" >3. Επισύναψη ΔΔΑ και Ετικέτα</td>
                            </tr>
                        </table>
                    </form>
                </div >
            </div>
        </div >
    </div>

    <span id="Step1">
        <?php include '../GeneralForms/proion/stixiaProiontosForm.php';?>

        <div class="col-md-12 column">
            <div class="col-md-4 column"  style="text-align: left">
                <input class="btn btn-default" type="button" value="Previous"  disabled="disabled" name="" />
            </div>
            <div class="col-sm-4"></div>
            <div class="col-md-4 column" style="text-align: right">
                <input class="btn btn-default"  type="button" value="Next" name="Step2" onclick="checkInputProion()"/>
            </div>

        </div>
        <br>
        <br>
    </span>

    <span id="Step2" style="display:none">
        <?php include '../GeneralForms/ousies/stixiaChimikonOusion.php';?>
        <div class="row">
            <div class="col-md-4 column"  style="text-align: left">
                <input  class="btn btn-default" type="button" value="Previous"  onclick="handleWizardPreviousStep2to1()" />
            </div>
            <div class="col-sm-4"></div>
            <div class="col-md-4 column" style="text-align: right">
                <input class="btn btn-default" type="button" value="Next" onClick="handleWizardNextStep2To3()" />
            </div>
        </div>
        <br>
        <br>
    </span>


    <span id="Step3" style="display:none">
        <?php include '../GeneralForms/dda/prosthikiDDA.php';?>

        <div class="row">
            <div class="col-md-4 column"  style="text-align: left">
                <input class="btn btn-default" type="button" value="Previous" onclick="handleWizardPreviousStep3to2()" />
            </div>
            <div class="col-sm-4"></div>
            <div class="col-md-4 column" style="text-align: right">
                <input  class="btn btn-default" type="button" value="Next" disabled="disabled" />
            </div>
        </div>
    </span>


    <br><br>




</div>
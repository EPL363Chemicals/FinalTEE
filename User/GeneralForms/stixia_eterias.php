
<div class="col-md-12" style="align: center">
    <div class="col-md-2"></div>
<div class="col-md-5">

    <div class="container">

        <div class="panel-heading ">
            <h2 class="panel-title col-sm-offset-2"><strong>Στοιχεία Εταιρείας</strong></h2>
        </div>

        <br>

        <form class="form-horizontal" role="company-data-form">
            <div class="form-group">
                <label class="control-label col-sm-2" for="company-name">Επων. Εταιρείας:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" disabled="disabled"  name="company-name" id="company-name" value="<?php echo $company?>"/>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="company-comm-name">Εμπορική Επωνυμία Εταιρείας:</label>
                <div class="col-sm-4">
                    <input type="text" disabled="disabled" class="form-control" name="company-comm-name" id="company-comm-name"" value="<?php echo $company_comm?>"/>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="company-other-name">Άλλη Επωνυμία Εταιρείας:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" disabled="disabled" name="company-other-name" id="company-other-name"" value="<?php echo $other_company?>"/>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="company-legal-form">Νομική Μορφή:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" disabled="disabled"  name="company-legal-form" id="company-legal-form" value="<?php echo $ls ?>" />
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="company-ceo">Διευθηντής:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" disabled="disabled" name="company-ceo" id="company-ceo" value="<?php echo $ceo ?>" />
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="company-email">Email</label>
                <div class="col-sm-4">
                    <input type="email" class="form-control" disabled="disabled" name="company-email" id="company-email" value="<?php echo $company_email ?>"/>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="company-address">Διεύθυνση</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" disabled="disabled" name="company-address" id="company-address" value="<?php echo $company_address ?>" />
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="company-city">Πόλη</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" disabled="disabled" name="company-city" id="company-city" value="<?php echo $company_city ?>" />
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="company-pc">Τ.Κ.</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" disabled="disabled" name="company-pc" id="company-pc" value="<?php echo $company_pc ?>" />
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="company-phone">Τηλέφωνο</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" disabled="disabled" name="company-phone" id="company-phone" value="<?php echo $company_tel ?>" />
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="company-fax">Φάξ</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" disabled="disabled" name="company-fax" id="company-fax" value="<?php echo $company_fax ?>" />
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="company-info">Άλλες Πληροφορίες:</label>
                <div class="col-sm-4">
                    <textarea type="fax" class="form-control" disabled="disabled" rows="5" name="company-info" id="company-info" value="<?php echo $company_info ?>"  /></textarea>
                </div>
            </div>

        </form>

    </div>

</div>
    </div>
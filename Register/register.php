
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <title>Register</title>
   <!----------------------------------------------------------------->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="../js/jquery.min.js"></script>
	    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/scripts.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.3.min.js" ></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <!---------------------------------------------------------------->
  <script >

$(document).ready(function(){
      $("#isPerson").change(function () {
          var end = this.value;
          if(end == 0){
              $('#companyForm').fadeIn('slow');
          }
          if (end == 1){
              $('#companyForm').fadeOut('slow');
          }

      });
});




  </script>

   <script src="_scripts_Eggrafi.js"></script>   

  </head>
  
  <body> 
    
    <div class="container">

        <div class="row clearfix">
            <div class="col-md-12 column">
                <img src="../images/banner_gr_Laa.png" width="100%" height="98">
            </div>
        </div>
      
        <div class="row clearfix"></div>
      
        </br>
  
        <h3 align="center">Εγγραφή Χρήστη</h3>

         <div class="tab-pane" id="Prosthiki">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <form id="SubscriptionWizard" action="" method="post">
                            <table class="table table-hover" cellpadding="5" cellspacing="0" id="HeaderTable">
                                <tr>
                                    <td id="HeaderTableStep1" style="color:#66CCFF">1.Προσθήκη Συνθηματικών</td>
                                    <td id="HeaderTableStep2">2.Στοιχεία Υπεύθυνου Επικοινωνίας</td>
                                    <td id="HeaderTableStep3" >3.Στοιχεία Εταιρείας </td>
                                </tr>
                            </table>
                         </form>
                    </div >
                </div>
            </div >
          </div>

          <form id="user-register" action="createUser.php" method="post">

            <span id="Step1">
                <br />
                <div class="col-sm-12">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2">
                        <label for="userName"> Όνομα Χρήστη:</label>
                    </div>
                    <div class="col-sm-3">
                        <input  name="userName" id ="userName" onblur="checkUsername();" class="form-control input-lg" type="text"  >
                    </div>
                    <div class="col-sm-5">
                        <div class="alert alert-danger" id="wrongUsername" role="alert" style="display:none;">
                          <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"></span>
                          <span class="sr-only">Error:</span>
                            Change Username. Valid: 5-20 charachters
                        </div>
                    </div>
                </div>

                </BR></BR></BR>

                <div class="col-sm-12">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2">
                        <label for="pass"> Κωδικός:</label>
                    </div>
                    <div class="col-sm-3">
                        <input   id ="pass" name ="pass"  onblur="checkPass();" class="form-control input-lg"  type="password"  >
                    </div>
                    <div class="col-sm-5">
                       <div class="alert alert-danger" id="wrongPass" role="alert" style="display:none;">
                          <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"></span>
                          <span class="sr-only">Error:</span>
                            Valid Password: minimun 5 charachters
                        </div>
                   </div>
                </div>

                </BR></BR></BR>

                <div class="col-sm-12">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2">
                        <label for="passConf"> Eπαλήθευση κωδικού:</label>
                    </div>
                    <div class="col-sm-3">
                        <input id ="passConf" name ="passConf" onblur="checkPassMatch();" maxlength="20" class="form-control input-lg" type="password"  >
                    </div>
                    <div class="col-sm-5">
                       <div class="alert alert-danger" id="wrongPassM" role="alert" style="display:none;">
                          <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"></span>
                          <span class="sr-only">Error:</span>
                            Passwords don't mach
                        </div>
                        <div class="alert alert-success" id="rightPassM" role="alert" style="display:none;">
                            <span id="inputSuccess2Status" class="sr-only">(success)</span>
                            Success
                        </div>
                   </div>
                </div>

                
            </span>
         

       
            <span id="Step2" style="display:none">

                <div id="xristis_form">
                <br />

                <div class="col-sm-12">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">
                        <label for="comName"> Όνομα:<label id="wrongcomName" style="color:red;">*</label></label>
                    </div>
                    <div class="col-sm-3">
                        <input required=true id ="comName" name="comName" class="form-control input-lg" type="text" >
                    </div>
                    <div class="col-sm-3">

                        <div class="alert alert-danger" class="requared" role="alert" style="display:none;">
                            <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"></span>
                            <span class="sr-only">Requared</span>
                        </div>
                    </div>
                </div>

                <br /><br /><br />

                <div class="col-sm-12">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">	
                        <label for="comSName"> Επώνυμο:<label id="wrongcomSName" style="color:red;">*</label></label>
                    </div>
                    <div class="col-sm-3">	
                        <input  id ="comSName" required=true name="comSName" class="form-control input-lg" type="text" >
                    </div>
                    <div class="col-sm-3">	

                        <div class="alert alert-danger" class="requared" role="alert" style="display:none;">
                            <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"></span>
                            <span class="sr-only">Requared</span>
                        </div>
                    </div>
                </div>
                
                <br /><br /><br />		

                <div class="col-sm-12">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">									
                        <label for="comEmail"> Email:<label id="wrongcomSName" style="color:red;">*</label></label>
                    </div>
                    <div class="col-sm-3">	
                        <input id ="comEmail" name ="comEmail" required=true maxlength="50" class="form-control input-lg" type="text" >
                    </div>
                    <div class="col-sm-3">
                        <div class="alert alert-danger" class="requared" role="alert" style="display:none;">
                            <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"></span>
                            <span class="sr-only">Requared</span>
                        </div>
                    </div>
                </div>

                <br /><br /><br />
                
                <div class="col-sm-12">
                    <div class="col-sm-3"> </div>
                    <div class="col-sm-2">	
                        <label for="comAddress">Διεύθυνση:</label>
                    </div>
                    <div class="col-sm-3">	
                        <input id ="comAddress"  name ="comAddress" class="form-control input-lg" type="text" >
                    </div>
                    <div class="col-sm-3">	

                    </div>
                </div>

                <br /><br /><br />
                
                <div class="col-sm-12">
                    <div class="col-sm-3"> </div>
                    <div class="col-sm-2">	
                        <label for="comPoli"> Πόλη:</label>
                    </div>
                    <div class="col-sm-3">	
                        <input id ="comPoli" name ="comPoli" class="form-control input-lg" type="text" >
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>

                <br /><br /><br />
                
                <div class="col-sm-12">
                    <div class="col-sm-3"> </div>
                    <div class="col-sm-2">	
                        <label for="comPC"> Τ.Κ:</label>
                    </div>
                    <div class="col-sm-3">	
                        <input id ="comPC" name ="comPC" class="form-control input-lg" type="number" >
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>

                <br /><br /><br />

                <div class="col-sm-12">
                    <div class="col-sm-3"> </div>
                    <div class="col-sm-2">	
                        <label for="comTel"> Τηλέφωνο: <label id="wrongcomTel" style="color:red;">*</label></label>
                    </div>
                    <div class="col-sm-3">	
                        <input id ="comTel" name ="comTel" required=true class="form-control input-lg" type="number" >
                    </div>
                    <div class="col-sm-3">	

                        <div class="alert alert-danger" class="requared" role="alert" style="display:none;">
                            <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"></span>
                            <span class="sr-only">Requared</span>
                        </div>
                    </div>
                </div>

                <br /><br /><br />

                <div class="col-sm-12">
                    <div class="col-sm-3"> </div>
                    <div class="col-sm-2">	
                        <label for="comFax"> Φαξ:</label>
                    </div>
                    <div class="col-sm-3">	
                        <input id ="comFax" name ="comFax" class="form-control input-lg" type="number" >
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
                </div>
                
            </span>
       
    <!--------------------------------------------------------------------------------------------------------------------->

        
            <span id="Step3" style="display:none">

                 <div class="col-sm-12">
                     <div class="col-sm-3"></div>
                     <div class="col-sm-3"><label>Τύπος Χρήστη<label id="wrongcomTel" style="color:red;">*</label></label></div>
                     <div class="col-sm-3">
                         <select class="form-control" name="typeOfUser" id="typeOfUser">
                             <option value="0">Προμηθετής</option>
                             <option value="1">Παρασκευαστής</option>
                             <option value="2">Προμηθετής + Παρασκευαστής </option>
                         </select>
                     </div>
                 </div>

                <br /><br /><br />

                <div class="col-sm-12">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3"><label>Φυσικό Πρόσωπο<label id="wrongcomTel" style="color:red;">*</label></label></div>
                    <div class="col-sm-3">
                        <select class="form-control" name="isPerson" id="isPerson">
                            <option value="0">Όχι</option>
                            <option value="1">Ναι</option>
                        </select>
                    </div>
                </div>

                <br /><br /><br />


                <div id="companyForm" >

                <div class="col-sm-12">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <label for="CompName">Επωνυμία Επιχείρησης:</label>
                    </div>
                    <div class="col-sm-3">   
                        <input id ="CompName" name ="CompName" class="form-control input-lg" type="text"  >
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>

                <br /><br /><br />

                <div class="col-sm-12">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <label for="CompCommer">Εμπορική Επωνυμία Εταιρείας:<label id="wrongCompCommer" style="color:red;">*</label></label>
                    </div>
                    <div class="col-sm-3">   
                        <input id ="CompCommer" name ="CompCommer" class="form-control input-lg" type="text"  >
                    </div>
                    <div class="col-sm-3">
                        <div class="alert alert-danger" class="requared" role="alert" style="display:none;">
                            <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"></span>
                            <span class="sr-only">Requared</span>
                        </div>
                    </div>
                </div>


                <br /><br /><br />

                <div class="col-sm-12">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <label for="CompOtherN">Άλλη Επωνυμία:</label>
                    </div>
                    <div class="col-sm-3">   
                        <input id ="CompOtherN" name ="CompOtherN" class="form-control input-lg" type="text"  >
                    </div>
                    <div class="col-sm-3">

                    </div>
                </div>

                <br /><br /><br />

                <div class="col-sm-12">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <label for="CompLF">Νομική Μορφή:</label>
                    </div>
                    <div class="col-sm-3">   
                        <input id ="CompLF" name ="CompLF" class="form-control input-lg" type="text"  >
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
            
                 <br /><br /><br />

                <div class="col-sm-12">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <label for="CompCEO">Όνομα Διευθυντή:<label id="wrongCompCEO" style="color:red;">*</label></label>
                    </div>
                    <div class="col-sm-3">   
                        <input id ="CompCEO" name ="CompCEO" class="form-control input-lg"   type="text"  >
                    </div>
                    <div class="col-sm-3">
                        <div class="alert alert-danger" class="requared" role="alert" style="display:none;">
                            <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"></span>
                            <span class="sr-only">Requared</span>
                        </div>
                    </div>
                </div>


                <br /><br /><br />

                <div class="col-sm-12">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <label for="CompEmail"> Email:<label id="wrongCompCEO" style="color:red;">*</label></label>
                    </div>
                    <div class="col-sm-3">								
                        <input id ="CompEmail" name ="CompEmail" class="form-control input-lg"  type="text" >
                    </div>
                    <div class="col-sm-3">
                        <div class="alert alert-danger" class="requared" role="alert" style="display:none;">
                            <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"></span>
                            <span class="sr-only">Requared</span>
                        </div>
                    </div>
                </div>

                <br /><br /><br />

                <div class="col-sm-12">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <label for="CompAddres"> Διεύθυνση:<label id="wrongCompAddres" style="color:red;">*</label></label>
                    </div>
                    <div class="col-sm-3">
                        <input id ="CompAddres" name ="CompAddres" class="form-control input-lg" type="text" >
                    </div>
                    <div class="col-sm-3">

                        <div class="alert alert-danger" class="requared" role="alert" style="display:none;">
                            <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"></span>
                            <span class="sr-only">Requared</span>
                        </div>
                    </div>
                </div>

                <br /><br /><br />

                <div class="col-sm-12">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <label for="CompCity"> Πόλη:<label id="wrongCompAddres" style="color:red;">*</label></label>
                    </div>
                    <div class="col-sm-3">
                        <input id ="CompCity" name ="CompCity" class="form-control input-lg" type="text" >
                    </div>
                    <div class="col-sm-3">
                        <div class="alert alert-danger" class="requared" role="alert" style="display:none;">
                            <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"></span>
                            <span class="sr-only">Requared</span>
                        </div>
                    </div>
                </div>

                <br /><br /><br />

                <div class="col-sm-12">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <label for="CompPC">Τ.Κ.:<label id="wrongCompPC" style="color:red;">*</label></label>
                    </div>
                    <div class="col-sm-3">
                        <input id ="CompPC" name ="CompPC" class="form-control input-lg"  type="number" >
                    </div>
                    <div class="col-sm-3">

                        <div class="alert alert-danger" class="requared" role="alert" style="display:none;">
                            <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"></span>
                            <span class="sr-only">Requared</span>
                        </div>
                    </div>
                </div>

                <br /><br /><br />

                <div class="col-sm-12">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <label for="CompCountry">Χώρα:<label id="wrongCompPC" style="color:red;">*</label></label>
                    </div>
                    <div class="col-sm-3">
                            <select class="form-control" id="CompCountry" name="CompCountry" form="user-register">
                                <option value="">--Choose your Country--</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AX">Εland Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo, The Democratic Republic of The</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Cote D'ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands (Malvinas)</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HM">Heard Island and Mcdonald Islands</option>
                                <option value="VA">Holy See (Vatican City State)</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran, Islamic Republic of</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KP">Korea, Democratic People's Republic of</option>
                                <option value="KR">Korea, Republic of</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Lao People's Democratic Republic</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libyan Arab Jamahiriya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macao</option>
                                <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia, Federated States of</option>
                                <option value="MD">Moldova, Republic of</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="AN">Netherlands Antilles</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestinian Territory, Occupied</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">Reunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="RW">Rwanda</option>
                                <option value="SH">Saint Helena</option>
                                <option value="KN">Saint Kitts and Nevis</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="PM">Saint Pierre and Miquelon</option>
                                <option value="VC">Saint Vincent and The Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">Sao Tome and Principe</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">South Georgia and The South Sandwich Islands</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard and Jan Mayen</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syrian Arab Republic</option>
                                <option value="TW">Taiwan, Province of China</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania, United Republic of</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US">United States</option>
                                <option value="UM">United States Minor Outlying Islands</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Viet Nam</option>
                                <option value="VG">Virgin Islands, British</option>
                                <option value="VI">Virgin Islands, U.S.</option>
                                <option value="WF">Wallis and Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                        </div>
                         <div class="col-sm-3">
                        </div>
                </div>

                <br /><br /><br />

                 <div class="col-sm-12">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <label for="CompTel"> Τηλέφωνο:<label id="wrongCompTel" style="color:red;">*</label></label>
                    </div>
                    <div class="col-sm-3">
                        <input id ="CompTel" name ="CompTel" class="form-control input-lg"   type="number" >
                    </div>
                    <div class="col-sm-3">
                        <div class="alert alert-danger" class="requared" role="alert" style="display:none;">
                            <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true"></span>
                            <span class="sr-only">Requared</span>
                        </div>
                    </div>
                </div>

                <br /><br /><br />


                <div class="col-sm-12">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <label for="CompFax"> Φαξ: </label>
                    </DIV>
                    <div class="col-sm-3">
                        <input id ="CompFax" name ="CompFax" class="form-control input-lg" type="number" >
                    </DIV>
                    <div class="col-sm-3">
                    </div>
                </div>

                <br /><br /><br />

                <div class="col-sm-12">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <label for="description"> Άλλες Πληροφορίες:</label>
                    </div>
                    <div class="col-sm-3">  
                            <textarea id="description" name="description" rows="5" class="form-control input-lg" cols="20"></textarea>
                    </div>
                </div>

                </div>

                <br /><br /><br /><br /><br /><br /><br /><br />

                <div class="row" style="text-align: center">
                    <button type="submit" class="btn btn-primary">Εγγραφή</button>
                </div>
            
            </span>
             </form>

                <div class="col-md-4 column"  style="text-align: left">
        	   <input id="ButtonPrevious" class="btn btn-default" type="button" value="Previous"  disabled="disabled" name="" onclick="handleWizardPrevious()"/>
		    </div>
            <div class="col-sm-4"></div>
		    <div class="col-md-4 column" style="text-align: right">
                <input id="ButtonNext" class="btn btn-default" type="button" value="Next" name="Step2" onClick="handleWizardNext()" />
		    </div>

       

      </div>
      
  </body>
</html>
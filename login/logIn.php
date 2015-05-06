
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <title>Log in</title>
   <!----------------------------------------------------------------->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="css_LogIn.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/scripts.js"></script>
    <script src="../js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.3.min.js" ></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>
      $(document).ready(function() {
            $( "#submit" ).click(function() {
                var user = $('#username').val();
                var pass = $('#pass').val();
                    post_data = {
                        'user'		: user,
                        'pass'      :pass,
                        };
                $.post('login_php.php', post_data, function(response){
                            if(response.message ==true){
                                if(response.user==0){
                                    window.location="../Profile_Leitourgou2/Profile_LeitourgouKentriko.php";
                                }
                                if(response.user==1){
                                    alert(response.Company);
                                    switch(response.Company){
                                            case "0":window.location="../User/Promitheftis/profile.php";
                                                break;
                                            case "1":window.location="../User/Paraskevastis/profile.php";
                                                break;
                                            case "2":window.location="../User/ParaskevastisPromitheftis/profile.php";
                                                break;
                                    }
                                }
                            }
                        else{
                             document.getElementById("WrongPass").style.display="block";
                        }

                    }, 'json'); 
            });
                    
        });
</script>

  </head>
  <body> 
      <div class="container">
    
        
        <div class="row clearfix">
            <div class="col-md-12 column">
                <img src="../images/banner_gr_Laa.png" width="100%" height="98">
            </div>
          </div>
        <h4> Αρχείο Χημικών Προϊόντων </h4>
       </br>
       </br>
        <div class="form-group">
            <div class="col-sm-3"></div>
            <label id="Right" class="control-label col-sm-2" for="kind">Όνομα Χρήστη:</label>
            <div class="col-sm-2">
                <input type="email" class="form-control" id="username"  placeholder="username">   
            </div>
            <div class="col-sm-4"></div>
         </div>
        </br>
        </br>
        <div  class="form-group">
              <div class="col-sm-3"></div>
              <label id="Right" for="inputPassword3"   class="col-sm-2 control-label">Κωδικός:</label>
              <div  class="col-sm-2">
                <input type="password" class="form-control" id="pass"  placeholder="password">
              </div>
            <div class="col-sm-4"  ><label id="warning" class="help-block" >*Επιλέξετε την είσοδό σας στο σύστημα</label></div>
        </div>
        </br>
        </br>
        <div class="col-sm-4"  ></div>
        <div class="col-sm-4"  >
            <label id="WrongPass" class="help-block" style="display:none">*Το όνομα χρήστη ή ο κωδικός πρόσβασης είναι λάθος</label>
        </div>
        <div class="col-sm-4"  ></div>
</div>
        <div class="form-group">
            <div id="Right" class="col-sm-7" ><a href="fpassword.html">Έχεται ξεχάσει τον κωδικό σας?</a></div>
            
        </div>
       <br>
          <div  class="center"><a href="../Register/register.php">Εγγραφή Χρήστη</a></div>
        <br>
      
        <div id="button" class="col-sm-12" style="text-align:center;">
                <button    id="submit" type="button" class="btn btn-primary btn-default" >Σύνδεση</button>
            </div>
    
    
      </div>
  </body>
</html>
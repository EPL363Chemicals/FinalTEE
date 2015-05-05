 
          <?php 

            $user=$_SESSION["username"];
            $user_pass="";

            $company="";
            $ls="";
            $company_email="";
            $company_address="";
            $company_city="";
            $company_pc="";
            $company_tel="";
            $company_fax="";
            $company_info="";

            $user_name="";
            $user_surname="";
            $user_email="";
            $user_tel=""; 
            $user_city="";
            $user_address="";
            $user_pc="";


           
            $con =mysql_connect("localhost", "root", "261994akk");
            mysql_select_db("teedb");
            mysql_query ("set character_set_results='utf8'");

            if (!$con)
                echo "Cannot connect: ".mysql_error();
            else{
                mysql_select_db("root", $con);
                mysql_query ("set character_set_results='utf8'");
                
                $result=mysql_query("SELECT U.* FROM Users  U WHERE U.Username='".$user."'" , $con);
                $row = mysql_fetch_array($result);
               
                while ($row){
                    $user_pass = $row["Password"]; 
                    $company= $row['Company'];
                    $row = mysql_fetch_array($result);
                }
                
                $result=mysql_query("SELECT C.* FROM Company C WHERE C.Company_Name=N'".$company."'" , $con);
                $row = mysql_fetch_array($result);
                while ($row){
                    $ls=$row['Lequl_State'];
                    $user_tel=$row['Person'];
                    $company_email=$row['Email'];
                    $company_address=$row['Address'];
                    $company_city=$row['City'];
                    $company_pc=$row['PostCode'];
                    $company_tel=$row['Telephone'];
                    $company_fax=$row['Fax'];
                    $company_info=$row['info'];
                    $row = mysql_fetch_array($result);
                }
                
                $result=mysql_query("SELECT P.* FROM ComPerson P WHERE P.Telephone=N'".$user_tel."'" , $con);
                $row = mysql_fetch_array($result);
                while ($row){
                    $user_name=$row['Name'];
                    $user_surname=$row['Surname'];
                    $user_email=$row['Email'];
                    $user_address=$row['Address'];
                    $user_city =$row['City'];
                    $user_pc=$row['PostCode'];
                    $user_fax=$row['Fax'];
                    $row = mysql_fetch_array($result);
                }
            }
            mysql_close($con);

            $_SESSION["UserCompany"]=$company;

          ?>



   
            <div class="col-md-12">
                
                <div class="col-md-5">
  			       <div class="container"> 
                           
                        <div class="panel-heading ">
                            <h2 class="panel-title col-sm-offset-1"><strong>Στοιχεία Υπεύθυνου Επικοινωνίας</strong></h2>
                        </div>
                       
                        <br>
                       
                        <form class="form-horizontal" role="form" name="user-data-form" id="user-data-form">
                            
                            <div class="form-group">
                                <label class="control-label col-sm-1" for="user-name">Όνομα:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="user-name" id="user-name" value="<?php echo $user_name?>" />
                                </div>
                            </div>
                    
                            <div class="form-group">
                                <label class="control-label col-sm-1" for="user-surname">Επώνυμο:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="user-surname" id="user-surname" value="<?php echo $user_surname?>"/>
                                </div>
                            </div>
                          
                            <div class="form-group">
                                <label class="control-label col-sm-1" for="user-username">Username:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="user-username" id="user-username" value="<?php echo $user?>" />
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="control-label col-sm-1" for="user-password">Κωδικός:</label>
                                <div class="col-sm-4">
                                    <input type="password" class="form-control" name="user-password" id="user-password" value="<?php echo $user_pass?>"/>
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="control-label col-sm-1" for="user-email">Email:</label>
                                <div class="col-sm-4">
                                    <input type="email" class="form-control" name="user-email" id="user-email" value="<?php echo $user_email?>" />
                                </div> 
                            </div> 
                            
                            <div class="form-group">
                                <label class="control-label col-sm-1" for="user-address">Διεύθυνση:</label>                  
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="user-address" id="user-address" value="<?php echo $user_address ?>"  />
                                </div>
                            </div>  
                            
                            <div class="form-group">
                                <label class="control-label col-sm-1" for="user-city">Πόλη:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="user-city" id="user-city" value="<?php echo $user_city ?>"/>
                                </div>
                            </div>  
                            
                            <div class="form-group">
                                <label class="control-label col-sm-1" for="user-pc">Τ.Κ:</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control" name="user-pc" id="user-pc" value="<?php echo $user_pc ?>" />
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-1" for="user-phone">Τηλέφωνο:</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="user-phone" id="user-phone" value="<?php echo $user_tel ?>" />
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-1" for="user-fax">Φάξ:</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="user-fax" id="user-fax" value="<?php echo $user_fax ?>" />
                                </div>
                            </div> 
                            
                        </form>
                       
                    </div> 
                    
                    
                    
                </div>
  
  
                <div class="col-md-5">
                    
  					 <div class="container"> 
                         
                            <div class="panel-heading ">
                                <h2 class="panel-title col-sm-offset-2"><strong>Στοιχεία Προμηθεύτριας Εταιρίας</strong></h2>
                            </div>
                         
                            <br>
                         
                            <form class="form-horizontal" role="company-data-form">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="company-name">Επων. Εταιρίας:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="company-name" id="company-name" value="<?php echo $company?>"/>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="company-legal-form">Νομική Μορφή:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="company-legal-form" id="company-legal-form" value="<?php echo $ls ?>" />
                                    </div>
                                </div>
                        
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="company-email">Email</label>
                                    <div class="col-sm-4">
                                        <input type="email" class="form-control" name="company-email" id="company-email" value="<?php echo $company_email ?>"/>
                                    </div> 
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="company-address">Διεύθυνση</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="company-address" id="company-address" value="<?php echo $company_address ?>" />
                                    </div>
                                </div>  
                                
                                <div class="form-group">
                                      <label class="control-label col-sm-2" for="company-city">Πόλη</label>
                                      <div class="col-sm-4">
                                            <input type="text" class="form-control" name="company-city" id="company-city" value="<?php echo $company_city ?>" />
                                      </div>
                                </div>   
                                
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="company-pc">Τ.Κ.</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" name="company-pc" id="company-pc" value="<?php echo $company_pc ?>" />
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="company-phone">Τηλέφωνο</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" name="company-phone" id="company-phone" value="<?php echo $company_tel ?>" />
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="company-fax">Φάξ</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" name="company-fax" id="company-fax" value="<?php echo $company_fax ?>" />
                                    </div>
                                </div>
                                   
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="company-info">Άλλες Πληροφορίες:</label>
                                    <div class="col-sm-4">
                                        <textarea type="fax" class="form-control" rows="5" name="company-info" id="company-info" value="<?php echo $company_info ?>"  /></textarea>
                                    </div>
                                </div>

                            </form>
                    
                    </div> 
  
                </div>
            
            </div>
            
            <div class="row">
                <div class="form-group">
                    <div class="col-sm-offset-1">
                        <button type="submit" name="submit" class="btn btn-primary" >Τροποποίηση</button>  
                    </div>   
                </div>
            </div>
                           
        

        
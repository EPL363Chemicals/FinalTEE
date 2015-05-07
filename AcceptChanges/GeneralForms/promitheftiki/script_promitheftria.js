
    var intTextBox=0;
    var choiceCount=0;
    /*var flag =false;*/
    var newIntex=0;
    
        //FUNCTION TO ADD Company TEXT BOX 
    function changeButtons(){
        $('#saveSupplierCompany').show();
        $('#tropopoiisiButton').hide();

       }
        function showPromitheftria(x){
             $('#saveSupplierCompany').hide();
            $('#tropopoiisiButton').show();
            
            var proceed = true;
            var k=x.closest('tr');
            var num=k.rowIndex-1;
            newIntex=num;
            flag=true;
            
            alert(num);
                        if(proceed) {
                            post_data = {
                                'num'		: num
                                };
                           
                          
                            $.post('../GeneralForms/promitheftiki/script_promitheftria.php', post_data, function(response){
                                alert(response.Name);
                            if(response.Name == "error"){
                               }else{
                                  $('#suplCompany-Name').val(response.Name);
                                  $('#suplCompany-OtherName').val(response.Oname); 
                                  $('#suplCompany-CommercialName').val(response.ComName); 
                                  $('#suplCompany-legalForm').val(response.Ls);
                                  $('#suplCompany-Address').val(response.Address);
                                  $('#suplCompany-PC').val(response.PostCode);
                                  $('#suplCompany-City').val(response.City);
                                  $('#suplCompany-Phone').val(response.Telephone);
                                  $('#suplCompany-fax').val(response.Fax);
                                  $('#suplCompany-email').val(response.Email);
                                  $('#suplCompany-info').val(response.info);
                                  $('#suplCompany-CEO').val(response.Ceo);
                                    
                                
                                  $('#suplEmpl-name').val(response.NamePer);  
                                  $('#suplEmpl-Surname').val(response.SurnamePer);
                                  $('#suplEmpl-address').val(response.AddressPer);
                                  $('#suplEmpl-pc').val(response.PostCodePer);
                                  $('#suplEmpl-city').val(response.CityPer);
                                  $('#suplEmpl-phone').val(response.TelephonePer);
                                  $('#suplEmpl-fax').val(response.FaxPer);
                                  $('#suplEmpl-email').val(response.EmailPer);
                               }
                            }, 'json');
                        }
                   
                    }; 
     
function addCompany(i){
           alert(i);
            if(intTextBox==0){
                choiseCount=i;
                intTextBox=i;
            }
            if (choiceCount < 10 && intTextBox < 20) {
                intTextBox = intTextBox + 1;
                choiceCount = choiceCount+1;
                PostDataPromitheftiki(intTextBox);
                var contentID = document.getElementById('entrycol');
                var newTr = document.createElement('tr');
                var name = $('#suplCompany-Name').val();
                newTr.setAttribute('id','entry'+intTextBox);
                newTr.innerHTML ='<td class="t0"><strong>'+intTextBox+'</strong></td><td class="t1">'+name+'</td><td><input type="image" src="../../images/Deep_Edit.png" onclick="showPromitheftria(this);" data-toggle="modal" data-target="#suplCompanyModal"></td><td><input type="image" src="../../images/delete-icon.png" onclick= "removeCompanyID('+intTextBox+');"></td>';

                contentID.appendChild(newTr);

                document.getElementById("suplCompany-Name").value = "";
                document.getElementById("suplCompany-CommercialName").value= "";
                document.getElementById("suplCompany-OtherName").value = "";
                document.getElementById("suplCompany-legalForm").value= "";
                document.getElementById("suplCompany-CEO").value= "";
                document.getElementById("suplCompany-Address").value= "";
                document.getElementById("suplCompany-PC").value= "";
                document.getElementById("suplCompany-City").value= "";
                document.getElementById("suplCompany-Phone").value= "";
                document.getElementById("suplCompany-fax").value= "";
                document.getElementById("suplCompany-email").value= "";
                document.getElementById("suplCompany-info").value= "";
                document.getElementById("suplEmpl-name").value= "";
                document.getElementById("suplEmpl-Surname").value= "";
                document.getElementById("suplEmpl-address").value= "";
                document.getElementById("suplEmpl-pc").value= "";
                document.getElementById("suplEmpl-city").value= "";
                document.getElementById("suplEmpl-phone").value= "";
                document.getElementById("suplEmpl-fax").value= "";
                document.getElementById("suplEmpl-email").value= "";
                    
            } else {
                alert("Φτάσατε το μέγιστο όριο εισαγωγής στοιχείων προμηθευτών");
            }
        }

    function PostDataPromitheftiki(index) {
            // 1. Create xhrProm instance - Start
            var xhrProm;
            if (window.XMLHttpRequest) {
                xhrProm = new XMLHttpRequest();
            }
            else if (window.ActiveXObject) {
                xhrProm = new ActiveXObject("Msxml2.XMLHTTP");
            }
            else {
                throw new Error("Ajax is not supported by this browser");
            }
            // 1. Create xhrProm instance - End

            // 2. Define what to do when xhrProm feed you the response from the server - Start
            xhrProm.onreadystatechange = function () {
                if (xhrProm.readyState === 4) {
                    if (xhrProm.status == 200 && xhrProm.status < 300) {
                        document.getElementById('asdf').innerHTML = xhrProm.responseText;
                        console.log("okSupl");
                        clearInputsEterias();
                    }
                }
            }
            // 2. Define what to do when xhrProm feed you the response from the server - Start
            /*if(flag){
                var countSuplCompany = newIntex;
  
  }else{
                var countSuplCompany = intTextBox;
            }*/
            //flag=false;
            var countSuplCompany=index;
            if(index=="tropopoiisi"){
                var countSuplCompany=newIntex;
            }
            
            var suplCompany_Name = document.getElementById("suplCompany-Name").value;
            var suplCompany_CommercialName = document.getElementById("suplCompany-CommercialName").value;
            var suplCompany_OtherName = document.getElementById("suplCompany-OtherName").value;
            var suplCompany_legalForm = document.getElementById("suplCompany-legalForm").value;
            var suplCompany_CEO = document.getElementById("suplCompany-CEO").value;
            var suplCompany_Address = document.getElementById("suplCompany-Address").value;
            var suplCompany_PC = document.getElementById("suplCompany-PC").value;
            var suplCompany_City = document.getElementById("suplCompany-City").value;
            var suplCompany_Phone = document.getElementById("suplCompany-Phone").value;
            var suplCompany_fax = document.getElementById("suplCompany-fax").value;
            var suplCompany_email = document.getElementById("suplCompany-email").value;
            var suplCompany_info = document.getElementById("suplCompany-info").value;
            var suplEmpl_name = document.getElementById("suplEmpl-name").value;
            var suplEmpl_Surname = document.getElementById("suplEmpl-Surname").value;
            var suplEmpl_address = document.getElementById("suplEmpl-address").value;
            var suplEmpl_pc = document.getElementById("suplEmpl-pc").value;
            var suplEmpl_city = document.getElementById("suplEmpl-city").value;
            var suplEmpl_phone = document.getElementById("suplEmpl-phone").value;
            var suplEmpl_fax = document.getElementById("suplEmpl-fax").value;
            var suplEmpl_email = document.getElementById("suplEmpl-email").value;

            /*console.log(suplCompany_CommercialName);*/
            // 3. Specify your action, location and Send to the server - Start
            xhrProm.open('POST', '../GeneralForms/promitheftiki/getPromitheftriaEteriaData.php');
            xhrProm.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhrProm.send("countSuplCompany="+countSuplCompany+"&suplCompany_Name=" + suplCompany_Name +"&suplCompany_CommercialName="+suplCompany_CommercialName+"&suplCompany_OtherName="
            +suplCompany_OtherName+"&suplCompany_legalForm="+suplCompany_legalForm+"&suplCompany_CEO="+suplCompany_CEO+"&suplCompany_Address="+suplCompany_Address
            +"&suplCompany_PC="+suplCompany_PC+"&suplCompany_City="+suplCompany_City+"&suplCompany_Phone="+suplCompany_Phone+
            "&suplCompany_fax="+suplCompany_fax+"&suplCompany_email="+suplCompany_email+"&suplCompany_info="+suplCompany_info+"&suplEmpl_name="+suplEmpl_name
            +"&suplEmpl_Surname="+suplEmpl_Surname+"&suplEmpl_address="+suplEmpl_address+"&suplEmpl_pc="+suplEmpl_pc+"&suplEmpl_city="+suplEmpl_city+"&suplEmpl_phone="+suplEmpl_phone+
            "&suplEmpl_fax="+suplEmpl_fax+"&suplEmpl_email="+suplEmpl_email);
            
            
        }


        function DeleteDataPromitheftiki(count) {
            // 1. Create xhrProm instance - Start
            var xhrProm;
            if (window.XMLHttpRequest) {
                xhrProm = new XMLHttpRequest();
            }
            else if (window.ActiveXObject) {
                xhrProm = new ActiveXObject("Msxml2.XMLHTTP");
            }
            else {
                throw new Error("Ajax is not supported by this browser");
            }
            // 1. Create xhrProm instance - End

            // 2. Define what to do when xhrProm feed you the response from the server - Start
            xhrProm.onreadystatechange = function () {
                if (xhrProm.readyState === 4) {
                    if (xhrProm.status == 200 && xhrProm.status < 300) {
                        document.getElementById('asdf').innerHTML = xhrProm.responseText;
                        console.log("okDeleteSupl");
                    }
                }
            }
            // 2. Define what to do when xhrProm feed you the response from the server - Start

            
            // 3. Specify your action, location and Send to the server - Start
            xhrProm.open('POST', '../GeneralForms/promitheftiki/deletePromitheftriaEteriaData.php');
            xhrProm.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhrProm.send("count="+count);
        }




        function removeCompanyID(cnum){
            DeleteDataPromitheftiki(cnum);
            var contentID = document.getElementById('entrycol');
            contentID.removeChild(document.getElementById('entry'+cnum));
            //intTextBox = intTextBox-1; this would break it
            choiceCount = choiceCount-1;
            //intTextBox = intTextBox-1;
        }

        function clearInputsEterias(){
            document.getElementById("suplCompany-Name").value = "";
            document.getElementById("suplCompany-CommercialName").value= "";
            document.getElementById("suplCompany-OtherName").value = "";
            document.getElementById("suplCompany-legalForm").value= "";
            document.getElementById("suplCompany-CEO").value= "";
            document.getElementById("suplCompany-Address").value= "";
            document.getElementById("suplCompany-PC").value= "";
            document.getElementById("suplCompany-City").value= "";
            document.getElementById("suplCompany-Phone").value= "";
            document.getElementById("suplCompany-fax").value= "";
            document.getElementById("suplCompany-email").value= "";
            document.getElementById("suplCompany-info").value= "";
            document.getElementById("suplEmpl-name").value= "";
            document.getElementById("suplEmpl-Surname").value= "";
            document.getElementById("suplEmpl-address").value= "";
            document.getElementById("suplEmpl-pc").value= "";
            document.getElementById("suplEmpl-city").value= "";
            document.getElementById("suplEmpl-phone").value= "";
            document.getElementById("suplEmpl-fax").value= "";
            document.getElementById("suplEmpl-email").value= "";
        }

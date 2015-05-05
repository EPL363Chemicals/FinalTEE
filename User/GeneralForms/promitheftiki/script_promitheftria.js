        var intSupll=0;
        var choiceCount=0;


        function checkInputPromitheftikis(){
            var proceed = true;
            $("#promitheftria-form input[required=true]").each(function() {
                $(this).css('border-color', '');

                if (!$.trim($(this).val())) {
                    $(this).css('border-color', 'red');
                    proceed = false;

                }
            });
            if(proceed) {
                addCompany();
                $('#suplCompanyModal').modal('hide');
            }else{
                return;
            }
            event.preventDefault();
        }

        //FUNCTION TO ADD Company TEXT BOX 
        function addCompany(){
            if (choiceCount < 10 && intSupll < 20) {
                intSupll = intSupll + 1;
                choiceCount = choiceCount+1;
                PostDataPromitheftiki();
                var contentID = document.getElementById('entrycol');
                var newTr = document.createElement('tr');
                var name = $('#suplCompany_Name').val();
                newTr.setAttribute('id','entry'+intSupll);
                newTr.innerHTML ='<td><strong>'+intSupll+'</strong></td><td>'+name+'</td><td><input type="image" src="../images/Deep_Edit.png" data-toggle="modal" data-target="#suplCompanyModal"></td><td><input type="image" src="../images/delete-icon.png" onclick= "removeCompanyID('+intSupll+');"></td>';

                contentID.appendChild(newTr);

                document.getElementById("suplCompany_Name").value = "";
                document.getElementById("suplCompany_CommercialName").value= "";
                document.getElementById("suplCompany_OtherName").value = "";
                document.getElementById("suplCompany_legalForm").value= "";
                document.getElementById("suplCompany_CEO").value= "";
                document.getElementById("suplCompany_Address").value= "";
                document.getElementById("suplCompany_PC").value= "";
                document.getElementById("suplCompany_City").value= "";
                document.getElementById("suplCompany_Phone").value= "";
                document.getElementById("suplCompany_fax").value= "";
                document.getElementById("suplCompany_email").value= "";
                document.getElementById("suplCompany_info").value= "";
                document.getElementById("suplEmpl_name").value= "";
                document.getElementById("suplEmpl_Surname").value= "";
                document.getElementById("suplEmpl_address").value= "";
                document.getElementById("suplEmpl_pc").value= "";
                document.getElementById("suplEmpl_city").value= "";
                document.getElementById("suplEmpl_phone").value= "";
                document.getElementById("suplEmpl_fax").value= "";
                document.getElementById("suplEmpl_email").value= "";
                    
            } else {
                alert("Φτάσατε το μέγιστο όριο εισαγωγής στοιχείων προμηθευτών");
            }
        }

        function PostDataPromitheftiki() {

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
                        }
                    }
                }
                // 2. Define what to do when xhrProm feed you the response from the server - Start
                var countSuplCompany = intSupll;
                var suplCompany_Name = document.getElementById("suplCompany_Name").value;
                var suplCompany_CommercialName = document.getElementById("suplCompany_CommercialName").value;
                var suplCompany_OtherName = document.getElementById("suplCompany_OtherName").value;
                var suplCompany_legalForm = document.getElementById("suplCompany_legalForm").value;
                var suplCompany_CEO = document.getElementById("suplCompany_CEO").value;
                var suplCompany_Address = document.getElementById("suplCompany_Address").value;
                var suplCompany_PC = document.getElementById("suplCompany_PC").value;
                var suplCompany_City = document.getElementById("suplCompany_City").value;
                var suplCompany_Phone = document.getElementById("suplCompany_Phone").value;
                var suplCompany_fax = document.getElementById("suplCompany_fax").value;
                var suplCompany_email = document.getElementById("suplCompany_email").value;
                var suplCompany_info = document.getElementById("suplCompany_info").value;
                var suplEmpl_name = document.getElementById("suplEmpl_name").value;
                var suplEmpl_Surname = document.getElementById("suplEmpl_Surname").value;
                var suplEmpl_address = document.getElementById("suplEmpl_address").value;
                var suplEmpl_pc = document.getElementById("suplEmpl_pc").value;
                var suplEmpl_city = document.getElementById("suplEmpl_city").value;
                var suplEmpl_phone = document.getElementById("suplEmpl_phone").value;
                var suplEmpl_fax = document.getElementById("suplEmpl_fax").value;
                var suplEmpl_email = document.getElementById("suplEmpl_email").value;

                console.log(suplCompany_CommercialName);
                // 3. Specify your action, location and Send to the server - Start
                xhrProm.open('POST', 'prosthiki/promitheftiki/getPromitheftriaEteriaData.php');
                xhrProm.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhrProm.send("countSuplCompany=" + countSuplCompany + "&suplCompany_Name=" + suplCompany_Name + "&suplCompany_CommercialName=" + suplCompany_CommercialName + "&suplCompany_OtherName="
                + suplCompany_OtherName + "&suplCompany_legalForm=" + suplCompany_legalForm + "&suplCompany_CEO=" + suplCompany_CEO + "&suplCompany_Address=" + suplCompany_Address
                + "&suplCompany_PC=" + suplCompany_PC + "&suplCompany_City=" + suplCompany_City + "&suplCompany_Phone=" + suplCompany_Phone +
                "&suplCompany_fax=" + suplCompany_fax + "&suplCompany_email=" + suplCompany_email + "&suplCompany_info=" + suplCompany_info + "&suplEmpl_name=" + suplEmpl_name
                + "&suplEmpl_Surname=" + suplEmpl_Surname + "&suplEmpl_address=" + suplEmpl_address + "&suplEmpl_pc=" + suplEmpl_pc + "&suplEmpl_city=" + suplEmpl_city + "&suplEmpl_phone=" + suplEmpl_phone +
                "&suplEmpl_fax=" + suplEmpl_fax + "&suplEmpl_email=" + suplEmpl_email);
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

            console.log(suplCompany_CommercialName);
            // 3. Specify your action, location and Send to the server - Start
            xhrProm.open('POST', 'prosthiki/promitheftiki/deletePromitheftriaEteriaData.php');
            xhrProm.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhrProm.send("count="+count);
        }




        function removeCompanyID(cnum){
            DeleteDataPromitheftiki(cnum);
            var contentID = document.getElementById('entrycol');
            contentID.removeChild(document.getElementById('entry'+cnum));
            //intSupll = intSupll-1; this would break it
            choiceCount = choiceCount-1;
            //intSupll = intSupll-1;
        }

        function clearInputsEterias(){
            document.getElementById("suplCompany_Name").value = "";
            document.getElementById("suplCompany_CommercialName").value= "";
            document.getElementById("suplCompany_OtherName").value = "";
            document.getElementById("suplCompany_legalForm").value= "";
            document.getElementById("suplCompany_CEO").value= "";
            document.getElementById("suplCompany_Address").value= "";
            document.getElementById("suplCompany_PC").value= "";
            document.getElementById("suplCompany_City").value= "";
            document.getElementById("suplCompany_Phone").value= "";
            document.getElementById("suplCompany_fax").value= "";
            document.getElementById("suplCompany_email").value= "";
            document.getElementById("suplCompany_info").value= "";
            document.getElementById("suplEmpl_name").value= "";
            document.getElementById("suplEmpl_Surname").value= "";
            document.getElementById("suplEmpl_address").value= "";
            document.getElementById("suplEmpl_pc").value= "";
            document.getElementById("suplEmpl_city").value= "";
            document.getElementById("suplEmpl_phone").value= "";
            document.getElementById("suplEmpl_fax").value= "";
            document.getElementById("suplEmpl_email").value= "";
        }

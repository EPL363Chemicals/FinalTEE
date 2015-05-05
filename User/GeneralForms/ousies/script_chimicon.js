                var intChemicals=0;
                var choiceCount=0;

                function checkInputOusias(){
                    var proceed = true;
                    $("#chemicalForm input[required=true]").each(function() {
                        $(this).css('border-color', '');

                        if (!$.trim($(this).val())) {
                            $(this).css('border-color', 'red');
                            proceed = false;

                        }
                    });
                    if(proceed) {
                        addElement();
                        $('#chemicalModal').modal('hide');
                    }else{
                        return;
                    }
                    event.preventDefault();
                }
                //FUNCTION TO ADD TEXT BOX ELEMENT
                function addElement()
                {
                    if (choiceCount < 100 && intChemicals < 200) {
                        intChemicals = intChemicals + 1;
                        choiceCount = choiceCount+1;
                        PostDataXimikonOusion();
                        var contentID = document.getElementById('chemicalTable');
                        var newTBDiv = document.createElement('tr');
                        var labelName = $('#chemical_Name').val();
                        newTBDiv.setAttribute('id','chemicaltexts'+intChemicals);
                        newTBDiv.innerHTML ='<td><strong>'+intChemicals+'</strong></td><td>'+labelName+'</td><td><input type="image" src="../images/Deep_Edit.png" data-toggle="modal" data-target="#chemicalModal"></td><td><input type="image" src="../images/delete-icon.png" onclick= "removeElementID('+intChemicals+');"></td>';
                        contentID.appendChild(newTBDiv);
                        document.getElementById("chemical_Name").value = "";
                        document.getElementById("chemical_CAS").value = "";
                        document.getElementById("chemical_EINECS").value ="";
                        document.getElementById("chemical_IUPAC").value = "";
                        document.getElementById("chemical_otherName").value = "";
                        document.getElementById("chemical_weight").value = "";
                        document.getElementById("chemical_CLP").value = "";
                        document.getElementById("chemical_enarmonismeni").value = 0;
                    } else {
                        alert("Φτάσατε το μέγιστο όριο χημικών ουσιών που μπορείτε να προσθέσετε");
                    }
                }

                function PostDataXimikonOusion() {
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
                                console.log(xhrProm.responseText);
                                console.log("okSupl");
                            }
                        }
                    }
                    // 2. Define what to do when xhrProm feed you the response from the server - Start
                    var countChemical = intChemicals;
                    var chemical_Name = document.getElementById("chemical_Name").value;
                    var chemical_CAS = document.getElementById("chemical_CAS").value;
                    var chemical_EINECS = document.getElementById("chemical_EINECS").value;
                    var chemical_IUPAC = document.getElementById("chemical_IUPAC").value;
                    var chemical_otherName = document.getElementById("chemical_otherName").value;
                    var chemical_weight = document.getElementById("chemical_weight").value;
                    var chemical_CLP = document.getElementById("chemical_CLP").value;
                    var chemical_enarmonismeni = document.getElementById("chemical_enarmonismeni").value;


                    console.log(suplCompany_CommercialName);
                    // 3. Specify your action, location and Send to the server - Start
                    xhrProm.open('POST', 'prosthiki/ousies/getChimikaData.php');
                    xhrProm.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhrProm.send("countChemical="+countChemical+"&chemical_Name="+chemical_Name+"&chemical_CAS=" + chemical_CAS +"&chemical_EINECS="+chemical_EINECS+"&chemical_IUPAC="
                    +chemical_IUPAC+"&chemical_otherName="+chemical_otherName+"&chemical_weight="+chemical_weight+"&chemical_CLP="+chemical_CLP
                    +"&chemical_enarmonismeni="+chemical_enarmonismeni);
                }


                function removeElementID(cnum) {
                    DeleteDataOusias(cnum);
                    var contentID = document.getElementById('chemicalTable');
                    contentID.removeChild(document.getElementById('chemicaltexts'+cnum));
                    contentID.removeChild(document.getElementById('newline'+cnum));
                    //intChemicals = intChemicals-1; this would break it
                    choiceCount = choiceCount-1;
                }

                function DeleteDataOusias(count) {
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
                    xhrProm.open('POST', 'prosthiki/ousies/deleteChimikiOusiaData.php');
                    xhrProm.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhrProm.send("count="+count);
                }

                function clearInputsChimikon(){
                    document.getElementById("chemical_Name").value = "";
                    document.getElementById("chemical_CAS").value = "";
                    document.getElementById("chemical_EINECS").value ="";
                    document.getElementById("chemical_IUPAC").value = "";
                    document.getElementById("chemical_otherName").value = "";
                    document.getElementById("chemical_weight").value = "";
                    document.getElementById("chemical_CLP").value = "";
                    document.getElementById("chemical_enarmonismeni").value = 0;
                }
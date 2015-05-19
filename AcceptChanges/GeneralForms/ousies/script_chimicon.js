    var intChemicals=0;
    var choiceCount=0;
    var flag =false;
    var newIntex=0;
    
        //FUNCTION TO ADD Company TEXT BOX 
    function changeOusies(){
        $('#Save').show();
        $('#change').hide();

       }
    function show(x){
            $('#Save').hide();
            $('#change').show();
            var proceed = true;
            var k=x.closest('tr');
             var num=$(k).find('td.c0').text();
            newIntex=num;
            flag=true;
 
                        if(proceed) {
                            post_data = {
                                'num'		: num
                                };
                           
                       
                            $.post('../GeneralForms/ousies/script_chimicon.php', post_data, function(response){
                             
                            if(response.Name == "error"){
                               }else{
                                  $('#chemical_Name').val(response.Name);
                                  $('#chemical_CAS').val(response.Cas); 
                                  $('#chemical_EINECS').val(response.Ec); 
                                  $('#chemical_IUPAC').val(response.Iupac);
                                  $('#chemical_otherName').val(response.Oname);
                                  $('#chemical_weight').val(response.Quantity);
                                $('#chemical_enarmonismeni').val(response.Sort);
                                    tableH=(response.CLPh).split(",");
                                    tableP=(response.CLPp).split(","); 
                                   
                                   var i=0;
                            
                                   while(i<tableH.length){
                                           // alert(tableH[i]);
                                            $('#select-H-chem').multiselect('select',tableH[i]);
                                      
                                       i++;
                                   }
                                   i=0;

                                   while(i<tableP.length){
                                            // alert(tableP[i]);
                                             $('#select-P-chem').multiselect('select',tableP[i]);
                                         
                                       i++;
                                   }
                                 
                                    var token = (response.CLPicons).split(",");
                                    i=0;
                                 
                                    while (i<token.length) {
                                        if (token[i]=="icon1chem"){
                                            $('#icon1chem').prop('checked', true);
                                        }
                                        if (token[i]=="icon2chem"){
                                             $('#icon2chem').prop('checked', true);
                                        }
                                        if (token[i]=="icon3chem"){
                                             $('#icon3chem').prop('checked', true);
                                        }
                                        if (token[i]=="icon4chem"){
                                            $('#icon4chem').prop('checked', true);
                                        }
                                        if (token[i]=="icon5chem"){
                                             $('#icon5chem').prop('checked', true);
                                        }
                                        if (token[i]=="icon6chem"){
                                             $('#icon6chem').prop('checked', true);
                                        }
                                        if (token[i]=="icon7chem"){
                                             $('#icon7chem').prop('checked', true);
                                        }
                                        if (token[i]=="icon8chem"){
                                             $('#icon8chem').prop('checked', true);
                                        }
                                        if (token[i]=="icon9chem"){
                                             $('#icon9chem').prop('checked', true);
                                        }
                                    i++;
                               }
                               }
                            }, 'json');
                        }
                   
                    }; 

                function checkInputOusias(i,strPchem,strHchem){
                    var proceed = true;
                    $("#chemicalForm input[required=true]").each(function() {
                        $(this).css('border-color', '');

                        if (!$.trim($(this).val())) {
                            $(this).css('border-color', 'red');
                            proceed = false;

                        }
                    });
                    if(proceed) {
                        addElement(i,strPchem,strHchem);
                        $('#chemicalModal').modal('hide');
                    }else{
                        return;
                    }
                }
                //FUNCTION TO ADD TEXT BOX ELEMENT
                function addElement(i,strPchem,strHchem){

                    if(intChemicals==0){
                        choiseCount=i;
                        intTextBox=i;
                        intChemicals=i;
                    }
                    if (choiceCount < 100 && intChemicals < 200) {
                        
                        intChemicals = intChemicals + 1;
                        choiceCount = choiceCount+1;
                        PostDataXimikonOusion(strPchem,strHchem);
                        var contentID = document.getElementById('chemicalTable');
                        var newTBDiv = document.createElement('tr');
                        var labelName = $('#chemical_Name').val();
                        var labelCas = $('#chemical_CAS').val();
                        newTBDiv.setAttribute('id','chemicaltexts'+intChemicals);
                        newTBDiv.innerHTML ='<td class="c0"><strong>'+intChemicals+'</strong></td><td>'+labelName+'</td><td>'+labelCas+'</td><td><input type="image" src="../../images/Deep_Edit.png" onclick="show(this);" data-toggle="modal" data-target="#chemicalModal"></td><td><input type="image" src="../../images/delete-icon.png" onclick= "removeElementID('+intChemicals+');"></td>'; 
                        contentID.appendChild(newTBDiv);
                        clearInputsChimikon();

                    } else {
                        alert("Φτάσατε το μέγιστο όριο χημικών ουσιών που μπορείτε να προσθέσετε");
                    }
                }

                function PostDataXimikonOusion(strPchem,strHchem) {
                   
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
                    console.log(flag);
                     if(flag){
                    var countChemical = newIntex;

                }else{
                    var countChemical = newIntex;
                }
              
        flag=false;
                    // 2. Define what to do when xhrProm feed you the response from the server - Start
                    var countChemical = intChemicals;
                    var chemical_Name = document.getElementById("chemical_Name").value;
                    var chemical_CAS = document.getElementById("chemical_CAS").value;
                    var chemical_EINECS = document.getElementById("chemical_EINECS").value;
                    var chemical_IUPAC = document.getElementById("chemical_IUPAC").value;
                    var chemical_otherName = document.getElementById("chemical_otherName").value;
                    var chemical_weight = document.getElementById("chemical_weight").value;
                    var chemical_weight_type = document.getElementById("chemical_weight_type").value;
                    var chemical_enarmonismeni = document.getElementById("chemical_enarmonismeni").value;


                    var iconsChem = ""
                    if(document.getElementById("icon1chem").checked == true){
                        iconsChem = iconsChem+"icon1chem,";
                    }
                    if(document.getElementById("icon2chem").checked == true){
                        iconsChem = iconsChem+"icon2chem,";
                    }
                    if(document.getElementById("icon3chem").checked == true){
                        iconsChem = iconsChem+"icon3chem,";
                    }
                    if(document.getElementById("icon4chem").checked == true){
                        iconsChem = iconsChem+"icon4chem,";
                    }
                    if(document.getElementById("icon5chem").checked == true){
                        iconsChem = iconsChem+"icon5chem,";
                    }
                    if(document.getElementById("icon6chem").checked == true){
                        iconsChem = iconsChem+"icon6chem,";
                    }
                    if(document.getElementById("icon7chem").checked == true){
                        iconsChem = iconsChem+"icon7chem,";
                    }
                    if(document.getElementById("icon8chem").checked == true){
                        iconsChem = iconsChem+"icon8chem,";
                    }
                    if(document.getElementById("icon9chem").checked == true){
                        iconsChem = iconsChem+"icon9chem,";
                    }
                   
                    var convertP="";
                    var convertH="";
                    var i=0;
                    for(i=0;i<strPchem.length;i++){
                        convertP=convertP+","+strPchem[i];
                    }
                     for(i=0;i<strHchem.length;i++){
                        convertH=convertH+","+strHchem[i];
                    }
                   
                    // 3. Specify your action, location and Send to the server - Start
                    xhrProm.open('POST', '../GeneralForms/ousies/getChimikaData.php');
                    xhrProm.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhrProm.send("countChemical="+countChemical+"&chemical_Name="+chemical_Name+"&chemical_CAS=" + chemical_CAS +"&chemical_EINECS="+chemical_EINECS+"&chemical_IUPAC="
                    +chemical_IUPAC+"&chemical_otherName="+chemical_otherName+"&chemical_weight="+chemical_weight+"&chemical_weight_type="+chemical_weight_type
                    +"&chemical_enarmonismeni="+chemical_enarmonismeni+"&convertP="+convertP+"&convertH="+convertH+"&iconsChem="+iconsChem);
                }


                function removeElementID(cnum) {
                    DeleteDataOusias(cnum);
                    var contentID = document.getElementById('chemicalTable');
                    contentID.removeChild(document.getElementById('chemicaltexts'+cnum));
                    
                   // contentID.removeChild(document.getElementById('newline'+cnum));
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


                    // 3. Specify your action, location and Send to the server - Start
                    xhrProm.open('POST', '../GeneralForms/ousies/deleteChimikiOusiaData.php');
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
                    document.getElementById("chemical_weight_type").value = "";
                    document.getElementById("chemical_enarmonismeni").value = 0;


                    $('option', $('#select-P-chem')).each(function(element) {
                        $(this).removeAttr('selected').prop('selected', false);
                    });

                    $('#select-P-chem').multiselect('refresh');

                    $('option', $('#select-H-chem')).each(function(element) {
                        $(this).removeAttr('selected').prop('selected', false);
                    });

                    $('#select-H-chem').multiselect('refresh');

                    document.getElementById("icon1chem").checked = false;
                    document.getElementById("icon2chem").checked = false;
                    document.getElementById("icon3chem").checked = false;
                    document.getElementById("icon4chem").checked = false;
                    document.getElementById("icon5chem").checked = false;
                    document.getElementById("icon6chem").checked = false;
                    document.getElementById("icon7chem").checked = false;
                    document.getElementById("icon8chem").checked = false;
                    document.getElementById("icon9chem").checked = false;

                    console.log("clear");
                }
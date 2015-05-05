
    function checkInputProion(){
        var proceed = true;
        $("#proionForm input[required=true]").each(function() {
            $(this).css('border-color', '');

            if (!$.trim($(this).val())) {
                $(this).css('border-color', 'red');
                proceed = false;

            }
        });
        if(proceed) {
            PostDataProion();
        }else{
            return;
        }
        event.preventDefault();
    }
            function PostDataProion() {
                // 1. Create XHR instance - Start
                var xhr;
                if (window.XMLHttpRequest) {
                    xhr = new XMLHttpRequest();
                }
                else if (window.ActiveXObject) {
                    xhr = new ActiveXObject("Msxml2.XMLHTTP");
                }
                else {
                    throw new Error("Ajax is not supported by this browser");
                }
                // 1. Create XHR instance - End

                // 2. Define what to do when XHR feed you the response from the server - Start
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4) {
                        if (xhr.status == 200 && xhr.status < 300) {
                            document.getElementById('asdf').innerHTML = xhr.responseText;
                            console.log("ok");
                            document.getElementById('Step1').style.display = 'none';
                            document.getElementById('Step3').style.display = 'none';
                            document.getElementById('Step2').style.display = 'none';
                            document.getElementById('Step5').style.display = 'none';
                            document.getElementById('Step4').style.display = '';

                            // Change background color on header to highlight new step
                            document.getElementById('HeaderTableStep2').style.color= '#9DA1A3';
                            document.getElementById('HeaderTableStep1').style.color = '#9DA1A3';
                            document.getElementById('HeaderTableStep3').style.color = '#9DA1A3';
                            document.getElementById('HeaderTableStep4').style.color = '#66CCFF';
                            document.getElementById('HeaderTableStep5').style.color = '#000000';
                        }
                    }
                }
                // 2. Define what to do when XHR feed you the response from the server - Start

                var chemicalProduct_Name = document.getElementById("chemicalProduct_Name").value;
                var chemicalProduct_CommName = document.getElementById("chemicalProduct_CommName").value;
                var chemicalProduct_use = document.getElementById("chemicalProduct_use").value;
                var chemicalProduct_extraChar = document.getElementById("chemicalProduct_extraChar").value;
                var chemicalProduct_state = document.getElementById("chemicalProduct_state").value;
                var chemicalProduct_storageAdd = document.getElementById("chemicalProduct_storageAdd").value;
                var chemicalProduct_SDS = document.getElementById("chemicalProduct_SDS").value;
                var chemicalProduct_CPL = document.getElementById("chemicalProduct_CPL").value;
                var chemicalProduct_V = document.getElementById("chemicalProduct_V").value;

                console.log(constCompany_CommercialName);
                // 3. Specify your action, location and Send to the server - Start
                xhr.open('POST', 'prosthiki/proion/getStixiaProiontosData.php');
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.send("chemicalProduct_Name=" + chemicalProduct_Name +"&chemicalProduct_CommName="+chemicalProduct_CommName+"&chemicalProduct_use="
                +chemicalProduct_use+"&chemicalProduct_extraChar="+chemicalProduct_extraChar+"&chemicalProduct_state="+chemicalProduct_state+"&chemicalProduct_storageAdd="+chemicalProduct_storageAdd
                +"&chemicalProduct_SDS="+chemicalProduct_SDS+"&chemicalProduct_CPL="+chemicalProduct_CPL+"&chemicalProduct_V="+chemicalProduct_V);
            }



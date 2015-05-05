    function checkInputParaskevastikis(){

        //$("#paraskevastiki_form").submit(function(){
            console.log("eftase");
            var proceed = true;
            $("#paraskevastiki_form input[required=true]").each(function() {
                $(this).css('border-color', '');

                if (!$.trim($(this).val())) {
                    $(this).css('border-color', 'red');
                    proceed = false;
                    console.log("kokkino");
                }
            });

            if(proceed) {
                event.preventDefault();                
                console.log("eftase22");
                PostDataPaeaskevastiki();
                console.log("eftase23");
            }else{
                console.log("kokkino");
                return;
            }

        //});
        
        console.log("eteliose");

    }





    function PostDataPaeaskevastiki() {

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
                        changeStep();
                    }
                }
            }
            // 2. Define what to do when XHR feed you the response from the server - Start

            var constCompany_Name = document.getElementById("constCompany_Name").value;
            var constCompany_CommercialName = document.getElementById("constCompany_CommercialName").value;
            var constCompany_OtherName = document.getElementById("constCompany_OtherName").value;
            var constCompany_legalForm = document.getElementById("constCompany_legalForm").value;
            var constCompany_CEO = document.getElementById("constCompany_CEO").value;
            var constCompany_Address = document.getElementById("constCompany_Address").value;
            var constCompany_PC = document.getElementById("constCompany_PC").value;
            var constCompany_City = document.getElementById("constCompany_City").value;
            var constCompany_country = document.getElementById("constCompany_country").value;
            var constCompany_Phone = document.getElementById("constCompany_Phone").value;
            var constCompany_fax = document.getElementById("constCompany_fax").value;
            var constCompany_email = document.getElementById("constCompany_email").value;
            var constCompany_info = document.getElementById("constCompany_info").value;
            var constEmpl_name = document.getElementById("constEmpl_name").value;
            var constEmpl_Surname = document.getElementById("constEmpl_Surname").value;
            var constEmpl_address = document.getElementById("constEmpl_address").value;
            var constEmpl_pc = document.getElementById("constEmpl_pc").value;
            var constEmpl_city = document.getElementById("constEmpl_city").value;
            var constEmpl_phone = document.getElementById("constEmpl_phone").value;
            var constEmpl_fax = document.getElementById("constEmpl_fax").value;
            var constEmpl_email = document.getElementById("constEmpl_email").value;


            console.log(constCompany_Name);
            // 3. Specify your action, location and Send to the server - Start
            xhr.open('POST', 'prosthiki/paraskevastiki/getParaskevastikiEteriaData11.php');
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send("constCompany_Name=" + constCompany_Name + "&constCompany_CommercialName=" + constCompany_CommercialName + "&constCompany_OtherName="
            + constCompany_OtherName + "&constCompany_legalForm=" + constCompany_legalForm + "&constCompany_CEO=" + constCompany_CEO + "&constCompany_Address=" + constCompany_Address
            + "&constCompany_PC=" + constCompany_PC + "&constCompany_City=" + constCompany_City + "&constCompany_country=" + constCompany_country + "&constCompany_Phone=" + constCompany_Phone +
            "&constCompany_fax=" + constCompany_fax + "&constCompany_email=" + constCompany_email + "&constCompany_info=" + constCompany_info + "&constEmpl_name=" + constEmpl_name
            + "&constEmpl_Surname=" + constEmpl_Surname + "&constEmpl_address=" + constEmpl_address + "&constEmpl_pc=" + constEmpl_pc + "&constEmpl_city=" + constEmpl_city + "&constEmpl_phone=" + constEmpl_phone +
            "&constEmpl_fax=" + constEmpl_fax + "&constEmpl_email=" + constEmpl_email);
        console.log(constCompany_Name);

    }

    function changeStep(){

        document.getElementById('Step1').style.display = 'none';
        document.getElementById('Step3').style.display = 'none';
        document.getElementById('Step4').style.display = 'none';
        document.getElementById('Step5').style.display = 'none';
        document.getElementById('Step2').style.display = '';

        // Change background color on header to highlight new step
        document.getElementById('HeaderTableStep2').style.color= '#66CCFF';
        document.getElementById('HeaderTableStep1').style.color = '#9DA1A3';
        document.getElementById('HeaderTableStep3').style.color = '#000000';
        document.getElementById('HeaderTableStep4').style.color = '#000000';
        document.getElementById('HeaderTableStep5').style.color = '#000000';
    }

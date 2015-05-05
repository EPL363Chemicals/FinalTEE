        $(document).on('change', '.btn-file :file', function() {
            var input = $(this),
                numFiles = input.get(0).files ? input.get(0).files.length : 1,
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [numFiles, label]);
        });

        $(document).ready( function() {
            $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
                var input = $(this).parents('.input-group').find(':text'),
                    log = numFiles > 1 ? numFiles + ' files selected' : label;
        
                if( input.length ) {
                    input.val(log);
                } else {
                    if( log ) alert(log);
                }
        
            });
        });

        function addToDB(save){
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
                    }
                }
            }

            // 3. Specify your action, location and Send to the server - Start
            xhrProm.open('POST', 'prosthiki/dda/sqlQueries.php');
            xhrProm.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhrProm.send("save_mode="+save);
        }
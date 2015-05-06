<?php
if($_POST){
     $Htable=array();
        $Ptable=array();
        $myfile = fopen("H.txt", "r") or die("Unable to open file!");
        while(!feof($myfile)) {
            array_push($Htable,fgets($myfile)); 
        }
        $myfile = fopen("P.txt", "r") or die("Unable to open file!");
        while(!feof($myfile)) {
            array_push($Ptable,fgets($myfile)); 
        }
        fclose($myfile);
  $output = json_encode(array('Ptable'=>$Ptable,'Htable'=>$Htable));
  die($output);    
 }

?>
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <title>Log in</title>
   <!----------------------------------------------------------------->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script src="js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.3.min.js" ></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<link rel="stylesheet" href="css/bootstrap-multiselect.css" />
<script src="js/bootstrap-multiselect.js"></script>

    
<script>
    $(document).ready(function() {
               
               $('#select-P').multiselect({
            maxHeight: 200
        });
   var str = "";
  $( "#select-P" ).change(function() {
        
        $( "select option:selected" ).each(function() {
          str += $( this ).text() + ",";
        });
      }).trigger( "change" );
    $("#but").click(function(){
        alert(str);
    });
   
}); 
      
</script>
  </head>
  <body> 
    

<select id="select-P" multiple="multiple"  name="multiselect[]" class="form-control" size=5; >
         <option value="P284">P284</option>
        <option value="P285">P285</option>
        <option value="P231+P232">P231+P232</option>
        <option value="P235+P410">P235+P410</option>
        <option value="P301">P301</option>
        <option value="P302">P302</option>
        <option value="P303">P303</option>
        <option value="P304">P304</option>
        <option value="P305">P305</option>
        <option value="P306">P306</option>
        <option value="P307">P307</option>
        <option value="P308">P308</option>
        <option value="P309">P309</option>
        <option value="P310">P310</option>
        <option value="P311">P311</option>
        <option value="P312">P312</option>
        <option value="P313">P313</option>
        <option value="P314">P314</option>
        <option value="P315">P315</option>
        <option value="P320">P320</option>
        <option value="P321">P321</option>
        <option value="P322">P322</option>
        <option value="P330">P330</option>
        <option value="P331">P331</option>
        <option value="P332">P332</option>
        <option value="P333">P332</option>
        <option value="P334">P334</option>
        <option value="P335">P334</option>
        <option value="P336">P336</option>
        <option value="P337">P337</option>
        <option value="P338">P338</option>
        <option value="P340">P340</option>
        <option value="P341">P341</option>
        <option value="P342">P342</option>
        <option value="P350">P350</option>
        <option value="P351">P351</option>
        <option value="P352">P352</option>
        <option value="P353">P353</option>
        <option value="P360">P360</option>
        <option value="P361">P361</option>
        <option value="P362">P362</option>
        <option value="P363">P363</option>
        <option value="P370">P370</option>
        <option value="P371">P371</option>
        <option value="P372">P372</option>
        <option value="P373">P373</option>
        <option value="P374">P374</option>
        <option value="P375">P375</option>
        <option value="P376">P376</option>
        <option value="P377">P377</option>
        <option value="P378">P378</option>
        <option value="P380">P380</option>
        <option value="P381">P381</option>
        <option value="P390">P390</option>
        <option value="P391">P391</option>
        <option value="P301+P310">P301+P310</option>
        <option value="P301+P312">P301+P312</option>
        <option value="P301+P330+P331">P301+P330+P331</option>
        <option value="P302+P334">P302+P334</option>
        <option value="P302+P350">P302+P350</option>
        <option value="P302+P352">P302+P352</option>
        <option value="P303+P361+P353">P303+P361+P353</option>
        <option value="P304+P340">P304+P340</option>
        <option value="P304+P341">P304+P341</option>
        <option value="P305+P351+P338">P305+P351+P338</option>
        <option value="P306+P360">P306+P360</option>
        <option value="P307+P311">P307+P311</option>
        <option value="P308+P313">P308+P313</option>
        <option value="P309+P311">P309+P311</option>
        <option value="P332+P313">P332+P313</option>
        <option value="P333+P313">P333+P313</option>
        <option value="P335+P334">P335+P334</option>
        <option value="P337+P313">P337+P313</option>
        <option value="P342+P311">P342+P311</option>
        <option value="P370+P376">P370+P376</option>
        <option value="P370+P378">P370+P378</option>
        <option value="P370+P380">P370+P380</option>
        <option value="P370+P380+P375">P370+P380+P375</option>
        <option value="P371+P380+P375">P371+P380+P375</option>
        <option value="P401">P401</option>
        <option value="P402">P402</option>
        <option value="P403">P403</option>
        <option value="P404">P404</option>
        <option value="P405">P405</option>
        <option value="P406">P406</option>
        <option value="P407">P407</option>
        <option value="P410">P410</option>
        <option value="P411">P411</option>
        <option value="P412">P412</option>
        <option value="P413">P413</option>
        <option value="P420">P420</option>
        <option value="P422">P422</option>
        <option value="P402+P404">P402+P404</option>
        <option value="P403+P233">P403+P233</option>
        <option value="P403+P235">P403+P235</option>
        <option value="P410+P403">P410+P403</option>
        <option value="P410+P412">P410+P412</option>
        <option value="P411+P235">P411+P235</option>
        <option value="P501">P501</option>
</select>
<input type="button"  id="but" value="Button">

  </body>
</html>
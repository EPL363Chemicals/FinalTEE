<link rel="stylesheet" href="../../css/bootstrap-multiselect.css" />
<script src="../../js/bootstrap-multiselect.js"></script>
<script>
    var strP = "";
    var strH = "";
    $(document).ready(function() {
        $('#select-P').multiselect({
            maxHeight: 200
        });
        $('#select-H').multiselect({
            maxHeight: 200
        });

        $('#select-P').multiselect({
            selectAllValue: 'multiselect-all',
            enableCaseInsensitiveFiltering: true,
            enableFiltering: true,
            onChange: function(element, checked) {
                var brands = $('#select-P option:selected');
                var selected = [];
                $(brands).each(function(index, brand){
                    selected.push([$(this).val()]);
                });
                strP = selected;
                console.log(strP);
//                var a =strP.toJSON();
//                console.log(a);
            }});

//        $( "#select-P" ).change(function() {
//
//            $( "#select-P option:selected" ).each(function() {
//                strP += $( this ).text() + ",";
//            });
//        }).trigger( "change" );

        $( "#select-H" ).change(function() {

            $( "#select-H option:selected" ).each(function() {
                strH += $( this ).text() + ",";
            });
        }).trigger( "change" );
    });
</script>

<div class="col-md-12 ">
        <div class="container">
        	<div class="row">
                <form id="proionForm">
       	        <div class="panel-heading " >
                    <h2 class="panel-title col-sm-offset-1"><strong>Στοιχεία Χιμικού  Προϊόντος</strong></h2>
                </div>  
                <hr>              
                <br>
                                     
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_Name">Χημική Ονομασία Προϊόντος:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control"  name="chemicalProduct_Name" id="chemicalProduct_Name" />
                    </div>
                </div>
                  
                <br><br>
                
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_CommName">Εμπορική Ονομασία Προϊόντος:<label style="color:red;">*</label></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" required=true name="chemicalProduct_CommName" id="chemicalProduct_CommName" />
                    </div>
                </div>
                   
                <br><br>
                
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_use">Προβλεπόμενες Χρήσεις Προϊόντος:<label style="color:red;">*</label></label>
                    <div class="col-sm-6">
                        <textarea type="text" class="form-control" required=true rows="5" name="chemicalProduct_use" id="chemicalProduct_use" /></textarea>
                    </div>
                </div>
                  
                <br><br><br><br><br><br>
            
                 <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_extraChar">Πρόσθετα Χαρακτηριστικά ή άλλες επιπρόσθετες πληροφορίες για το μείγμα</label>
                    <div class="col-sm-6">
                        <textarea type="text" class="form-control" rows="5" name="chemicalProduct_extraChar" id="chemicalProduct_extraChar" /></textarea>
                    </div>
                </div>
                  
                <br><br><br><br><br><br>
            
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_state">Κατάσταση Προϊόντος:<label style="color:red;">*</label></label>
                    <div class="col-sm-6">
                        <select class="form-control" name="chemicalProduct_state" required=true id="chemicalProduct_state">
                          <option value="Αέριο"> Αέριο</option>
                          <option value="Υγρό">Υγρό</option>
                          <option value="Στερεό">Στερεό</option>
                          <option value="Τζελ">Τζελ</option>
                          <option value="Pellets">Pellets</option>
                          <option value="Capsules">Capsules</option>
                          <option value="Άλλο">Άλλο</option>
                        </select>
                    </div>
                </div>
                        
                <br><br>

                   
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_SDS">Στοιχεία Ταξινόμησης και Επισήμανσης σύμφωνα με το Δελτίο Δεδομένων Ασφαλείας (SDS)<label style="color:red;">*</label></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="chemicalProduct_SDS" required=true id="chemicalProduct_SDS" />
                    </div>
                </div>
        
                <br><br><br>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="chemicalProduct_V">Συσκευασία:<label style="color:red;">*</label></label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control"  required=true name="chemicalProduct_V" id="chemicalProduct_V"/>
                        </div>
                        <div class="col-sm-2">
                            <select class="form-control" name="chemicalProduct_V_Type" id="chemicalProduct_V_Type">
                                <option value="Kg">Kg</option>
                                <option value="L">L</option>
                                <option value="gr">gr</option>
                                <option value="ml">ml</option>
                            </select>
                        </div>
                    </div>
                    <br><br><br>
        
                <div class="form-group">
                    <div class="col-sm-2"></div>
                    <label class="control-label col-sm-6" for="chemicalProduct_CPL" style="text-align: center">Στοιχεία Ταξινόμησης και Επισήμανσης σύμφωνα με τον Κανονισμό 1272/2008 (Κανονισμός CLP)(αν είναι διαθέσιμα)<label style="color:red;">*</label></label>
                    <div class="col-sm-3"></div>
                </div>
                    <br><br><br>
<!--                        <input type="text" class="form-control" name="chemicalProduct_CPL" required=true id="chemicalProduct_CPL" />-->
                    <div class="form-group">
                    <div class="col-md-12">
                        <label class="control-label col-sm-3">GHS pictograms</label>

                        <div class="col-md-6">
                            <img src="../../DangerIcons/acid_red.gif" style="height:50px; width:50px ;margin:10px"><input type="checkbox" name="icon1" id="icon1">
                            <img src="../../DangerIcons/Aquatic-pollut-red.gif" style="height:50px; width:50px ;margin:10px"><input type="checkbox" name="icon2" id="icon2">
                            <img src="../../DangerIcons/bottle.gif" style="height:50px; width:50px ;margin:10px"><input type="checkbox" name="icon3" id="icon3">
                            <img src="../../DangerIcons/exclam.gif" style="height:50px; width:50px ;margin:10px"><input type="checkbox" name="icon4" id="icon4">
                            <img src="../../DangerIcons/explos.gif" style="height:50px; width:50px ;margin:10px"><input type="checkbox" name="icon5" id="icon5">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-3"></div>
                        <div class="col-md-6">
                            <img src="../../DangerIcons/flamme.gif" style="height:50px; width:50px ;margin:10px"><input type="checkbox" name="icon6" id="icon6">
                            <img src="../../DangerIcons/rondflam.gif" style="height:50px; width:50px ;margin:10px"><input type="checkbox" name="icon7" id="icon7">
                            <img src="../../DangerIcons/silhouete.gif" style="height:50px; width:50px ;margin:10px"><input type="checkbox" name="icon8" id="icon8">
                            <img src="../../DangerIcons/skull.gif" style="height:50px; width:50px ;margin:10px"><input type="checkbox" name="icon9" id="icon9">
                        </div>
                    </div>
                </div>

                    <br><br><br>
                    <br><br><br>
                    <br><br><br>

                    <div class="form-group">
                        <label class="control-label col-sm-4" for="select-P">Precautionary Statements</label>
                        <div class="col-md-6">
                    <select id="select-P" multiple="multiple" class="form-control" size=5; >
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
                </div>
                    </div>



                    <br><br><br>


                    <div class="form-group">
                        <label class="control-label col-sm-4" for="select-H">Hazerd Statements</label>
                        <div class="col-md-6">
                            <select id="select-H" multiple="multiple" class="form-control" size=5; >
                                <option value="H200">H200</option>
                                <option value="H201">H201</option>
                                <option value="H202">H202</option>
                                <option value="H203">H203</option>
                                <option value="H204">H204</option>
                                <option value="H205">H205</option>
                                <option value="H220">H220</option>
                                <option value="H221">H221</option>
                                <option value="H222">H222</option>
                                <option value="H223">H223</option>
                                <option value="H224">H224</option>
                                <option value="H225">H225</option>
                                <option value="H226">H226</option>
                                <option value="H228">H228</option>
                                <option value="H240">H240</option>
                                <option value="H241">H241</option>
                                <option value="H242">H242</option>
                                <option value="H250">H250</option>
                                <option value="H251">H251</option>
                                <option value="H252">H252</option>
                                <option value="H260">H260</option>
                                <option value="H261">H261</option>
                                <option value="H270">H270</option>
                                <option value="H271">H271</option>
                                <option value="H272">H272</option>
                                <option value="H280">H280</option>
                                <option value="H281">H281</option>
                                <option value="H290">H290</option>
                                <option value="H300">H300</option>
                                <option value="H301">H301</option>
                                <option value="H302">H302</option>
                                <option value="H304">H304</option>
                                <option value="H310">H310</option>
                                <option value="H311">H311</option>
                                <option value="H312">H312</option>
                                <option value="H314">H314</option>
                                <option value="H315">H315</option>
                                <option value="H317">H317</option>
                                <option value="H318">H318</option>
                                <option value="H319">H319</option>
                                <option value="H330">H330</option>
                                <option value="H331">H331</option>
                                <option value="H332">H332</option>
                                <option value="H334">H334</option>
                                <option value="H335">H335</option>
                                <option value="H336">H336</option>
                                <option value="H340">H340</option>
                                <option value="H341">H341</option>
                                <option value="H350">H350</option>
                                <option value="H351">H351</option>
                                <option value="H360">H360</option>
                                <option value="H361">H361</option>
                                <option value="H362">H362</option>
                                <option value="H370">H370</option>
                                <option value="H371">H371</option>
                                <option value="H372">H372</option>
                                <option value="H373">H373</option>
                                <option value="H400">H400</option>
                                <option value="H410">H410</option>
                                <option value="H411">H411</option>
                                <option value="H412">H412</option>
                                <option value="H413">H413</option>
                            </select>
                        </div>
                    </div>
                   


                   <br><br>

            </form>
                 
            </div>  
        </div>
    </div>

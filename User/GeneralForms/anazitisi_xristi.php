<?php 
include "../../connectToDBforRead.php";

switch($_SESSION["Company-Type"]){
    case "0":$sql = mysql_query("SELECT Distinct * FROM `supply`,`product` WHERE supply.Supplier='".$_SESSION['Telephone']."' and product.Commercial_Name=supply.Product && product.Savingdate=supply.Saving_Date ",$con);
        break;
    case "1":$sql = mysql_query( "SELECT Distinct * FROM `product` WHERE product.Constructor='".$_SESSION['Telephone']."'"  ,$con);
        break;
    case "2":$sql = mysql_query("SELECT Distinct * FROM `supply`,`product` WHERE supply.Supplier='".$_SESSION['Telephone']."' and product.Commercial_Name=supply.Product && product.Savingdate=supply.Saving_Date ",$con);
        break;
}
$row1 = mysql_fetch_array($sql);

?>
<br><br>
     
        <table id="example" class="display" cellspacing="0" width="100%">
    <thead>
        <tr class="no">
            <th>Ημερομηνία Καταχώρησης</th>
            <th>Χειμικό Προιόν</th>
            <th>ΔΔΑ</th>
                    
        </tr>
    </thead>
    <tfoot>
    </tfoot>
    <tbody>
        <?php
            
                $i=1;
                while($row1) {
        ?>
        <tr class="yes" id="row<?php echo $i?>" >
            <td id="c1" class="c1"><?php echo $row1["SavingDate"]?></td>
            <td id="c2"  class="c2"><?php echo $row1["Chemical_Name"]?></td>
            <td id="c3"  class="c3"><?php echo $row1["Pdf_ID"]?></td>
                    <script>
                      tr = $('.display').find('tr.yes');

                        tr.bind('click', function(event) {
                            date=$(this).find("td.c1").html();
                            name=$(this).find("td.c2").html();
                            company=$(this).find("td.c3").html();
                            window.location="../apotelesmata/Apotelesmata2.php?date="+date+"&name="+name+"&company="+company;

                        });
                    </script>
        </tr>
        <?php 
               $i=$i+1; 
            $row1 = mysql_fetch_array($sql);    
               
            }
              
        ?>
   </tbody>
</table>  


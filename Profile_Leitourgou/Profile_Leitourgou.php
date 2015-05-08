
<?php
    include "../connectToDBforRead.php";
    $sql =mysql_query("SELECT * FROM `product`WHERE product.Final=1 or product.Append=1");
 $row= mysql_fetch_array($sql);

?>


 <br><br>
<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Ημερομηνία Καταχώρησης</th>
            <th>Χειμικό Προιόν</th>
            <th>Κατάσταση</th>
                    
        </tr>
    </thead>
    <tfoot>
    </tfoot>
    <tbody>
        <?php
           
                $i=1;
                while($row ) {
        ?>
        <tr id="row<?php echo $i?>" class="click">
            <td id="c1" class="c1"><?php echo $row["SavingDate"]?></td>
            <td id="c2"  class="c2"><?php echo $row["Commercial_Name"]?></td>
            <td id="c3"  class="c3"><?php if ($row["Final"]==1){echo "Τελική Αποθήκευση";}else{echo "Επικαιροποίημένη Έκδοση";}?></td>
                    <script>
                      tr = $('.display').find('.click');

                        tr.bind('click', function(event) {
                            date=$(this).find("td.c1").html();
                            name=$(this).find("td.c2").html();
                            company=$(this).find("td.c3").html();
                            window.location="../Apotelesmata/Litourgos/apotelesma.php?date="+date+"&product="+name;

                        });
                    </script>
        </tr>
        <?php 
                $row= mysql_fetch_array($sql);
               }
            
              
        ?>
   </tbody>
</table>       

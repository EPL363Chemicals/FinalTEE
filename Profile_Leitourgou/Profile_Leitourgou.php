<?php 

    $db = 'teedb';
    $username = 'root';
    $password = '261994akk';

    // Create connection
    $conn = new mysqli('localhost', $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
   
?>
<?php
    $sql = "SELECT * FROM `product` ";
    $sql .="inner Join `Company`";
    $sql .="On product.Constructor = Company.Company_Name ";
$result = $conn->query($sql);

?>


 
<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Ημερομηνία Καταχώρησης</th>
            <th>Χειμικό Προιόν</th>
            <th>Προμηθευτής</th>
                    
        </tr>
    </thead>
    <tfoot>
    </tfoot>
    <tbody>
        <?php
            if ($result->num_rows > 0) {
            // output data of each row
                $i=1;
                while($row = $result->fetch_assoc()) {
        ?>
        <tr id="row<?php echo $i?>" class="click">
            <td id="c1" class="c1"><?php echo $row["SavingDate"]?></td>
            <td id="c2"  class="c2"><?php echo $row["Chemical_Name"]?></td>
            <td id="c3"  class="c3"><?php echo $row["Constructor"]?></td>
                    <script>
                      tr = $('.display').find('.click');

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
               }
            } 
            else {
                echo "0 results";
            }
            $conn->close();     
        ?>
   </tbody>
</table>       

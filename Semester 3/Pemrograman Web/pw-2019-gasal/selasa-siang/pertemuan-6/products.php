<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$host = "localhost";
$user = "pw";
$password = "pw";
$database = "nwind";
 
# 1
$link = mysqli_connect($host, $user, $password, $database);

?>

<html>
    <body>
        <?php
        
$sql = "select * from categories";
$result = mysqli_query($link, $sql);
while ($row = mysqli_fetch_object($result)) {
    //print "[".$row->CategoryName."]";
    ?>
        <a href="products.php?cid=<?=$row->CategoryID?>">[<?=$row->CategoryName?>]</a>
    <?php
}        
        
        
        
        ?>
        <table border="1">
            
<?php
# 2
$c = $_GET['cid'];
$sql = "select * from products where CategoryID = $c";
$result = mysqli_query($link, $sql);

#var_dump($result);

# 3

while ($row = mysqli_fetch_object($result)) {
    #print "<pre>";
    #var_dump($row);
    ?>
    
    
            <tr>
                <td><?=$row->ProductID?></td>
                <td><?=$row->ProductName?></td>
                <td><?=$row->UnitPrice?></td>
            </tr>
    
    
    <?php
    #print "PID: ".$row->ProductID;
    #print "<br>";
    #print "Nama: ".$row->ProductName;
    #print "<br>";
    #print "Harga: ".$row->UnitPrice;
    #print "<br>";
    #print "<br>";
}

?>        
            
        </table>
        
        

        
        
        
    </body>
</html>




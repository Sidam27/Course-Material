<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// buka koneksi

$host = "localhost";
$user = "pw";
$password = "pw";
$database = "nwind";
$link = mysqli_connect($host, $user, $password, $database);
?>

<html>
    <body>
        
        
        <table>
            <thead>
            <th>PID</th>
            <th>Nama</th>
            <th>Harga</th>
            </thead>
            
<?php
// run sql
$sql = "select * from products";
$data = mysqli_query($link, $sql);

//var_dump($data);

while ($row = mysqli_fetch_object($data)) {
    //print "<pre>";
    ///var_dump($row);
    ?>
    
            <tr>
                <td><?=$row->ProductID?></td>
                <td><?=$row->ProductName?></td>
                <td><?=$row->UnitPrice?></td>
            </tr>
    
    <?php
    #print "PID: ".$row->ProductID."<br>";
    #print "Nama: ".$row->ProductName."<br>";
    #print "Harga: ".$row->UnitPrice."<br>";
    #print "---------------------------------------------<br>";
}

?>        
            
            
        </table>
        
        
        
        
    </body>
</html>



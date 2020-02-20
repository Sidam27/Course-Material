<?php

$host = "localhost";
$user = "pw";
$password = "pw";
$database = "nwind";
$link = mysqli_connect($host, $user, $password, $database);

?>

<html>
    <body>
        <?php
        
        $pid = $_GET["pid"];    
        $sql = "select * from products p, suppliers s, categories c "
                . "where p.ProductID = $pid and "
                . "p.SupplierID = s.SupplierID and "
                . "c.categoryID = p.categoryID";
        ///var_dump($pid);
        $rs = mysqli_query($link, $sql);
        
        $p = mysqli_fetch_object($rs);
        
        ?>
        <table>
            <tr>
                <td>PID</td>
                <td>:</td>
                <td><?=$p->ProductID?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?=$p->ProductName?></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>USD <?=$p->UnitPrice?></td>
            </tr>
            <tr>
                <td>Supplier</td>
                <td>:</td>
                <td><?=$p->CompanyName?></td>
            </tr>
            <tr>
                <td>Category</td>
                <td>:</td>
                <td><?=$p->CategoryName?></td>
            </tr>
        </table>
        
        <form action="cart.php" method="get"> 
            <input type="hidden" name="pid" value="<?=$p->ProductID?>">
            Jumlah yang dibeli : <input type="text" name="jumlah">
            <input type="submit" value="Beli">
            
        </form>
    </body>
</html>
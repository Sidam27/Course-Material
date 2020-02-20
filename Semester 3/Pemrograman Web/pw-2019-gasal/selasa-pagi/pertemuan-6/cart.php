<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_name("scart");
session_start();

$host = "localhost";
$user = "pw";
$password = "pw";
$database = "nwind";
$link = mysqli_connect($host, $user, $password, $database);

?>

<html>
    <body>

        <table border="1">
            <th>PID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subtotal</th>

            <?php
            $_SESSION["keranjang"][$_GET["pid"]] = $_GET["jumlah"];

            $total = 0;
            foreach ($_SESSION["keranjang"] as $pid => $jumlah) {
                $sql = "select * from products where ProductID = $pid";
                $result = mysqli_query($link, $sql);
                $p = mysqli_fetch_object($result);
                $st = $jumlah * $p->UnitPrice;
                $total = $total + $st;
                ?>

                <tr>
                    <td><?=$pid?></td>
                    <td><?=$p->ProductName?></td>
                    <td><?=$p->UnitPrice?></td>
                    <td><?=$jumlah?></td>
                    <td><?=$st?></td>

                </tr>    

                <?php
                #print "PID: $pid ---> Jumlah: $jumlah<br>";
            }
            ?>            


                <tr>
                    <td colspan="4">Total</td>
                    <td><?=$total?></td>
                </tr>
        </table>

    </body>
</html>


<?php
# 1
$host = "localhost";
$user = "pw";
$password = "pw";
$database = "nwind";
$link = mysqli_connect($host, $user, $password, $database);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <?php
                    
                    $sql = "select * from categories";
                    $result = mysqli_query($link, $sql);
                    
                    while ($row = mysqli_fetch_object($result)) {
                        
                        ?>
                    <a href="products.php?cid=<?=$row->CategoryID?>"><?=$row->CategoryName?></a><br>
                    
                    <?php
                        
                    }
                    
                    
                    ?>

                </div>
                <div class="col-sm-9">

                    <table class="table table-striped">
                        <th>PID</th>
                        <th>Nama</th>
                        <th>Harga</th>

                        <?php
# 2                     
                        $c = $_GET["cid"];
                        $sql = "select * from products where CategoryID = $c";
                        $result = mysqli_query($link, $sql);

# 3
#print "<pre>";
                        while ($row = mysqli_fetch_object($result)) {
                            #var_dump($row);
                            ?>


                            <tr>
                                <td><?= $row->ProductID ?></td>
                                <td><?= $row->ProductName ?></td>
                                <td><?= $row->UnitPrice ?></td>
                            </tr>


                            <?php
                            #print "PID: " . $row->ProductID;
                            #print "<br>";
                            #print "Nama produk: " . $row->ProductName;
                            #print "<br>";
                            #print "Harga: " . $row->UnitPrice;
                            #print "<br>-------------------------------------------------------<br>";
                        }
                        ?>             




                    </table>









                </div>



            </div>
        </div>



    </body>
    <script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>

</html>







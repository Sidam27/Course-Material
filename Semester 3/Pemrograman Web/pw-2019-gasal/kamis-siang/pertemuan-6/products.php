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

                </div>
                <div class="col-sm-9">


                    <table class="table table-striped">



                        <?php
# 2
                        $c = $_GET["cid"];
                        $sql = "select * from products where CategoryID = $c";
                        $result = mysqli_query($link, $sql);


# 3
#print "<pre>";
                        while ($row = mysqli_fetch_object($result)) {
                            #var_dump($row);
                            #print "<br>";
                            ?>

                            <tr>
                                <td><?= $row->ProductID ?></td>
                                <td><?= $row->ProductName ?></td>
                                <td><?= $row->UnitPrice ?></td>
                            </tr>


                            <?php
                            #print "PID: " . $row->ProductID;
                            #print "<br>";
                            #print "Nama: " . $row->ProductName;
                            #print "<br>";
                            #print "Harga: " . $row->UnitPrice;
                            #print "<br>";
                            #print "-----------------------------------------------------<br>";
                        }

                        /*
                          $sql = "select * from customers";
                          $result = mysqli_query($link, $sql);
                          while ($row = mysqli_fetch_object($result)) {
                          print $row->CompanyName;
                          print "<br>";

                          }
                         */
                        ?>     



                    </table>





                </div>



            </div>
        </div>






    </body>
    <script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
</html>






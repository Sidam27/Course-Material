<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$id = $_GET['id'];
$sql = "select * from pegawai where id = $id";
print $sql;

$sql = "select * from pegawai where nama like 'D%'";
$sql = 'select * from customers where CompanyName like "B%"';
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$data = array(22,34,12,45,65,32,65,89);

foreach ($data as $value) {
    
    if($value == 45)
        continue;
    
    print $value;
    print "<br>";
}


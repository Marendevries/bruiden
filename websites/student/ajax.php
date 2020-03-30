<?php


require('db.php');


$position = $_POST['position'];


$i=1;
foreach($position as $k=>$v){
    $sql = "Update wishes SET priority=".$i." WHERE list_id=".$v;
    $conn->query($sql);

    $i++;
}


?><?php

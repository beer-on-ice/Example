<?php
$t = isset($_GET['t']) ? $_GET['t']:'num';
$callback = isset($_GET['callback']) ? $_GET['callback']:'fn1';

$arr1 = array('111111','222222','33333','4444444','5555555');

$arr2 = array('aaaa','Bbbb','3Fff','4dsd','afg555');

if($t == 'num') {
    $data = json_encode($arr1);
} else {
    $data = json_encode($arr2);
}

echo $callback.'('.$data.');';


 ?>

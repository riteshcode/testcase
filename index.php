<?php
/* Case 1: reverse array */
$data = array(23,25,54,32);

for ($i=sizeof($data)-1; $i >= 0; $i--) { 
    echo $data[$i];
}
/* case 1 all test case pass. */

/* Case 2:  */

$arr = array (
    array(1,1,1,0,0,0),
    array(0,
    1,
    0,
    0,
    0,
    0),
    array(1,
    1,
    1,
    0,
    0,
    0),
    array(0,
    0,
    2,
    4,
    4,
    0),
    array(0,
    0,
    0,
    2,
    0,
    0),
    array(0,
    0,
    1,
    2,
    4,
    0)
  );




echo '<pre>';
// print_r($arr);

$n = sizeof($arr);
$n_1 = sizeof($arr[0]);

for ($i=0; $i < $n; $i++) { 
    for ($j=0; $j < $n_1; $j++) { 
        echo $arr[$i][$j].'<sup>'.$i.''.$j.'</sup>&nbsp;';
        
    }
    echo '<br>';
}

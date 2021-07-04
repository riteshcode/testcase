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
echo '<br/>';


for ($i=0; $i < $n; $i++) { 

    for ($j=0; $j < $n_1; $j++) {
        $to_show = $j+2;
        $end_j = ($to_show >= ($n_1-1) )?$n_1-1:$to_show;
        echo 'end_j: '.$end_j.'<br>';
        for ($k=$j; $k <= $end_j; $k++) { 
            for ($l=$j; $l <= $end_j ; $l++) { 
                // echo 'lk='.$l.''.$k.'';
                echo $arr[$k][$k].'&nbsp;';
            }
        }
        echo '<br>';
        if($end_j == ($n_1-1)){         // check all digit print than exit from j loop
            break;
        }
        
    }
    echo '<br>';

    // breaking digit to view in three matrics format

    
}













/*

1 1 1  1 1 0  1 0 0  0 0 0  
0 1 0  1 0 0  0 0 0  0 0 0  
1 1 1  1 1 0  1 0 0  0 0 0  
0 0 2  0 2 4  2 4 4  4 4 0  
0 0 0  0 0 2  0 2 0  2 0 0  
0 0 1  0 1 2  1 2 4  2 4 0  

this format code

for ($i=0; $i < $n; $i++) { 

    for ($j=0; $j < $n_1; $j++) {
        $to_show = $j+2;
        $end_j = ($to_show >= ($n_1-1) )?$n_1-1:$to_show;
     
        for ($k=$j; $k <= $end_j; $k++) { 
            echo $arr[$i][$k].'&nbsp;';
        }
        echo '&nbsp;';
        if($end_j == ($n_1-1)){         // check all digit print than exit from j loop
            break;
        }
        
    }
    echo '<br>';

    // breaking digit to view in three matrics format

    
}






*/




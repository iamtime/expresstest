<?php
/* 
// Input: l1 = [2,4,3], l2 = [5,6,4]
$l1 = [2,4,3];
$l2 = [5,6,4];
// Output: [7,0,8]

// Input: l1 = [0], l2 = [0]
$l1 = [0];
$l2 = [0];
// Output: [0]

// Input: l1 = [9,9,9,9,9,9,9], l2 = [9,9,9,9]
$l1 = [9,9,9,9,9,9,9];
$l2 = [9,9,9,9];
// Output: [8,9,9,9,0,0,0,1]

echo json_encode(calculate($l1,$l2));
 */
function calculate($arr1, $arr2) {
  $split1 = implode('',array_reverse($arr1));
  $split2 = implode('',array_reverse($arr2));
  $result = (string)$split1 + $split2;
  $split = str_split($result);
  $split = array_map('intval', $split);
  return array_reverse($split);
}
?>
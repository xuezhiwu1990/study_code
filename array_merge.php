<?php
/**
 * 合并数组函数实践
 * array_merge_recursive 合并字符串不是数值的数组 
 */

// key值都为字母时的情况

$arr_str_test_1 = [ 'abc' => array(1,2,3) ];
$arr_str_test_2 = [ 'abc' => array(4,5,6) ];
$merge = array_merge_recursive($arr_str_test_1,$arr_str_test_2);
print_r($merge);

/***
 Array
 (
	 [abc] => Array
	 (
		 [0] => 1
		 [1] => 2
		 [2] => 3
		 [3] => 4
		 [4] => 5
		 [5] => 6
	 )

 )

**/



$arr_str_int_1 = [ '111' => array(1,2,3) ];
$arr_str_int_2 = [ '111' => array(4,5,6)];
$merge = array_merge_recursive($arr_str_int_1,$arr_str_int_2);
print_r($merge);

/**
Array
(
	[0] => Array
	(
		[0] => 1
		[1] => 2
		[2] => 3
	)

	[1] => Array
	(
		[0] => 4
		[1] => 5
		[2] => 6
	)

)
 **/

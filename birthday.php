<?php
/**
 * php 计算两个日期的周岁算法，如不满减一
 * zhangyu 2018-11-29
 */

ini_set('date.timezone','Asia/Shanghai');


function getBirthday(){
	//年月日，依次对比
	$age = date("Y",$end_time) - date("Y",$start_time);

	$month_end = date("m",$end_time);
	$month_start = date("m",$start_time);
	$month_end = ltrim($month_end,0);
	$month_start = ltrim($month_start,0);

	if( $month_end < $month_start){
		$age--;
	}else if( (int)$month_end == (int)$month_end ){

		$day_start = date("d",$start_time);
		$day_end = date("d",$end_time);
		if($day_end < $day_start){
			$age--;
		}
	}
	return $age;
}
//调用函数
$end_time = strtotime('2019-9-26');
$start_time = strtotime('2001-9-27');
$age =	getBirthday($start_time,$end_time);
echo $age.PHP_EOL;

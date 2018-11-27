<?php
/**
 * str_replace 函数的用法
 * zhangyu 2018-11-27
 */
 
$str ="27-35 Turbot--- Street, Brisbane CBD, 4000 Brisbane";
$str = str_replace(array(',','-'),' ',$str);

echo $str.PHP_EOL;


<?php 
/**
 * php在字符串中提取汉字
 */
$str ="张小HANG 宇YU";
preg_match_all('/[\x{4e00}-\x{9fff}]+/u', $str, $titles);
echo '<pre>';print_r($titles);

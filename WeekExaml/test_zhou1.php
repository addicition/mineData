<?php
/**
 * @Author: Marte
 * @Date:   2018-11-05 08:44:49
 * @Last Modified by:   Marte
 * @Last Modified time: 2018-11-05 09:08:57
 */
header("content-type:text/html;charset=utf8");
function sum1(){
    $sum =0;
    for ($i=0; $i <=100 ; $i++) {
        $sum = $sum+$i;
    }
    return $sum;
}
function sum2($max,$sum){
    if ($max>0) {
        $sum = $sum+$max;
        $max = $max-1;
        return sum2($max,$sum);
    }
    return $sum;
}
function sum3($max,$sum){
    while ($max<=100) {
        $sum = $sum+$max;
        $max++;
    }
    return $sum;
}
// print_r(sum3(1,0));
function jiecheng($n){
    $sum = 1;
    for ($i=1; $i <= $n; $i++) {
        $sum = $sum*$i;
    }
    return $sum;
}
function jiecheng2($n,$sum){
    if ($n>0) {
        $sum = $sum*$n;
        $n=$n-1;
        return jiecheng2($n,$sum);
    }
    return $sum;
}
// print_r(jiecheng(4,1));
//判断是否为回文字符串
function huiwen($str){
    $len = strlen($str);
    for ($i=0; $i < $len/2; $i++) {
        if ($str[$i]!=$str[$len-$i-1]) {
            return "不是回文字符串";
        }
    }
    return "是回文字符串";
}
print_r(huiwen("qwewqewq"));
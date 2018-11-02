<?php
/**
 * @Author: Marte
 * @Date:   2018-11-02 13:12:16
 * @Last Modified by:   Marte
 * @Last Modified time: 2018-11-02 13:25:04
 */
function maopao($arr){
    $len = count($arr);
    for ($i=1; $i < $len; $i++) {
        for ($j=0; $j < $len-$i; $j++) {
            if ($arr[$j]>$arr[$j+1]) {
                $temp = $arr[$j];
                $arr[$j]=$arr[$j+1];
                $arr[$j+1]=$temp;
            }
        }
    }
    return $arr;
}

$arr = [1,3,2,8,6,7,9,5,4];
print_r(maopao($arr));
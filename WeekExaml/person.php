<?php
/**
 * @Author: Marte
 * @Date:   2018-11-05 09:12:09
 * @Last Modified by:   Marte
 * @Last Modified time: 2018-11-05 09:28:11
 */
class Person{
    public $name;
    public $age;
    function age(){
        $array=array(
                array(
                        "name"=>'李四','age'=>'123'
                    ),
                array(
                        "name"=>'张三','age'=>'23'
                    ),
                array(
                        "name"=>'赵柳','age'=>'13'
                    ),
                array(
                        "name"=>'王五','age'=>'12'
                    ),
            );
        return $array;
    }
}
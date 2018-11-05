<?php
/**
 * @Author: Marte
 * @Date:   2018-11-05 09:14:04
 * @Last Modified by:   Marte
 * @Last Modified time: 2018-11-05 09:33:12
 */
include 'person.php';
include 'walk.php';
class Student extends Person{
    function str(){
        echo "吴瑞宏";
    }
    function max(){
        $data = $this->age();
        $maxage = 1;
        // print_r($data);
        foreach ($data as $key => $value) {

            if ($value['age']>$maxage) {
                $maxage=$value['age'];
                // print_r($maxage);die;
            }
        }
        foreach ($data as $key => $value) {
            if ($value['age']==$maxage) {
                return $value['name'];
            }
        }
    }
}
$obj = new Student;
print_r($obj->max());
$obj1 = new Student;
$obj2  = new Student;
$obj3 = new Student;
$obj4 = new Student;
$obj5 = new Student;
$obj6 = new Student;
$obj7 = new Student;
<?php

//session_start();
//$param1 = $_GET["param1"];
//$param2 = $_GET["param2"];
//
//$res_add = $param1 + $param2;
//$data = array('p1' => $param1, 'p2' => $param2, 'res_add' => $res_add);
////$res_sub = $param1 - $param2;
////$data = array('p1' => $param1, 'p2' => $param2, 'res_sub' => $res_add);
//$jsonString = json_encode($data);
//echo $jsonString;
//echo "test";

//$data = array('p1'=>232, 'p2' => 243, 'res' => 345);
//
//$sum_data = 0;
//foreach($data as $key => $value){
//    $sum_data += $value;
//
////    echo $key.": ".$value."<br>";
//}
//
//echo $sum_data;
//echo "<br>";
//
//
//$arr = array(1,2,3,4,5,6,7,8,9);
//for ($i = 0; $i < count($arr); $i++) {
////    echo $arr[$i]."<br>";
//}
//
//$sum = 0;
//for ($i = 0; $i < count($arr); $i++) {
//    $sum = $sum+$arr[$i];
////    echo $arr[$i]."<br>";
//}
//echo $sum;
//
//$a = 23;
//$b = 34;
//$c = 12;
//
//if (($b > $a) and ($a > $c) and ($b< $c))
//    echo $a." ".$b." ".$c. "<br>";
//elseif (($a < $с) and ($b< $c))

/**
 *
 * Функции
 *
 */
// Задача 1
function kv_ch($a)
{
    return $a*$a;
}
echo "<br>";
print ("Число в квадрате:");
print (kv_ch(3));

// Задача 2
function max_ch($a=6, $b=2)
{
    if ($a > $b){
        echo "Число а больше числа б";
    }
    else{
        echo "Число б больше числа а";
    }
}
echo "<br>";
max_ch();

// Задача 3
$arr_1 = array(1,2,3,4,5,6,7,8,33);

//function max_el($arr_1)
//{
//    echo max($arr_1);
//}
//echo "<br>";
//print ("Максимальный элемент:");
//print(max_el($arr_1));

function max_el($arr_1)
{
    if (isset($arr_1)){
        $max_i = 0;
        for($i=0;$i<count($arr_1);$i++){

        }
    }
}

// Задача 4
function pl_kv ($a)
{
    return $a*$a;
}
echo "<br>";
print("Площадь квадрата:");
print (pl_kv(4));

// Задача 5
$arr = array('a1' => 1, 'a2' => 2, 'a3' => 3);
//function dlina_mas($arr)
//{
//    return count($arr);
//}
//echo "<br>";
//print ("Длина ассоциативного массива:");
//print (dlina_mas($arr));

function dl_mas($arr)
{
    if ()
}
?>
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
//
///**
// *
// * Функции
// *
// */
// Задача 1
//function kv_ch($a)
//{
//    return $a*$a;
//}
//echo "<br>";
//print ("Число в квадрате:");
//print (kv_ch(3));
//
//// Задача 2
//function max_ch($a=6, $b=2)
//{
//    if ($a > $b){
//        echo "Число а больше числа б";
//    }
//    else{
//        echo "Число б больше числа а";
//    }
//}
//echo "<br>";
//max_ch();
//
//// Задача 3
//$arr_1 = array(1,2,3,4,5,6,7,8,33);

//function max_el($arr_1)
//{
//    echo max($arr_1);
//}
//echo "<br>";
//print ("Максимальный элемент:");
//print(max_el($arr_1));

//function max_el($arr_1)
//{
//    if (isset($arr_1)){
//        $max_i = 0;
//        for($i=0;$i<count($arr_1);$i++){
//
//        }
//    }
//}

// Задача 4
//function pl_kv ($a)
//{
//    return $a*$a;
//}
//echo "<br>";
//print("Площадь квадрата:");
//print (pl_kv(4));

// Задача 5
//$arr = array('a1' => 1, 'a2' => 2, 'a3' => 3);
//function dlina_mas($arr)
//{
//    return count($arr);
//}
//echo "<br>";
//print ("Длина ассоциативного массива:");
//print (dlina_mas($arr));

//class Test{
//    public $a=4;
//    public $b=2;
//
//    public function sub() {
//        return $this->a - $this->b;
//    }
//
//    public function mul() {
//        return $this->a * $this->b;
//    }
//}
//
//$obj = new Test();
//print $obj->sub();
//echo "<br>";
//print $obj->mul();

// Класс со свойствами : ФИО,ВОЗРАСТ, ВЕС, РОСТ, МЕТОД ВЫЧЕСТЬ ИНДЕКС МАССЫ ТЕЛА

//class Person{
//    public $fam;
//    public $name;
//    public $ote;
//    public $age;
//    public $weight;
//    public $height;
//
//    public $ind_mas;
//
////    function __destruct(){
////        print "destruct";
////    } // Функция __destruct
//
//
//    function __construct($fam,$name,$ote,$age,$weight,$height){
//        $this->fam=$fam;
//        $this->name=$name;
//        $this->ote=$ote;
//        $this->age=$age;
//        $this->weight=$weight;
//        $this->height=$height;
//    } // Функция __construct
//
//    function index_mas(){
//        $h = $this->height/100;
//        $this->ind_mas= $this->weight/($h*$h);
//        print $this->ind_mas;
//    }
//
//
//} // Класс Person
//
//$obj = new Person("Иванов", "Иван", "Иванович", 23, 78, 179);
//print "Фамилия: ".$obj->fam."<br>";
//print "Имя: ".$obj->name."<br>";
//print "Отчество: ".$obj->ote."<br>";
//print "Возраст: ".$obj->age."<br>";
//print "Вес: ".$obj->weight."<br>";
//print "Рост: ".$obj->height."<br>";
//print "ИМТ:" .$obj->ind_mas."<br>";

//class Circle {
//    public $r;
//    const pi=3.14;
//
//    function __construct($r) {
//        $this->r = $r;
//    }
//
//    function pl_circle() {
//        return self::pi*($this->r * $this->r);
//    }
//}
//$obj = new Circle(4);
//print_r("Площадь круга:".$obj->pl_circle());


// class People{
//     public $name; // Имя
//     public $town; // Поселение
//     public $xp; // Хп
//     public $damage; //Урон


//     function __construct($name, $town, $damage)
//     {
//         $this->name = $name;
//         $this->town = $town;
//         $this->xp = 100;
//         $this->damage = rand(0,20);
//     }

//     function damage_voin($xp, $damage) //Урон воина
//     {

//     }
// }


// class Zhitel extends People{
//     function __construct($name, $town)
//     {
//         $this->name = $name;
//         $this->town = $town;
//         $this->xp = 100;
//     }
// } //Zhitel

// class Voin extends People{

//     function __construct($name, $town)
//     {
//         $this->name = $name;
//         $this->town = $town;
//         $this->xp = 100;
//     }

// } //Voin

// class Doctor extends People{
//     public $hilks; //Хилка, лечение

//     function __construct($name, $town, $hilks)
//     {
//         $this->name = $name;
//         $this->town = $town;
//         $this->xp = 100;
//         $this->hilks = $hilks;
//     }

// } //Doctor

// $zh_1 = new Zhitel("Боб", "Суманара");
// $zh_2 = new Zhitel("Тод", "Анара")



//Взаимодействие с front

if($_GET !== null) {

        $host = '127.0.0.1';
        $db = 'test1';
        $user = 'root';
        $pass = '';
        $charset = 'utf8';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        // Получение объекта PDO
        $pdo = new PDO($dsn, $user, $pass, $opt);


        $nickname = htmlspecialchars($_GET['nickname']);
        $pass = htmlspecialchars($_GET['pass']);

    $stmt = $pdo->prepare("INSERT INTO regbasa (nickname, pass) VALUES(?, ?)");
    $stmt->bindParam(1, $nickname);
    $stmt->bindParam(2, $pass);
    $stmt->execute();

    }else{
        return false;
        }


// try {
//     $host = '127.0.0.1';
//     $db = 'game';
//     $user = 'root';
//     $pass = '';
//     $charset = 'utf8';

//     $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
//     $opt = [
//         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//         PDO::ATTR_EMULATE_PREPARES => false,
//     ];
//     // Получение объекта PDO
//     $pdo = new PDO($dsn, $user, $pass, $opt);
//     var_dump($pdo);
//     echo "<br/>";

//     // Получение данных из таблицы student по полю name
//     $stmt = $pdo->query('SELECT * FROM characters');
//     var_dump($stmt);
//     echo "<br/>";
//     while ($row = $stmt->fetch()) {
//         echo $row['id'] . " " . $row['name_character'];
//         echo "<br/>";
//     }

//    INSERT
//
//    $name_character = 'Tom';
//
//    $stmt = $pdo->prepare("INSERT INTO characters(name_character) VALUES(?)");
//    $stmt->bindParam(1, $name_character);
//    $stmt->execute();
//
//    1.DELETE
//
//    $stmt = $pdo->exec('DELETE FROM characters WHERE id = 9');
//
//    2.UPDATE
//
//    $stmt = $pdo->prepare("UPDATE `characters` SET `name_character` = :name_character WHERE `id` = :id");
//    $stmt->execute(array('name_character' => 'Tom', 'id' => 7));


    //3.Вытащить промежуточную таблицу

//    $stmt = $pdo->query('SELECT characters.name_character, game_n.name_game FROM characters JOIN ');



} catch (PDOException $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}




?>




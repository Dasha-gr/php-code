<?php

include_once "pdo.php";
$db = new DB();
$pdo = $db->connect();

if($_GET !== null){

        // Получение данных из таблицы regbasa1 по полю nickname
        $id = intval($_GET['id']);
        $stmt = $pdo->prepare("SELECT nickname FROM regbasa1 WHERE id=?");
        $stmt->bindParam(1, $id);
        $stmt->execute();


    $results = $stmt->fetchAll();
    print_r($results);
//    $result = json_encode($results);
//    echo $result;
}else{
    return false;
}
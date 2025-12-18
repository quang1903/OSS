<?php
    try{
        $pdo = new PDO("mysql:host=sql309.infinityfree.com; dbname=oss", "if0_40701327", "1234567890Ghjkl");
        $pdo->query("set names utf8");
    }catch(Exception $e){
        echo $e->getMessage();
        exit();
    }
?>


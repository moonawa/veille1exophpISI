<?php
function getConnection(){
    $host = "localhost";
    $dbname = "veille1";
    $user = "flower";
    $password ="Awa@771301409";
     
    $dsn ="mysql:host=$host;dbname=$dbname";
    try{
        $db = new PDO( $dsn, $user, $password);
    }catch(PDOException $ex){
        die('Error: '.$ex->getMessage());
    }
    return $db;
}
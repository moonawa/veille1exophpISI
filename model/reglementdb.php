<?php
require_once 'db.php';

function addReglement($date, $idF){
    $sql = "INSERT INTO reglement(idR, date, idF) VALUES(NULL, '$date', $idF)";   
    $conn = getConnection();
    return $conn->exec($sql);
}
function listeReglement(){
    
    $sql = "SELECT * FROM reglement";    
    $conn = getConnection();
    return $conn->query($sql);
}
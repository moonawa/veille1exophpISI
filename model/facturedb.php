<?php
require_once 'db.php';

function addFacture($date, $prix, $consommation, $paiement){
    $paiement = 0;
    $sql = "INSERT INTO facture(idF, date, prix, consommation, paiement) VALUES(NULL, '$date', $prix, $consommation, $paiement)";
    $conn = getConnection();
    return $conn->exec($sql);
}
function updateFacture($idF){
    $sql = "UPDATE facture SET paiement = 1 WHERE idf = $idF";
    $conn = getConnection();
    return $conn->exec($sql);
}
function listeFacture(){
    $sql = "SELECT * FROM facture";    
    $conn = getConnection();
    return $conn->query($sql);
}
function listeFactureNonRegele(){
    $sql = "SELECT * FROM facture WHERE paiement = 0";    
    $conn = getConnection();
    return $conn->query($sql);
}
function listeFactureRegele(){
    $sql = "SELECT * FROM facture WHERE paiement = 1";    
    $conn = getConnection();
    return $conn->query($sql);
}
<?php
require_once '../model/facturedb.php';

extract($_POST);
//$date = $_POST['date'];
//prix = $_POST['prix'];
//$consommation = $_POST['consommation'];
$result = addFacture($date, $prix, $consommation, 0);
header("location:facture");


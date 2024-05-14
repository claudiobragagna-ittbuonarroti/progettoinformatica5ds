<?php
session_start();
$servername = "localhost";
$username = "root";
$db_password = ""; 
$dbname = "claudionoleggio";
$auto = $_POST["macchina"];
$cf = $_SESSION["cf"];
$inizio = $_POST["dataInizio"];
$fine = $_POST["dataFine"];

$_SESSION["nomeAuto"] = $auto;
$_SESSION["inizio"] = $inizio;
$_SESSION["fine"] = $fine;

$timestamp1 = strtotime($inizio);
$timestamp2 = strtotime($fine);
$difference = abs($timestamp2 - $timestamp1); 
$days_difference = floor($difference / (60 * 60 * 24)); 
$costo = 9*$days_difference;
$db_con = mysqli_connect("localhost", "root", "", $dbname);
$query = "INSERT INTO `noleggio`(`CF`, `IdAuto`, `DataInizio`, `DataFine`, `Prezzo`) VALUES ( '$cf',(SELECT IdAuto FROM auto WHERE Nome = '$auto' ),'$inizio','$fine','$costo')";
$result = mysqli_query($db_con, $query);
header("Location: ../../shop.php");
?>
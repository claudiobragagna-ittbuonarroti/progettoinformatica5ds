<?php
$servername = "localhost";
$username = "root";
$password = ""; // Assicurati che la password sia vuota se non ne hai una
$dbname = "claudionoleggio";

// Recupera i valori inviati tramite il metodo POST


$db_con = mysqli_connect($servername, $username, $password, $dbname);
if ($db_con) {
    
    echo("utente registrato correttamente");
    echo("<br>");
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $username = $_POST["username"];
    $cff = $_POST["cff"];
    $password = $_POST["psw"];
    $email = $_POST["email"];
    echo("nome: ". $nome );
    echo("<br>");
    echo("cognome: ".$cognome);
    echo("<br>");
    echo("cff: ".$cff);
    echo("<br>");
    echo ("password: ".$password);
    echo("<br>");
    echo ("email: ".$email);
    mysqli_query(
        $db_con, "INSERT INTO `utente`(`CF`, `Username`, `Nome`, `Cognome`,  `Email`, `PSW`) VALUES ('$cff','$username', '$nome','$cognome', '$email','$password')"
    );

};
?>


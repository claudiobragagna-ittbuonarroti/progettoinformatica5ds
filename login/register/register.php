<?php
$servername = "localhost";
$username = "root";
$password = ""; // Assicurati che la password sia vuota se non ne hai una
$dbname = "noleggioClaudio";

// Recupera i valori inviati tramite il metodo POST
$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$email = $_POST["email"];
$user_password = $_POST["pass"]; // In questo caso, si è assunto che il campo della password si chiami "password"

// Connessione al database
$db_con = mysqli_connect($servername, $username, $password, $dbname);

// Query SQL per inserire i dati dell'utente nel database
$query = "INSERT INTO utente (nome, cognome, email, password) VALUES ('$nome', '$cognome', '$email', '$user_password')";

// Esegui la query
if (mysqli_query($db_con, $query)) {
    header("Location: ../../index.html");
} else {
    echo "Errore";
}
// Chiudi la connessione al database
mysqli_close($db_con);
?>

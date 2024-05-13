<?php

$servername = "localhost";
$username = "root";
$db_password = ""; 
$dbname = "noleggioClaudio";
$email = $_POST["email"];
$user_password = $_POST["pass"]; 

$db_con = mysqli_connect($servername, $username, $db_password, $dbname);
$query = "SELECT * FROM utente WHERE email='$email' AND password='$user_password'"; 
$result= mysqli_query($db_con, $query);
$row = mysqli_fetch_assoc($result);
if ($result->num_rows == 1) {
    header("Location: ../../index.html");
} else {
    echo "Username o password non validi.";
}
$db_con->close();
?>

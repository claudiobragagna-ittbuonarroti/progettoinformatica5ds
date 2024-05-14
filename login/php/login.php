<?php
session_start();
$servername = "localhost";
$username = "root";
$db_password = ""; 
$dbname = "claudionoleggio";
$email = $_POST["email"];
$password = $_POST["psw"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connessione al database
    $db_con = mysqli_connect("localhost", "root", "", $dbname);

    // Controllo la connessione al database
    if ($db_con) {
        // Controllo i campi della form
       
            echo($email . "<br>");
            echo($password);


            $result = mysqli_query($db_con, "SELECT * FROM utente WHERE Email='$email' AND PSW='$password'");
            
            $user = mysqli_fetch_assoc($result);

            $_SESSION["username"] = $user["Username"];
            $_SESSION["cf"] = $user["CF"];
            echo($user['PSW']);

             if ($user && $password == $user['PSW'] ) {
        
                header("Location:../../index.html");

                } else {
                 echo "Credenziali non valide.";
    }
    }
          
    
                
            
        }
    


$db_con->close();
?>

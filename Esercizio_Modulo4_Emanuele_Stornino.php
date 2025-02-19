<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pareggio</title>
</head>
    <!-- EMANUELE STORNINO_ESERCIZIO MODULO 4 -->

<body>
    <?php
    // Esercizio 1
    echo "<p>1. Stampare tutti i numeri pari da 1 a 10</p>";
    for ($i = 2; $i <= 10; $i += 2) {
        echo "<h1>" . $i . "</h1>";
    }

    echo "<hr>";

    // Esercizio 2
    echo "<p>2. Creare un codice per stampare la tabellina del 5</p>";
    for ($i = 1; $i <= 10; $i++) {
        $risultato = 5 * $i;
        echo "<h1>" . $risultato . "</h1>";
    }

    echo "<hr>";

    // Esercizio 3
    echo "<p>3. Creare un form di login e verificare che i dati inseriti siano compatibili con gli stessi dati inseriti in un array</p>";
    
    // Array con i dati corretti per più utenti
    $utenti = [
        ["username" => "Emanuele", "password" => "0321"],
        ["username" => "Luigi", "password" => "4567"],
        ["username" => "Anna", "password" => "abcd"]
    ];

    // Verifica se i dati sono stati inviati tramite POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recupera i dati inviati dal form
        $username_inserito = $_POST['username'];
        $password_inserita = $_POST['password'];

        // Flag per il login riuscito
        $login_success = false;

        // Confronta i dati inseriti con quelli nell'array degli utenti
        foreach ($utenti as $utente) {
            if ($username_inserito == $utente['username'] && $password_inserita == $utente['password']) {
                $login_success = true;
                break;  // Esce dal ciclo se i dati sono corretti
            }
        }

        // Messaggio di login
        if ($login_success) {
            echo "<h1>Login effettuato con successo!</h1>";
        } else {
            echo "<h1>Username o password errati!</h1>";
        }
    }
    ?>

    <!-- Form di login -->
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Accedi">
    </form>
</body>
</html>

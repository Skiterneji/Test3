<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EserciziMod5</title>
</head>
    <!-- EMANUELE STORNINO_ESERCIZI MODULO 4 -->

<body>
    <?php
    // Esercizio 1: Numeri pari da 1 a 10
    echo "<p>1. Stampare tutti i numeri pari da 1 a 10.</p>";
    for ($i = 2; $i <= 10; $i += 2) {
        echo "$i ";
    }
    echo "<hr>";

    // Esercizio 2: Tabellina del 5
    echo "<p>2. Creare un codice per stampare la tabellina del 5.</p>";
    for ($i = 1; $i <= 10; $i++) {
        echo "5 × $i = " . (5 * $i) . "<br>";
    }
    echo "<hr>";

    // Esercizio 3: Login
    echo "<p>3. Creare un form di login e verificare che i dati inseriti siano compatibili con un array.</p>";

    // Array con i dati utenti
    $utenti = [
        ["username" => "Emanuele", "password" => "0321"],
        ["username" => "Peppina", "password" => "4567"],
        ["username" => "Giovannino", "password" => "abcd"]
    ];

    // Verifica login
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username_inser = $_POST['username'];
        $password_inser = $_POST['password'];
        $login_success = false;

        foreach ($utenti as $utente) {
            if ($username_inser == $utente['username'] && $password_inser == $utente['password']) {
                $login_success = true;
                break;
            }
        }

        echo $login_success ? "<h1>Login effettuato con successo!</h1>" : "<h1>Username o password errati!</h1>";
    }
    ?>

    <!-- Form di login -->
    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Accedi">
    </form>

</body>
</html>

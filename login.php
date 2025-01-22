<?php
/* 
simulare il processo di login, senza utilizzo di un database ma utilizzando i cookies.
1) Form con email e password e un campo submit.
2) Quando viene cliccato il submit, il risultato viene inviato ad una pagina php.
3) Lato php, controlliamo che username e password non siano vuoti, in tal caso stampiamo un messaggio di errore
4) Verifichiamo i dati ricevuti, se corrispondono o meno a dati presenti in questi array:
    $persona1 = array("marco@email.it","12345","Marco","Rossi");
    $persona2 = array("luigi@email.it","abcdef","Luigi","Bianchi");
    $persona3 = array("luca@email.it","123abc","Luca","Verdi");
    Dopodichè stamperemo "Bentornato " + nome e cognome e salveremo il cookie per ogni accesso successivo.
5) Se l'utente è loggato, mostreremo un pulsante "Disconnetti" che andrà ad eliminare il cookie.

Es 1:
l'utente inserisce questi valori:
email = luigi@email.it, password = abcdef.
La pagina mostrerà "Bentornato Luigi Bianchi" e creerà il cookie.

Es 2:
l'utente inserisce questi valori:
email = marco@email.it, password = abcdef. (NOTA CHE LA PASSWORD e' SBAGLIATA!)
La pagina mostrerà "Utente o password non validi".


*/


// Dati predefiniti
$persona1 = array("marco@email.it", "12345", "Marco", "Rossi");
$persona2 = array("luigi@email.it", "abcdef", "Luigi", "Bianchi");
$persona3 = array("luca@email.it", "123abc", "Luca", "Verdi");

// Gestione del logout
if (isset($_POST['logout'])) {
    // Elimina i cookie
    setcookie('logged_in', '', time() - 3600, '/');
    setcookie('nome', '', time() - 3600, '/');
    setcookie('cognome', '', time() - 3600, '/');
    // Ricaricare il form di login
    header('Location: ' .$_SERVER['PHP_SELF']);
    exit;
}

// Verifica se l'utente è già loggato
if (isset($_COOKIE['logged_in']) && $_COOKIE['logged_in'] == 'true') {
    // Messaggio di benvenuto e il pulsante di logout
    echo "<h1>Bentornato, " .$_COOKIE['nome']. " " .$_COOKIE['cognome']. "!</h1>";
    echo '<form method="POST"><button type="submit" name="logout">Disconnetti</button></form>';
    exit;
}

// Gestione del login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Controlla se i dati sono corretti
    $users = [$persona1, $persona2, $persona3];

    foreach ($users as $user) {
        if ($user[0] == $email && $user[1] == $password) {
            // Login valido, salva i cookie
            setcookie('logged_in', 'true', time() + 3600, '/');
            setcookie('nome', $user[2], time() + 3600, '/');
            setcookie('cognome', $user[3], time() + 3600, '/');
            // Redirigi per caricare il messaggio di benvenuto
            header('Location: '.$_SERVER['PHP_SELF']);
            exit;
        }
    }

    // Se le credenziali non sono corrette
    echo "<p style='color:red;'>Utente o password non validi!</p>";
}

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h1>Login</h1>

    <?php if (!isset($_COOKIE['logged_in']) || $_COOKIE['logged_in'] != 'true'): ?>
        <!-- Form di login -->
        <form method="POST">
            <label for="email">Email:</label>
            <input type="email" name="email" required><br><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>

            <button type="submit" name="submit">Accedi</button>
        </form>
    <?php endif; ?>
</body>
</html>

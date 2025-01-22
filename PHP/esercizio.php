<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pareggio</title>
</head>
<body>
    <?php

// Stampa la tabellina del 5 con solo numeri pari
for ($i=1; $i<=10; $i++) {
    $risultato = 5*$i;
    
    // Verifica se il risultato è pari
    if ($risultato % 2==0) {
        echo "<h1>".$risultato."</h1>";
    }
}



// Funzione con parametri opzionali
function moltiplix ($x=4,$y=5) {
    return $x*$y;
}
    echo "Moltiplicazione: ".moltiplix(2,7,8). "<br>";



//Form con campo nome e cognome abbinato a form.html
if ($_POST['nome'] == "")
    echo "Campo                                                                    nome è vuoto.";
else
    echo "campo corretto!";

echo "<br>Il nome è ".$_POST['nome']." e il cognome è ".$_POST['cognome'];


    ?>
</body>
</html>
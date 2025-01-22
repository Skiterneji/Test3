<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <?php
    
    // prima parte di codice
$name = "Naruto";
$surname = "Uzumaki";
$age = 11;

echo "Ciao sono ".$name." ".$surname." e ho ".$age." anni!";
echo "<br>";

if ($age>=18) {
    echo "<h1>Sei maggiorenne!</h1>";
}else {
    echo "<h1>Mi dispiace non puoi proseguire!</h1>";
}

// Si aggiunge un booleano
$isStudent = true;

if ($isStudent) {
    echo "Studente";
}else {
    echo "Non studente";
}

echo "<br>";

// Si aggiunge un ciclo while con un countdown
echo "<br> Ciclo while in azione: <br>";
$count = 5;
while ($count > 0){
    echo "Conto alla rovescia: ".$count." <br>";
    $count--;
}

echo "<br>";

//Si aggunge un ciclo for
echo "Ciclo for <br>";
for ($i=1;$i<5;$i++){
    echo "Numero: ".$i." <br>";
}

echo "<br>";

//Si aggiunge foreach da usare con array
echo "Ciclo foreach <br>";
$fruits = ["Mela","Melone","Pera","Prugna"];
foreach ($fruits as $fruit){
    echo "Frutto: ".$fruit."<br>";
}


echo "<br>";


// Inizia la tabella con bordo
echo "<table border='1' style='border-collapse: collapse;'>";  

// Ciclo per le righe (10 righe)
for ($riga=1;$riga<=10;$riga++) {
    echo "<tr>";  // Inizia una nuova riga

    // Ciclo per le colonne (10 colonne)
    for ($colonna=1;$colonna<=10;$colonna++) {
        $prodotto=$riga * $colonna;  // Calcola il prodotto della riga per la colonna
        echo "<td style='padding: 10px;'>$prodotto</td>";  // Crea una cella con il risultato della moltiplicazione
    }
    echo "</tr>";  // Fine della riga
}

echo "</table>";  // Fine della tabella


?>

</body>
</html>
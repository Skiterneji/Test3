// La stringa JSON che vogliamo parsare
const jsonString = '{"paese": "Italia", "capitale": "Roma", "popolazione": 65165464, "area_km2": 299754}';

// Parsing della stringa JSON in un oggetto JavaScript
const paese = JSON.parse(jsonString);

// Ora possiamo accedere ai valori come se fosse un oggetto normale
console.log(paese.paese);      
console.log(paese.capitale);   
console.log(paese.popolazione); 
console.log(paese.area_km2);  

// Aggiungere nuovi campi all'oggetto
paese.telefono = "+396666666666";
paese.email = "romacapitale@email.com";
paese.indirizzo = "Via Taranto 12, Roma, Italia";

// Ora possiamo serializzare nuovamente l'oggetto in una stringa JSON aggiornata
let updatedJsonString = JSON.stringify(paese, null, 2); // usa 'let' invece di 'const' per poterla riassegnare

// Mostra il JSON aggiornato
console.log(updatedJsonString);

// Mostra l'oggetto prima di rimuovere i campi
console.log("Prima della rimozione:", paese);

// Rimuovere i campi 'telefono' e 'indirizzo'
delete paese.telefono;
delete paese.indirizzo;

// Mostra l'oggetto dopo aver rimosso i campi
console.log("Dopo la rimozione:", paese);

// Serializzare l'oggetto aggiornato in una stringa JSON
updatedJsonString = JSON.stringify(paese, null, 2);

// Mostra il JSON aggiornato
console.log(updatedJsonString);

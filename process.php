<?php
// Connessione al database
$db = new SQLite3('aeroportodb.sqlite');

// Creazione della tabella (se non esiste già)
$query = "CREATE TABLE IF NOT EXISTS voli (
    id_aereo TEXT PRIMARY KEY,
    orario_partenza TEXT NOT NULL,
    ora_arrivo TEXT NOT NULL,
    compagnia_aerea TEXT NOT NULL,
    numero_passeggeri INTEGER NOT NULL
)";
$db->exec($query);
?>
<?php
// Funzione per creare la tabella
function creaTabellaVoli($db) {
    $query = "CREATE TABLE IF NOT EXISTS voli (
        id_aereo TEXT PRIMARY KEY,
        orario_partenza TEXT NOT NULL,
        ora_arrivo TEXT NOT NULL,
        compagnia_aerea TEXT NOT NULL,
        numero_passeggeri INTEGER NOT NULL
    )";
    $db->exec($query);
}

// Connessione al database
$db = new SQLite3('aeroportodb.sqlite');
creaTabellaVoli($db);
?>
<?php
if (file_exists('aeroportodb.sqlite')) {
    echo "Il database esiste!";
} else {
    echo "Il database non esiste. Creandolo...";
    $db = new SQLite3('aeroportodb.sqlite');
}
?>
<?php
try {
    // Connessione al database SQLite
    $db = new SQLite3('aeroportodb.sqlite');

    // Creazione della tabella 'voli'
    $query = "CREATE TABLE IF NOT EXISTS voli (
        id_aereo TEXT PRIMARY KEY,
        orario_partenza TEXT NOT NULL,
        ora_arrivo TEXT NOT NULL,
        compagnia_aerea TEXT NOT NULL,
        numero_passeggeri INTEGER NOT NULL
    )";

    // Esecuzione della query
    $query="SELECT * FROM voli;"
    
    $db->exec($query);
} catch (Exception $e) {
    // Stampa l'errore se c'è un problema
    echo "Errore durante la creazione della tabella: " . $e->getMessage();
}
?>


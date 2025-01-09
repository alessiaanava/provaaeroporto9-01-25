<?php

// Specifica il percorso del database SQLite
$databasePath = 'aeroportodb.sqlite';

try {
    // Crea una connessione PDO al database SQLite
    $pdo = new PDO("sqlite:" . $databasePath);

    // Imposta la modalità di errore per PDO a Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connessione al database riuscita!";

    // Esempio di query per testare la connessione
    $query = "SELECT name FROM voli LIMIT 5";
    $stmt = $pdo->query($query);

    // Stampa i risultati della query
    foreach ($stmt as $row) {
        echo "<p>Nome aeroporto: " . htmlspecialchars($row['name']) . "</p>";
    }

} catch (PDOException $e) {
    // Gestione degli errori
    echo "Errore di connessione al database: " . $e->getMessage();
}

?>

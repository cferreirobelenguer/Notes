<?php

require(__DIR__ . "../../database/databaseconnect.php");

function save($title, $content) {
    //save data notes
    try {
        $pdo = connection();
        $stmt = $pdo->prepare ("INSERT INTO notes (title, content) VALUES (?, ?, ?)");
        $stmt->bindParam(1, $title);
        $stmt->bindParam(2, $content);
        $stmt->execute();
    
    
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        die();
    }
}

// esto iría donde se llave esa función
//if ($_SERVER["REQUEST_METHOD"] === "POST") {
//     $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $content = filter_var($_POST['content'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     save($title, $content);
// }  

function getNotes() {
    // get data
    try {
        $pdo = connection();
        $sql = "SELECT * FROM notes";
        $stmt = $pdo->query($sql);
        
        $notes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // close conection
        $pdo = null;
        return $notes;
    } catch (PDOException $e) {
        // error
        echo "Error: " . $e->getMessage();
        die();
    }
}

?>
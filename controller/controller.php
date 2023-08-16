<?php

require(__DIR__ . "../../database/databaseconnect.php");

function save($title, $content) {
    //save data notes
    try {
        $pdo = connection();
        $stmt = $pdo->prepare ("INSERT INTO notes (title, content) VALUES (?, ?)");
        $stmt->bindParam(1, $title);
        $stmt->bindParam(2, $content);
        $stmt->execute();
    
    
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        die();
    }
}

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

function deleteNote($id) {
    try {
        $pdo = connection();
        $stmt = $pdo->prepare ("DELETE FROM notes WHERE id = ?");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        Header("Location: ../index.php");

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        die();
    }

}

?>
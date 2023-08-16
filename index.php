<?php
    require(__DIR__ . "../../proyectnotes/controller/controller.php");
    $notes = getNotes();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="./index.css" />
</head>
<body>
    <section class="note-container">
        <h1 class="note-container-title">Notes</h1>
        <?php foreach ($notes as $row) : ?>
            <div class="note-container-item">
                <p><?= $row['title'] ?></p>
                <p><?= $row['content'] ?></p>
                <div class="note-container-link">
                    <a href="#" class="link">Update note</a>
                    <a href="#"  class="link">Delete note</a>
                </div>
                
            </div>
        <?php endforeach; ?>
    </section>
</body>
</html>
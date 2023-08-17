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
    <link rel="stylesheet" type="text/css" href="./assets/index.css" />
</head>
<body>
    <header>
        <nav class="header-container">
            <a href="./index.php" class="header-link">Home</a>
            <a href="./views/create.php" class="header-link">Create new</a>
        </nav>
    </header>
    <main class="note-container">
        <h1 class="note-container-title">Notes</h1>
        <div class="note-notes">
            <?php foreach ($notes as $row) : ?>
                <div class="note-container-item">
                    <p><?= $row['title'] ?></p>
                    <p><?= $row['content'] ?></p>
                    <div class="note-container-link">
                        <a href="./views/update.php?id=<?= urlencode($row['id']) ?>"  class="link">Update</a>
                        <a href="./views/delete.php?id=<?= $row['id'] ?>"  class="link">Delete</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>
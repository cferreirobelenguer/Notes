
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../assets/index.css" />
</head>
<body>
    <header>
        <nav class="header-container">
            <a href="../index.php" class="header-link">Home</a>
            <a href="./create.php" class="header-link">Create</a>
        </nav>
    </header>
    <main class="note-container">
        <h1 class="note-container-title">Notes</h1>
        <div>
            <form name="save" method="post" action="../index.php" class="note-form">
                <input type="text" placeholder="Enter title" class="note-input" name="title"></input>
                <textarea cols="20" rows="10" placeholder="Enter content" class="note-input" name="content"></textarea>
                <input type="submit" value="Save note" class="link"></input>
            </form>
        </div>
    </main>
    <footer class="footer-content">
        <nav class="footer-container">
            <a href="./index.php" class="footer-link">Home</a>
            <a href="./views/create.php" class="footer-link">Create new note</a>
        </nav>
    </footer>
</body>
</html>
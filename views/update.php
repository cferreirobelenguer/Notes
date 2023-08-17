<?php
require_once '../controller/controller.php';
    

    function updateNoteId () {
        
        if (isset($_GET['id'])) {
            global $id;
            $id= intval($_GET['id']);
            //Gets the value of the input, before the change
            $note = getNote($id);
            if ($note) {
                global $titleNote;
                global $contentNote;
                $titleNote = $note['title'];
                $titleGlobal['title'] =$note['title'];
                $contentNote = $note['content'];
            }
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                //update data
                $title = filter_var($_POST['title']);
                $content = filter_var($_POST['content']);
                print_r("title: ",$title);
                print_r("content ",$title);
                update($title, $content, $id);
                Header("Location: ../index.php");
            }
        }  
    }

    updateNoteId();

?>
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
        <div class="note-header">
            <a href="../index.php" class="link-create"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="20" viewBox="0 0 12 20" fill="none">
            <path d="M10 2L2 10L10 18" stroke="#37352F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
            </svg></a>
            <h1 class="note-container-titlecreate">Update</h1>
        </div>
        
        <div>
            <form name="save" method="post" action="./update.php?id=<?= $id ?>" class="note-form">
                <input type="text" placeholder="Enter title" class="note-input" name="title" value="<?= $titleNote?>">
                <textarea cols="20" rows="10" placeholder="Enter content" class="note-input" name="content"><?= $contentNote?></textarea>
                <input type="submit" value="Save" class="link">
            </form>
        </div>
    </main>
</body>
</html>
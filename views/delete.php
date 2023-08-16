<?php

require(__DIR__ . "../../controller/controller.php");

//The id is checked if it exists, it is stored in a variable and the delete function is called
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = intval($_GET['id']);
        deleteNote($id);
    }


?>
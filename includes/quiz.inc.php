<?php
    require_once('crud.inc.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $userId = $_POST['userId'];
        $chapter = $_POST['chapter'];
        $result = $_POST['score'];

        $userId = intval($userId); // Convert to integer
        $chapter = intval($chapter); // Convert to integer
        $result = intval($result); // Convert to integer
        
        $sql = "INSERT INTO quiz_result (userId, chapter, result) VALUES ($userId, $chapter, $result)";
        createData($sql);
    }
?>
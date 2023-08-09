<?php
    require_once('crud.inc.php');

    if(isset($_POST['userId']) && isset($_POST['chapter']) && isset($_POST['number'])){
        $userId = $_POST['userId'];
        $chapter = $_POST['chapter'];
        $number = $_POST['number'];

        $userId = intval($userId); // Convert to integer
        $chapter = intval($chapter); // Convert to integer
        $number = intval($number); // Convert to integer
        
        $sql = "INSERT INTO user_progress (userId, chapter, chapNum) VALUES ($userId, $chapter, $number)";
        createData($sql);
    }

    if(isset($_GET['userId']) && isset($_GET['chapter']) && isset($_GET['number'])){
        $userId = $_GET['userId'];
        $chapter = $_GET['chapter'];
        $number = $_GET['number'];

        $userId = intval($userId); // Convert to integer
        $chapter = intval($chapter); // Convert to integer
        $number = intval($number); // Convert to integer

        $sql = "SELECT * FROM user_progress WHERE userId = $userId AND chapter = $chapter AND chapNum = $number";
        selectDataWithQuery($sql);
    }

    if(isset($_GET['userId']) && isset($_GET['data'])){
        $userId = $_GET['userId'];
        $data = $_GET['data'];

        if($data == 'chapter'){
            $sql = "SELECT * FROM user_progress WHERE userId = $userId";
        } else if($data == 'quiz'){
            $sql = "SELECT * FROM quiz_result WHERE userId = $userId";
        }
        selectDataWithQuery($sql);
    }

?>
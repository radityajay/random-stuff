<?php
    $BASE_URL = $_SERVER['DOCUMENT_ROOT'] . "/random-stuff";

    require_once $BASE_URL . "/libraries/Database.php";
    require_once $BASE_URL . "/libraries/Model.php";
    require_once $BASE_URL . "/helper/Alert.php";
    require_once $BASE_URL . "/helper/Random.php";

    date_default_timezone_set('Asia/Makassar');
    session_start();
    
?>
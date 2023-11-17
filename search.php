<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    spl_autoload_register(function ($classname) {
        include "$classname.php";
    });

    $st = $_GET["searchTerm"];

    $db = new Database();
    $res = $db->query("SELECT * FROM posts WHERE title ILIKE '%$st%';");

    if ($res) {
        echo json_encode($res);
    }
    else{
        echo json_encode("Didn't find any results");
    }


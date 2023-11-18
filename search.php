<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    spl_autoload_register(function ($classname) {
        include "$classname.php";
    });

    if(isset($_GET["searchTerm"])){
        $st = $_GET["searchTerm"];

        $db = new Database();
        $res = $db->query("SELECT * FROM posts WHERE title ILIKE '%$st%';");

        if ($res) {
            echo json_encode($res);
        }
        else{
            echo json_encode("Didn't find any results");
        }
    }
    if(isset($_GET["searchJoin"])){
        $st = $_GET["searchJoin"];
        $se = $_GET["searchEmail"];

        $db = new Database();
        $ifjoined = $this->db->query("select * from userjoined where email = $1 and title = $2;"
            , $se, $st);
        if(empty($ifjoined)) {
            $this->db->query("insert into userjoined (email, title) 
                            values ($1, $2);"
                , $se, $st);
            $tmpPar = $this->db->query("select * from posts where title = $1;", $st)[0]["parnum"];
            if ($tmpPar >= 1) {
//                    echo $tmpPar;
                $tmpPar = $tmpPar - 1;
                $this->db->query("update posts set parnum = $1 where title = $2;", $tmpPar, $st);
            }
            else {
                $message = "<div class=\"alert alert-danger \" role=\"alert\">
                                 The post has reached upper limit for participants 
                                 </div>";

            }
        }
        else{
            $message = "<div class=\"alert alert-danger \" role=\"alert\">
                                 You have already joined this post 
                                 </div>";
        }

        echo json_encode($message);
    }



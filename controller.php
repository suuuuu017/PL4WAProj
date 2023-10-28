<?php


class controller {
    public function __construct($input){
        session_start();
    }

    public function run() {
        // Get the command
        $command = "welcome";
        if (isset($this->input["command"]))
            $command = $this->input["command"];

        switch($command) {
            case "go2Signin":
                echo "<script>console.log('am here');</script>";
                $this->go2Signin();
                break;
            default:
                echo "<script>console.log('shouldnt be here');</script>";
                $this->showWelcome();
                break;
        }
    }

    public function showWelcome() {
        include("./welcome.php");
    }

    public function go2Signin() {
        include("./signin.php");
    }
}
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
            default:
                $this->showWelcome();
                break;
        }
    }

    public function showWelcome() {
        include("./welcome.php");
    }
}
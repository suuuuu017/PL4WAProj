<?php


class controller {
    private $input = [];

    public function __construct($input){
        session_start();
        $this->input = $input;
    }

    public function run() {
        // Get the command
        $command = "welcome";
        if (isset($this->input["command"]))
            $command = $this->input["command"];

        switch($command) {
            case "go2Signin":
//                echo "echo hello ";
                $this->go2Signin();
                break;
            case "verifylogin":
                $this->verifylogin();
                break;
            case "register":
                $this->register();
                break;
            default:
//                echo "<script>console.log('shouldnt be here');</script>";
                $this->showWelcome();
                break;
        }
    }

    public function showWelcome() {
        include("./welcome.php");
    }

    public function go2Signin() {
        $alert = "";
        include("./signin.php");
    }

    public function verifylogin(){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $_SESSION["email"] = $email;
        if(false){
            //TODO: if the email and password found in database
            $alert = "";
            include("./mainpage.php");
        }
        else{
            $alert = "<div class=\"alert alert-danger \" role=\"alert\">
                You are not registered yet! Please create an account.
                </div>";
            include("./signin.php");
        }

    }

    public function register(){
        include("./register.php");
    }

}
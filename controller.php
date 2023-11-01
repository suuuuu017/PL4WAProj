<?php


class controller {
    private $input = [];
    private $db;

    public function __construct($input){
        session_start();
        $this->input = $input;
        $this->db = new Database();
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

            case "ValidateRegister":
                $this->validateRegistry();
                break;

            case "register":
                $this->register();
                break;

            case "showMainPage":
                $this->showMainPage();
                break;

            case "verifylogin":
                $this->verifylogin();
                break;

            case "createPost":
                $this->createPost();
                break;

            case "showProfile":
                $this->editProfile();
                break;

            case "join":
                $this->join();
                break;

            case "logout":
                $this->logout();
                break;

            default:
//                echo "<script>console.log('shouldnt be here');</script>";
                $this->showWelcome();
                break;
        }
    }

    public function register($message = "") {
        include ("register.php");
    }

    public function showWelcome() {
        include("./welcome.php");
    }

    public function go2Signin() {
        $alert = "";
        include("./signin.php");
    }
    public function logout(){
        session_destroy();
        $this->showWelcome();
    }

    public function loadPostfromdb(){
        $cardDiv = "";
        $res = $this->db->query("select * from posts;");
        foreach($res as $r){
            $content = array();
            $content[0] = $r["title"];
            $content[1] = $r["description"];
            $content[2] = $r["pic"];
            $content[3] = $r["date"];
            $content[4] = $r["time"];
            $content[5] = $r["parnum"];
            $content[6] = $r["posttime"];
            $content[7] = $r["currenpar"];
            $cardDiv = $this->attach2cardiv($content, $cardDiv);
        }
//        if(key_exists("cardDiv", $_SESSION) == true){
//            $cardDiv = $_SESSION["cardDiv"].$cardDiv;
//        }
        return $cardDiv;
    }
    public function attach2cardiv($content, $cardDiv){
        $cardDiv = $cardDiv . "<form action=\"?command=join\" method=\"post\">
                                    <div class=\"card postBox CustomCol-4\" >
                                        <img src=\"McAfee.png\" class=\"card-img-top\" alt=\"mountains and sky\">
                                        <div class=\"card-body\">
                                            <input type=\"hidden\" name=\"joinedTitle\" value=$content[0]>
                                            <input type=\"hidden\" name=\"joinDes\" value=$content[1]>
                                            <h2 class=\"card-title\" name=\"joinedTitle\" value=$content[0]>$content[0]</h2>
                                            <p class=\"card-text\" name=\"joinedDes\" value=$content[1]>$content[1]</p>
                                            <button type=\"button\" class=\"btn btn-primary joinBtn\" data-bs-toggle=\"modal\" data-bs-target=\"#joinformModal\">
                                                Join
                                            </button>
                                            <div class=\"modal fade\" id=\"joinformModal\" tabindex=\"-1\" aria-labelledby=\"joinformModalLabel\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-body\">
                                                            Are you sure that you want to join?
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">No</button>
                                                            <button type=\"submit\" class=\"btn btn-primary\" name=\"join\" value=\"true\">Yes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </form>";
        return $cardDiv;
    }

    public function showMainPage($msg="") {
        $cardDiv = "";
        // if(isset($_SESSION["cardDiv"])) {
//        if(key_exists("cardDiv", $_SESSION) == false){
//            $cardDiv = "";
//        }
//        else{
//            $cardDiv = $_SESSION["cardDiv"];
//        }
        // }
        $cardDiv = $this->loadPostfromdb();
        $message = $msg;
        include("mainPage.php");
    }

    public function verifylogin(){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $_SESSION["email"] = $email;
        $res = $this->db->query("select * from users where email = $1;", $_POST["email"]);
        if(!empty($res)){
            $res = $this->db->query("select * from users where password = $1;", $_POST["password"]);
            if(!empty($res)) {
                //TODO: if the email and password found in database
                $alert = "";
                $cardDiv = "";
                // if(isset($_SESSION["cardDiv"])) {
                if(key_exists("cardDiv", $_SESSION) == false){
                    $cardDiv = "";
                }
                else{
                    $cardDiv = $_SESSION["cardDiv"];
                }
                $this->showMainPage();
            }
            else{
                $alert = "<div class=\"alert alert-danger \" role=\"alert\">
                 Wrong password! Please try again.
                 </div>";
                include("./signin.php");
            }
        }
        else{
            $alert = "<div class=\"alert alert-danger \" role=\"alert\">
                 You are not registered yet! Please create an account.
                 </div>";
            include("./signin.php");
        }

    }


    public function createPost(){
        $title = $_POST["postName"];
        $description = $_POST["description"];
        $img = $_POST["img"];
        $date = $_POST["myDate"];
        $time = $_POST["myTime"];
        $par = $_POST["myPar"];
        $msg = "";

        if(empty($title)){
            $msg = "No title";
        }
        if(empty($description)){
            $msg = "No description";
        }
        if(empty($img)){
            $msg = "No image";
        }
        if(empty($date)){
            $msg = "No date";
        }
        if(empty($time)){
            $msg = "No time";
        }
        if(empty($par)){
            $msg = "No participants number";
        }


        if(!empty($msg)){
            //TODO; need to leave upper margin
            $message = "<div class=\"alert alert-danger \" role=\"alert\">
                 $msg  
                 </div>";
            $this->showMainPage($message);
            return;
        }

        //TODO: need to verify input

        $content = array();
        $content[0] = $title;
        $content[1] = $description;
        $content[2] = $img;
        $content[3] = $date;
        $content[4] = $time;
        $content[5] = $par;
        $this->db->query("insert into posts (title, description, pic, date, time, parNum, postTime, currenPar) 
                            values ($1, $2, $3, $4, $5, $6, $7, $8);",
                    $title, $description, $img, $date, $time, $par, date("Y-m-d H:i:s"), 0);
        if(key_exists("addedPost", $_SESSION) == false || empty($_SESSION["addedPost"])){
            $allAdded = array();
        }
        else{
            $allAdded = $_SESSION["addedPost"];
        }
//        print_r($_SESSION["addedPost"]);
//        echo"<br>";
        array_push($allAdded, $content);
        $_SESSION["addedPost"] = $allAdded;
        if(key_exists("cardDiv", $_SESSION) == false){
            $cardDiv = "";
        }
        else {
            $cardDiv = $_SESSION["cardDiv"];
        }
//        print_r($_SESSION["addedPost"]);
        if(!empty($_SESSION["addedPost"])) {
//            foreach( $_SESSION["addedPost"] as $post) {
               $cardDiv = $this->attach2cardiv($content, $cardDiv);
//            }
        }
        $_SESSION["cardDiv"] = $cardDiv;
//        print_r($_SESSION["addedPost"]);
        $this->showMainPage();

    }

    public function join() {
//        print_r($_POST);
        if(!empty($_POST["joinedTitle"])) {
            $joinTitle = $_POST["joinedTitle"];
//            echo $joinTitle;
        }
        $message = "";
        if(!empty($_POST["joinedTitle"])) {
            $res = $this->db->query("select * from posts where title = $1;", $joinTitle);
            if (!empty($res)) {
                $tmpPar = $this->db->query("select * from posts where title = $1;", $_POST["joinedTitle"])[0]["parnum"];
                if ($tmpPar >= 1) {
//                    echo $tmpPar;
                    $tmpPar = $tmpPar - 1;
                    $this->db->query("update posts set parnum = $1 where title = $2;", $tmpPar, $_POST["joinedTitle"]);
                }
                else {
                    $message = "<div class=\"alert alert-danger \" role=\"alert\">
                                 The post has reached upper limit for participants 
                                 </div>";

                }
            }
        }
        $this->showMainPage($message);

    }


    public function validateRegistry() {
        $m1 = "";
        if ($_POST['email'] != "") {
            if ($this->is_uva_email($_POST['email']) !== 1) {
                $m1 .= "The email is not a valid uva email, make sure the domain is @virginia.edu <br>";
            }
        }
        else {
            $m1 .= "No email address was provided <br>";
        }
        if ($_POST['username'] == "") {
            $m1 .= "No username was provided <br>";
        }
        if ($_POST['password1'] != "" && $_POST['password2'] != "") {
            if ($_POST['password1'] !== $_POST['password2']) {
                $m1 .= "Your passwords didn't match<br>";
            }
            else {
                if (!$this->verifyPassword($_POST['password1'])) {
                    $m1 .= "Your password didn't contain at Minimum eight characters, at least one letter, one number and one special character <br>";
                }
            }
        }
        else {
            $m1 .= "You didn't enter your password at twice<br>";
        }
        if ( $m1 === "") {
             // SAVE ALL OF THE CONTENT
             $this->showMainPage();
        }
        else {
            $message = "<div class=\"alert alert-danger\" role=\"alert\">
            $m1 </div>";
            $this->register($message);
        }
    }


    function is_uva_email($email) {
        $email_regex =  $email_regex = '/^[A-Za-z0-9]+@virginia.edu$/';
        return preg_match($email_regex, $email);
    }
    
    
    function verifyPassword($password1) {
        // Minimum eight characters, at least one letter, one number and one special character:
        $password_regex = '/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/';
        if (preg_match($password_regex, $password1) === 1) {
                return true;
        }
        return false;
    
    }


    public function editProfile() {
        // if(isset($_POST['userName']) && isset($_POST['description'])) {
            $_SESSION['userName'] = $_POST['userName'];
            $_SESSION['description'] = $_POST['description'];
        // }
        include ('profile.php');
    }


}
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
                $this->showProfile();
                break;

            case "editProfile":
                $this->editProfile();
                break;

            case "join":
//                echo "<script>console.log(\"i am here\");</script>";
                $this->join();
                break;

            case "logout":
                $this->logout();
                break;

            case "editPost":
                $this->editPost();
                break;

            case "activePost":
                print($this->returnActivePost());
                break;

            case "showAbout":
                $this->showAbout();
                break;

            case "search":
                $json = file_get_contents('php://input');
                $data = json_decode($json, true);
                echo $data;
                break;

            default:
//                echo "<script>console.log('shouldnt be here');</script>";
                $this->showWelcome();
                break;
        }
    }

    public function showAbout(){
        include("about.php");
    }
    public function returnActivePost(){
        $res = $this->db->query("select * from posts where date > now()::date;");
        if($res){
            $json = json_encode($res);
        }
        else{
            $json = json_encode(array());
        }
        return $json;
    }

    public function attachtoprofileDiv($pd="", $t="", $d="", $spots = 0, $date = "XX-XX-XXXX", $pic = ""){
        $profileDiv = $pd. "<div class = \"my-post\" id =\"$date\"> 
        
                <div class=\"card postBox CustomCol-4\" >
					<img src=\"./imgData/$pic\" class=\"card-img-top postImg\" alt=\"mountains and sky\">
                      <div class=\"card-body\">
                        <h3 class=\"card-title\">$t</h3>
                        <p class=\"card-text\">Date: $date</p>
                        <p class=\"card-text\">Spots Open: $spots</p>
                        <p class=\"card-text\">$d</p>
                            <!-- start of edit modal -->
                        <div>
                          <button class=\"btn joinBtn\" data-bs-toggle=\"modal\" data-bs-target=\"#editPostModal\">Edit Post</button>
                          <div class=\"modal fade\" id=\"editPostModal\" tabindex=\"-1\" aria-labelledby=\"editPostModalLabel\" aria-hidden=\"true\">
                              <div class=\"modal-dialog\">
                                  <form action=\"?command=editPost\" method=\"post\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h1 class=\"modal-title fs-5\" id=\"editPostModalLabel\">Edit Post</h1>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <div>
                                                <input class=\"postNameBox\" type=\"text\" name=\"postName\" placeholder=\"New Adventure\" required>
                                            </div>
                                            <div>
                                                <input class=\"descriptionBox\" type=\"text\" name=\"description\" placeholder=\"Description\" required>
                                            </div>
                                            <div class=\"addImgBox\">
                                                <label for=\"myFile\" class=\"addImgText\">Picture for the post:</label>
                                                <input type=\"file\" id=\"myFile\" name=\"img\">
                                            </div>
                                            <div class=\"addImgBox\">
                                                <label for=\"myDate\" class=\"addImgText\">Date:</label>
                                                <input type=\"date\" id=\"myDate\" name=\"myDate\">
                                            </div>
                                            <div class=\"addImgBox\">
                                                <label for=\"myTime\" class=\"addImgText\">Time:</label>
                                                <input type=\"time\" id=\"myTime\" name=\"myTime\">
                                            </div>
                                            <div class=\"addImgBox\">
                                                <label for=\"myPar\" class=\"addImgText\">Participants needed:</label>
                                                <input type=\"number\" id=\"myPar\" name=\"myPar\" max=\"100\">
                                            </div>
                                        </div>
                                        <div class=\"modal-footer\">
                    <!--                        TODO: change color scheme of the btn to match the whole website-->
                                            <button type=\"submit\" class=\"btn joinBtn\" data-bs-dismiss=\"modal\">Change</button>
                                        </div>
                                    </div>
                                  </form>
                              </div>
                          </div>
                        </div>
                      </div>
				</div>
                </div>";
        return $profileDiv;
    }
    public function showUserPost(){
        $res= $this->db->query("select * from userpost where email = $1 order by date desc;", $_SESSION["email"]);
        $profileshow = "";
        foreach($res as $t){
            $title = $t["title"];
            $des = $this->db->query("select description from posts where title = $1;", $title)[0]["description"];
            $date = $this->db->query("select date from posts where title = $1;", $title)[0]["date"];
            $spots = $this->db->query("select parnum from posts where title = $1;", $title)[0]["parnum"];
            $pic = $this->db->query("select pic from posts where title = $1;", $title)[0]["pic"];
            $profileshow = $this->attachtoprofileDiv($profileshow, $title, $des, $spots, $date, $pic);
        }
        return $profileshow;
    }

    public function editPost(){

    }


    public function showProfile($twitter = "", $instagram = "", $facebook = ""){
        $email = $_SESSION["email"];
        $res = $this->db->query("select * from users where email = $1;", $email);
        $name="";
        if(key_exists("name", $res[0])){
            $name = $name = $res[0]["name"];
        }
        $description = "";
        if(key_exists("description", $res[0])){
            $description = $res[0]["description"];
        }
        $profileDiv = $this->showUserPost();
        include("profile.php");
    }
    public function register($message = "",$email="", $username="") {
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

    // public function instantiatePostObjects() {

    //     // have yet to include the image here
        
    //     function Post(title, description, date, time, parnum, posttime, currenpar) {
    //         this.title = title;
    //         this.description = description;
    //         this.date= date;
    //         this.time = time;
    //         this.parnum= parnum;
    //         this.posttime = posttime;
    //         this.currenpar = currenpar;
    //         this.displayInfo = function() {
    //           console.log(`${this.title}, ${this.description},  ${this.date}, ${this.time}`);
    //         };
    //       }
    // }
    public function loadPostfromdb(){

        
        $cardDiv = "";
        $res = $this->db->query("select * from posts order by date desc;");
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

        // or maybe it would be easier to inject information about the date and time in the html body and have a script in the profile page to manipulate with javascript
        $cardDiv = $cardDiv . "<form action=\"?command=join\" method=\"post\">
                                    <div class=\"card postBox CustomCol-4\" >
                                        <img src=\"./imgData/$content[2]\" class=\"card-img-top postImg\" alt=\"mountains and sky\">
                                        <div class=\"card-body\">
                                            <input type=\"hidden\" name=\"joinedTitle\" value=$content[0]>
                                            <input type=\"hidden\" name=\"joinDes\" value=$content[1]>
                                            <input type=\"hidden\" name=\"date\" value=$content[3]>

                                            <h2 class=\"card-title\" name=\"joinedTitle\" value=$content[0]>$content[0]</h2>
                                            <p class=\"card-text\" name=\"joinedDate\" value=$content[3]>Date: $content[3]</p>
                                            <p class=\"card-text\" name=\"joinedPer\" value=$content[5]>Spots open: $content[5]</p>
                                            <p class=\"card-text\" name=\"joinedDes\" value=$content[1]>$content[1]</p>
                                            <button type=\"button\" class=\"btn btn-primary joinBtn\" data-bs-toggle=\"modal\" data-bs-target=\"#joinform$content[0]Modal\">
                                                Join
                                            </button>
                                            <div class=\"modal fade\" id=\"joinform$content[0]Modal\" tabindex=\"-1\" aria-labelledby=\"joinform$content[0]ModalLabel\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-body\">
                                                            Are you sure that you want to join?
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">No</button>
                                                            <button type=\"submit\" class=\"btn btn-light\" name=\"join\" value=\"true\">Yes</button>
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

        $cardDiv = $this->loadPostfromdb();
        $message = $msg;
        include("mainpage.php");
    }

    public function verifylogin(){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $_SESSION["userName"] = $email;
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
        if(isset($_POST["postName"]) == true){
            $title = $_POST["postName"];
            $description = $_POST["description"];
            $img = $_POST["img"];
            $date = $_POST["myDate"];
            $time = $_POST["myTime"];
            $par = $_POST["myPar"];
            $msg = "";

            if (empty($title)) {
                $msg = "No title";
            }
            if (empty($description)) {
                $msg = "No description";
            }
            if (empty($img)) {
                $msg = "No image";
            }
            if (empty($date)) {
                $msg = "No date";
            }
            if (empty($time)) {
                $msg = "No time";
            }
            if (empty($par)) {
                $msg = "No participants number";
            }


            if (!empty($msg)) {
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
            $this->db->query("insert into userpost (email, title, date) 
                            values ($1, $2, $3);",
                $_SESSION["email"], $title, $date);
            $this->db->query("insert into userjoined (email, title) 
                            values ($1, $2);",
                $_SESSION["email"], $title);
            if (key_exists("addedPost", $_SESSION) == false || empty($_SESSION["addedPost"])) {
                $allAdded = array();
            } else {
                $allAdded = $_SESSION["addedPost"];
            }
//        print_r($_SESSION["addedPost"]);
//        echo"<br>";
            array_push($allAdded, $content);
            $_SESSION["addedPost"] = $allAdded;
            if (key_exists("cardDiv", $_SESSION) == false) {
                $cardDiv = "";
            } else {
                $cardDiv = $_SESSION["cardDiv"];
            }
//        print_r($_SESSION["addedPost"]);
            if (!empty($_SESSION["addedPost"])) {
//            foreach( $_SESSION["addedPost"] as $post) {
                $cardDiv = $this->attach2cardiv($content, $cardDiv);
//            }
            }
            $_SESSION["cardDiv"] = $cardDiv;
        }
        $_POST = array();
//        print_r($_SESSION["addedPost"]);
        $this->showMainPage();
    }

    public function join() {
//        print_r($_POST);
        if(!empty($_POST["joinedTitle"])) {
            $joinTitle = $_POST["joinedTitle"];
            $email = $_SESSION["email"];
            echo "<script>console.log(\"$email\");</script>";
            echo "<script>console.log(\"$joinTitle\");</script>";
        }
        else{
//            echo "<script>console.log(\"no titile\");</script>";
        }

        $message = "";
//        print_r($_POST);
        if(!empty($_POST["joinedTitle"])) {
            $res = $this->db->query("select * from posts where title = $1;", $joinTitle);
            if (!empty($res)) {
                $ifjoined = $this->db->query("select * from userjoined where email = $1 and title = $2;"
                    , $_SESSION["email"], $joinTitle);
//                echo "<script>console.log(\"finding join\");</script>";
                if(empty($ifjoined)) {
                    $tmpPar = $this->db->query("select * from posts where title = $1;", $_POST["joinedTitle"])[0]["parnum"];
                    if ($tmpPar > 1) {
                        $this->db->query("insert into userjoined (email, title) 
                            values ($1, $2);",
                            $_SESSION["email"], $joinTitle);
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
                else{
                    $message = "<div class=\"alert alert-danger \" role=\"alert\">
                                 You have already joined this post 
                                 </div>";
                }
            }
        }
//        echo "<script>console.log(\"$message\");</script>";
        $this->showMainPage($message);
    }


    public function validateRegistry() {
        $m1 = "";

        $_SESSION["email"] = $_POST['email'];
        $_SESSION['username'] = $_POST['username'];

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
            $this->db->query("insert into users (name, email, password) 
                            values ($1, $2, $3);",
                $_POST['username'], $_POST['email'], $_POST['password1']);
            $this->showMainPage();
        }
        else {
            $message = "<div class=\"alert alert-danger\" role=\"alert\">
            $m1 </div>";
            $this->register($message, $_SESSION['email'], $_SESSION['username']);
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
        if(isset($_POST['userName']) && isset($_POST['description'])) {
           $_SESSION['userName'] = $_POST['userName'];
           $_SESSION['description'] = $_POST['description'];
           $_SESSION['twitter'] = $_POST['twitter'];
           $_SESSION['instagram'] = $_POST['instagram'];
           $_SESSION['facebook'] = $_POST['facebook'];

           $twitter = $_SESSION['twitter'];
           $instagram = $_SESSION['instagram'];
           $facebook = $_SESSION['facebook'];

        $email = $_SESSION["email"];
        $newName = $_POST["userName"];
        $newDes = $_POST["description"];
        //TODO: update profile photo too
        $this->db->query("update users set name = $1, description = $2 where email = $3;", $newName, $newDes, $email);
        $this->showProfile($twitter, $instagram, $facebook);
    }
    else {

    $this->showProfile();

        }
    }
}
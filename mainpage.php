<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
<head><script src="./assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Shihe Wang used Mark Otto, Jacob Thornton, and Bootstrap contributors template">
    <meta name="generator" content="Hugo 0.118.2">
    <title>HoosHiking</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        function checkJoin(){
            alert(this.value);

            var ajax = new XMLHttpRequest();
            ajax.open("GET", "./index.php?command=join", true);
            ajax.send();
            ajax.addEventListener("load", function() {
                if (this.status === 200) {
                    var r = this.response;

                }
                else {
                    alert("An error occurred");
                }
            });
        }

        function saveImg(){
            $('#myFile').change(function() {
                var myImg = this.files[0];
                var fileType = myImg["type"];
                var imgTypes = ["image/gif", "image/jpeg", "image/png"];
                if ($.inArray(fileType, imgTypes) < 0) {
                    // TODO: make the alert better
                    alert('You must select an image file only.');
                }
                var imgSave = new FormData();
                imgSave.append($('#myTitle'), myImg);
                $.ajax({
                    method: 'POST',
                    address: './imgData',
                    data: frm,
                    contentType: false,
                    processData: false,
                    cache: false
                });
            });
            return true;
        }
    </script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body class="d-flex h-100 text-center text-bg-dark bg-image">
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
    </symbol>
</svg>


<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>
            <h1 class="float-md-start mb-0">HoosHiking</h1>
            <label for="search"></label><input class="searchBox float-md-none" type="text" id="search"
                                                  name="search" value="" placeholder="search">
            <nav class="nav nav-masthead justify-content-center float-md-end ">
                <a type="submit" class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="?command=showMainPage">Home</a>
                <a type="submit" class="nav-link fw-bold py-1 px-0" href="?command=showProfile">Profile</a>
                <a type="submit" class="nav-link fw-bold py-1 px-0" href="?command=logout">Logout</a>
                <!--        <a class="nav-link fw-bold py-1 px-0" href="#">Contact</a>-->
            </nav>
        </div>
    </header>
<!--TODO: the card is tilted to the left not in the middle need fixing-->
    <main class="px-3 cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <div id="mess">
            <?=$message?>
        </div>
        <div id="cardSearch">
<!--            <form action="?command=join" method="post">-->
<!--                <div class="card postBox CustomCol-4" >-->
<!--                    <img src="McAfee.png" class="card-img-top" alt="mountains and sky">-->
<!--                    <div class="card-body">-->
<!--                        <input type="hidden" name="joinedTitle" value="Hike">-->
<!--                        <input type="hidden" name="joinDes" value="Some description of the hike">-->
<!--                        <h2 class="card-title" >Hike</h2>-->
<!--                        <p class="card-text">Some description of the hike.</p>-->
<!--                        <button type="button" class="btn btn-primary joinBtn" data-bs-toggle="modal" data-bs-target="#joinModal">-->
<!--                            Join-->
<!--                        </button>-->
<!--                        <div class="modal fade" id="joinModal" tabindex="-1" aria-labelledby="joinModalLabel" aria-hidden="true">-->
<!--                            <div class="modal-dialog">-->
<!--                                <div class="modal-content">-->
<!--                                    <div class="modal-header">-->
<!--                                       <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>-->
<!--                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--                                   </div>-->
<!--                                    <div class="modal-body">-->
<!--                                        Are you sure that you want to join?-->
<!--                                    </div>-->
<!--                                    <div class="modal-footer">-->
<!--                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>-->
<!--                                        <button type="submit" class="btn btn-primary" name="join" value="true">Yes</button>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
            <?=$cardDiv?>
        </div>
    </main>

    <div>
<!--        TODO: plus not in the center dont know why-->
        <button class="addBtn" id="postBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">+</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form id="newPostF" action="?command=createPost" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">New Post</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <input class="postNameBox" type="text" id="myTitle" name="postName" placeholder="New Adventure" required>
                            </div>
                            <div>
                                <input class="descriptionBox" type="text" name="description" placeholder="Description" required>
                            </div>
                            <div class="addImgBox">
                                <label for="myFile" class="addImgText">Picture for the post:</label>
                                <input type="file" id="myFile" name="img" required>
                            </div>
                            <div class="addImgBox">
                                <label for="myDate" class="addImgText">Date:</label>
                                <input type="date" id="myDate" name="myDate" required>
                            </div>
                            <div class="addImgBox">
                                <label for="myTime" class="addImgText">Time:</label>
                                <input type="time" id="myTime" name="myTime" required>
                            </div>
                            <div class="addImgBox">
                                <label for="myPar" class="addImgText">Participants needed:</label>
                                <input type="number" id="myPar" name="myPar" max="100" required>
                            </div>
                        </div>
                        <div class="modal-footer">
    <!--                        TODO: change color scheme of the btn to match the whole website-->
                            <button class="btn joinBtn" type="submit" id="postBtn"">Post</button>
                            <button type="button" class="btn joinBtn" data-bs-dismiss="modal">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- end of sample modal -->

    
    <footer class="mt-auto text-white-50">
    </footer>
</div>
<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
<!--<script>-->
<!--    document.addEventListener('DOMContentLoaded', function () {-->
<!--        const dataContainer = document.getElementById('data-container');-->
<!--        const appendButton = document.getElementById('postBtn');-->
<!--        const newDataInput = document.getElementById('new-data');-->
<!---->
<!--        appendButton.addEventListener('click', function () {-->
<!--            const newDiv = document.createElement('div');-->
<!--            -->
<!--            newDiv.textContent = newData;-->
<!---->
<!--                -->
<!--        }-->
<!---->
<!--</script>-->
<script>
    function addComment(){
        alert("now developing");
    }

    // using jquery
    $(document).ready(function() {
        $('#search').keypress(function(event) {
            if (event.keyCode === 13) {
                // event.preventDefault();
                var ajax = new XMLHttpRequest();
                var searchTerm = this.value;
                // TODO: this will land back to controller case search
                // ajax.open("POST", "./index.php?command=search", true);
                ajax.open("GET", "./search.php?searchTerm=" + encodeURIComponent(searchTerm), true);
                ajax.responseType = "json";
                ajax.send();

                ajax.addEventListener("load", function() {
                    if (this.status === 200) {
                        var res = this.response;
                        console.log(res);
                        $("#cardSearch").empty();
                        for(let i = 0; i < res.length; i++){
                            $("#cardSearch").append(' <form action="?command=join" method="post"\
                            <div class="card postBox CustomCol-4" > \
                                <img src="./imgData/' + res[i]['pic'] +'" class="card-img-top postImg" alt="mountains and sky"> \
                                <div class="card-body"> \
                                <input type="hidden" name="joinedTitle" value="' + res[i]['title'] + '"> \
                                <input type="hidden" name="joinDes" value="' + res[i]['description'] + '"> \
                                <h2 class="card-title" name="joinDes" value="' + res[i]['description'] + '">' + res[i]['title'] +  '</h2>  \
                                <p class="card-text" name="joinDes" value="' + res[i]['description'] + '">' + res[i]['description'] +  '</p> \
                                <button type="button" class="btn btn-primary joinBtn" data-bs-toggle="modal" data-bs-target="#joinModal"> \
                                    Join \
                                </button>  \
                                <div class="modal fade" id="joinModal" tabindex="-1" aria-labelledby="joinModalLabel" aria-hidden="true"> \
                                    <div class="modal-dialog"> \
                                        <div class="modal-content"> \
                                            <div class="modal-header"> \
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> \
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> \
                                            </div> \
                                            <div class="modal-body"> \
                                                Are you sure that you want to join? \
                                            </div> \
                                            <div class="modal-footer"> \
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button> \
                                                <button type="submit" class="btn btn-primary" name="join" value="true" >Yes</button> \
                                            </div> \
                                        </div> \
                                    </div> \
                                </div> \
                                </div> \
                                </div> \
                                </form> \
                                ')
                        }
                    }
                    else {
                        alert("An error occurred");
                    }
                });
                ajax.addEventListener("error", function() {
                    alert("An error occurred");
                });
            }
        });
        document.getElementById("myFile").addEventListener("change", function() {
        // $('#myFile').change(function() {
            var myImg = document.getElementById('myFile').files[0];
            var fileType = myImg["type"];
            var imgTypes = ["image/gif", "image/jpeg", "image/png"];
            if ($.inArray(fileType, imgTypes) < 0) {
                // TODO: make the alert better
                alert('The file uploaded needs to be gif, jpeg or png.');
            }
            else{
                // alert('Uploading.');
                var imgSave = new FormData();
                imgSave.append(0, myImg);
                // alert("title is " + myImg["name"]);
                // alert("img is " + myImg);
                var aj = new XMLHttpRequest();
                aj.open("POST", "./imgUpload.php", true);
                aj.send(imgSave);
                aj.addEventListener("load", function() {
                    if (this.status === 200) {
                        var r = this.response;
                        // alert("here");
                        // alert(r);
                    }
                    else {
                        alert("An error occurred");
                    }
                });
            }
        });
    });
</script>

</body>
</html>

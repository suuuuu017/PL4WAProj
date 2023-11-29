<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="./assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Shihe Wang and Rylie Gentile used Mark Otto, Jacob Thornton, and Bootstrap contributors template">
    <meta name="generator" content="Hugo 0.118.2">
    <title>HoosHiking</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="pro.css">
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

      .hidden {
      display: none;
    }
    </style>

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
          <nav class="nav nav-masthead justify-content-center float-md-end ">
            <a type="submit" class="nav-link fw-bold py-1 px-0" aria-current="page" href="?command=showMainPage">Home</a>
            <a type="submit" class="nav-link fw-bold py-1 px-0 active" href="?command=showProfile">Profile</a><a type="submit" class="nav-link fw-bold py-1 px-0" href="?command=logout">Logout</a>
            <!--        <a class="nav-link fw-bold py-1 px-0" href="#">Contact</a>-->
          </nav>
        </div>
      </header>

    <div id="mess">
        <?=$message?>
    </div>
    <section id="profile-contents" class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="mx-auto">
          <div class="circle">
            <img id="profilephoto" src="assets/images/profile_photo.jpg" alt="profile-photo" class="rounded-circle">
          </div>
          
          <h2 class="name"><?=$name?></h2>

    <!-- start of edit modal -->
    <div>
      <button class="btn joinBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit Profile</button>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <form action="?command=editProfile" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                          <label style="color: black" for="userName">Your name or Username:</label>
                            <input value="<?=$name?>" style="color: black" class="postNameBox" type="text" name="userName" required>
                        </div>
                        <div>
                          <label style="color: black" for="description">About You:</label>
                            <textarea id="description" name="description" rows="4" cols="50"><?=$description?></textarea>
                        </div>

                        <div>
                          <label style="color: black" for="twitter">Enter Your Twitter:</label>
                            <input value="<?= $twitter?>" style="color: black" class="postNameBox" type="text" name="twitter">
                        </div>

                        <div>
                          <label style="color: black" for="instagram">Enter Your Instagram:</label>
                            <input value="<?=$instagram?>" style="color: black" class="postNameBox" type="text" name="instagram">
                        </div>

                        <div>
                          <label style="color: black" for="facebook">Enter Your Facebook:</label>
                            <input value="<?=$facebook?>" style="color: black" class="postNameBox" type="text" name="facebook">
                        </div>

                        <div class="addImgBox">
                            <label style="color: black" for="myImage" class="addImgText">Upload a new Profile Photo:</label>
                            <input type="file" id="myImage" name="profileImage">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn joinBtn" data-bs-dismiss="modal">Save</button>
                    </div>
                </div>
         </form>
          </div>
        </div>
      </div>
      <!-- end of edit modal -->

          <div class="row">

            <div class="col-2"></div> <!-- Empty column for spacing -->

            <div class="col-1">
              
              <a style="text-decoration: none;" href="https://instagram.com/<?=$instagram?>">
              <img class="social" src="assets/images/instagram.png" alt="instagram">
              </a>
              <a style="text-decoration: none;" href="https://facebook.com/<?=$facebook?>">
              <img class="social" src="assets/images/facebook.png" alt="facebook">
              </a>
              <a style="text-decoration: none;" href="https://twitter.com/<?=$twitter?>">
              <img class="social" src="assets/images/twitter.png" alt="twitter">
              </a>
            </div>
          
            <div class="col-6 description">
            <!-- <p> Hello Y'all I am originally from Chicago, but chose to go to UVA for its proximity to the Blue Ridge Mountains. I have always loved hiking but I do not have a car and would love to discover more hikes through hoosHiking. I am a 4th year student with a but of time on my hands to explore the places aorund me. If you want to link up for some of my suggested hikes or have some suggestions to share let me know!</p>            -->
          
            <p> 
              
              <?php 
              
              if($description == "") {
                echo "You have not Created a Description Yet!";
              }
              
              else {
                  echo $description;
                }
               ?>
            
            </p>

            </div>

          </div>
        </div>
      </div>
    </section>

    <main class="px-3">
      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">

            <!-- TODO:: use javasacript to trigger switching the content in the body below onclick() -->

              <button id ="active" class="btn joinBtn" onclick="filterPostsByDate('active')">Active Posts</button>
              <button id ="past" class="btn joinBtn" onclick="filterPostsByDate('past')">Past Posts</button>
              <button id ="past" class="btn joinBtn" onclick="filterPostsByDate('all')">All Posts</button>
              <button id ="toggle" class="btn joinBtn" onclick="toggleProfile()">Hide Profile</button>
            </li>
          </ul>
        </div>
		  <div class="card-body">
			  <div>
        <?php 
              
              if($profileDiv == "") {
                echo "You have not posted any trips yet!";
              }
              
              else {
                  echo $profileDiv;
                }
               ?>
			  </div>
		  </div>
    </main>

</div>

<script type="text/javascript"> 
  
  function toggleProfile() {
    var p = document.getElementById("profile-contents");
    p.classList.toggle("hidden");

    var button = document.getElementById("toggle");

    if(button.innerHTML === "Hide Profile") {
      button.innerHTML = "Show Profile";
    }

    else {
      button.innerHTML = "Hide Profile"
    }
  }

  
  function getCurrentDate() {
  const now = new Date();

  // Get the current date components
  const year = now.getFullYear();
  const month = String(now.getMonth() + 1).padStart(2, '0'); // Months are zero-based
  const day = String(now.getDate()).padStart(2, '0');

  // Concatenate the components to form YYYY-MM-DD
  const formattedDate = `${year}-${month}-${day}`;

  return formattedDate;
}

function filterPostsByDate($type) {
    
    var elementsArray = Array.from(document.getElementsByClassName("my-post"));

    var todays_date_string = getCurrentDate();
    const todays_date = new Date(todays_date_string);

    if ($type == "active") {
      active_posts(elementsArray, todays_date);
    }

    else if ($type == "past") {
      past_posts(elementsArray, todays_date);
    }

    else {
        all_posts(elementsArray);
    }

  }

function active_posts(elementsArray, todays_date) {

    elementsArray.forEach(function(element) {

    let post_date_string = element.id

    let post_date = new Date(post_date_string);


    if (todays_date > post_date) { // if this post is still no longer active aka it happens before today we are going to hide

      element.className = "my-post hidden";

    }

    else {
      element.className = "my-post";
    }

    });

}

function past_posts(elementsArray, todays_date) {

    elementsArray.forEach(function(element) {

    let post_date_string = element.id

    let post_date = new Date(post_date_string);


    if (todays_date <= post_date) { // if this post is active aka it happened before today then we are going to hide

    element.className = " my-post hidden";

    }

    else {
    element.className = "my-post";
    }

    });

}


function all_posts(elementsArray) {

    elementsArray.forEach(function(element) {

    element.className = "my-post";

    });

}


</script>


<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>

<script>
    // function leavepost($t){
    //     console.log($t);
    //     document.getElementById($t).className = "hidden"
    // }
</script>
</html>

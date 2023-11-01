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
            <a type="submit" class="nav-link fw-bold py-1 px-0 active" href="?command=showProfile">Profile</a>
            <!--        <a class="nav-link fw-bold py-1 px-0" href="#">Contact</a>-->
          </nav>
        </div>
      </header>

    <section class="py-5 text-center container">
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
                            <input style="color: black" class="postNameBox" type="text" name="userName" placeholder="Enter your Name" required>
                        </div>
                        <div>
                          <label style="color: black" for="description">About You:</label>
                            <textarea id="description" name="description" rows="4" cols="50"></textarea>
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
            <div class="col-1">
              <img class="social" src="assets/images/instagram.png" alt="instagram">
              <img class="social" src="assets/images/facebook.png" alt="facebook">
              <img class="social" src="assets/images/twitter.png" alt="twitter">
            </div>
          
            <div class="col-11 description">
            <!-- <p> Hello Y'all I am originally from Chicago, but chose to go to UVA for its proximity to the Blue Ridge Mountains. I have always loved hiking but I do not have a car and would love to discover more hikes through hoosHiking. I am a 4th year student with a but of time on my hands to explore the places aorund me. If you want to link up for some of my suggested hikes or have some suggestions to share let me know!</p>            -->
          
            <p><?=$description?></p>

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
              <a class="btn joinBtn" href="#">Active Post</a>
              <a class="btn joinBtn" href="#">Past Post</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div>
            <div class="card postBox CustomCol-4" >
              <img src="McAfee.png" class="card-img-top" alt="mountains and sky">
              <div class="card-body">
                <h3 class="card-title">Hike</h3>
                <p class="card-text">Some description of the hike.</p>
                    <!-- start of edit modal -->
                <div>
                  <button class="btn joinBtn" data-bs-toggle="modal" data-bs-target="#editPostModal">Edit Post</button>
    
                  <div class="modal fade" id="editPostModal" tabindex="-1" aria-labelledby="editPostModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                  <form action="?command=editPost" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="editPostModalLabel">Edit Post</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <input class="postNameBox" type="text" name="postName" placeholder="New Adventure" required>
                            </div>
                            <div>
                                <input class="descriptionBox" type="text" name="description" placeholder="Description" required>
                            </div>
                            <div class="addImgBox">
                                <label for="myFile" class="addImgText">Picture for the post:</label>
                                <input type="file" id="myFile" name="img">
                            </div>
                            <div class="addImgBox">
                                <label for="myDate" class="addImgText">Date:</label>
                                <input type="date" id="myDate" name="myDate">
                            </div>
                            <div class="addImgBox">
                                <label for="myTime" class="addImgText">Time:</label>
                                <input type="time" id="myTime" name="myTime">
                            </div>
                            <div class="addImgBox">
                                <label for="myPar" class="addImgText">Participants needed:</label>
                                <input type="number" id="myPar" name="myPar" max="100">
                            </div>
                        </div>
                        <div class="modal-footer">
    <!--                        TODO: change color scheme of the btn to match the whole website-->
                            <button type="submit" class="btn joinBtn" data-bs-dismiss="modal">Change</button>
                        </div>
                      </div>
                  </form>
          </div>
        </div>
      </div>
      <!-- end of edit post modal -->

      <!-- start of delete modal -->
      <button type="button" class="btn btn-primary joinBtn" data-bs-toggle="modal" data-bs-target="#joinModal">
                        Delete
                    </button>
                    <div class="modal fade" id="joinModal" tabindex="-1" aria-labelledby="joinModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
<!--                                <div class="modal-header">-->
<!--                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>-->
<!--                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--                                </div>-->
                                <div style= "color: black" class="modal-body">
                                    Are you sure that you want to delete?
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                    <button type="submit" class="btn btn-primary">Yes</button>
                                </div>
                            </div>
                        </div>
                    </div>      
      <!-- end of delete modal -->
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>
<!--    <div class="album py-5 bg-body-tertiary">-->
<!--      <div class="container">-->

<!--        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">-->

<!--          <div class="col">-->
<!--            <div class="card shadow-sm">-->
<!--              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
<!--              <div class="card-body">-->
<!--                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
<!--                <div class="d-flex justify-content-between align-items-center">-->
<!--                  <div class="btn-group">-->
<!--                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>-->
<!--                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>-->
<!--                  </div>-->
<!--                  <small class="text-body-secondary">9 mins</small>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->

</div>


<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

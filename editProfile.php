
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

        <button class="addBtn" id="postBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">+</button>
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
                                <input class="postNameBox" type="text" name="userName" placeholder="Enter your Name" required>
                            </div>
                            <div>
                                <input class="descriptionBox" type="textarea" name="description" placeholder="Write a Description"> </textarea>
                            </div>
                            <div class="addImgBox">
                                <label for="myImage" class="addImgText">Upload a new Profile Photo:</label>
                                <input type="file" id="myImage" name="profileImage">
                            </div>
                        </div>
                        <div class="modal-footer">
    <!--                        TODO: change color scheme of the btn to match the whole website-->
                            <button type="button" class="btn joinBtn" data-bs-dismiss="modal">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
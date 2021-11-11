<?php
    require_once "./config.php";
    if (isset($_SESSION["session_state"])) {
        require_once "./header.php";

        if (isset($_GET["search_query"])) {
            $search_query = $_GET["search_query"];
        } else {
            $search_query = ""; 
        }

        $get_user_profile_info_sql = mysqli_query($connection_string, "SELECT * FROM users WHERE user_name = '".$_SESSION["user_name"]."' ");
        $get_user_profile_info = mysqli_fetch_array($get_user_profile_info_sql); ?>
<header class="header-area">
    <div class="container">
        <div class="header">
            <a class="header-logo-area" href="./index.php">
                <img class="header-logo" src="./img/instagram-title.png" alt="Instagram">
            </a>
            
            <form method="GET" action="search.php">
                <input name="search_query" class="header-search" type="text" placeholder="Search" autocomplete="false" value="<?=$search_query?>">
                <input name="" class="header-search-btn" type="submit" value="">
            </form>
    
            <div class="button-group">
                <a class="header-btn" href="./index.php">
                    <img src="./img/header-home.png" alt="Home">
                </a>
    
                <a class="header-btn" href="./direct.php">
                    <img src="./img/header-messenger.png" alt="Message">
                </a>
    
                <div class="upload">
                    <img src="./img/header-upload.png" alt="Upload" data-upload-btn>
                </div>

                <a class="header-btn" href="./reels.php">
                    <img src="./img/header-compass.png" alt="Reels">
                </a>

                <div class="likes">
                    <label class="header-btn like" data-is-like="true" for="likes">
                        <img src="./img/header-heart.png" alt="Like">
                    </label>
                    <input name="header-like-input" id="likes" type="checkbox">
                    <div class="likes-dropdown">
                        <div class="likes-dropdown-wrapper">
                            <ul>
                                <li>
                                    <div class="user-info">
                                        <img class="dropdown-user-image" src="./img/people14.jpg" alt="">
                                        <p class="description"> <strong>mark.zuckerberg</strong> started following you.</p>
                                    </div>
                                    <div class="interaction">
                                        <button class="interaction-btn">Follow</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="user-info">
                                        <img class="dropdown-user-image" src="./img/people10.jpg" alt="">
                                        <p class="description"> <strong>mark.zuckerberg</strong> liked your reel.</p>
                                    </div>
                                    <div class="interaction">
                                        <img class="interaction-img" src="./img/people1.jpg" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="user-info">
                                        <img class="dropdown-user-image" src="./img/people4.jpg" alt="">
                                        <p class="description"> <strong>mark.zuckerberg</strong> started following you.</p>
                                    </div>
                                    <div class="interaction">
                                        <button class="interaction-btn">Follow</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="user-info">
                                        <img class="dropdown-user-image" src="./img/people8.jpg" alt="">
                                        <p class="description"> <strong>mark.zuckerberg</strong> liked your reel.</p>
                                    </div>
                                    <div class="interaction">
                                        <img class="interaction-img" src="./img/people7.jpg" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="user-info">
                                        <img class="dropdown-user-image" src="./img/people17.jpg" alt="">
                                        <p class="description"> <strong>mark.zuckerberg</strong> started following you.</p>
                                    </div>
                                    <div class="interaction">
                                        <button class="interaction-btn">Follow</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="profile-btn">
                    <label class="header-btn header-zuckerberg" for="profile">
                        <img src="<?=$get_user_profile_info["profile_photo"]?>" alt="Profile">
                    </label>
                    <input name="header-profile-input" id="profile" type="checkbox">
                    <div class="profile-dropdown">
                        <ul>
                            <li>
                                <img class="option-logo" src="./img/dropdown-user.png" alt="">
                                <a href="./profile.php?tab=post&id=<?=$_SESSION["user_id"]?>">Profile</a>
                            </li>
                            <li>
                                <img class="option-logo" src="./img/dropdown-bookmark.png" alt="">
                                <a href="./profile.php?tab=saved&id=<?=$_SESSION["user_id"]?>">Saved</a>
                            </li>
                            <li>
                                <img class="option-logo" src="./img/dropdown-setting.png" alt="">
                                <a href="./settings.php">Settings</a>
                            </li>
                            <li>
                                <img class="option-logo" src="./img/dropdown-swap.png" alt="">
                                <a href="#">Switch Accounts</a>
                            </li>
                            <li>
                                <a href="./logout.php">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="upload-modal-overlay" data-upload-modal>
    <img class="upload-modal-overlay-close-btn" src="./img/close.png" alt="" data-upload-modal-close-btn>
    <div class="upload-modal">
        <label for="upload-post">
            <img src="./img/upload-post.png" alt="">
            <p class="upload-post-title">Upload Photo</p>
        </label>
        <form method="POST" action="process.php" enctype="multipart/form-data">
            <input type="file" name="upload_post" id="upload-post">
            <textarea name="post_description" placeholder="Enter your description"></textarea>
            <input type="text" name="post_location" placeholder="Enter your location">
            <input type="submit" name="post_upload_btn" value="Share">
        </form>
    </div>
</div>
<?php }
    else {
        header("Location:login.php");
    } ?>
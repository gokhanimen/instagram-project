<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link rel="icon" href="./img/instagram-logo-16px.png">
    <link rel="stylesheet" href="./css/shared/config.css?v=<?=time()?>">
    <link rel="stylesheet" href="./css/shared/header.css?v=<?=time()?>">
    <link rel="stylesheet" href="./css/shared/modal.css?v=<?=time()?>">
    <link rel="stylesheet" href="./css/profile.css?v=<?=time()?>">
</head>
<body>
    <?php
        require_once "./config.php";
        if (isset($_SESSION["session_state"])) {
            require_once "./header.php";

            if (isset($_GET["id"])) {
                $get_user_profile_info_sql = mysqli_query($connection_string, "SELECT * FROM users WHERE id = '".$_GET["id"]."' ");
                $get_user_profile_info = mysqli_fetch_array($get_user_profile_info_sql);
            }
            
            $get_user_post_sql = mysqli_query($connection_string, "SELECT * FROM posts WHERE user_id = '".$_GET["id"]."' ORDER BY post_id DESC "); ?>

            <div class="upload-modal-overlay" data-upload-modal>
                <img class="upload-modal-overlay-close-btn" src="./img/close.png" alt="" data-upload-modal-close-btn>
                <div class="upload-modal">
                    <label for="profile_upload_photo">
                        <img src="./img/upload-post.png" alt="">
                        <p class="upload-post-title">Upload Profile Photo</p>
                    </label>
                    <form method="POST" action="process.php" enctype="multipart/form-data">
                        <input type="file" name="profile_upload_photo" id="profile_upload_photo">
                        <input type="submit" name="profile_upload_btn" value="Load">
                    </form>
                </div>
            </div>

        <main class="container">
            <section class="main-content">
                <form type="POST" class="user-info-wrapper">
                    <?php if (isset($_GET["id"]) && $_GET["id"] == $_SESSION["user_id"]) { ?>
                        <div class="profile-photo-wrapper" data-upload-btn>
                            <img class="profile-photo" src="<?=$get_user_profile_info["profile_photo"]?>" alt="Profile Photo">
                        </div>
                    <?php } else { ?> 
                    <div class="profile-photo-wrapper">
                        <img class="profile-photo" src="<?=$get_user_profile_info["profile_photo"]?>" alt="Profile Photo">
                    </div>
                    <?php } ?>
                    <div class="user-info">
                        <div class="user-name-wrapper">
                            <p class="user-nick-name"><?=$get_user_profile_info["user_name"]?></p>
                            <?php if (isset($_GET["id"]) && $_GET["id"] == $_SESSION["user_id"]) { ?>
                                <a href="./settings.php" class="user-edit-btn">Edit Profile</a>
                                <a href="./logout.php">
                                    <img class="user-logout-img" src="./img/profile-page-logout.png" alt="">
                                </a>
                            <?php } ?>
                        </div>
        
                        <div class="user-interaction-wrapper">
                            <p>
                                <strong>31</strong>
                                posts
                            </p>
                            <p>
                                <strong>110</strong>
                                followers
                            </p>
                            <p>
                                <strong>76</strong>
                                following
                            </p>
                        </div>
        
                        <div class="user-biography-wrapper">
                            <p class="user-name">
                                <strong><?=$get_user_profile_info["full_name"]?></strong>
                            </p>
                            <p class="user-job"><?=$get_user_profile_info["job"]?></p>
                            <p class="user-biography">
                            <?=$get_user_profile_info["biography"]?> 
                            </p>
                        </div>
                    </div>
                </form>

                <div class="profile-tabs">
                    <input id="post" name="tab" type="radio" data-tab="post" checked data-profile-id="<?=$_SESSION["user_id"]?>">
                    <label for="post">
                        <img class="profile-tabs-post-img" src="./img/post-grid.png" alt="">
                        <p class="profile-tabs-post-title">POSTS</p>
                    </label>

                    <div class="user-tabs-wrapper">
                        <?php while ($post = mysqli_fetch_array($get_user_post_sql)) { ?>
                            <img src="<?=$post["post_img_path"]?>" alt="User Post">  
                        <?php } ?>
                    </div>

                    <?php if (isset($_GET["id"]) && $_GET["id"] == $_SESSION["user_id"]) { ?>
                        <input id="saved" name="tab" type="radio" data-tab="saved" data-profile-id="<?=$_SESSION["user_id"]?>">
                        <label for="saved">
                            <img class="profile-tabs-saved-img" src="./img/profile-ribbon.png" alt="">
                            <p class="profile-tabs-saved-title">SAVED</p>
                        </label>
    
                        <div class="user-tabs-wrapper">
                            <img src="./img/reels3.jpg" alt="User Post">
                            <img src="./img/reels5.jpg" alt="User Post">
                            <img src="./img/reels18.jpg" alt="User Post">
                            <img src="./img/reels16.jpg" alt="User Post">
                            <img src="./img/reels10.jpg" alt="User Post">
                            <img src="./img/reels12.jpg" alt="User Post">
                            <img src="./img/reels7.jpg" alt="User Post">
                            <img src="./img/reels17.jpg" alt="User Post">
                            <img src="./img/reels3.jpg" alt="User Post">
                            <img src="./img/reels5.jpg" alt="User Post">
                            <img src="./img/reels18.jpg" alt="User Post">
                            <img src="./img/reels16.jpg" alt="User Post">
                        </div>
                    <?php } ?>
                </div>
            </section>
        </main>
        <script src="./js/profile-tabs.js"></script>
        <script src="./js/upload-modal.js"></script>
    <?php }
    else {
        header("Location:login.php");
    } ?>
</body>
</html>
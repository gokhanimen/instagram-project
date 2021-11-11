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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
    <link rel="stylesheet" href="./css/index.css?v=<?=time()?>">
</head>
<body>
<?php
    require_once "./config.php";
    if (isset($_SESSION["session_state"])) {
        require_once "./header.php";

        $get_user_profile_info_sql = mysqli_query($connection_string, "SELECT * FROM users WHERE user_name = '".$_SESSION["user_name"]."' ");
        $get_user_profile_info = mysqli_fetch_array($get_user_profile_info_sql); ?>
    <main class="container">
        <section class="main-content">
            <div class="flow">
                <div class="slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="user-img-border">
                                        <img class="story-area-user-img" src="<?=$get_user_profile_info["profile_photo"]?>" alt="<?=$get_user_profile_info["full_name"]?>">
                                    </div>
                                    <p class="story-area-username"><?=$get_user_profile_info["user_name"]?></p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="user-img-border">
                                        <img class="story-area-user-img" src="./img/people19.jpg" alt="Mark Zuckerberg">
                                    </div>
                                    <p class="story-area-username">mark.zuckerberg</p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="user-img-border">
                                        <img class="story-area-user-img" src="./img/people18.jpg" alt="Mark Zuckerberg">
                                    </div>
                                    <p class="story-area-username">mark.zuckerberg</p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="user-img-border">
                                        <img class="story-area-user-img" src="./img/people17.jpg" alt="Mark Zuckerberg">
                                    </div>
                                    <p class="story-area-username">mark.zuckerberg</p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="user-img-border">
                                        <img class="story-area-user-img" src="./img/people16.jpg" alt="Mark Zuckerberg">
                                    </div>
                                    <p class="story-area-username">mark.zuckerberg</p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="user-img-border">
                                        <img class="story-area-user-img" src="./img/people15.jpg" alt="Mark Zuckerberg">
                                    </div>
                                    <p class="story-area-username">mark.zuckerberg</p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="user-img-border">
                                        <img class="story-area-user-img" src="./img/people14.jpg" alt="Mark Zuckerberg">
                                    </div>
                                    <p class="story-area-username">mark.zuckerberg</p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="user-img-border">
                                        <img class="story-area-user-img" src="./img/people13.jpg" alt="Mark Zuckerberg">
                                    </div>
                                    <p class="story-area-username">mark.zuckerberg</p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="user-img-border">
                                        <img class="story-area-user-img" src="./img/people12.jpg" alt="Mark Zuckerberg">
                                    </div>
                                    <p class="story-area-username">mark.zuckerberg</p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="user-img-border">
                                        <img class="story-area-user-img" src="./img/people11.jpg" alt="Mark Zuckerberg">
                                    </div>
                                    <p class="story-area-username">mark.zuckerberg</p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="user-img-border">
                                        <img class="story-area-user-img" src="./img/people10.jpg" alt="Mark Zuckerberg">
                                    </div>
                                    <p class="story-area-username">mark.zuckerberg</p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="user-img-border">
                                        <img class="story-area-user-img" src="./img/people9.jpg" alt="Mark Zuckerberg">
                                    </div>
                                    <p class="story-area-username">mark.zuckerberg</p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="user-img-border">
                                        <img class="story-area-user-img" src="./img/people8.jpg" alt="Mark Zuckerberg">
                                    </div>
                                    <p class="story-area-username">mark.zuckerberg</p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="user-img-border">
                                        <img class="story-area-user-img" src="./img/people7.jpg" alt="Mark Zuckerberg">
                                    </div>
                                    <p class="story-area-username">mark.zuckerberg</p>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="post-area">
                    <?php 
                        $fetch_following_sql = mysqli_query($connection_string, "SELECT * FROM followers JOIN users ON users.id = followers.following_id JOIN posts ON posts.user_id = followers.following_id WHERE followers.follower_id = ".$_SESSION["user_id"]." ORDER BY posts.post_date DESC");
                        while ($fetch_following_info = mysqli_fetch_array($fetch_following_sql)){
                    ?>
                    <div class="post">
                        <div class="post-header">
                            <div class="post-user">
                                <a href="profile.php?id=<?=$fetch_following_info["id"]?>">
                                    <div class="user-img-border">
                                        <img class="post-area-user-img" src="<?=$fetch_following_info["profile_photo"]?>" alt="<?=$fetch_following_info["full_name"]?>">
                                    </div>
                                    <div class="post-user-info-group">
                                        <p class="post-area-username"><?=$fetch_following_info["user_name"]?></p>
                                        <p class="post-area-postdate"><?=$fetch_following_info["full_name"]?></p>
                                    </div>  
                                </a>
                            </div>

                            <a class="other-option-area" href="#">
                                <img class="other-option-img" src="./img/other-options.png" alt="Other Option">
                            </a>
                        </div>

                        <div class="post-images">
                            <img class="post-image" src="<?=$fetch_following_info["post_img_path"]?>" alt="Post İmage">
                        </div>

                        <div class="post-interaction-area">
                            <div class="post-interaction">
                                <?php 
                                    $like_control_sql = mysqli_query($connection_string, "SELECT * FROM likes JOIN users ON users.id = likes.user_id WHERE likes.post_id = ".$fetch_following_info["post_id"]." AND likes.user_id = ".$_SESSION["user_id"]." ORDER BY likes.like_id ASC");
                                    if (mysqli_num_rows($like_control_sql)) { ?>
                                    <form method="POST" action="process.php">
                                        <input type="text" value="<?=$fetch_following_info["post_id"]?>" name="post_id" hidden>
                                        <input type="submit" name="like_post_btn" class="post-heart fill" value="">
                                    </form>
                                <?php } else { ?>
                                    <form method="POST" action="process.php">
                                        <input type="text" value="<?=$fetch_following_info["post_id"]?>" name="post_id" hidden>
                                        <input type="submit" name="like_post_btn" class="post-heart void" value="">
                                    </form>
                                <?php } ?>
                                <a href="#">
                                    <img class="post-comment" src="./img/comment.png" alt="">
                                </a>

                                <a href="#">
                                    <img class="post-send" src="./img/send.png" alt="">
                                </a>
                            </div>
                            <div class="saved-area">
                            <?php 
                                    $saved_control_sql = mysqli_query($connection_string, "SELECT * FROM saved WHERE post_id = ".$fetch_following_info["post_id"]." AND user_id = ".$_SESSION["user_id"]."");
                                    if (mysqli_num_rows($saved_control_sql)) { ?>
                                        <form action="process.php" method="POST">
                                            <input type="text" value="<?=$fetch_following_info["post_id"]?>" name="post_id" hidden>
                                            <input type="submit" name="post_saved_btn" value="saved">
                                            <img class="post-ribbon" src="./img/fill-ribbon.png" alt="">
                                        </form>
                                    <?php } else { ?>
                                        <form action="process.php" method="POST">
                                            <input type="text" value="<?=$fetch_following_info["post_id"]?>" name="post_id" hidden>
                                            <input type="submit" name="post_saved_btn" value="saved">
                                            <img class="post-ribbon" src="./img/ribbon.png" alt="">
                                        </form>
                                <?php } ?>

                            </div>
                        </div>
                            
                        <?php 
                            $fetch_post_like_count_sql = mysqli_query($connection_string, "SELECT COUNT(*) as like_count FROM likes WHERE post_id = ".$fetch_following_info["post_id"]."");
                            $fetch_post_like_count = mysqli_fetch_array($fetch_post_like_count_sql);
                        ?>
                        <div class="post-info">
                            <?php if($fetch_post_like_count["like_count"] > 1){ ?>
                                <img src="<?=$fetch_following_info["profile_photo"]?>" alt="">
                                <p><b><?=$fetch_following_info["user_name"]?></b> ve <b><?=$fetch_post_like_count["like_count"] - 1?></b> kişi beğendi</p>
                            <?php } else if($fetch_post_like_count["like_count"] == 0){ ?>
                                <p>Henüz beğenen olmadı</p>
                            <?php } else{ ?>
                                <img src="<?=$fetch_following_info["profile_photo"]?>" alt="">
                                <p><b><?=$fetch_following_info["user_name"]?></b> beğendi</p>
                            <?php } ?>
                        </div>

                        <div class="post-comment-area">
                            <div class="post-user-comment">
                                <img src="<?=$fetch_following_info["profile_photo"]?>" alt=""> 
                                <p class="post-desc"><b><?=$fetch_following_info["user_name"]?></b> <?=$fetch_following_info["post_description"]?></p>
                            </div>

                            <?php 
                                $fetch_post_comment_sql = mysqli_query($connection_string, "SELECT * FROM comments JOIN posts ON comments.post_id = posts.post_id JOIN users ON users.id = comments.user_id WHERE comments.post_id = ".$fetch_following_info["post_id"]." ");
                                while ($fetch_post_comment = mysqli_fetch_array($fetch_post_comment_sql)) { ?>
                                
                                <div class="post-user-comment">
                                    <img src="<?=$fetch_post_comment["profile_photo"]?>" alt=""> 
                                    <!-- düzeltilecek scss -->
                                    <p> <a href="profile.php?id=<?=$fetch_post_comment["id"]?>&tab=post"><b><?=$fetch_post_comment["user_name"]?></b></a> <?=$fetch_post_comment["post_comment"]?></p>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="post-time">
                            <p><?=$fetch_following_info["post_date"]?></p>
                        </div>

                        <div class="post-text-area">
                            <a class="emoji-area" href="#">
                                <img class="emoji" src="./img/emoji.png" alt="">
                            </a>

                            <form action="process.php" method="POST">
                                <input placeholder="Yorum Ekle..." type="text" name="post_comment">
                                <input type="text" name="post_id" value="<?=$fetch_following_info["post_id"]?>" hidden>
                                <input type="submit" class="post-text-area-send" value="Paylaş" name="post_comment_btn">
                            </form>

                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <aside class="follow-area-wrapper">
                <div class="follow-area">
                    <div class="profile-info">
                        <img class="profile-info-img" src="<?=$get_user_profile_info["profile_photo"]?>" alt="Profile Photo">
        
                        <div class="profile">
                            <a href="#"><?=$get_user_profile_info["user_name"]?></a>
                            <p><?=$get_user_profile_info["full_name"]?></p>
                        </div>
        
                        <a class="profile-change" href="#">Switch</a>
                    </div>
    
                    <div class="other-accounts">
                        <div class="other-accounts-title">
                            <p>Suggestions For You</p>
                            <a href="search.php?search_query=+">See All</a>
                        </div>
                        <?php
                            $fetch_following_sql = mysqli_query($connection_string, "SELECT * FROM users WHERE id NOT IN (SELECT following_id FROM followers WHERE followers.follower_id = ".$_SESSION["user_id"].") LIMIT 5");
                           
                            while ($fetch_following_info = mysqli_fetch_array($fetch_following_sql)) {
                        ?>
                            <form method="POST" action="process.php" class="other-account">
                                <div class="other-account-user-info">
                                    <img src="<?=$fetch_following_info["profile_photo"]?>" alt="Profile Photo">
                                    <div class="other-account-desc">
                                        <a href="profile.php?id=<?=$fetch_following_info["id"]?>"><?=$fetch_following_info["user_name"]?></a>
                                        <a href="profile.php?id=<?=$fetch_following_info["id"]?>"><?=$fetch_following_info["full_name"]?></a>

                                        <input type="text" name="following_id" hidden value="<?=$fetch_following_info["id"]?>">
                                        <input type="text" name="following_name" hidden value="<?=$fetch_following_info["user_name"]?>">
                                        <input type="text" name="current_page" hidden value="index.php">
                                    </div>
                                </div>
                                <input type="submit" class="other-account-follow" name="follow_btn" value="Follow">
                            </form>
                        <?php } ?>
                    </div>
    
                    <div class="tags">
                        <a href="#">About <div class="point"></div></a>
                        <a href="#">Help <div class="point"></div></a>
                        <a href="#">Press <div class="point"></div></a>
                        <a href="#">API <div class="point"></div></a>
                        <a href="#">Job <div class="point"></div></a>
                        <a href="#">Privacy <div class="point"></div></a>
                        <a href="#">Terms <div class="point"></div></a>
                        <a href="#">Locations <div class="point"></div></a>
                        <a href="#">Top Accounts <div class="point"></div></a>
                        <a href="#">Hashtags <div class="point"></div></a>
                        <a href="#">Language</a>
                    </div>
                    <p class="copyright">© 2021 INSTAGRAM FROM META</p>
                </div>
            </aside>
        </section>
    </main>
    <script src="./js/story.js"></script>
    <script src="./js/upload-modal.js"></script>
    <?php }
    else {
        header("Location:login.php");
    } ?>
</body>
</html>
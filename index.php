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
                                        <img class="story-area-user-img" src="<?=$get_user_profile_info["profile_photo"]?>" alt="Mark Zuckerberg">
                                    </div>
                                    <p class="story-area-username">mark.zuckerberg</p>
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
                    <div class="post">
                        <div class="post-header">
                            <div class="post-user">
                                <a href="#">
                                    <div class="user-img-border">
                                        <img class="post-area-user-img" src="./img/header-zuckerberg.jpg" alt="Mark Zuckerberg">
                                    </div>
                                    <p class="post-area-username">mark.zuckerberg</p>
                                </a>
                            </div>

                            <a class="other-option-area" href="#">
                                <img class="other-option-img" src="./img/other-options.png" alt="Other Option">
                            </a>
                        </div>

                        <div class="post-images">
                            <img class="post-image" src="./img/post.jpg" alt="Post İmage">
                        </div>

                        <div class="post-interaction-area">
                            <div class="post-interaction">
                                <a href="#">
                                    <img class="post-heart" src="./img/post-heart.png" alt="">
                                </a>

                                <a href="#">
                                    <img class="post-comment" src="./img/comment.png" alt="">
                                </a>

                                <a href="#">
                                    <img class="post-send" src="./img/send.png" alt="">
                                </a>
                            </div>
                            <div class="saved-area">
                                <a href="#">
                                    <img class="post-ribbon" src="./img/ribbon.png" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="post-info">
                            <img src="./img/header-zuckerberg.jpg" alt="">
                            <p><b>mark.zuckerberg</b> ve <b>121 diğer kişi</b> beğendi</p>
                        </div>

                        <div class="post-comment-area">
                            <div class="post-user-comment">
                                <p class="post-desc"><b>mark.zuckerberg</b> Caption this...</p>
                                <a href="#">
                                    <img src="./img/comment-heart.png" alt="">
                                </a>
                            </div>

                            <div class="post-user-comment">
                                <p class="all-comment">10 yorumun tümünü gör</p>
                                <a href="#">
                                    <img src="./img/comment-heart.png" alt="">
                                </a>
                            </div>

                            <div class="post-user-comment">
                                <p><b>promig0002</b> Love it <a href="#">@dailydose</a></p>
                                <a href="#">
                                    <img src="./img/comment-heart.png" alt="">
                                </a>
                            </div>

                            <div class="post-user-comment">
                                <p><b>nftgallery</b> Amazing</p>
                                <a href="#">
                                    <img src="./img/comment-heart.png" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="post-time">
                            <p>28 DAKİKA ÖNCE</p>
                        </div>

                        <div class="post-text-area">
                            <a class="emoji-area" href="#">
                                <img class="emoji" src="./img/emoji.png" alt="">
                            </a>

                            <form action="#">
                                <input placeholder="Yorum Ekle..." type="text">
                            </form>

                            <a class="post-text-area-send" href="#">Paylaş</a>
                        </div>
                    </div>

                    <div class="post">
                        <div class="post-header">
                            <div class="post-user">
                                <a href="#">
                                    <div class="user-img-border">
                                        <img class="post-area-user-img" src="./img/people4.jpg" alt="Mark Zuckerberg">
                                    </div>
                                    <p class="post-area-username">mark.zuckerberg</p>
                                </a>
                            </div>

                            <a class="other-option-area" href="#">
                                <img class="other-option-img" src="./img/other-options.png" alt="Other Option">
                            </a>
                        </div>

                        <div class="post-images">
                            <img class="post-image" src="./img/post2.jpg" alt="Post İmage">
                        </div>

                        <div class="post-interaction-area">
                            <div class="post-interaction">
                                <a href="#">
                                    <img class="post-heart" src="./img/post-heart.png" alt="">
                                </a>

                                <a href="#">
                                    <img class="post-comment" src="./img/comment.png" alt="">
                                </a>

                                <a href="#">
                                    <img class="post-send" src="./img/send.png" alt="">
                                </a>
                            </div>
                            <div class="saved-area">
                                <a href="#">
                                    <img class="post-ribbon" src="./img/ribbon.png" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="post-info">
                            <img src="./img/people4.jpg" alt="">
                            <p><b>mark.zuckerberg</b> ve <b>121 diğer kişi</b> beğendi</p>
                        </div>

                        <div class="post-comment-area">
                            <div class="post-user-comment">
                                <p class="post-desc"><b>mark.zuckerberg</b> Caption this...</p>
                                <a href="#">
                                    <img src="./img/comment-heart.png" alt="">
                                </a>
                            </div>

                            <div class="post-user-comment">
                                <p class="all-comment">10 yorumun tümünü gör</p>
                                <a href="#">
                                    <img src="./img/comment-heart.png" alt="">
                                </a>
                            </div>

                            <div class="post-user-comment">
                                <p><b>promig0002</b> Love it <a href="#">@dailydose</a></p>
                                <a href="#">
                                    <img src="./img/comment-heart.png" alt="">
                                </a>
                            </div>

                            <div class="post-user-comment">
                                <p><b>nftgallery</b> Amazing</p>
                                <a href="#">
                                    <img src="./img/comment-heart.png" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="post-time">
                            <p>28 DAKİKA ÖNCE</p>
                        </div>

                        <div class="post-text-area">
                            <a class="emoji-area" href="#">
                                <img class="emoji" src="./img/emoji.png" alt="">
                            </a>

                            <form action="#">
                                <input placeholder="Yorum Ekle..." type="text">
                            </form>

                            <a class="post-text-area-send" href="#">Paylaş</a>
                        </div>
                    </div>

                    <div class="post">
                        <div class="post-header">
                            <div class="post-user">
                                <a href="#">
                                    <div class="user-img-border">
                                        <img class="post-area-user-img" src="./img/people20.jpg" alt="Mark Zuckerberg">
                                    </div>
                                    <p class="post-area-username">mark.zuckerberg</p>
                                </a>
                            </div>

                            <a class="other-option-area" href="#">
                                <img class="other-option-img" src="./img/other-options.png" alt="Other Option">
                            </a>
                        </div>

                        <div class="post-images">
                            <img class="post-image" src="./img/post3.jpg" alt="Post İmage">
                        </div>

                        <div class="post-interaction-area">
                            <div class="post-interaction">
                                <a href="#">
                                    <img class="post-heart" src="./img/post-heart.png" alt="">
                                </a>

                                <a href="#">
                                    <img class="post-comment" src="./img/comment.png" alt="">
                                </a>

                                <a href="#">
                                    <img class="post-send" src="./img/send.png" alt="">
                                </a>
                            </div>
                            <div class="saved-area">
                                <a href="#">
                                    <img class="post-ribbon" src="./img/ribbon.png" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="post-info">
                            <img src="./img/people20.jpg" alt="">
                            <p><b>mark.zuckerberg</b> ve <b>121 diğer kişi</b> beğendi</p>
                        </div>

                        <div class="post-comment-area">
                            <div class="post-user-comment">
                                <p class="post-desc"><b>mark.zuckerberg</b> Caption this...</p>
                                <a href="#">
                                    <img src="./img/comment-heart.png" alt="">
                                </a>
                            </div>

                            <div class="post-user-comment">
                                <p class="all-comment">10 yorumun tümünü gör</p>
                                <a href="#">
                                    <img src="./img/comment-heart.png" alt="">
                                </a>
                            </div>

                            <div class="post-user-comment">
                                <p><b>promig0002</b> Love it <a href="#">@dailydose</a></p>
                                <a href="#">
                                    <img src="./img/comment-heart.png" alt="">
                                </a>
                            </div>

                            <div class="post-user-comment">
                                <p><b>nftgallery</b> Amazing</p>
                                <a href="#">
                                    <img src="./img/comment-heart.png" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="post-time">
                            <p>28 DAKİKA ÖNCE</p>
                        </div>

                        <div class="post-text-area">
                            <a class="emoji-area" href="#">
                                <img class="emoji" src="./img/emoji.png" alt="">
                            </a>

                            <form action="#">
                                <input placeholder="Yorum Ekle..." type="text">
                            </form>

                            <a class="post-text-area-send" href="#">Paylaş</a>
                        </div>
                    </div>
                    
                    <div class="post">
                        <div class="post-header">
                            <div class="post-user">
                                <a href="#">
                                    <div class="user-img-border">
                                        <img class="post-area-user-img" src="./img/people19.jpg" alt="Mark Zuckerberg">
                                    </div>
                                    <p class="post-area-username">mark.zuckerberg</p>
                                </a>
                            </div>

                            <a class="other-option-area" href="#">
                                <img class="other-option-img" src="./img/other-options.png" alt="Other Option">
                            </a>
                        </div>

                        <div class="post-images">
                            <img class="post-image" src="./img/post4.jpg" alt="Post İmage">
                        </div>

                        <div class="post-interaction-area">
                            <div class="post-interaction">
                                <a href="#">
                                    <img class="post-heart" src="./img/post-heart.png" alt="">
                                </a>

                                <a href="#">
                                    <img class="post-comment" src="./img/comment.png" alt="">
                                </a>

                                <a href="#">
                                    <img class="post-send" src="./img/send.png" alt="">
                                </a>
                            </div>
                            <div class="saved-area">
                                <a href="#">
                                    <img class="post-ribbon" src="./img/ribbon.png" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="post-info">
                            <img src="./img/people19.jpg" alt="">
                            <p><b>mark.zuckerberg</b> ve <b>121 diğer kişi</b> beğendi</p>
                        </div>

                        <div class="post-comment-area">
                            <div class="post-user-comment">
                                <p class="post-desc"><b>mark.zuckerberg</b> Caption this...</p>
                                <a href="#">
                                    <img src="./img/comment-heart.png" alt="">
                                </a>
                            </div>

                            <div class="post-user-comment">
                                <p class="all-comment">10 yorumun tümünü gör</p>
                                <a href="#">
                                    <img src="./img/comment-heart.png" alt="">
                                </a>
                            </div>

                            <div class="post-user-comment">
                                <p><b>promig0002</b> Love it <a href="#">@dailydose</a></p>
                                <a href="#">
                                    <img src="./img/comment-heart.png" alt="">
                                </a>
                            </div>

                            <div class="post-user-comment">
                                <p><b>nftgallery</b> Amazing</p>
                                <a href="#">
                                    <img src="./img/comment-heart.png" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="post-time">
                            <p>28 DAKİKA ÖNCE</p>
                        </div>

                        <div class="post-text-area">
                            <a class="emoji-area" href="#">
                                <img class="emoji" src="./img/emoji.png" alt="">
                            </a>

                            <form action="#">
                                <input placeholder="Yorum Ekle..." type="text">
                            </form>

                            <a class="post-text-area-send" href="#">Paylaş</a>
                        </div>
                    </div>
                </div>
            </div>

            <aside class="follow-area-wrapper">
                <div class="follow-area">
                    <div class="profile-info">
                        <img class="profile-info-img" src="<?=$get_user_profile_info["profile_photo"]?>" alt="Profile Photo">
        
                        <div class="profile">
                            <a href="#">mark.zuckerberg</a>
                            <p>Mark Zuckerberg</p>
                        </div>
        
                        <a class="profile-change" href="#">Switch</a>
                    </div>
    
                    <div class="other-accounts">
                        <div class="other-accounts-title">
                            <p>Suggestions For You</p>
                            <a href="#">See All</a>
                        </div>
                        <div class="other-account">
                            <div class="other-acoount-user-info">
                                <img src="./img/people6.jpg" alt="Profile Photo">
                                <div class="other-account-desc">
                                    <a href="#">mark.zuckerberg</a>
                                    <p>New to Instagram</p>
                                </div>
                            </div>
        
                            <a class="other-account-follow" href="#">Follow</a>
                        </div>
                        <div class="other-account">
                            <div class="other-acoount-user-info">
                                <img src="./img/people5.jpg" alt="Profile Photo">
                                <div class="other-account-desc">
                                    <a href="#">mark.zuckerberg</a>
                                    <p>Follows You</p>
                                </div>
                            </div>
        
                            <a class="other-account-follow" href="#">Follow</a>
                        </div>
                        <div class="other-account">
                            <div class="other-acoount-user-info">
                                <img src="./img/people4.jpg" alt="Profile Photo">
                                <div class="other-account-desc">
                                    <a href="#">mark.zuckerberg</a>
                                    <p>New to Instagram</p>
                                </div>
                            </div>
        
                            <a class="other-account-follow" href="#">Follow</a>
                        </div>
                        <div class="other-account">
                            <div class="other-acoount-user-info">
                                <img src="./img/people3.jpg" alt="Profile Photo">
                                <div class="other-account-desc">
                                    <a href="#">mark.zuckerberg</a>
                                    <p>Follows You</p>
                                </div>
                            </div>
        
                            <a class="other-account-follow" href="#">Follow</a>
                        </div>
                        <div class="other-account">
                            <div class="other-acoount-user-info">
                                <img src="./img/people2.jpg" alt="Profile Photo">
                                <div class="other-account-desc">
                                    <a href="#">mark.zuckerberg</a>
                                    <p>Follows You</p>
                                </div>
                            </div>
        
                            <a class="other-account-follow" href="#">Follow</a>
                        </div>
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
    <?php }
    else {
        header("Location:login.php");
    } ?>
</body>
</html>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="icon" href="./img/instagram-logo-16px.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
    <title>Instagram</title>
</head>
<body>
    <header class="header-area">
    <div class="container">
        <div class="header">
            <a class="header-logo-area" href="./index.html">
                <img class="header-logo" src="./img/instagram-title.png" alt="Instagram">
            </a>
            
            <form action="#">
                <input class="header-search" type="text" placeholder="Search">
            </form>
    
            <div class="button-group">
                <a class="header-btn" href="#">
                    <img src="./img/header-home.png" alt="Home">
                </a>
    
                <a class="header-btn" href="./direct.html">
                    <img src="./img/header-messenger.png" alt="Message">
                </a>
    
                <a class="header-btn" href="./reels.html">
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
                                        <p class="description"> <strong>mark.zuckerberg</strong> seni takip etmeye başladı.</p>
                                    </div>
                                    <div class="interaction">
                                        <button class="interaction-btn">Takip et</button>
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
                                        <p class="description"> <strong>mark.zuckerberg</strong> seni takip etmeye başladı.</p>
                                    </div>
                                    <div class="interaction">
                                        <button class="interaction-btn">Takip et</button>
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
                                        <p class="description"> <strong>mark.zuckerberg</strong> seni takip etmeye başladı.</p>
                                    </div>
                                    <div class="interaction">
                                        <button class="interaction-btn">Takip et</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="profile-btn">
                    <label class="header-btn header-zuckerberg" for="profile">
                        <img src="./img/header-zuckerberg.jpg" alt="Profile">
                    </label>
                    <input name="header-profile-input" id="profile" type="checkbox">
                    <div class="profile-dropdown">
                        <ul>
                            <li>
                                <img class="option-logo" src="./img/dropdown-user.png" alt="">
                                <a href="./profile.html">Profil</a>
                            </li>
                            <li>
                                <img class="option-logo" src="./img/dropdown-bookmark.png" alt="">
                                <a href="#">Kaydedilenler</a>
                            </li>
                            <li>
                                <img class="option-logo" src="./img/dropdown-setting.png" alt="">
                                <a href="./setting.html">Ayarlar</a>
                            </li>
                            <li>
                                <img class="option-logo" src="./img/dropdown-swap.png" alt="">
                                <a href="#">Hesap değiştir</a>
                            </li>
                            <li>
                                <a href="./login.html">Çıkış yap</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
    </header>
    <main class="container">
        <section class="main-content">
            <div class="flow">
                <div class="slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="user-img-border">
                                        <img class="story-area-user-img" src="./img/header-zuckerberg.jpg" alt="Mark Zuckerberg">
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
                        <img class="profile-info-img" src="./img/header-zuckerberg.jpg" alt="Profile Photo">
        
                        <div class="profile">
                            <a href="#">mark.zuckerberg</a>
                            <p>Mark Zuckerberg</p>
                        </div>
        
                        <a class="profile-change" href="#">Geçiş Yap</a>
                    </div>
    
                    <div class="other-accounts">
                        <div class="other-accounts-title">
                            <p>Senin İçin Öneriler</p>
                            <a href="#">Tümünü Gör</a>
                        </div>
                        <div class="other-account">
                            <div class="other-acoount-user-info">
                                <img src="./img/people6.jpg" alt="Profile Photo">
                                <div class="other-account-desc">
                                    <a href="#">mark.zuckerberg</a>
                                    <p>New to Instagram</p>
                                </div>
                            </div>
        
                            <a class="other-account-follow" href="#">Takip Et</a>
                        </div>
                        <div class="other-account">
                            <div class="other-acoount-user-info">
                                <img src="./img/people5.jpg" alt="Profile Photo">
                                <div class="other-account-desc">
                                    <a href="#">mark.zuckerberg</a>
                                    <p>Follows You</p>
                                </div>
                            </div>
        
                            <a class="other-account-follow" href="#">Takip Et</a>
                        </div>
                        <div class="other-account">
                            <div class="other-acoount-user-info">
                                <img src="./img/people4.jpg" alt="Profile Photo">
                                <div class="other-account-desc">
                                    <a href="#">mark.zuckerberg</a>
                                    <p>New to Instagram</p>
                                </div>
                            </div>
        
                            <a class="other-account-follow" href="#">Takip Et</a>
                        </div>
                        <div class="other-account">
                            <div class="other-acoount-user-info">
                                <img src="./img/people3.jpg" alt="Profile Photo">
                                <div class="other-account-desc">
                                    <a href="#">mark.zuckerberg</a>
                                    <p>Follows You</p>
                                </div>
                            </div>
        
                            <a class="other-account-follow" href="#">Takip Et</a>
                        </div>
                        <div class="other-account">
                            <div class="other-acoount-user-info">
                                <img src="./img/people2.jpg" alt="Profile Photo">
                                <div class="other-account-desc">
                                    <a href="#">mark.zuckerberg</a>
                                    <p>Follows You</p>
                                </div>
                            </div>
        
                            <a class="other-account-follow" href="#">Takip Et</a>
                        </div>
                    </div>
    
                    <div class="tags">
                        <a href="#">Hakkında <div class="point"></div></a>
                        <a href="#">Yardım <div class="point"></div></a>
                        <a href="#">Basın <div class="point"></div></a>
                        <a href="#">API <div class="point"></div></a>
                        <a href="#">İş Fırsatları <div class="point"></div></a>
                        <a href="#">Gizlilik <div class="point"></div></a>
                        <a href="#">Koşullar <div class="point"></div></a>
                        <a href="#">Konumlar <div class="point"></div></a>
                        <a href="#">Başlıca Hesaplar <div class="point"></div></a>
                        <a href="#">Konu Etiketleri <div class="point"></div></a>
                        <a href="#">Dil</a>
                    </div>
                    <p class="copyright">© 2021 INSTAGRAM FROM FACEBOOK</p>
                </div>
            </aside>
        </section>
    </main>
    <script src="./js/story.js"></script>
</body>
</html>
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
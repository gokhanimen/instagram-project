<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="icon" href="./img/instagram-logo-16px.png">
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
                    <a class="header-btn" href="./index.html">
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
                                    <a href="./setting.html?edit-tab=edit-profile">Ayarlar</a>
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
            <form type="POST" class="user-info-wrapper">
                <input type="file" id="upload-profile-photo">
                <label for="upload-profile-photo" class="profile-photo-wrapper">
                    <img class="profile-photo" src="./img/header-zuckerberg.jpg" alt="Profile Photo">
                </label>
    
                <div class="user-info">
                    <div class="user-name-wrapper">
                        <p class="user-nick-name">mark.zuckerberk</p>
                        <a href="./setting.html" class="user-edit-btn">Edit Profile</a>
                        <a href="#">
                            <img class="user-setting-img" src="./img/profile-page-settings.png" alt="">
                        </a>
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
                            <strong>Mark Zuckerberg</strong>
                        </p>
                        <p class="user-job">Software</p>
                        <p class="user-biography">
                            This is a university project. 
                        </p>
                    </div>
                </div>
            </form>

            <div class="profile-tabs">
                <input id="post" name="tab" type="radio" data-tab="post" checked>
                <label for="post">
                    <img class="profile-tabs-post-img" src="./img/post-grid.png" alt="">
                    <p class="profile-tabs-post-title">POSTS</p>
                </label>

                <div class="user-tabs-wrapper">
                    <img src="./img/reels10.jpg" alt="User Post">
                    <img src="./img/reels12.jpg" alt="User Post">
                    <img src="./img/reels14.jpg" alt="User Post">
                    <img src="./img/reels7.jpg" alt="User Post">
                    <img src="./img/reels17.jpg" alt="User Post">
                    <img src="./img/reels3.jpg" alt="User Post">
                    <img src="./img/reels5.jpg" alt="User Post">
                    <img src="./img/reels5.jpg" alt="User Post">
                    <img src="./img/reels18.jpg" alt="User Post">
                    <img src="./img/reels16.jpg" alt="User Post">
                    <img src="./img/reels7.jpg" alt="User Post">
                    <img src="./img/reels17.jpg" alt="User Post">
                    <img src="./img/reels3.jpg" alt="User Post">
                    <img src="./img/reels5.jpg" alt="User Post">
                    <img src="./img/reels18.jpg" alt="User Post">
                    <img src="./img/reels16.jpg" alt="User Post">
                    <img src="./img/reels10.jpg" alt="User Post">
                    <img src="./img/reels12.jpg" alt="User Post">
                </div>

                <input id="saved" name="tab" type="radio" data-tab="saved">
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
            </div>
        </section>
    </main>
    <script src="./js/profile-tabs.js"></script>
</body>
</html>
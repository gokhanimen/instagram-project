<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/setting.css">
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
                                    <a href="#">Ayarlar</a>
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
            <aside class="side-menu-wrapper">
                <div class="side-menu-list-wrapper">
                    <ul class="side-menu-list">
                        <input type="radio" name="edit-tab" id="edit-profile" data-edit-tab="edit-profile" checked>
                        <label for="edit-profile">
                            <li class="side-menu-option">
                                <p>Edit Profile</p>
                            </li>
                        </label>
                        <input type="radio" name="edit-tab" id="change-password" data-edit-tab="change-password">
                        <label for="change-password">
                            <li class="side-menu-option">
                                <p>Change Password</p>
                            </li>
                        </label>        

                        <li class="side-menu-option">
                            <p>Professional Account</p>
                        </li>
                        <li class="side-menu-option">
                            <p>Apps and Websites</p>
                        </li>
                        <li class="side-menu-option">
                            <p>Email and SMS</p>
                        </li>
                        <li class="side-menu-option">
                            <p>Push Notifications</p>
                        </li>
                        <li class="side-menu-option">
                            <p>Manage Contacts</p>
                        </li>
                        <li class="side-menu-option">
                            <p>Privacy and Security</p>
                        </li>
                        <li class="side-menu-option">
                            <p>Login Activity</p>
                        </li>
                        <li class="side-menu-option">
                            <p>Emails from Instagram</p>
                        </li>
                    </ul>
                </div>
                
                <div class="side-menu-wrapper-section-desc">
                    <p class="side-menu-wrapper-section-desc-title">F A C E B O O K</p>

                    <a href="#">Accounts Center</a>
    
                    <p>
                        Control settings for connected experiences across Instagram, the Facebook app and Messenger, including story and post sharing and logging in.
                    </p>
                </div>
            </aside>

            <div class="side-menu-content">
                <form type="POST" class="edit-profile">
                    <div class="profile-info">
                        <img class="profile-img" src="./img/header-zuckerberg.jpg" alt="">

                        <div class="profile-title">
                            <p class="profile-name">mark.zuckerberk</p>
                            <p class="profile-photo-change">
                                Change Profile Photo
                            </p>
                        </div>
                    </div>
                    <div class="user-information">
                        <div class="user-information-title-wrapper">
                            <p class="user-information-title">Name</p>
                        </div>
                        <div class="user-information-desc">
                            <input type="text" class="user-information-desc-title">
                            <p class="user-information-desc-content">
                                Help people discover your account by using the name you're known by: either your full name, nickname, or business name.
                                You can only change your name twice within 14 days.
                            </p>
                        </div>
                    </div>
                    <div class="user-information">
                        <div class="user-information-title-wrapper">
                            <p class="user-information-title">Username</p>
                        </div>
                        <div class="user-information-desc">
                            <input class="user-information-desc-title">
                            <p class="user-information-desc-content">
                                In most cases, you'll be able to change your username back to shenifyart for another 14 days. <a href="#">Learn More</a>
                            </p>
                        </div>
                    </div>
                    <div class="user-information">
                        <div class="user-information-title-wrapper">
                            <p class="user-information-title">Website</p>
                        </div>
                        <div class="user-information-desc">
                            <input class="user-information-desc-title">
                        </div>
                    </div>
                    <div class="user-information">
                        <div class="user-information-title-wrapper">
                            <p class="user-information-title">Bio</p>
                        </div>
                        <div class="user-information-desc">
                            <textarea class="user-information-desc-textarea" name="deneme" id="deneme"></textarea>
                            <p class="user-information-desc-content">
                                Personal Information
                                Provide your personal information, even if the account is used for a business, a pet or something else. This won't be a part of your public profile.
                            </p>
                        </div>
                    </div>
                    <div class="user-information">
                        <div class="user-information-title-wrapper">
                            <p class="user-information-title">Email</p>
                        </div>
                        <div class="user-information-desc">
                            <input type="email" class="user-information-desc-title">
                        </div>
                    </div>
                    <div class="user-information">
                        <div class="user-information-title-wrapper">
                            <p class="user-information-title">Phone Number</p>
                        </div>
                        <div class="user-information-desc">
                            <input type="tel" class="user-information-desc-title">
                        </div>
                    </div>
                    <div class="user-information">
                        <div class="user-information-title-wrapper">
                            <p class="user-information-title">Gender</p>
                        </div>
                        <div class="user-information-desc">
                            <input class="user-information-desc-title">
                        </div>
                    </div>
                    <input type="submit" class="submit-btn" value="Submit">
                </form>
                <div class="change-password">
                    <div class="change-password-profile-info">
                        <img class="change-password-profile-img" src="./img/header-zuckerberg.jpg" alt="">

                        <p class="change-password-profile-name">mark.zuckerberk</p>
                    </div>
                    <form type="POST" class="change-password-area">
                        <div class="change-password-area-old">
                            <p class="change-password-area-old-title">Old Password</p>
                            <input type="password">
                        </div>
                        
                        <div class="change-password-area-new">
                            <p class="change-password-area-new-title">New Password</p>
                            <input type="password">
                        </div>

                        <div class="change-password-area-confirm">
                            <p class="change-password-area-confirm-title">Confirm New Password</p>
                            <input type="password">
                        </div>
                          
                        <input type="submit" class="change-password-area-button" value="Change Password">
                    </form>
                </div>
            </div>
        </section>
    </main>
    <script src="./js/edit-profile-tabs.js"></script>
</body>
</html>
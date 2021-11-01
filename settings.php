<?php
    require_once "./shared/header.php";
?>

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
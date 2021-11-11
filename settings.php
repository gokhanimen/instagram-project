<?php
    require_once "./config.php";
    if (isset($_SESSION["session_state"])) {
        require_once "./header.php";

        $get_user_profile_info_sql = mysqli_query($connection_string, "SELECT * FROM users WHERE user_name = '".$_SESSION["user_name"]."' ");
        $get_user_profile_info = mysqli_fetch_array($get_user_profile_info_sql);?>

<link rel="stylesheet" href="./css/settings.css?v=<?=time()?>">
<link rel="stylesheet" href="./css/shared/header.css?v=<?=time()?>">
<link rel="stylesheet" href="./css/shared/modal.css?v=<?=time()?>">
<link rel="stylesheet" href="./css/shared/config.css?v=<?=time()?>">
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
                <form method="POST" class="edit-profile" action="process.php">
                    <div class="profile-info">
                        <img class="profile-img" src="<?=$get_user_profile_info["profile_photo"]?>" alt="">

                        <div class="profile-title">
                            <p class="profile-name"><?=$get_user_profile_info["user_name"]?></p>
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
                            <input type="text" class="user-information-desc-title" name="full_name" value="<?=$get_user_profile_info["full_name"]?>">
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
                            <input class="user-information-desc-title" name="user_name" value="<?=$get_user_profile_info["user_name"]?>">
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
                            <input class="user-information-desc-title" name="website" value="<?=$get_user_profile_info["website"]?>">
                        </div>
                    </div>
                    <div class="user-information">
                        <div class="user-information-title-wrapper">
                            <p class="user-information-title">Bio</p>
                        </div>
                        <div class="user-information-desc">
                            <textarea class="user-information-desc-textarea" name="biography"><?=$get_user_profile_info["biography"]?></textarea>
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
                            <input type="email" class="user-information-desc-title" name="e_mail" value="<?=$get_user_profile_info["e_mail"]?>">
                        </div>
                    </div>
                    <div class="user-information">
                        <div class="user-information-title-wrapper">
                            <p class="user-information-title">Phone Number</p>
                        </div>
                        <div class="user-information-desc">
                            <input type="tel" class="user-information-desc-title" name="phone_number" value="<?=$get_user_profile_info["phone_number"]?>">
                        </div>
                    </div>
                    <div class="user-information">
                        <div class="user-information-title-wrapper">
                            <p class="user-information-title">Gender</p>
                        </div>
                        <div class="user-information-desc">
                            <input class="user-information-desc-title" name="gender" value="<?=$get_user_profile_info["gender"]?>">
                        </div>
                    </div>
                    <input type="submit" class="submit-btn" name="settings_update_btn" value="Submit">
                </form>
                <div class="change-password">
                    <div class="change-password-profile-info">
                        <img class="change-password-profile-img" src="./img/header-zuckerberg.jpg" alt="">

                        <p class="change-password-profile-name"><?=$get_user_profile_info["user_name"]?></p>
                    </div>
                    <form method="POST" class="change-password-area" action="process.php">
                        <div class="change-password-area-old">
                            <p class="change-password-area-old-title">Old Password</p>
                            <input type="text" name="old_password_input">
                        </div>
                        
                        <div class="change-password-area-new">
                            <p class="change-password-area-new-title">New Password</p>
                            <input type="text" name="new_password_input">
                        </div>

                        <div class="change-password-area-confirm">
                            <p class="change-password-area-confirm-title">Confirm New Password</p>
                            <input type="text" name="renew_password_input">
                        </div>
                          
                        <input type="submit" class="change-password-area-button" value="Change Password" name="change_password_btn">
                    </form>
                </div>
            </div>
        </section>
    </main>
    <script src="./js/edit-profile-tabs.js"></script>
    <script src="./js/upload-modal.js"></script>
    <?php } 
        else {
            header("Location:login.php");
        }
    ?>
</body>
</html>
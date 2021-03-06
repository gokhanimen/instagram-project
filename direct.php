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
    <link rel="stylesheet" href="./css/direct.css?v=<?=time()?>">
</head>
<body>
    <?php
        include "./config.php";
        include "./header.php";
    ?>
    <main class="container">
        <section class="main-content">
            <div class="user-flow-area">
                <div class="account-info">
                    <a href="#"> 
                        <p>mark.zuckerberk</p> 
                        <img src="./img/down-arrow.png" alt="">
                    </a>

                    <img class="write-message" src="./img/write-message.png" alt="">
                </div>
                <div class="user-flow">
                    <div class="message-type">
                        <a class="message-type-primary" href="#">PRIMARY</a>
                        <a class="message-type-general" href="#">GENERAL</a>
                        <a class="message-type-requests" href="#">Requests (16)</a>
                    </div>

                    <div class="users">
                        <div class="user">
                            <img class="user-img" src="./img/people19.jpg" alt="Mark Zuckerberg">
            
                            <div class="user-info">
                                <a href="#">mark.zuckerberk</a>
                                <div class="message-info">
                                    <p class="message-content">New Message</p>
                                    <div class="point"></div>
                                    <p>3d</p>
                                </div>
                            </div>
                        </div>

                        <div class="user">
                            <img class="user-img" src="./img/people18.jpg" alt="Profile Photo">
            
                            <div class="user-info">
                                <a href="#">mark.zuckerberk</a>
                                <div class="message-info">
                                    <p class="message-content">New Message</p>
                                    <div class="point"></div>
                                    <p>3d</p>
                                </div>
                            </div>
                        </div>

                        <div class="user">
                            <img class="user-img" src="./img/people17.jpg" alt="Profile Photo">
            
                            <div class="user-info">
                                <a href="#">mark.zuckerberk</a>
                                <div class="message-info">
                                    <p class="message-content">New Message</p>
                                    <div class="point"></div>
                                    <p>3d</p>
                                </div>
                            </div>
                        </div>

                        <div class="user">
                            <img class="user-img" src="./img/people16.jpg" alt="Profile Photo">
            
                            <div class="user-info">
                                <a href="#">mark.zuckerberk</a>
                                <div class="message-info">
                                    <p class="message-content">New Message</p>
                                    <div class="point"></div>
                                    <p>3d</p>
                                </div>
                            </div>
                        </div>

                        <div class="user">
                            <img class="user-img" src="./img/people15.jpg" alt="Profile Photo">
            
                            <div class="user-info">
                                <a href="#">mark.zuckerberk</a>
                                <div class="message-info">
                                    <p class="message-content">New Message</p>
                                    <div class="point"></div>
                                    <p>3d</p>
                                </div>
                            </div>
                        </div>

                        <div class="user">
                            <img class="user-img" src="./img/people14.jpg" alt="Profile Photo">
            
                            <div class="user-info">
                                <a href="#">mark.zuckerberk</a>
                                <div class="message-info">
                                    <p class="message-content">New Message</p>
                                    <div class="point"></div>
                                    <p>3d</p>
                                </div>
                            </div>
                        </div>

                        <div class="user">
                            <img class="user-img" src="./img/people13.jpg" alt="Profile Photo">
            
                            <div class="user-info">
                                <a href="#">mark.zuckerberk</a>
                                <div class="message-info">
                                    <p class="message-content">New Message</p>
                                    <div class="point"></div>
                                    <p>3d</p>
                                </div>
                            </div>
                        </div>

                        <div class="user">
                            <img class="user-img" src="./img/people7.jpg" alt="Profile Photo">
            
                            <div class="user-info">
                                <a href="#">mark.zuckerberk</a>
                                <div class="message-info">
                                    <p class="message-content">New Message</p>
                                    <div class="point"></div>
                                    <p>3d</p>
                                </div>
                            </div>
                        </div>

                        <div class="user">
                            <img class="user-img" src="./img/people10.jpg" alt="Profile Photo">
            
                            <div class="user-info">
                                <a href="#">mark.zuckerberk</a>
                                <div class="message-info">
                                    <p class="message-content">New Message</p>
                                    <div class="point"></div>
                                    <p>3d</p>
                                </div>
                            </div>
                        </div>

                        <div class="user">
                            <img class="user-img" src="./img/people8.jpg" alt="Profile Photo">
                            <div class="user-info">
                                <a href="#">mark.zuckerberk</a>
                                <div class="message-info">
                                    <p class="message-content">New Message</p>
                                    <div class="point"></div>
                                    <p>3d</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="message-area">
                <div class="message-area-content">
                    <div class="img-area">
                        <img src="./img/message-area-background.png" alt="Instagram Direct Message">
                    </div>

                    <div class="message-area-desc">
                        <p class="message-area-desc-title">Your Messages</p>
                        <p class="message-area-description">Send private photos and messages to a friend or group.</p>
                    </div>

                    <button class="message-area-btn">Send Message</button>
                </div>
            </div>
        </section>
    </main>
    <script src="./js/upload-modal.js"></script>
</body>
</html>
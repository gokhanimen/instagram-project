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
    <link rel="stylesheet" href="./css/reels.css?v=<?=time()?>">
</head>
<body>
    <?php
        include "./config.php";
        include "./header.php";
    ?>
    <main class="container">
        <section class="main-content">
            <div class="flow">
                <div class="first-group">
                    <div class="column">
                        <a href="#">
                            <img src="./img/reels1.jpg" alt="Image">
                        </a>
                        <a href="#">
                            <img src="./img/reels2.jpg" alt="Image">
                        </a>
                    </div>
    
                    <a href="#">
                        <img class="big-image" src="./img/reels4.jpg" alt="Image">
                    </a>
                </div>
                <div class="second-group">
                    <a href="#">
                        <img src="./img/reels3.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="./img/reels5.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="./img/reels6.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="./img/reels7.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="./img/reels8.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="./img/reels9.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="flow">
                <div class="first-group">
                    <a href="#">
                        <img class="big-image" src="./img/reels14.jpg" alt="Image">
                    </a>

                    <div class="column">
                        <a href="#">
                            <img src="./img/reels10.jpg" alt="Image">
                        </a>
                        <a href="#">
                            <img src="./img/reels11.jpg" alt="Image">
                        </a>
                    </div>
                </div>
                <div class="second-group">
                    <a href="#">
                        <img src="./img/reels12.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="./img/reels13.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="./img/reels15.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="./img/reels16.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="./img/reels17.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="./img/reels18.jpg" alt="">
                    </a>
                </div>
            </div>
        </section>
    </main>
    <script src="./js/upload-modal.js"></script>
</body>
</html>
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
    <link rel="stylesheet" href="./css/all-users.css?v=<?=time()?>">
</head>
<body>
    <?php
        require_once "./config.php";
        if (isset($_SESSION["session_state"])) {
            require_once "./header.php"; ?>
            <main class="container">
                <section class="main-content">
                    <h4>Suggested</h4>
                    <div class="all-users__content">
                        <form method="POST" action="process.php" class="all-users__item">
                            <div class="all-users__info">
                                <img src="./img/people6.jpg" alt="Profile Photo">
                                <div class="all-users__info-group">
                                    <a class="all-users__info-username" href="#"><strong>mark.zuckerberg</strong></a>
                                    <a class="all-users__info-fullname" href="#">Mark Zuckerberg</a>
                                </div>
                            </div>
        
                            <input type="submit" class="all-users__info-btn" value="Follow"/>
                        </form>
                        
                        <form method="POST" action="process.php" class="all-users__item">
                            <div class="all-users__info">
                                <img src="./img/people6.jpg" alt="Profile Photo">
                                <div class="all-users__info-group">
                                    <a class="all-users__info-username" href="#"><strong>mark.zuckerberg</strong></a>
                                    <a class="all-users__info-fullname" href="#">Mark Zuckerberg</a>
                                </div>
                            </div>
        
                            <input type="submit" class="all-users__info-btn" value="Follow"/>
                        </form>
                    </div>
                </section>
            </main>
            <script src="./js/profile-tabs.js"></script>
    <?php }
    else {
        header("Location:login.php");
    } ?>
</body>
</html>
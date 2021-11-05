<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/instagram-logo-16px.png">
    <link rel="stylesheet" href="./css/shared/config.css?v=<?=time()?>">
    <link rel="stylesheet" href="./css/sign-up.css?v=<?=time()?>">
    <title>Instagram</title>
</head>
<body>
    <div class="container">
        <main class="home-section">
            <div class="sign-up-area">
                <img class="instagram-logo" src="./img/login-instagram-logo.png" alt="Instagram Logo">

                <p class="sign-message">
                    Sign up to see photos and videos from your friends.
                </p>

                <button class="with-facebook-btn">
                    <a href="#">
                        <div class="img-container">
                            <img src="./img/sign-up-facebook.png" alt="">
                        </div>
                        Log in with Facebook
                    </a>
                </button>

                <p class="login-area-or">OR</p>

                <form class="sign-up-area-input-wrapper" action="process.php" method="POST">
                    <input type="text" name="email" placeholder="Email">
                    <input type="text" name="fullname" placeholder="Full Name">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">

                    <input type="submit" name="signup_btn" class="sign-up-btn" value="Sign up">
                </form>

                <p class="instagram-policy">
                    By signing up, you agree to our Terms , Data Policy and Cookies Policy.
                </p>
            </div>
            <div class="have-an-account">
                <p>Don't have an account? <a href="./login.php">Log in</a></p> 
            </div>
            <div class="get-app">
                <p>Get the app.</p>
                <div class="download">
                    <img src="./img/download-appstore.png" alt="App Store">
                    <img src="./img/download-playstore.png" alt="Play Store">
                </div>
            </div>
        </main>
        <div class="tags">
            <div class="support-tags">
                <a href="#">About</a>
                <a href="#">Blog</a>
                <a href="#">Jobs</a>
                <a href="#">Help</a>
                <a href="#">API</a>
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Top Accounts</a>
                <a href="#">Hashtags</a>
                <a href="#">Locations</a>
                <a href="#">Instagram Lite</a>
            </div>
            <p class="copyright">© 2021 Instagram from Facebook</p>
        </div>
    </div>
</body>
</html>
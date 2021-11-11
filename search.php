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
    <link rel="stylesheet" href="./css/all-users.css?v=<?=time()?>">
</head>
<body>
    <?php
        require_once "./config.php";
        if (isset($_SESSION["session_state"])) {
            require_once "./header.php";
            if (isset($_GET["search_query"])) {
                if ($_GET["search_query"] != "") { 
                    $search_query = addslashes(strip_tags(trim($_GET["search_query"])));
                    $get_search_result_sql = mysqli_query($connection_string, "SELECT * FROM users WHERE (user_name LIKE '%$search_query%' OR full_name LIKE '%$search_query%') AND NOT id = ".$_SESSION["user_id"]."")or die( mysqli_error($connection_string));
            ?>
            <main class="container">
                <section class="main-content">
                    <h4>Search Results</h4>
                    <div class="all-users__content">
                        <?php 
                        if ($get_search_result_sql) {
                        while ($get_search_result = mysqli_fetch_array($get_search_result_sql)) {
                            $follower_control_sql = mysqli_query($connection_string, "SELECT * FROM followers WHERE following_id = ".$get_search_result["id"]." AND follower_id = ".$_SESSION["user_id"]."");
                            ?>
                            <form method="POST" action="process.php" class="all-users__item">
                                <div class="all-users__info">
                                    <img src="<?=$get_search_result["profile_photo"]?>" alt="Profile Photo">
                                    <div class="all-users__info-group">
                                        <a class="all-users__info-username" href="./profile.php?id=<?=$get_search_result["id"]?>"><strong><?=$get_search_result["user_name"]?></strong></a>
                                        <a class="all-users__info-fullname" href="./profile.php?id=<?=$get_search_result["id"]?>"><?=$get_search_result["full_name"]?></a>
                                        <input type="text" name="following_id" hidden value="<?=$get_search_result["id"]?>">
                                        <input type="text" name="following_name" hidden value="<?=$get_search_result["user_name"]?>">
                                        <input type="text" name="current_page" hidden value="search.php?search_query=<?=$_GET["search_query"]?>">
                                    </div>
                                </div>
                                <?php if (mysqli_num_rows($follower_control_sql) > 0){ ?>
                                    <input type="submit" class="all-users__info-btn unfollow" value="Unfollow" name="follow_btn"/>
                                <?php } else { ?>
                                    <input type="submit" class="all-users__info-btn" value="Follow" name="follow_btn"/>
                                <?php } ?>
                            </form>
                        <?php } }?> 
                    </div>
                </section>
            </main>
        <script src="./js/upload-modal.js"></script>
    <?php } } }
    else {
        header("Location:login.php");
    } ?>
</body>
</html>
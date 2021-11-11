<?php
    require_once "config.php";
    if (isset($_POST["signup_btn"])) {
        $e_mail = trim($_POST["email"]);
        $full_name = trim($_POST["fullname"]);
        $user_name = trim($_POST["username"]);
        $user_password = md5(trim($_POST["password"]));

        $signup_sql = mysqli_query($connection_string, "SELECT * FROM users WHERE user_name = '$user_name' OR e_mail = '$e_mail'");
        if (mysqli_num_rows($signup_sql) > 0) {
            echo "Bu kullanıcı zaten kayıtlı.";
        }
        else{           
            $new_add_user_sql = mysqli_query($connection_string, "INSERT INTO users(user_name, full_name, user_password, e_mail) VALUES('".$user_name."', '".$full_name."', '".$user_password."', '".$e_mail."')");

            $user_control_sql = mysqli_query($connection_string, "SELECT * FROM users WHERE user_name = '$user_name' OR e_mail = '$e_mail'");
            $user_info = mysqli_fetch_array($user_control_sql);
            $following_id = $user_info["id"];
            $following_name = $user_info["user_name"];
            $follower_id = $user_info["id"];
            $follower_name = $user_info["user_name"];

            $add_own_follower_sql = mysqli_query($connection_string, "INSERT INTO followers(follower_id, follower_name, following_id, following_name) VALUES('".$follower_id."', '".$follower_name."', '".$following_id."', '".$following_name."')");
            
            if ($new_add_user_sql) {
                header("Location:login.php");
            }
            else{
                header("Location:sign-up.php");
            }
        }
    }

    if (isset($_POST["signin_btn"])) {
        $user_name = trim($_POST["username"]);
        $user_password = md5(trim($_POST["password"])); 

        $signin_sql = mysqli_query($connection_string, "SELECT * FROM users WHERE user_name = '$user_name' AND user_password = '$user_password'");
        
        if (mysqli_num_rows($signin_sql) > 0) {
            $fetch_user_info = mysqli_fetch_array($signin_sql) ; 

            $_SESSION["session_state"] = true;
            $_SESSION["user_id"] = $fetch_user_info["id"];
            $_SESSION["user_name"] = $fetch_user_info["user_name"];
            header("Location:index.php");
            return;
        }
        else{
            header("Location:login.php");
            // Login olamadıysa hatayı span içine yaz.
        }
    }

    if (isset($_POST["settings_update_btn"])) {
        $full_name = trim($_POST["full_name"]);
        $user_name = trim($_POST["user_name"]);
        $website = trim($_POST["website"]);
        $biography = trim($_POST["biography"]);
        $e_mail = trim($_POST["e_mail"]);
        $phone_number = trim($_POST["phone_number"]);
        $gender = trim($_POST["gender"]);
        
        $profile_settings_sql = mysqli_query($connection_string, "UPDATE users SET full_name = '".$full_name."', user_name = '".$user_name."', website = '".$website."', biography = '".$biography."', e_mail = '".$e_mail."', phone_number = '".$phone_number."', gender = '".$gender."' WHERE user_name = '".$_SESSION["user_name"]."'");

        if (mysqli_affected_rows($connection_string)) {
            header("Location:settings.php");
        }
        else{
            echo "<script>alert('Güncelleme işlemi başarısız!')</script>";
        }
    }

    if (isset($_POST["change_password_btn"])) {
        $old_password_input = md5(trim($_POST["old_password_input"]));
        $new_password_input = md5(trim($_POST["new_password_input"]));
        $renew_password_input = md5(trim($_POST["renew_password_input"]));
        
        if ($new_password_input == $renew_password_input) {
            $password_control_sql = mysqli_query($connection_string, "SELECT user_password FROM users WHERE user_name = '".$_SESSION["user_name"]."'");
            
            $current_password = mysqli_fetch_array($password_control_sql);

            if ($current_password["user_password"] == $old_password_input) {
                $change_password_sql = mysqli_query($connection_string, "UPDATE users SET user_password = '".$new_password_input."' WHERE user_name = '".$_SESSION["user_name"]."'");
                if (mysqli_affected_rows($connection_string)) {
                    header("Location:settings.php?edit-tab=change-password");
                    echo "<script language='javascript'>alert('Güncelleme işlemi başarılı!')</script>";
                }
                else{
                    echo "<script language='javascript'>alert('Güncelleme işlemi başarısız!')</script>";
                }
            }
            else{
                echo "<script language='javascript'>alert('Girdiğiniz yeni şifreler aynı değil!')</script>";
            }
        }
    }

    if (isset($_POST["post_upload_btn"])) {
        if ($_FILES["upload_post"]["size"] < 1024*1024*1024*1024) {
            if ($_FILES["upload_post"]["type"] == "image/jpeg" || $_FILES["upload_post"]["type"] == "image/png" || $_FILES["upload_post"]["type"] == "image/gif") {
                $file_name = $_FILES["upload_post"]["name"];
                $extention = substr($file_name, -4, 4);
                $generate_name = array("xy", "xx","zt", "yy", "zz");
                $random_number = rand(1, 10000);
                $new_file_name = $generate_name[rand(0, 4)].$random_number.$extention;
                $new_path = "./img/share/".$new_file_name;

                if (move_uploaded_file($_FILES["upload_post"]["tmp_name"], $new_path)) {
                    $post_description = $_POST["post_description"];
                    $post_location = $_POST["post_location"];
                    $post_date = date("y.m.d H:i");

                    $post_upload_sql = mysqli_query($connection_string, "INSERT INTO posts(
                            post_description, 
                            post_location, 
                            post_date, 
                            post_img_path, 
                            user_id
                        ) 
                        VALUES(
                            '".$post_description."', 
                            '".$post_location."', 
                            '".$post_date."', 
                            '".$new_path."', 
                            '".$_SESSION["user_id"]."')
                        ");

                        if ($post_upload_sql) {
                            header("Location:index.php");
                        }
                        else{
                            echo "Gönderi paylaşılamadı!";
                        }
                } else {
                    echo "Dosya taşınamadı!";
                }
            } else {
                echo "Yüklenilecek dosya türü geçersizdir!";
            }
        } else {
            echo "2MB'den küçük dosya yükleyiniz!";
        }
    }

    if (isset($_POST["profile_upload_btn"])) {
        if ($_FILES["profile_upload_photo"]["size"] < 1024*1024*1024*1024) {
            if ($_FILES["profile_upload_photo"]["type"] == "image/jpeg" || $_FILES["profile_upload_photo"]["type"] == "image/png" || $_FILES["profile_upload_photo"]["type"] == "image/gif") {
                $file_name = $_FILES["profile_upload_photo"]["name"];
                $extention = substr($file_name, -4, 4);
                $generate_name = array("xy", "xx","zt", "yy", "zz");
                $random_number = rand(1, 10000);
                $new_file_name = $generate_name[rand(0, 4)].$random_number.$extention;
                $new_path = "./img/profile-photos/".$new_file_name;

                if (move_uploaded_file($_FILES["profile_upload_photo"]["tmp_name"], $new_path)) {

                    $update_profile_photo_sql = mysqli_query($connection_string, "UPDATE users SET profile_photo = '".
                    $new_path ."' WHERE user_name = '".$_SESSION["user_name"]."'");

                    if (mysqli_affected_rows($connection_string)) {
                        header("Location:profile.php?id=".$_SESSION["user_id"]);
                    }
                } else {
                    echo "Dosya taşınamadı!";
                }
            } else {
                echo "Yüklenilecek dosya türü geçersizdir!";
            }
        } else {
            echo "2MB'den küçük dosya yükleyiniz!";
        }
    }

    if (isset($_POST["follow_btn"])) {
        $following_id = $_POST["following_id"];
        $following_name = $_POST["following_name"];
        $follower_id = $_SESSION["user_id"];
        $follower_name = $_SESSION["user_name"];
        $current_page = $_POST["current_page"];

        $follower_control_sql = mysqli_query($connection_string, "SELECT * FROM followers WHERE following_id = '$following_id' AND follower_id = '$follower_id'");
        if (mysqli_num_rows($follower_control_sql) > 0) {
            // Takibi bırak
            $unfollow_sql = mysqli_query($connection_string, "DELETE FROM followers WHERE following_id = '$following_id' AND follower_id = '$follower_id'");
            
            header("Location:".$current_page);
        }
        else{
            // Takip et
            $add_new_follower_sql = mysqli_query($connection_string, "INSERT INTO followers(follower_id, follower_name, following_id, following_name) VALUES('".$follower_id."', '".$follower_name."', '".$following_id."', '".$following_name."')");
            
            if ($add_new_follower_sql) {
                header("Location:".$current_page);
            }
        }
    }

    if (isset($_POST["like_post_btn"])) {
        $post_id = $_POST["post_id"];

        $like_control_sql = mysqli_query($connection_string, "SELECT * FROM likes WHERE post_id = '$post_id' AND user_id = ".$_SESSION["user_id"]."");
        if (mysqli_num_rows($like_control_sql)) {
            // Beğeniyi Kaldır
            $unlike_sql = mysqli_query($connection_string, "DELETE FROM likes WHERE post_id = '$post_id' AND user_id = ".$_SESSION["user_id"]."");
            
            header("Location:index.php");
        }
        else{
            // Beğen
            $add_new_like_sql = mysqli_query($connection_string, "INSERT INTO likes(post_id, user_id) VALUES('".$post_id."', '".$_SESSION["user_id"]."')");
            
            if ($add_new_like_sql) {
                header("Location:index.php");
            }
        }
    }

    if (isset($_POST["post_comment_btn"])) {
        $post_comment = $_POST["post_comment"];
        $post_id = $_POST["post_id"];

        // Yorum
        $add_new_comment_sql = mysqli_query($connection_string, "INSERT INTO comments(post_comment, post_id, user_id) VALUES('".$post_comment."', '".$post_id."', '".$_SESSION["user_id"]."')");
        
        if ($add_new_comment_sql) {
            header("Location:index.php");
        }
    }

    if (isset($_POST["post_saved_btn"])) {
        $post_id = $_POST["post_id"];

        $saved_control_sql = mysqli_query($connection_string, "SELECT * FROM saved WHERE post_id = '$post_id' AND user_id = ".$_SESSION["user_id"]."");
        if (mysqli_num_rows($saved_control_sql)) {
            // saved'ı Kaldır
            $unsaved_sql = mysqli_query($connection_string, "DELETE FROM saved WHERE post_id = '$post_id' AND user_id = ".$_SESSION["user_id"]."");
            
            header("Location:index.php");
        }
        else {
            // Saved
            $add_new_saved_sql = mysqli_query($connection_string, "INSERT INTO saved(post_id, user_id) VALUES('".$post_id."', '".$_SESSION["user_id"]."')");
            
            if ($add_new_saved_sql) {
                header("Location:index.php");
            }
        }
        
    }
?>
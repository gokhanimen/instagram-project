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

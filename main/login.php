<?php include_once('./include/head.php'); ?>
<?php include_once('./include/header.php'); ?>
<?php
//	print_r2($_SERVER); exit;

// [22.04.25] 미로그인시 처리
if ($_SESSION["USER"]) {
	echo "<script>alert('You are already logged in.'); location.replace(PATH+'mypage.php');</script>";
	exit;
}
?>
<section class="container login_form form_layout login bg style_2023">
    <!-- 백그라운드 이미지 slick -->
    <!--container -->
    <div>
        <a href="./index.php" class="logo"><img src="./img/image_logo_2023_white.png"></a>
        <form>
            <ul>
                <li>
                    <input type="text" name="email" placeholder="<?= $locale("id") ?>">
                </li>
                <li>
                    <input type="password" name="password" placeholder="<?= $locale("password") ?>">
                </li>
            </ul>
            <!-- <div class="text_r"> -->
            <!-- 	<a href="./find_password.php"><?= $locale("find_password") ?> ></a> -->
            <!-- </div> -->
            <button type="button" class="btn login_btn main_btn">로그인</button>
            <div class="btn_wrap clearfix2">
                <button type="button" class="btn gray_line_btn" onclick="window.location.href='./find_password.php';">PW
                    찾기</button>
                <button type="button" class="btn gray_line_btn"
                    onclick="window.location.href='./signup.php';">회원가입</button>
                <p class="login_alert">처음 방문 하신 분은 회원가입을 먼저 진행해 주십시오.</p>
            </div>
        </form>
    </div>
</section>

<script>
$(document).ready(function() {
    $('input').on('keyup', function(e) {
        if (e.keyCode == '13') {
            login();
        }
    });
    $(".login_btn").on("click", function() {
        login();
    });
});

// login
function login() {
    var email = $("input[name=email]").val();
    var password = $("input[name=password]").val();

    if (email == "") {
        alert(locale(language.value)("check_email"));
        return false;
    } else if (password == "") {
        alert(locale(language.value)("check_password"));
        return false;
    }

    $.ajax({
        url: "./ajax/client/ajax_member.php",
        type: "POST",
        data: {
            flag: "login",
            email: email,
            password: password
        },
        dataType: "JSON",
        success: function(res) {
            if (res.code == 200) {
                var href_path = "/main";

                var from = "<?= $_GET['from'] ?>";
                if (from != "") {
                    href_path += "/" + from
                }

                var toDate = new Date();
                toDate.setHours(toDate.getHours() + ((23 - toDate.getHours()) + 9));
                toDate.setMinutes(toDate.getMinutes() + (60 - toDate.getMinutes()));
                toDate.setSeconds(0);
                document.cookie = "member_idx=" + res.idx + "; path=/; expires=" + toDate.toGMTString() +
                    ";";

                location.href = href_path;
            } else if (res.code == 400) {
                alert("이메일 주소를 확인해 주십시오");
                return false;
            } else if (res.code == 401) {
                alert("비밀번호를 확인해주십시오");
                return false;
            } else if (res.code == 402) {
                //alert(locale(language.value)("not_certified_email"));
                alert(
                    "An account confirmation email has been sent to the email address you set during registration. Please check the email sent and verify your account."
                );
                return false;
            } else {
                alert(locale(language.value)("reject_msg"));
            }
        }
    });
}
</script>
<?php include_once('./include/footer.php'); ?>
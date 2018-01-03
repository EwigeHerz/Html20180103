<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//將session清空
unset($_SESSION['username']);
echo '登出中......';
echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
?>
(6) 加入(註冊)會員 - 「填寫」會員資料 (register.php)
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form name="form" method="post" action="register_finish.php">
    帳號：<input type="text" name="id" /> <br>
    密碼：<input type="password" name="pw" /> <br>
    再一次輸入密碼：<input type="password" name="pw2" /> <br>
    電話：<input type="text" name="telephone" /> <br>
    地址：<input type="text" name="address" /> <br>
    備註：<textarea name="other" cols="45" rows="5"></textarea> <br>
    <input type="submit" name="button" value="確定" />
</form>
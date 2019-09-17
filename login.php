<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="css/basic.css"/>
<link rel="stylesheet" href="css/register.css"/>
<title>登陆</title>
<script type="text/javascript" src="js/code.js"></script>
</head>
    <body>
    <div id="register">
     <h2>用户登录</h2>
     <form action="login_out.php" name="login" method="POST">
    <dl>
		<dt>请认真填写一下内容：</dt>
		<dd><span>用户名</span>：<input type="text" name="username" class="text" value=""/>(*必填，至少两位)</dd>
		<dd><span>密码</span>：<input type="password" name="password" class="text" value=""/>(*必填，至少六位位)</dd>
		<dd class="dd_submit"><input type="submit" name="submit" class="submit" value="登录"/></dd>
	</dl>
	</form>
    </div>
    </body>
</html>

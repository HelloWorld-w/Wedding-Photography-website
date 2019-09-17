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
     <h2>用户注册</h2>
     <form action="register_result.php" name="register" method="POST">
    <dl>
		<dt>请认真填写一下内容：</dt>
		<dd><span>用户名</span>：<input type="text" name="username" class="text" value=""/>(*必填，至少两位)</dd>
		<dd><span>密码</span>：<input type="password" name="password" class="text" value=""/>(*必填，至少六位位)</dd>
		<dd><span>确认密码</span>：<input type="password" name="notpassword" class="text"/>(*同上)</dd>
		<dd><span>密码提示</span>：<input type="text" name="question" class="text"/>(*必填，至少两位)</dd>
		<dd><span>性别</span>：<input type="radio" name="sex" value="男" checked="checked"/>男<input type="radio" name="sex" value="女"/>女</dd>
		<dd><span>电子邮箱</span>：<input type="text" name="email" class="text"/></dd>
		<dd><span>QQ</span>：<input type="text" name="qq" class="text"/></dd>
		<dd><span>验证码</span>：<input type="text" name="code" class="text yzm"/><img src="code.php" id="code"/> </dd>
		<dd class="dd_submit"><input type="submit" name="submit" class="submit" value="注册"/></dd>
	</dl>
	</form>
    </div>
   </body>
</html>
/**
 * code()验证码加载时运用
 */
window.onload=function(){
	var code=document.getElementById('code');
	code.onclick=function(){
	this.src='code.php?tm='+Math.random();
	}
 }
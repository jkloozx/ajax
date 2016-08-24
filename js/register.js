/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2016-08-13 12:08:06
 * @version $Id$
 */
var xmlhttp;
function loadXMLDoc(url,fun) {
	xmlhttp=null;
	if (window.XMLHttpRequest) {// code for Firefox, Opera, IE7, etc.
		xmlhttp=new XMLHttpRequest();
	}
	else if (window.ActiveXObject) {// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	if (xmlhttp!=null) {
		xmlhttp.onreadystatechange = fun;
		xmlhttp.open("GET",url,true);
		xmlhttp.send(null);
	}
	else {
		alert("Your browser does not support XMLHTTP.");
	}
}
function state_Change() {
	var follow = document.getElementById('email');
	var d = dialog({
		quickClose: 'true',
		align: 'right',
	});
	if(xmlhttp.readyState == 1){
		d.content("Please hold on...").show(follow);
	}
	if (xmlhttp.readyState==4) {// 4 = "loaded"
		if (xmlhttp.status==200) {// 200 = "OK"
			// alert("responseText="+xmlhttp.responseText);
			d.content(xmlhttp.responseText).show(follow);
			// d.content('Email不能为空').show(follow);
			}
		else {
			alert("Problem retrieving data:" + xmlhttp.statusText);
		}
	}
}
function check_username_by_php() {
	if(xmlhttp.readyState == 1){
		document.getElementById("check_username").style = "font:20px bold italic;color:silver";
		document.getElementById("check_username").innerHTML= "Please Hold On.....";
	}
	if (xmlhttp.readyState==4) {// 4 = "loaded"
		if (xmlhttp.status==200) {// 200 = "OK"
			// alert("responseText="+xmlhttp.responseText);
			document.getElementById("check_username").style = "font:17px bold;color:black";
			document.getElementById("check_username").innerHTML=xmlhttp.responseText;
		}
		else {
			alert("Problem retrieving data:" + xmlhttp.statusText);
		}
	}
}
function check_email_is_used() {
	var email = document.getElementById("email").value;
	loadXMLDoc("js/check_email.php?email="+email,state_Change);
}
function check_username_is_used() {
	var username = document.getElementById("username").value;
	loadXMLDoc("js/check_username.php?username="+username,check_username_by_php);
}

function isEmail() {
	var reg=/^([a-zA-Z\d][a-zA-Z0-9_]+@[a-zA-Z\d]+(\.[a-zA-Z\d]+)+)$/gi;
	var rzt=document.getElementById('email').value.match(reg);
	var email = document.getElementById("email");
	var check_email = document.getElementById('check_email');
	check_email.style = "font:18px bold italic;";
	var follow = document.getElementById('email');
	var d = dialog({
		quickClose: 'true',
		align: 'right',
	});
	if(email.value.length==0){
		// check_email.style["color"]='red';
		// check_email.innerHTML="Email不能为空";
		d.content('Email不能为空').show(follow);
		return false;
	}else{
		if (rzt == null) {
			d.content('Email地址不正确').show(follow);
			return false;
		}else{
			check_email_is_used();

			return true;
			// if(document.getElementById("check_email").innerHTML == "邮箱已经注册过了!"){
			// 	return false;
			// }
			// if(document.getElementById("check_email").innerHTML == "恭喜,您的邮箱可用!"){
			// 	return true;
			// }
		}
	}
}

function check_username() {
	var username = document.getElementById("username");
	var check_username = document.getElementById("check_username");
	var format_head = "^\[^\d\s]";
	var format_body = /\w{5,12}$/;
	// if(username.match(format_head)){
		if(username.value.length > 5 && username.value.length < 20){
			check_username_is_used();
			return true;
			// alert("document.getElementById('check_username').value="+document.getElementById("check_username").value);
			// if(document.getElementById("check_username").innerHTML == "该用户名已经注册过了!"){
			// 	return false;
			// }
			// if(document.getElementById("check_username").innerHTML == "恭喜,该用户名可以使用!"){
			// 	return true;
			// }
		}else{
			document.getElementById("check_username").style = "font:18px bold;color:red";
			document.getElementById("check_username").innerHTML = "用户名长度不符合标准";
			return false;
		}
	// }else{
	// 	document.getElementById("check_username").style = "font:20px bold;color:red";
	// 	document.getElementById("check_username").innerHTML = "请不要以数字或空白开头";
	// }
}

function check_password() {
	var password = document.getElementById("password");
	var check_password = document.getElementById("check_password");
	if (password.value.length > 6 && password.value.length < 16){
		check_password.style = "color:black;font-weight:bold";
		check_password.innerHTML = "密码格式正确";
		return true;
	}else {

		check_password.style = "color:red;font-weight:bold";
		check_password.innerHTML = "密码格式不正确";
		return false;
	}
}

function check_password2(){
		var password = document.getElementById("password");
		var check_password = document.getElementById("check_password");
		if (password.value.length<6 || password.value.length>16)
		{
			check_password.style["color"]='red';
			check_password.innerHTML="密码长度不少于6且不大于16";
			return false;
		}else{
			check_password.style["color"]='green';
			check_password.innerHTML="√";
			return true;
		}
}

function check_repassword() {
	var password = document.getElementById("password");
	var repassword = document.getElementById("repassword");
	var check_repassword = document.getElementById("check_repassword");
	if (check_password()){
		if (password.value == repassword.value){
			check_repassword.style = "color:black;font-weight:bold";
			check_repassword.innerHTML = "重复密码正确";
			return true;
		}else{
			check_repassword.style = "color:red;font-weight:bold";
			check_repassword.innerHTML = "重复密码不正确";
			return false;
		}
	}else{
		check_repassword.style = "color:red;font-weight:bold";
		check_repassword.innerHTML = "请输入正确格式的密码";
		return false;
	}
}
function r_submit() {
	var u = document.getElementById("check_email").innerHTML == "恭喜,您的邮箱可用!";
	var e = document.getElementById("check_username").innerHTML == "恭喜,该用户名可以使用!";
	// alert("e: "+e+"u: "+u+" check_username():"+check_username()+"isEmail():"+isEmail()+"check_password():"+check_password()+"check_repassword():"+check_repassword());
	// alert(check_username() && isEmail() && check_password() && check_repassword() && e && u);
	// alert(check_username() && isEmail() && check_password() && check_repassword());
	// alert(" u: "+u+" e: "+e+" check_username(): "+check_username()+"isEmail():"+isEmail()+"check_password():"+check_password()+"check_repassword():"+check_repassword());
	return (check_password() && check_repassword() && u && e);

}

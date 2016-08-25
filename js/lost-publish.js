/**
 * Created by lhw on 16-8-24.
 */

function isEmail() {
    var reg=/^([a-zA-Z\d][a-zA-Z0-9_]+@[a-zA-Z\d]+(\.[a-zA-Z\d]+)+)$/gi;
    var rzt=document.getElementById('email').value.match(reg);
    var email = document.getElementById("email");
    var check_email = document.getElementById('check_email');
    check_email.style = "font:18px bold italic;";
    var de = dialog({
        quickClose: 'false',
        align: 'right',
    });
    if(email.value.length==0){
        // check_email.style["color"]='red';
        // check_email.innerHTML="Email不能为空";
        de.content('Email不能为空').show(email);
        return false;
    }else{
        if (rzt == null) {
            de.content('Email地址不正确').show(email);
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

function check_title() {
    var title = document.getElementById("title");
    var format = /^[\S]{3,16}$/;
    var dt = dialog({
        quickClose: true,
        align: 'right',
        skin: "bg"
    });
    dt.content("√").show(title);
    // if(username.match(format_head)){
    var rzt=document.getElementById('title').value.match(format);
    if (rzt != null){
        dt.content("√").show(title);
    }else{
        dt.content("标题格式不正确：3-16位字符").show(title);
    }
}

function check_call() {
    var chenghu = document.getElementById("chenghu");
    var format = /^[\S]{3,7}$/;
    var dc = dialog({
        quickClose: true,
        align: 'right'
    });
    dc.content("√").show(chenghu);
    // if(username.match(format_head)){
    var rzt=chenghu.value.match(format);
    if (rzt != null){
        dc.content("√").show(chenghu);
    }else{
        dc.content("称呼格式不正确：3-7位字符").show(chenghu);
    }
}

function check_email() {
    var email = document.getElementById("email");
    var format = /^(\w)+(\.\w+)*@(\w)+((\.\w{2,3}){1,3})$/;
    var de = dialog({
        quickClose: true,
        align: 'right'
    });
    de.content("√").show(email);
    // if(username.match(format_head)){
    var rzt=email.value.match(format);
    if (rzt != null){
        de.content("√").show(email);
    }else{
        de.content("电子邮箱格式不正确").show(email);
    }
}
function check_tel() {
    var tel = document.getElementById("tel");
    var format = /(\d{11})|^((\d{7,8})|(\d{4}|\d{3})-(\d{7,8})|(\d{4}|\d{3})-(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1})|(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1}))$/;
    var dt = dialog({
        quickClose: true,
        align: 'right'
    });
    dt.content("√").show(tel);
    // if(username.match(format_head)){
    var rzt=tel.value.match(format);
    if (rzt != null){
        dt.content("√").show(tel);
    }else{
        dt.content("电话号码格式不正确").show(tel);
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

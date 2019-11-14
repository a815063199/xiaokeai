<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="H3Qe3n_UYd3BFqLMNf24j-aquKKxhgeJtUeLDNOR6eNwLG3vEOM1tpJS4Ihjrfvak-_Uz_zSS_CYMtJ6pKCEpw==">
    <title>登录</title>
    <link rel="icon" href="/common/favicon.ico" type="image/x-icon">
    <link href="/admin/assets/8dbd701c/css/bootstrap.css" rel="stylesheet">
<link href="/admin/css/site.css" rel="stylesheet"></head>
<body>
<div class="wrap">
    <nav id="w0" class="navbar-inverse navbar-fixed-top navbar"><div class="container-fluid"><div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse"><span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span></button><a class="navbar-brand" href="/admin/site/index">倍业科技后台管理系统</a></div><div id="w0-collapse" class="collapse navbar-collapse"><ul id="w1" class="navbar-nav navbar-right nav"><li><a href="/admin/site/index">首页</a></li>
<li class="active"><a href="/index.php?r=admin/login">登录</a></li></ul></div></div></nav>
    <div class="content-container">
    <div class="row">
            <div class="float-button" id="menu-show-hide"><span class="glyphicon glyphicon-chevron-left"></span></div>
            <div class="col-lg-12">
                <div class="site-login">
    <div class="row">
       <div class="col-lg-4">
       </div>
        <div class="col-lg-4">
        <br>
        <br>
        <br>
        <br>
        <br>
         <h1 class='text-center'>登录</h1>
            <form id="login-form" action="/admin/site/login" method="post">
<input type="hidden" name="_csrf" value="H3Qe3n_UYd3BFqLMNf24j-aquKKxhgeJtUeLDNOR6eNwLG3vEOM1tpJS4Ihjrfvak-_Uz_zSS_CYMtJ6pKCEpw==">
<div class="form-group field-loginform-username required">
<label class="control-label" for="loginform-username">用户名</label>
<input type="text" id="loginform-username" class="form-control" name="LoginForm[username]" aria-required="true">

<p class="help-block help-block-error"></p>
</div>                <div class="form-group field-loginform-password required">
<label class="control-label" for="loginform-password">密码</label>
<input type="password" id="loginform-password" class="form-control" name="LoginForm[password]" aria-required="true">

<p class="help-block help-block-error"></p>
</div>                <div class="form-group field-loginform-verifycode required">

<div class="row"><div class="col-lg-4"><img id="loginform-verifycode-image" src="/demo/code" alt=""></div><div class="col-lg-8"><input type="text" id="loginform-verifycode" class="form-control" name="LoginForm[verifyCode]"></div></div>

<p class="help-block help-block-error"></p>
</div>
                <div class="form-group field-loginform-rememberme">
<div class="checkbox">
<label for="loginform-rememberme">
<input type="hidden" name="LoginForm[rememberMe]" value="0"><input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="1" checked>
记住我
</label>
<p class="help-block help-block-error"></p>

</div>
</div>                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" name="login-button">登录</button>                </div>
            </form>        </div>
    </div>
</div>
            </div>


        </div>

    </div>


</div>

<footer class="footer">
    <div class="container-fluid">
        <p class="pull-left">&copy; Bayescom2019</p>
    </div>
</footer>

<script src="/admin/assets/74cb7621/jquery.js"></script>
<script src="/admin/assets/75952929/yii.js"></script>
<script src="/admin/assets/75952929/yii.validation.js"></script>
<script src="/admin/assets/75952929/yii.captcha.js"></script>
<script src="/admin/assets/75952929/yii.activeForm.js"></script>
<script src="/admin/assets/8dbd701c/js/bootstrap.js"></script>
<script>jQuery(function ($) {
jQuery('#loginform-verifycode-image').yiiCaptcha({"refreshUrl":"\/admin\/site\/captcha?refresh=1","hashKey":"yiiCaptcha\/site\/captcha"});
jQuery('#login-form').yiiActiveForm([{"id":"loginform-username","name":"username","container":".field-loginform-username","input":"#loginform-username","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"用户名不能为空。"});}},{"id":"loginform-password","name":"password","container":".field-loginform-password","input":"#loginform-password","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"密码不能为空。"});}},{"id":"loginform-verifycode","name":"verifyCode","container":".field-loginform-verifycode","input":"#loginform-verifycode","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"验证码不能为空。"});yii.validation.captcha(value, messages, {"hash":448,"hashKey":"yiiCaptcha/site/captcha","caseSensitive":false,"message":"验证码不正确。"});}},{"id":"loginform-rememberme","name":"rememberMe","container":".field-loginform-rememberme","input":"#loginform-rememberme","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.boolean(value, messages, {"trueValue":"1","falseValue":"0","message":"记住我的值必须要么为\"1\"，要么为\"0\"。","skipOnEmpty":1});}}], []);
});</script>
<script type="text/javascript">
$(document).ready(function(){
        if(window.location.pathname==='/admin/site/index'||window.location.pathname==='/admin/index.php')
                {
                            $('#menu-show-hide').hide();
                                }
    $('#menu-show-hide').click( function(){
                $('#myNav').toggle(10,function () {

                                if($('#myContent').css('margin-left') ==="180px")
                                                {
                                                                    $('#myContent').css('margin-left','10px');
                                                                                    $('#menu-show-hide').find('span').removeClass('glyphicon-chevron-left');
                                                                                    $('#menu-show-hide').find('span').addClass('glyphicon-chevron-right');
                                                                                                }else{
                                                                                                                    $('#myContent').css('margin-left','180px');
                                                                                                                                    $('#menu-show-hide').find('span').removeClass('glyphicon-chevron-right');
                                                                                                                                    $('#menu-show-hide').find('span').addClass('glyphicon-chevron-left');
                                                                                                                                                }

        })

                }
);
});
</script>
<style type="text/css">
.float-button{
    border: 1px solid #D4CD49; 
    position:fixed;
    z-index: 1;
    margin-left: 20px;
    margin-top: 15px;
    cursor:pointer;
}
</style>

</body>
</html>


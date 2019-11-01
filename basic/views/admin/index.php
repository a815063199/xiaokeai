<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="zLi_dnuv_CqPzFSeAPM8MWy_TDoVTueWYDmC3-tLT0-j4MxHFJioQdyIFtpWo39kGfogV1gaq-9NTNupnHoiCw==">
    <title>倍业科技后台管理系统</title>
    <link rel="icon" href="/common/favicon.ico" type="image/x-icon">
    <link href="/admin/assets/8dbd701c/css/bootstrap.css" rel="stylesheet">
<link href="/admin/css/site.css" rel="stylesheet"></head>
<body>
<div class="wrap">
    <nav id="w0" class="navbar-inverse navbar-fixed-top navbar"><div class="container-fluid"><div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse"><span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span></button><a class="navbar-brand" href="/admin/site/index">倍业科技后台管理系统</a></div><div id="w0-collapse" class="collapse navbar-collapse"><ul id="w1" class="navbar-nav navbar-right nav"><li class="active"><a href="/admin/site/index">首页</a></li>
<li><a href="/admin/site/logout" data-method="post">注销(xiangyu)</a></li></ul></div></div></nav>
    <div class="content-container">
<!--        -->        <div class="row">
            <div class="float-button" id="menu-show-hide"><span class="glyphicon glyphicon-chevron-left"></span></div>
            <div class="col-lg-12">
                <div class="site-index">

    <div class="jumbotron">
        <div class="row">
                        <div class="col-lg-4"><div class=jumbotron><h2>业务数据管理</h2><p class=\"lead\">SSP业务数据调整,DSP业务数据调整...</p>                <a class="btn btn-lg btn-primary btn-outline" href="/admin/ssp-adspot/index" style="width:100%">业务管理</a>                </div></div>            <div class="col-lg-4"><div class=jumbotron><h2>规格管理</h2><p class=\"lead\">规格配置,查看...</p>                <a class="btn btn-lg btn-primary btn-outline" href="/admin/format/index" style="width:100%">规格管理</a>                </div></div><!--            <hr style="background-color:green;height: 1px;width:100%;border: none ;"/>-->
                        <div class="col-lg-4"><div class=jumbotron><h2>线上数据管理</h2><p class=\"lead\">素材审核,广告点击上限监控...</p>                <a href = "http://falcon.bayescom.com/data/monitor-material-check-daily/index"  style = "width:100%;", class= 'btn btn-lg btn-primary btn-outline' >线上数据管理</a ></div></div>            <div class="col-lg-4"><div class=jumbotron><h2>报表查询</h2><p class=\"lead\">SSP报表查看,DSP报表查看...</p>
                <a href = "http://falcon.bayescom.com/data/ssp-report/daily" style = "width:100%;", class= 'btn btn-lg btn-primary btn-outline' >报表查询</a ></div></div>                                    <div class="col-lg-4"><div class=jumbotron><h2>系统操作记录</h2><p class=\"lead\">系统操作记录查看跟踪...</p>                <a class="btn btn-lg btn-primary btn-outline" href="/admin/tracker/index" style="width:100%">系统操作记录</a>
                </div></div>
        </div>

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
<script src="/admin/assets/8dbd701c/js/bootstrap.js"></script>
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



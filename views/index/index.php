<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
AppAsset::register($this);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title>后台管理中心</title>

    <meta name="keywords" content="">
    <meta name="description" content="">



    <link rel="shortcut icon" href="favicon.ico">
    <link href="/assets/index/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/assets/index/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/assets/index/css/animate.css" rel="stylesheet">
    <link href="/assets/index/css/index.css?v=4.1.0" rel="stylesheet">
    <link href="/assets/index/artdialog/ui-dialog.css" rel="stylesheet">
    
<style>
.alertMessageBg{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
	z-index: 20000;
	_position:absolute;
	display:none;
	
}
</style>    
  
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">

    <div id="wrapper">
    


        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span>
                          
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold"></strong></span>
                               
                                </span>
                            </a>

                        </div>
                        <div class="logo-element">
                        </div>
                    </li>
                    
<li>
                        <a href="#">
                            <i class="fa fa-th-large"></i>
                            <span class="nav-label">销售中心</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?= Url::to(['crm/index'])?>" data-index="0">潜在学员</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?= Url::to(['goods/index'])?>">库存管理</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?= Url::to(['activity/index'])?>">微活动</a>
                            </li>
                           
                        </ul>

                    </li>
                    

                    
                    
               
                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
         <!--右侧部分开始-->
        <div id="page-wrapper" class="white-bg dashbard-1">
            <div class="row border-bottom white-bg">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0; ">
                    <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                      
                      <a class="minimalize-styl-2 btn btn-primary btn-outline" href="<?= Url::to(['index/index'])?>" >&nbsp;&nbsp;&nbsp;&nbsp;<i  style="color:#00aaef" class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;</a>
                      
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                    
                   
                    
<!--<li class="hidden-xs">
                            <div id="guide" style="cursor:pointer">
                                <i class="fa fa-tasks"></i> <span style="color:#999c9e">启用向导</span>
                            </div>
                            
                        </li>-->
                        
                     
                        
                    <li class="hidden-xs">
                            <a href="http://xbooking.oss-cn-beijing.aliyuncs.com/data/%E7%88%B1%E8%AF%BE%E7%8E%8B%E5%9F%B9%E8%AE%AD%E7%AE%A1%E7%90%86%E7%B3%BB%E7%BB%9F%E5%90%AF%E7%94%A8%E6%89%8B%E5%86%8C.pdf?v=1.1"  data-index="0" target="_blank"><i class="fa fa-file-pdf-o"></i> 操作手册</a>
                        </li>
                        
                        <li class="dropdown">
                            <a class="J_menuItem count-info" href="<?= Url::to(['pms/message'])?>">
                                <i class="fa fa-bell"></i> <span class="label label-primary">0</span>
                            </a>
                            
                        </li>
                        <!--<li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li>
                                    <a href="mailbox.html">
                                        <div>
                                            <i class="fa fa-envelope fa-fw"></i> 您有16条未读消息
                                            <span class="pull-right text-muted small">4分钟前</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="profile.html">
                                        <div>
                                            <i class="fa fa-qq fa-fw"></i> 3条新回复
                                            <span class="pull-right text-muted small">12分钟钱</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a class="J_menuItem" href="notifications.html">
                                            <strong>查看所有 </strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>-->
                         
                        <li class="hidden-xs">
                            <a href="<?= Url::to(['login/logout'])?>"  data-index="0"><i class="fa fa-sign-out"></i> 退出</a>
                        </li>
                        
                        
                        
                    </ul>
                </nav>
            </div>
            
         
            
            <div class="row J_mainContent" id="content-main">
                <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="<?= Url::to(['main'])?>" frameborder="0" data-id="<?= Url::to(['main'])?>" ></iframe>
            </div>
             
            
        </div>
        <!--右侧部分结束-->
        
            <!--右侧边栏开始-->
        
        <!--右侧边栏结束-->
        <!--mini聊天窗口开始-->
        
        
        <!--mini聊天窗口结束-->
    </div>
    




  

    <!-- 全局js -->
    <script src="/assets/index/js/jquery.min.js?v=2.1.4"></script>
    <script src="/assets/index/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/assets/index/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/assets/index/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
     <script src="/assets/index/js/layer/layer.min.js"></script>
     
      <script src="/assets/index/artdialog/dialog-plus-min.js"></script>

    <!-- 自定义js -->
    <script src="/assets/index/js/hplus.js?v=4.1.0"></script>
    <script type="text/javascript" src="/assets/index/js/contabs.js"></script>

    <!-- 第三方插件 -->
    <script src="/assets/index/js/plugins/pace/pace.min.js"></script>


          <script type="text/javascript">

$(document).ready(function(){

	$('#guide').click(function(){	
				$('#mcover').show();

	});
	$('.J_menuItem').click(function(){
				$('#mcover').hide();

	});	
	$('#mcover').click(function(){
				$('#mcover').hide();

	});	
});	
	
</script>
  
  
  
</body>

</html>

<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;
//AppAsset::register($this);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content=""/>
	<!-- 360浏览器默认使用Webkit内核 -->
	<meta name="renderer" content="webkit">
    
    <link type="text/css" href="<?=Yii::getAlias('@web')?>/assets/index/css/jquery-ui-1.10.0.custom.css?v=<?=time()?>" rel="stylesheet" />
    
    <link href="<?=Yii::getAlias('@web')?>/assets/index/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="<?=Yii::getAlias('@web')?>/assets/index/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    
    <link type="text/css" href="<?=Yii::getAlias('@web')?>/assets/index/css/hovershow.css" rel="stylesheet"/>
    
    
    <link href="<?=Yii::getAlias('@web')?>/assets/index/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=Yii::getAlias('@web')?>/assets/index/css/animate/notification.css">
    
 
    <link href="<?=Yii::getAlias('@web')?>/assets/index/css/style.css?v=4.1.0" rel="stylesheet">

    <link href="<?=Yii::getAlias('@web')?>/assets/index/css/new.css">
	<!-- Toastr style -->
	<link href="<?=Yii::getAlias('@web')?>/assets/index/plugins/toastr/toastr.min.css" rel="stylesheet">
 	<!-- Custom and plugin javascript -->


<style>
body{
	overflow-y: hidden;
	background-color:#FFF;
}
.option{padding-left:-30px;}
#oDivL_tab_Test3{background-color: #fff;}
.table{max-width: none;}
</style>

</head>
<body class="white-bg">
    		
			
			<!-- 模态框 -->
			

			

			<!-- 新功能介绍模态框 -->


<!-- 系统公告 -->

<!-- nice-scroll -->

<div class="row">
            <div class="col-sm-12">
                <div class="middle-box text-center animated fadeInRightBig">
                 

                    <div class="alert alert-danger" style="margin:40px 0 0">
                       对不起！您暂无此权限
请联系管理员为您开通
                        .
                    </div>
                </div>
            </div>
        </div>
        
        


    <div class="row" style="width::400px; margin:auto">
        <div class="col-md-6">


        </div>  </div>              
                    
<script src="<?=Yii::getAlias('@web')?>/assets/index/js/inspinia.js"></script>



</body>
</html>
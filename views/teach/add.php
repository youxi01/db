<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
//use common\widgets\Alert;
use yii\helpers\Url;
use yii\bootstrap\Alert;

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
    
    
    <link href="<?=Yii::getAlias('@web')?>/assets/index/css/site1.css?v=4.1.0" rel="stylesheet">
    <link href="<?=Yii::getAlias('@web')?>/assets/index/css/style.css?v=4.1.0" rel="stylesheet">

    <link href="<?=Yii::getAlias('@web')?>/assets/index/css/new.css">
	<!-- Toastr style -->
	<link href="<?=Yii::getAlias('@web')?>/assets/index/css/plugins/toastr/toastr.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="<?=Yii::getAlias('@web')?>/assets/index/css/jquery.fileupload.css" type="text/css" />
 	<!-- Custom and plugin javascript -->
	  <script src="<?=Yii::getAlias('@web')?>/assets/index/js/common.js"></script>
	<!-- Sweet Alert -->
	<link href="<?=Yii::getAlias('@web')?>/assets/index/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">	
    <link href="<?=Yii::getAlias('@web')?>/assets/index/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
	<!-- Mainly scripts -->
	<script src="<?=Yii::getAlias('@web')?>/assets/index/js/jquery.min.js"></script>
	<script src="<?=Yii::getAlias('@web')?>/assets/index/js/bootstrap.min.js"></script>
	<script src="<?=Yii::getAlias('@web')?>/assets/index/js/daterangepicker/moment.min.js"></script>
	<script src="<?=Yii::getAlias('@web')?>/assets/index/js/jquery.form.js" type="text/javascript"></script>
    
	<script src="<?=Yii::getAlias('@web')?>/assets/index/js/plugins/metisMenu/jquery.metisMenu.js"></script>
	<script src="<?=Yii::getAlias('@web')?>/assets/index/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Toastr -->
	<script src="<?=Yii::getAlias('@web')?>/assets/index/js/plugins/toastr/toastr.min.js"></script>
	<!-- Custom and plugin javascript -->
	<script src="<?=Yii::getAlias('@web')?>/assets/index/js/common.js"></script>
	<!-- jQuery UI -->
	<script src="<?=Yii::getAlias('@web')?>/assets/index/js/jquery-ui-1.10.4.min.js" type="text/javascript"></script>
    <script src="<?=Yii::getAlias('@web')?>/assets/index/My97DatePicker/WdatePicker.js" type="text/javascript"></script>
	<!-- Sweet alert -->
	<script src="<?=Yii::getAlias('@web')?>/assets/index/js/plugins/sweetalert/sweetalert.min.js"></script>    
	<!-- Jquery Validate -->
	<script src="<?=Yii::getAlias('@web')?>/assets/index/js/plugins/validate/jquery.validate.min.js"></script>
	<script src="<?=Yii::getAlias('@web')?>/assets/index/js/plugins/validate/messages_zh.min.js"></script>
    <script src="<?=Yii::getAlias('@web')?>/assets/index/js/validate_expand.js"></script>
    <script src="<?=Yii::getAlias('@web')?>/assets/index/js/bootstrap-tooltip.js"></script>
	<!-- 下拉筛选 -->
	<link rel="stylesheet" href="<?=Yii::getAlias('@web')?>/assets/index/css/bootstrap-select.css">
	<script type="text/javascript" src="<?=Yii::getAlias('@web')?>/assets/index/js/bootstrap-select.js" charset="UTF-8"></script>
	<!-- select2 -->
	<link href="<?=Yii::getAlias('@web')?>/assets/index/css/plugins/select2/select2.min.css" rel="stylesheet">
	<script src="<?=Yii::getAlias('@web')?>/assets/index/js/plugins/select2/select2.full.min.js"></script>   
    
   <script src="<?=Yii::getAlias('@web')?>/assets/index/js/layer/layer.min.js"></script>
   
   <link rel="stylesheet" href="<?=Yii::getAlias('@web')?>/assets/index/kindeditor/themes/default/default.css" />
<script charset="utf-8" src="<?=Yii::getAlias('@web')?>/assets/index/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="<?=Yii::getAlias('@web')?>/assets/index/kindeditor/lang/zh_CN.js"></script>

   
 <script type="text/javascript">

function returnmessage(frame_id){ 
	if(frame_id==''||frame_id==undefined){
		frame_id='supportiframe';
	}
	var message = $(window.frames[frame_id].document).find("#layer_msg").val(); 
	if(message != null){
		var url=$(window.frames[frame_id].document).find("#layer_url").val();
		var layer_time=$(window.frames[frame_id].document).find("#layer_time").val();
		var layer_st=$(window.frames[frame_id].document).find("#layer_st").val();
		if(url=='1'){
			parent.layer.msg(message, layer_time, Number(layer_st),function(){ location.reload();});
		}else if(url==''){
			$('#save_submit').prop('disabled',false);
			parent.layer.msg(message, layer_time, Number(layer_st));
		}else{
			parent.layer.msg(message, layer_time, Number(layer_st),function(){location.href = url;});
		}
	}
}
</script>   
<style type="text/css">
#main_pic_prev{width: 80px;height: 80px;border: 1px dashed #d3d3d6;}
.add_title{
	padding-bottom:10px;
	height: 60px;
	margin-bottom:15px;
}
.add_title>span{
	border-bottom: 2px solid #1ab394;
	font-size: 24px;
}
.add_body >div >.full-height-scroll{
	border-right:1px dotted #ccc
}
.add_body_title{

}
.add_body_form{
	padding-left: 38px;
}
.add_body_form>form>.form-group{
	margin-bottom: 25px;
}
body{overflow-y:hidden;}
.form-control{
	float:left;
}
.checkbox{float:left;}
.addMember-trigger-button{
	width: 30px;
	height: 30px;
	line-height: 28px;
	color: #fff;
	text-align: center;
	cursor: pointer;
	background-color: #dcdfe3;
	border-radius: 50%;
}
.project-people{
	float:left;
}
.project-people a{
	float:left;
}
#vertical-timeline::before{
        width:0px !important;
    }
.addMember-remove{
	position: relative;
	margin-right:-10px;
	top: -42px;
	right: -28px;
	display:none;
	font-size: 10px;
	line-height: 1;
	color: #fa7a7a;
	cursor: pointer;
	background-color: #fff;
	border-radius: 50%;
}
.re_role_info{
	float:left;
	width:42px;
	height:40px;
}
</style>
</head>
<body class="gray-bg">
<script>
$(function(){
	$(".add_body").height(window.innerHeight-$("#add_body").offset().top-$("#tfoot_div").height()-40);
	$(window).resize(function(){
		$(".add_body").height(window.innerHeight-$("#add_body").offset().top-$("#tfoot_div").height()-40);
	})
})
</script>
    <div class="wrapper wrapper-content animated">
    
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
<form class="form-horizontal"  id="form" role="form" action="<?= Url::to(['save'])?>" method="post" enctype="multipart/form-data" target="supportiframe">
  <input type="hidden"
                name="<?= \Yii::$app->request->csrfParam; ?>"
                value="<?= \Yii::$app->request->getCsrfToken();?>">
		<div class="ibox-content add_body" id="add_body" >
			<div class="row">
				<div class="col-md-12 add_body" style="padding-right: 0px;">
					<div class="full-height-scroll">
						<div class="row">
							<div class="col-md-12 add_body_title" >
								<div class="all-inline">
									<span class="sq-tag"></span>
									<div class="text-tag">
									<span>创建教务动态</span></div>
								</div>
							</div>
							<div class="col-md-10 add_body_form">
                            
                         <div class="form-group">
									<label class="col-md-3 control-label">默认图片：</label>
									<div class="col-md-2">
                                    
                                        <img id="main_pic_prev" class="thumb80" />
                                       
									</div>
									<div class="col-md-4">
										<div class="btn btn-success fileinput-button">
											<span>选择图片</span>  
                                            
                                           
                                            
											<input type="file" name="UploadForm[imageFile]" id="main_pic"/>
										</div>
									</div>
							  </div>
                                
                                        
                                        <div class="form-group">
									<label class="col-md-3 control-label">标题：</label>
									<div class="col-md-7">
										<input class="form-control" aria-required="true" type="text" id="title" name="title" value=""/>
									</div>
									<div class="col-md-2"><span style="color:red;line-height: 32px;margin-left: 0px;">*</span></div>
								</div>
                                
									
                                       
                                       <div class="form-group">
									<label class="col-md-3 control-label" style="text-align:right">发布<?=Yii::$app->params['lang_train_campus']?>：</label>
									<div class="col-md-7">
                                        
                                   
            
                <?php
				 if($campus_data){
			   foreach($campus_data as $rs){
			  ?>
            <div class="checkbox checkbox-primary pull-left">
													<input name="campus[]" class="check_list"  type="checkbox" value="<?php echo $rs['id']?>"  id='campus_<?php echo $rs['id']?>'/>
													<label for="campus_<?php echo $rs['id']?>"><?php echo $rs['title']?>&nbsp;&nbsp;&nbsp;&nbsp;</label>                                                    
									  </div>
									 <?php
				}
				}
				?>             
           
            
											
                                           
											
                                   
                                                
                                                
   										 </div>
									<div class="col-md-2"><span style="color:red;line-height: 32px;margin-left:0px;">*</span></div>
							  </div>
                                
								
                                       
                         
                                        
                                        
                                        
                                        
                                        
                                <div class="form-group">
									<label class="col-md-3 control-label">是否置顶：</label>
																			<div class="col-md-7">
										 <div class='radio radio-info radio-inline'><input name='is_top' type='radio' id='is_top_1' value='0' checked/><label for='is_top_1'>否</label></div> &nbsp; <div class='radio radio-info radio-inline'><input type='radio' name='is_top' id='is_top_2' value='1'/><label for='is_top_2'>是</label></div>										</div>
										<div class="col-md-2"></div>
																	</div>
                                                                    
                                                                    
                                                                    
                                                                    
                                 <div class="form-group">
									<label class="col-md-3 control-label">首页推荐：</label>
																			<div class="col-md-7">
						      <div class='radio radio-info radio-inline'><input name='is_ad' type='radio' id='is_ad_1' value='0' checked/><label for='is_ad_1'>否</label></div> &nbsp; <div class='radio radio-info radio-inline'><input type='radio' name='is_ad' id='is_ad_2' value='1'/><label for='is_ad_2'>是</label></div>										</div>
										<div class="col-md-2"></div>
																	</div> 
                                                                                                      
                                <div class="form-group">
									<label class="col-md-3 control-label">咨询电话：</label>
									<div class="col-md-7">
										<input class="form-control" aria-required="true" type="text" id="tel" name="tel" value=""/>
									</div>
									<div class="col-md-2"><span style="color:red;line-height: 32px;margin-left: 0px;"></span></div>
								</div>
                                
                                
                                
                                <div class="form-group">
									<label class="col-md-3 control-label" style="text-align:right">内容：</label>
									<div class="col-md-9">
										<textarea id="content" name="content" style="width:650px;height:300px; border:1px solid #ddd;visibility:hidden;"></textarea>  <script>
      var editor;
      KindEditor.ready(function(K) {
        editor = K.create('textarea[name="content"]', {
          allowFileManager : true,
		  pasteType : 1,  //粘贴 没格式
items:[
            'source', '|', 'fullscreen', 'undo', 'redo', 'cut', 'copy', 'paste',
            'plainpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
            'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
            'superscript', '|', '-','selectall', 
            'title', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
            'italic', 'underline', 'strikethrough', 'removeformat', '|', 'image',
             'advtable', 'hr', 'link', 'unlink', '|','preview'
            ],
          afterBlur: function(){this.sync();}
        });
      });
    </script> 
									</div>
									
								</div>
                                
                                
                                
                                
																																					
						  </div>
							
						
						</div>
                        
                        


							
							
							
						
					

                        
					</div>
				</div>
				
			</div>
		</div>
		<div id="tfoot_div" class="clearfix">
			<div class="clearfix" id="tfoot_page">
				<div class="ibox-content" style="border-top: none;">
					<div class="col-sm-offset-5" >
                    <button type="submit" id="save_submit" class="btn btn-primary">确定</button>&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn  btn-primary" type="button" onclick="javascript:history.go(-1)" value="返回">
						
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<div style="display:none;" id="dialog-executor-role-list" title="选择班主任/客服">
	<div class="spiner-example">
		<div class="sk-spinner sk-spinner-three-bounce">
			<div class="sk-bounce1"></div>
			<div class="sk-bounce2"></div>
			<div class="sk-bounce3"></div>
		</div>
	</div>
</div>

 <script type="text/javascript">

$(document).ready(function(){
//点击启用或禁用
	$('#save_submit').prop('disabled',false);
	/*form表单验证*/
	$("#form").validate({
		submitHandler:function(form){
            $('#save_submit').prop('disabled',true);
            form.submit();
        },		
		rules:{
			title:{
				required: true,
			},		
			"campus[]":{
				required: true
			}, 		   
		},		
		messages: {
			title: {
				required: "标题不能为空",
			},
			"campus[]": {
				required: "请选择<?=Yii::$app->params['lang_train_campus']?>",
			}, 					   
		},		
	   errorPlacement: function (error, element) { //指定错误信息位置
		  if (element.is(':radio') || element.is(':checkbox')) { //如果是radio或checkbox
		   var eid = element.attr('name'); //获取元素的name属性
		     error.appendTo( element.parent().parent().next() ); //将错误信息添加当前元素的父结点后面
		 } else {
		   error.insertAfter(element);
		 }
	   }
		   
	});	
}); 

</script>

<script type="text/javascript" src="<?=Yii::getAlias('@web')?>/assets/index/js/uploadPreview.js"></script>
<script type="text/javascript">
//初始化上传图片
$("body").on('click','input[type="file"]', function(){
	var selector = $(this).attr('id');
	$("#"+selector).uploadPreview({ Img: selector+"_prev", Width: 80, Height: 80 });
});
</script>
<script src="<?=Yii::getAlias('@web')?>/assets/index/js/inspinia.js"></script>
</body>
</html>
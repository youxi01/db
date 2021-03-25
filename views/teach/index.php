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
use yii\widgets\LinkPager;
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
    <script src="<?=Yii::getAlias('@web')?>/assets/index/js/bootstrap-tooltip.js"></script>
	<!-- 下拉筛选 -->
	<link rel="stylesheet" href="<?=Yii::getAlias('@web')?>/assets/index/css/bootstrap-select.css">
	<script type="text/javascript" src="<?=Yii::getAlias('@web')?>/assets/index/js/bootstrap-select.js" charset="UTF-8"></script>
	<!-- select2 -->
	<link href="<?=Yii::getAlias('@web')?>/assets/index/css/plugins/select2/select2.min.css" rel="stylesheet">
	<script src="<?=Yii::getAlias('@web')?>/assets/index/js/plugins/select2/select2.full.min.js"></script>   
  
</head>
<body class="gray-bg">

			
			<!-- 模态框 -->
			

			

			<!-- 新功能介绍模态框 -->


<!-- 系统公告 -->
<style>
body{
	overflow-y: hidden;
}
.option{padding-left:-30px;}
#oDivL_tab_Test3{background-color: #fff;}
.table{max-width: none;}
.pagination{ margin:0px 0px}
.active {font-weight: 600;color: #000;}
.nav.nav-tabs-left li{width:100%;}
.nav-tabs-left>li.active>a{border-top:white;color: #19aa8d !important;background-color:#fff;}
.ibox-span{float:left;margin-left:30px;line-height:30px;}
.table tbody tr {cursor: Default;}
</style>
<!-- nice-scroll -->
<script src="<?=Yii::getAlias('@web')?>/assets/index/js/jquery.nicescroll.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=Yii::getAlias('@web')?>/assets/index/js/TableFreeze.js"></script>
<script>
$(function(){
	var scroll_width = 7;
	// var oTableLH_tab_Test3 = 38;
	$("#table_div").height(window.innerHeight-$("#table_div").offset().top-$("#tfoot_div").height()-parseInt($("#table_container").css("padding-bottom").replace("px",""))-10);
	$(window).resize(function(){
		$("#table_div").height(window.innerHeight-$("#table_div").offset().top-$("#tfoot_div").height()-parseInt($("#table_container").css("padding-bottom").replace("px",""))-10);
		$("#oDivL_tab_Test3").height($("#table_div").height()-scroll_width-1).width($("#oTableLH_tab_Test3").width());
		$("#oDivH_tab_Test3").height($("#oTableLH_tab_Test3").height()).width($("#table_div").width()-scroll_width);
	})
	$(".nicescroll").niceScroll({
		cursorcolor: "#999",//#CC0071 光标颜色 
	    cursoropacitymax: 0.4, //改变不透明度非常光标处于活动状态（scrollabar"可见"状态），范围从1到0 
	    touchbehavior: false, //使光标拖动滚动像在台式电脑触摸设备 
	    cursorwidth: scroll_width+"px", //像素光标的宽度 
	    cursorborder: "0", //     游标边框css定义 
	    cursorborderradius: "3px",//以像素为光标边界半径 
	    autohidemode: false, //是否隐藏滚动条 
	    zindex:100,
	    background:"#F3F3F5",//滚动条背景色
	});
	if ($('#tab_Test3').length > 1) {
		$("#tab_Test3").FrozenTable(1, 0, 3);
	}
	$("#oDivL_tab_Test3").height($("#table_div").height()-scroll_width-1).width($("#oTableLH_tab_Test3").width()).css({'zIndex':9});
	$("#oDivL_tab_Test3").css({"background-color":"#fff","border-right":"1px solid #e7eaec"});
	$("#oTableLH_tab_Test3").css({"border-right":"1px solid #e7eaec"});
	$("#oDivH_tab_Test3").height($("#oTableLH_tab_Test3").height()).width($("#table_div").width()-scroll_width).css({'zIndex':9});
})
</script>
<div class="wrapper wrapper-content">

<div class="row">
    <div class="col-md-12" style=" margin-bottom:8px">
    
                           <ul class="nav nav-tabs nav-tabs-line">
                                    <li class="nav-item">
                                        <a class="nav-link "  href="<?= Url::to(['pms/index'])?>">通知列表</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active"  href="<?= Url::to(['index'])?>">教务动态</a>
                                    </li>
                                     <li class="nav-item">
                                        <a class="nav-link"  href="<?= Url::to(['pms/smsqueue-add'])?>">短信营销</a>
                                    </li>
                                    
                                </ul>

    </div>
</div>

	    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins">
            	<div class="title-bar" style="position: relative;z-index: 99;">
					<div class="row clearfix" id="title-hide" style="display:none;">
						<ul class="breadcrum pull-left">
								<li>已选中&nbsp;<span id="icheck_num"></span>&nbsp;项</li>
								<li id="user_span" ><a id="delete" href="javascript:void(0)" onclick="del_user(1)"><i class="fa fa-times"></i>&nbsp;停用账号</a></li>
								<li class="single_btn"><a href="javascript:void(0)" id="edit_user"><i class="fa fa-pencil"></i>&nbsp;修改信息</a></li>
								<li class="single_btn"><a href="javascript:void(0);" id="reset_password" class="link"><i class="fa fa-download"></i>&nbsp;重置密码</a></li>
																<li class="last_li"><big><a class="fa fa-times pull-right" id="back-show"></a></big></li>
							</ul>
					</div>
                    <div class="row " id="title-show">
							<div class="nav pull-left" style="margin:2px 0 0 15px;">
								<a href="<?= Url::to(['add'])?>" id="add_yingshou" class="btn btn-primary  pull-left" style="margin-right:8px"><i class="fa fa-plus-circle"></i>&nbsp;新建</a>			</div>
							
						</div>
                    
					
				</div>
				<div class="ibox-content clearfix" id="table_container">
					<form id="form1"  method="post" style="position:relative;">
						<div id="table_div" class="nicescroll">
							<table width="100%" class="table table-hover table-striped table_thead_fixed" id="tab_Test3">
									
									<tr id="childNodes_num" class="tabTh">
									<td width="2%" height="24" style="padding-left: 20px">
											
										</td>
										<td width="45%">标题</td>
										<td width="33%">发布时间</td>
										<td width="20%">操作</td>
									</tr> 
									<?php foreach($teach_data as $item){?>
									<tr class="controls_tr">
									<td style="padding-left: 20px">
												
											</td>
											<td><?php if($item['is_ad']==1) echo '<span style="color:red">[首页推荐]</span> ';?><?php if($item['is_top']==1) echo '<span style="color:red">[置顶]</span> ';?><?php echo $item['title']?></td>
									  <td class="detail-right " ><?php echo date('Y-m-d H:i:s',$item['intime'])?>&nbsp;</td>
									  <td >
                                        <a class="edit" href="<?= Url::to(['edit','id'=>$item['id']])?>" ><i class="fa fa-edit"></i>&nbsp;编辑</a>
									    &nbsp;&nbsp;
                                                     
                                        <a class="delete" href="javascript:void(0)" rel="<?php echo $item['id'];?>">
											   <i class="fa fa-times"></i>&nbsp;删除
										</a>&nbsp;&nbsp;
                                                        
                                        </td>
										</tr>				
									<?php
									}
										?>						</table>
</div>
							
<div id="tfoot_div" class="clearfix">
							<div class="clearfix" id="tfoot_page">
																 <div style="margin: 10px auto;"><div style="width:auto;float:right;margin-left:15px;line-height: 30px;"></div><div style="width:auto;height:30px;float:right;margin:2px 5px 0px 10px">
        <?php echo LinkPager::widget([
    'pagination' => $pagination,
]);?>
        </div><div style="width:auto;float:right;margin-top:7px;margin-left:35px">共<?php echo $totalCount;?> 条 <?php echo $page?>/<?php echo $pageSize?> 页</div></div> <div class="pull-right" style="width:auto;">
	<select style="width:auto;display:inline-block;" id="listrows" name="listrows" rel="<?php echo $listrows?>" class="form-control input-sm">
		<option value="10">10</option>
		<option value="15">15</option>
		<option value="20">20</option>
		<option value="30">30</option>
		<option value="40">40</option>
		<option value="50">50</option>
		<option value="60">60</option>
		<option value="70">70</option>
		<option value="80">80</option>
		<option value="90">90</option>
		<option value="100">100</option>
	</select>
</div>
<script type="text/javascript">
function changeURLArg(url,arg,arg_val){ 
	var pattern=arg+'=([^&]*)'; 
	var replaceText=arg+'='+arg_val; 
	if(url.match(pattern)){ 
	var tmp='/('+ arg+'=)([^&]*)/gi'; 
	        tmp=url.replace(eval(tmp),replaceText); 
	return tmp; 
	    }else{ 
	if(url.match('[?]')){ 
	return url+'&'+replaceText; 
	        }else{ 
	return url+'?'+replaceText; 
	        } 
	    } 
	return url+'\n'+arg+'\n'+arg_val; 
} 
var list_rows = $("#listrows").attr('rel');
$("#listrows").val(list_rows);
$("#listrows").change(function(){
	var every_listrows = $(this).val();
	var this_url = window.location.search;
	if(this_url.indexOf("listrows") > 0){
		window.location = changeURLArg(this_url,'listrows',every_listrows);
	}else{
		window.location = this_url+"&listrows="+every_listrows;
	}
});
</script>
							</div>
					  </div>



						
				  </form>
				</div>
            </div>
        </div>
    </div>
</div>


 <script type="text/javascript">

$(document).ready(function(){
		$('.delete').click(function(){
		var id = $(this).attr('rel');
		swal({
			title: "您确定要删除该信息？",
   			text: "删除后将无法恢复，请谨慎操作！",
			type: "warning",   
			showCancelButton: true,   
			confirmButtonColor: "#DD6B55",   
			confirmButtonText: "确定",
	        cancelButtonText:'取消',
	        closeOnConfirm:false,
	        closeOnCancel:false
		},
		function(isConfirm){
	        if (isConfirm) {
	        	$.ajax({
		            type:'GET',
		            url: "<?= Url::to(['del'])?>?id="+id,
		            async: false,
		            success: function (data) {
						if (data.status == 1) {
							swal("删除成功！", "您已经永久删除了信息！", "success");
							location.reload();
						}else{
							swal({
								title: "操作失败！",
								text:data.info,
								type: "error"
							})
							return false;
						}
		            },
		            dataType: 'json'
		        });
	        } else {
	            swal("已取消","您取消了删除操作！","error");
	        }
	    });
	});


}); 
</script>
<script src="<?=Yii::getAlias('@web')?>/assets/index/js/inspinia.js"></script>


<script type='text/javascript'>
$(document).ready(function(){
    /*复选框选择效果*/
    if($('.check_all').size() > 0){
        var icheck_num = 0;
        var all_check_num = 0;
        /*选择所有and取消所有*/
        $(".check_all").change(function(){
            $("input[class='check_list']").prop('checked', $(this).prop("checked"));//选中
            // if($(".check_all").prop("checked")){
            if($(this).is(":checked")){ //jQuery方式判断
                $(".single_btn").hide().children().each(function(){
                    $(this).attr('rel','');
                })
                $('#title-hide').show();
                $('#title-show').hide();
                all_check_num = $("input[class='check_list']:checked").length;
            }else{
                $('#title-hide').hide();
                $('#title-show').show();
                all_check_num = 0;
            }

            if(document.getElementById("oDivL_tab_Test3")){
                if ($(".check_all:checked").size()>0 && icheck_num % 2 == 0) {
                    icheck_num = all_check_num/2;
                    $("#icheck_num").text(all_check_num/2);
                } else {
                    icheck_num = all_check_num;
                    $("#icheck_num").text(all_check_num);
                }
            } else {
                icheck_num = all_check_num;
                // all_check_num = $("input[class='check_list']:checked").length;
                // icheck_num = all_check_num;
                $("#icheck_num").text(icheck_num);
            }
        });
        /*让隐藏标签显示*/
        $('.check_list').click(function(){
            var thiss = $(this);
            icheck_num = check_num();
            $("#icheck_num").text(icheck_num);
            //处理单选时才有的操作
            if (icheck_num == 1) {
                $(".single_btn").show().children().each(function(){
                    $(this).attr('rel',$("input.check_list:checked").val());
                    $('#log_customer').attr('rel1',$("input.check_list:checked").attr('rel'));

                    $('#log_business').attr('rel',$("input.check_list:checked").attr('rel'));
                    $('.business_btn').children().attr('rel1',$("input.check_list:checked").attr('rel'));

                    $('#examine_type').val($("input.check_list:checked").attr('rel'));
                    var next_examine_role = $("input.check_list:checked").parents('tr').find('.check_badge').attr('rel');
                    if($("input.check_list:checked").attr('rel1') == 1){
                        $('#to_top_span').html('&nbsp;取消置顶');
                        $('#to_check').html('<input type="hidden" class="is_checked" value="2">&nbsp;撤销');
                        if (next_examine_role == 1) {
                            $('#admin_examine').show();
                        } else {
                            $('#admin_examine').hide();
                        }
                        $('#user_span').html('<a id="delete" href="javascript:void(0)" onclick="del_user(2)"><i class="fa fa-check"></i>&nbsp;启用账号</a>');
                    }else{
                        if (next_examine_role == 1) {
                            $('#to_top_span').html('&nbsp;置顶');
                            var rel_name = $("input.check_list:checked").attr('rel3');
                            $('#to_check').html('<input type="hidden" class="is_checked" rel="' + rel_name + '" value="1">&nbsp;审核');
                            $('#not_admin').show();
                        } else {
                            $('#not_admin').hide();
                        }
                        $('#admin_examine').hide();
                    }
                    if ($("input.check_list:checked").attr('rel2') == 1) {
                        $('#call_span').html('<a href="javascript:void(0);" onclick="call_form(2)"><i class="fa fa-headphones"></i>&nbsp;停用呼叫中心</a>');
                    } else {
                        $('#call_span').html('<a href="javascript:void(0);" onclick="call_form(1)"><i class="fa fa-headphones"></i>&nbsp;启用呼叫中心</a>');
                    }

                    //进销存的审核、撤销
                    var do_examine = thiss.attr('do_examine');
                    var do_revoke = thiss.attr('do_revoke');
                    if (do_examine != 1) {
                        $('.do_examine').hide();
                    }
                    if (do_revoke != 1) {
                        $('.do_revoke').hide();
                    }
                    // 仓库禁用启用
                    if ($('.check_list:checked').attr('status') == 1) {
                        $('.edit_status[status="enable"]').parents('li').hide();
                        $('.edit_status[status="disable"]').parents('li').show();
                    } else if ($('.check_list:checked').attr('status') == 2) {
                        $('.edit_status[status="enable"]').parents('li').show();
                        $('.edit_status[status="disable"]').parents('li').hide();
                    } else {
                        $('.edit_status[status="enable"]').parents('li').hide();
                        $('.edit_status[status="disable"]').parents('li').hide();
                    }
                })
            } else {
                $(".single_btn").hide().children().each(function(){
                    $(this).attr('rel','');
                })
            }
            if(icheck_num <= 0){
                $('#title-hide').hide();
                $('#title-show').show();
            }else{
                $('#title-hide').show();
                $('#title-show').hide();
            }
        });
        /*点插 取消所有选中*/
        $('#back-show').click(function(){
            icheck_num = 0;
            $("#icheck_num").text(icheck_num);
            $('#title-hide').hide();
            $('#title-show').show();
            $(".check_list,.check_all").attr("checked",false);
        });

        var rows = ($('input[class="check_list"]').parents('tbody').find('tr').length / 2) - 1;
        function check_num () { 
            all_check_num = $("input[class='check_list']:checked").length;
            if (document.getElementById("oDivL_tab_Test3") && $('.check_all').is(':checked')) {
                all_check_num -= rows;
            }
            return all_check_num;
        }        
    }
    // $('form').on('keydown', function (e) { if (e.keyCode == 13) { return false; } });

    /*退出提示*/
    $('.logout').click(function () {
        swal({
            title: "确定退出登录?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "确定",
            cancelButtonText: "取消",
            closeOnConfirm: false
            },
            function (isConfirm) {
                if (isConfirm) {
                    window.location="/index.php?m=user&a=logout";
                }
            }
        );
    });

    /*提交失败返回前一页*/
    var href = "";
    if(href != '' && href != null){
        swal({
            title: "添加失败!",type: "error",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "返回",
            closeOnConfirm: false 
        }, 
        function(){
            location.href = 'javascript:history.back(-1)';
        });
    }

    //授权信息查询
    $('#authorize').click(function () {
        $.ajax({
            type: "POST",
            url: "/index.php?m=system&a=anthorize",
            data:'',
            async: true,
            success: function(data) {
                if (data.status == 1) {
                    var url = "/index.php?m=system&a=anthorize";
                    $('#Modal_anthorize').modal('show');
                    $('#anthorize_modal').load(url);
                } else {
                    alert_crm(data.info);
                }
            }
        });
    });
});




</script>

</body>
</html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web')?>/assets/activity/uploader/webuploader.css"/>
    <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web')?>/assets/activity/uploader/cropper.css"/>
    <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web')?>/assets/activity/uploader/style.css"/>
    <style type="text/css">
        input {
            border: #000 1px solid;
            width: 120px;
        }
    </style>
</head>
<body>
<div id="wrapper">
    <div>活动主图<input type="text" id="activity_images" value="<?php echo $info["activity_images"];?>"></div>
    <div>机构名称<input type="text" id="activity_organization_name"></div>
    <div>活动标题<input type="text" id="activity_title"></div>
    <div>活动开始时间<input type="text" id="activity_start_time"></div>
    <div>活动截止时间<input type="text" id="activity_end_time"></div>
    <div>课程名称<input type="text" id="course_name"></div>
    <div>课程描述<input type="text" id="course_info"></div>
    <div>课程图片<input type="text" id="course_images"></div>
    <div>原价<input type="text" id="course_original_price"></div>

    <div class="groupon-packages">
        <span>拼团方案</span>
        <div class="groupon-packages-list">
            <div>
                <span>达到</span>
                <span><input type="text" class="groupon-packages-number"></span>
                <span>人，拼团价</span>
                <span><input type="text" class="groupon-packages-price"></span>
            </div>
        </div>
    </div>

    <div id="add-packages">添加拼团方案</div>

    <div>是否开启支付<input type="text" id="course_payment_state"></div>
    <div>支付模式<input type="text" id="course_payment_type"></div>
    <div>支付金额<input type="text" id="course_payment_price"></div>
    <div>成团数上限<input type="text" id="course_payment_limit"></div>
    <div>老生（在读学员）只能开团不能参团<input type="text" id="member_is_supported"></div>

    <div>活动说明<input type="text" id="activity_info"></div>
    <div>联系方式<input type="text" id="activity_contact"></div>
    <div>二维码图片（非必选）<input type="text" id="activity_qrcode_path"></div>
    <div>机构介绍<input type="text" id="activity_organization_info"></div>

    <div>背景音乐<input type="text" id="activity_bg_music_path"></div>
    <div>机构电话<input type="text" id="activity_organization_mobile"></div>
    <div>统计数据展示<input type="text" id="activity_data_state"></div>
    <div>是否开启短信验证功能<input type="text" id="activity_sms_state"></div>
    <div>活动名称<input type="text" id="activity__name"></div>

    <div id="form_item_dom">
        <div>报名信息设置</div>
        <div><input type="checkbox" disabled="disabled" checked="checked" value="姓名" options="text" name="form_item">姓名
        </div>
        <div><input type="checkbox" disabled="disabled" checked="checked" value="手机" options="text" name="form_item">手机
        </div>
        <div><input type="checkbox" value="性别" options="text" name="form_item">性别</div>
    </div>
    <div id="mask">
        <div>自定义文本项</div>
        <div><input type="text" id="form_item_custom"></div>
        <div id="form_item_custom_add">添加自定义</div>
    </div>
    <div id="submit">提交</div>


</div>
<script type="text/javascript" src="<?=Yii::getAlias('@web')?>/assets/activity/uploader/jquery.js"></script>

<script type="text/javascript">
    $(function () {

        // 添加自定义文本项
        $("#form_item_custom_add").click(function () {
            var form_item_custom = $("#form_item_custom").val();
            if (!form_item_custom) {
                return false;
            }
            var _html = '<div><input type="checkbox" value="' + form_item_custom + '" options="text" name="form_item">' + form_item_custom + '</div>';
            $("#form_item_dom").append(_html);
        });

        // activity packages active

        $("#add-packages").click(function () {
            var html = '<div class="groupon-packages-list"><div><span>达到</span><span><input type="text" class="groupon-packages-number"></span><span>人，拼团价</span><span><input type="text" class="groupon-packages-price"></span></div></div>';
            $(".groupon-packages").append(html);
        });

        // submit

        $("#submit").on('click', function () {
            var data = {};
            data['token'] = '<?php echo Yii::$app->request->get('token');?>';
            data['activity_images'] = $("#activity_images").val();
            data['activity_organization_name'] = $("#activity_organization_name").val();
            data['activity_title'] = $("#activity_title").val();
            data['activity_start_time'] = $("#activity_start_time").val();
            data['activity_end_time'] = $("#activity_end_time").val();
            data['course_name'] = $("#course_name").val();
            data['course_info'] = $("#course_info").val();
            data['course_images'] = $("#course_images").val();
            data['course_original_price'] = $("#course_original_price").val();
            data['course_payment_state'] = $("#course_payment_state").val();
            data['course_payment_type'] = $("#course_payment_type").val();
            data['course_payment_price'] = $("#course_payment_price").val();
            data['course_payment_limit'] = $("#course_payment_limit").val();
            data['member_is_supported'] = $("#member_is_supported").val();
            data['activity_info'] = $("#activity_info").val();
            data['activity_contact'] = $("#activity_contact").val();
            data['activity_qrcode_path'] = $("#activity_qrcode_path").val();
            data['activity_organization_info'] = $("#activity_organization_info").val();
            data['activity_bg_music_path'] = $("#activity_bg_music_path").val();
            data['activity_organization_mobile'] = $("#activity_organization_mobile").val();
            data['activity_data_state'] = $("#activity_data_state").val();
            data['activity_sms_state'] = $("#activity_sms_state").val();
            data['activity__name'] = $("#activity__name").val();

            // 活动价格处理
            var course_activity_price = [];

            $(".groupon-packages-list").each(function (i) {
                var number = $(this).find(".groupon-packages-number").val();
                var price = $(this).find(".groupon-packages-price").val();
                course_activity_price.push({"number": number, "price": price});
            });
            data['course_activity_price'] = course_activity_price;

            //处理报名表单项
            var form_item_arr = [];
            $("input[name='form_item']:checked").each(function (i) {
                form_item_arr.push({'name': $(this).val(), "type": $(this).attr('options'), "label": "label_" + i});
            });
            data['activity_form_item'] = form_item_arr;

            $.ajax({
                type: 'POST',
                url: '<?=Yii::getAlias('@web')?>/activitygroupon/create',
                dataType: "html",
                data: data,
                success: function (res) {

                }
            });


        });
    });

</script>
</body>
</html>
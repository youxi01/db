<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="description" content="爱课王管理平台">
    <title>活动营销</title>
    <script>
        document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
            ':35729/livereload.js?snipver=1"></' + 'script>')
    </script>
    <link rel="stylesheet" href="<?=Yii::getAlias('@web')?>/assets/activity/web/css/normalize.css">
    <link rel="stylesheet" href="<?=Yii::getAlias('@web')?>/assets/activity/web/css/common.css">
    <script src="<?=Yii::getAlias('@web')?>/assets/activity/web/js/vue.js"></script>
    <script src="<?=Yii::getAlias('@web')?>/assets/activity/web/js/axios.min.js"></script>
    <script type="text/javascript" src="<?=Yii::getAlias('@web')?>/assets/activity/uploader/jquery.js"></script>

</head>

<body>
    <div id="app">
        <div class="testBtn">
            <button @click="openDialog1">测试弹窗1</button>
            <button @click="openDialog2">测试弹窗2</button>
        </div>
        <div class="tabs">
            <div class="tab active">活动营销</div>
            <div class="tab">活动管理</div>
            <div class="tab">咨询订单</div>
            <div class="tab">统计分析</div>
        </div>
        <div class="types">
            <div class="type title">类型:</div>
            <div class="type active activity-type-select" data="0">全部</div>
            <div class="type activity-type-select" data="1">团购</div>
            <div class="type activity-type-select" data="2">砍价</div>
            <div class="type activity-type-select" data="3">优惠券</div>
        </div>
        <!--div class="types">
            <div class="type title">场景:</div>
            <div class="type active">全部</div>
            <div class="type">春季招升</div>
            <div class="type">暑假招生</div>
            <div class="type">秋季招生</div>
            <div class="type">续费</div>
            <div class="type">其他</div>
        </div-->
        <div class="tips">
            根据&lt;&lt;微信外部链接内容管理规范&gt;&gt; , 在微信内传播的外部链接存在被封禁风险 ,请谨慎操作
        </div>
        <div class="items">
            <div class="item" v-for="item in list">
                <div class="img">
                    <div class="type">{{item.type}}</div>
                    <img v-if="item.img" :src="item.img" alt="">
                    <div class="qr">
                        <img >
                        <span>扫一扫手机制作预览</span>
                    </div>
                </div>
                <div class="title">{{item.title}}</div>
                <div class="btn" :type="item.activityType">立即创建</div>
                <div class="datas">
                    发布<span class="nums">{{item.post}}</span> 最高招生<span class="nums">{{item.zhaosheng}}</span>
                </div>
            </div>
        </div>
        <div class="cover" :class="{showCover:showCover}" :style="{width:showCover?'100%':'0px'}">
            <div class="dialog" v-if="showDialog1">
                <div class="titlebar">
                    <div class="title">保存活动</div>
                    <img src="<?=Yii::getAlias('@web')?>/assets/activity/web/imgs/close.png" @click="closeDialog" class="" alt="">
                </div>
                <img src="<?=Yii::getAlias('@web')?>/assets/activity/web/imgs/success.png" class="success" alt="">
                <div class="msg1">活动已保存成功</div>
                <div class="msg2">点击“发布活动”，即可快速完活动发布哦~</div>
                <img src="<?=Yii::getAlias('@web')?>/assets/activity/web/imgs/qr.png" class="qr" alt="">
                <div class="msg3">
                    微信扫一扫，手机端预览活动
                </div>
                <div class="msg4">
                    别忘记先发布活动再分享哟~
                </div>
                <div class="btns">
                    <div class="btn1">再编辑一下</div>
                    <div class="btn2">发布活动</div>
                </div>
            </div>
            <div class="dialog dialog2" v-if="showDialog2">
                <div class="titlebar">
                    <div class="title">发布活动</div>
                    <img src="<?=Yii::getAlias('@web')?>/assets/activity/web/imgs/close.png" @click="closeDialog" class="" alt="">
                </div>
                <img src="<?=Yii::getAlias('@web')?>/assets/activity/web/imgs/success.png" class="success" alt="">
                <div class="msg1">活动发布成功</div>
                <div class="msg2">微信扫描小程序码 , 可查看并分享活动哦~~</div>
                <img src="<?=Yii::getAlias('@web')?>/assets/activity/web/imgs/qr2.png" class="qr" alt="">
            </div>
        </div>
    </div>
</body>
<style>
    /**弹窗样式开始**/
    .dialog .titlebar {
        height: 85px;
        display: flex;
        padding: 0px 48px;
        font-size: 24px;
        font-weight: normal;
        font-stretch: normal;
        letter-spacing: 0px;
        color: #333333;
        border-bottom: 1px solid #c9c9c9;
        justify-content: space-between;
        align-items: center;
    }

    .dialog .titlebar img {
        width: 21px;
        height: 21px;
        background-color: #666666;
        cursor: pointer;
    }

    .dialog .msg1 {
        font-size: 28px;
        font-weight: normal;
        font-stretch: normal;
        letter-spacing: 0px;
        color: #333333;
        margin-top: 35px;
    }

    .dialog .msg2 {
        font-size: 24px;
        font-weight: normal;
        font-stretch: normal;
        letter-spacing: 0px;
        color: #666666;
        margin-top: 22px;
    }

    .dialog .msg3 {
        font-size: 18px;
        font-weight: normal;
        font-stretch: normal;
        letter-spacing: 0px;
        color: #333333;
        margin-top: 20px;
    }

    .dialog .msg4 {
        font-size: 18px;
        font-weight: normal;
        font-stretch: normal;
        letter-spacing: 0px;
        color: #999;
        margin-top: 20px;
    }

    .dialog .success {
        width: 93px;
        height: 93px;
        background-color: #64d241;
        margin-top: 50px;
    }

    .dialog .qr {
        width: 110px;
        height: 110px;
        margin-top: 30px;
    }

    .dialog .btns {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 20px;
    }

    .dialog .btns>div {
        width: 120px;
        height: 34px;
        background-color: #ffffff;
        border-radius: 17px;
        border: solid 1px #a0a0a0;
        margin-right: 20px;
        line-height: 34px;
        text-align: center;
        margin-left: 20px;
        cursor: pointer;
    }

    .dialog .btns>div:last-child {
        background-color: #fcb08d;
        color: white;
        border: none;
    }

    .dialog2 .success {
        margin-top: 80px;
    }

    .cover {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        opacity: 0;
        transition: opacity ease 0.8s;
        z-index: 10;
    }

    .showCover {
        opacity: 1;
    }

    .dialog {
        position: fixed;
        top: 10%;
        width: 50%;
        left: 25%;
        height: 75%;
        background-color: #ffffff;
        box-shadow: -1px 7px 10px 0px rgba(159, 159, 159, 0.23);
        border-radius: 30px;
        text-align: center;
    }

    /**弹窗样式结束**/

    /**页面样式开始**/
    .tabs {
        display: flex;
        align-items: center;
        height: 101px;
        background-color: #f4f4f4;
        padding: 0px 30px;
        margin-bottom: 10px;
    }

    .tabs .tab {
        font-size: 22px;
        font-weight: normal;
        font-stretch: normal;
        letter-spacing: 0px;
        color: #000000;
        margin: 0px 25px;
        padding-bottom: 15px;
        border-bottom: 1px solid #f4f4f4;
    }

    .tabs .tab.active {
        border-bottom: 1px solid #6da4f7;
    }

    .types {
        display: flex;
        align-items: center;
        height: 70px;
        padding-left: 30px;
    }

    .types .type {
        font-size: 22px;
        font-weight: normal;
        font-stretch: normal;
        letter-spacing: 0px;
        color: #333333;
        margin: 0px 30px;
    }

    .types .type.title {
        color: #666666;
    }

    .types .type.active {
        color: #fc7638;
    }

    .tips {
        height: 45px;
        background-color: #fff1ea;
        font-size: 20px;
        font-weight: normal;
        font-stretch: normal;
        letter-spacing: 0px;
        color: #333333;
        line-height: 45px;
        margin-left: 60px;
        padding-left: 20px;
    }

    .items {
        display: flex;
        flex-wrap: wrap;
        padding: 30px 60px;
    }

    .items .item {
        overflow: hidden;
        width: 218px;
        height: 370px;
        background-color: #ffffff;
        box-shadow: 0px 3px 13px 0px rgba(116, 116, 116, 0.13);
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-right: 35px;
        margin-bottom: 30px;
    }

    .items .item .img {
        position: relative;
        width: 218px;
        height: 220px;
        background-color: #c7c7c7;
    }

    .items .item .img img {
        width: 100%;
        height: 100%;
    }

    .items .item .img .type {
        width: 67px;
        height: 38px;
        background-color: #ffd304;
        font-size: 18px;
        font-weight: normal;
        font-stretch: normal;
        line-height: 31px;
        letter-spacing: 0px;
        color: #333333;
        border-bottom-right-radius: 10px;
        position: absolute;
        left: 0px;
        top: 0px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .items .item .title {
        font-size: 18px;
        font-weight: normal;
        font-stretch: normal;
        line-height: 31px;
        letter-spacing: 0px;
        color: #333333;
        margin-top: 18px;
    }

    .items .item .btn {
        width: 120px;
        height: 34px;
        background-color: #ff5101;
        border-radius: 17px;
        font-size: 18px;
        font-weight: normal;
        font-stretch: normal;
        line-height: 34px;
        letter-spacing: 0px;
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 8px;
    }

    .items .item .datas {
        font-family: PingFangSC-Medium;
        font-size: 16px;
        font-weight: normal;
        font-stretch: normal;
        line-height: 31px;
        letter-spacing: 0px;
        color: #999999;
        margin-top: 12px;
    }

    .items .item .datas .nums {
        color: #333333;
    }

    .testBtn {
        position: fixed;
        left: 50px;
        top: 50px;
        z-index: 11;
    }
    .items .item .img .qr {
        width: 218px;
        height: 220px;
        background-color: rgba(0, 0, 0, 0.6);
        position: absolute;
        left: 0px;
        top: 0px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        color: white;
        font-size: 15px;
        opacity: 0;
        transition: opacity 0s ease;
    }

    .items .item .img .qr img{
        width: 160px;
        height: 160px;
        margin-bottom: 10px;
    }
    /**页面样式结束**/
</style>
<script>
    var _list_arr = [];
    _list_arr['type1'] = {
                    type: "拼团",
                    img: "https://dss1.baidu.com/6ONXsjip0QIZ8tyhnq/it/u=2325525041,1291697709&fm=55&app=54&f=JPEG?w=1140&h=640",
                    title: "创意绘画特训班二期",
                    activityType:1,
                    post: 1239,
                    zhaosheng: 1055,
                };
    _list_arr['type2'] = {
                    type: "砍价",
                    img: "https://dss1.baidu.com/6ONXsjip0QIZ8tyhnq/it/u=2325525041,1291697709&fm=55&app=54&f=JPEG?w=1140&h=640",
                    title: "创意绘画特训班二期",
                    activityType:2,
                    post: 1239,
                    zhaosheng: 1055,
                };
   _list_arr['type3'] = {
                    type: "优惠券",
                    img: "https://dss1.baidu.com/6ONXsjip0QIZ8tyhnq/it/u=2325525041,1291697709&fm=55&app=54&f=JPEG?w=1140&h=640",
                    title: "创意绘画特训班二期",
                    activityType:3,
                    post: 1239,
                    zhaosheng: 1055,
                };                        

    var _list = [_list_arr['type1'] , _list_arr['type2'] , _list_arr['type3']];
    var app = new Vue({ 
        /*
        // 弹窗
        created() {
            setTimeout(() => {
                this.showCover = true
                this.showDialog2 = true
            }, 1000);
        },*/
        methods: {
            closeDialog() {
                this.showCover = false
                this.showDialog1 = false
                this.showDialog2 = false
            },
            openDialog1() {
                this.showCover = true
                this.showDialog1 = true
                this.showDialog2 = false
            },
            openDialog2() {
                this.showCover = true
                this.showDialog1 = false
                this.showDialog2 = true
            },
        },
        el: '#app',
        data: {
            showCover: false,
            showDialog1: false,
            showDialog2: false,
            list: _list
        }
    })
/*
    app.$data.list =[{
                    type: "砍价",
                    title: "创意绘画特训班二期",
                    post: 1239,
                    zhaosheng: 1055,
                }];*/

    $(function(){
        $(".activity-type-select").on("click",function(){
            // 重置qr
            $(".qr").css("opacity",0);
            $('.qr img').attr('src',"");

            $(".activity-type-select").removeClass('active');
            $(this).addClass('active');

            var vdata = $(this).attr('data');
            if(vdata == 0){
                app.$data.list = _list;
            }else{
                app.$data.list = [_list_arr['type'+vdata]];
            }

        });

        $(document).on("click", ".btn", function(){
            var type = $(this).attr('type');
            var _this = $(this);
            // 重置QR
            $(".qr").css("opacity",0);
            $('.qr img').attr('src',"");
            _this.parent().find('.qr img').attr('src',"<?php echo Yii::getAlias('@web');?>/activity/getlink?type="+type+"");
            _this.parent().find('.qr').css("opacity",1);
        });
    });          
</script>

</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        <title>神器|驾驶证家门口就能办</title>
        <link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/bootstrap/4.0.0-alpha.2/css/bootstrap.css">
        <style type="text/css">

            body{margin: 0;padding: 0;font-size: .8rem;}
            .header{height: 50px;width: 100%;position: fixed;top: 0;z-index: 2;background:#18A2E3;color:#fff;}
            .header .row .col-xs-3,.active{padding: 0;height: 50px;text-align: center;line-height: 50px;font-size: 15px;position: relative;width: 25%;}
            /*.header .row .col-xs-3{background-size: 100% 50px;}*/
            /*.header .row .col-xs-3[data-index='1']{background-image: url('<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/menu1.jpg');}
            .header .row .active[data-index='1']{background-image: url('<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/menu1-active.jpg');}
            .header .row .col-xs-3[data-index='2']{background-image: url('<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/menu2.jpg');}
            .header .row .active[data-index='2']{background-image: url('<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/menu2-active.jpg');}
            .header .row .col-xs-3[data-index='3']{background-image: url('<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/menu3.jpg');}
            .header .row .active[data-index='3']{background-image: url('<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/menu3-active.jpg');}
            .header .row .col-xs-3[data-index='4']{background-image: url('<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/menu4.jpg');}
            .header .row .active[data-index='4']{background-image: url('<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/menu4-active.jpg');}*/
            .active:after{ 
            position: absolute;
            bottom: 0;
            width: 0;
            height: 0;
            left: 50%;
            /*margin-left: 10px;*/
            content: " ";
            border-bottom: 6px solid  #fff ;
            border-left: 6px solid transparent ;
            border-right: 6px solid transparent ;
 
        }
            .content{margin-top: 60px;}
            .content img{width: 100%;}
            .content .firstQuestion{border: 2px solid #48a1dd;border-radius: 10px;margin: 15px;padding: 15px;}
            .content .firstQuestion p.title{color: #076db2;font-size: 16px;}
            .content .firstQuestion p:last-child{line-height: 30px;}
            .content .firstQuestion p span a{color: #ffa330;text-decoration: underline;}
            .content[data-index='2'],.content[data-index='3'],.content[data-index='4']{display: none;}

            .content .container-fluid .row{margin: 0;border-bottom: 1px solid #dbdbdb;}
            .content .container-fluid .row:first-child{border-bottom: 0;background: #999;color: #fff;}
            .content .container-fluid .row .col-xs-6,.content .container-fluid .row .col-xs-3{padding: 0;height: 45px;line-height: 45px;border-right: 1px solid #dbdbdb;}
            .content .container-fluid .row .col-xs-3{text-align: center;}
            .content .container-fluid .row .col-xs-3:last-child{border-right: 0;}
            .content .container-fluid .row:first-child .col-xs-6,.content .container-fluid .row:first-child .col-xs-3{height: 30px;line-height: 30px;text-align: center;}
            .content .container-fluid .row .col-xs-3:last-child{padding-right: 0;}
            .content .container-fluid .row .col-xs-3:last-child img{margin-left: 10px;width: 15px;}
            .content .container-fluid .row .col-xs-6,.content .container-fluid .row .col-xs-3{overflow : hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;}
            .content .container-fluid .row .col-xs-6 span{display: inline-block;height: 20px;line-height: 20px;width: 20px;border-radius: 20px;text-align: center;margin-right: 5px;color: #fff;background: #5ac0fb;}
            .content .container-fluid .row:nth-child(2) .col-xs-6 span{background: #ff2b23;}
            .content .container-fluid .row:nth-child(3) .col-xs-6 span{background: #ff8d00;}
            .content .container-fluid .row:nth-child(4) .col-xs-6 span{background: #5dd504;}
            #footer{height: 40px;line-height: 40px;text-align: center;color: #999;display: none;}
            #tips{height: 40px;line-height: 40px;color: #373a3c;padding-left: .9375rem;}
        </style>
    </head>
    <body>
        <div class="container header">
            <div class="row">
                <div class="col-xs-3 active" data-index='1'>
                    介绍
                </div>
                <div class="col-xs-3" data-index='2'>
                   办理指南
                </div>
                <div class="col-xs-3" data-index='3'>
                   设备地址
                </div>
                <div class="col-xs-3" data-index='4'>
                   常见问题
                </div>
            </div>
        </div>
        <div class="content" data-index='1'>
            <img src="<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/img1.jpg?time=201704051106">
            <img src="<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/img2.jpg">
            <img src="<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/img3.jpg">
            <img src="<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/img4.jpg">
        </div>
        <div class="content" data-index='2'>
            <img src="<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/img16.jpg">
            <img src="<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/img17.jpg">
            <img src="<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/img18.jpg">
            <img src="<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/img19.jpg">
            <img src="<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/img20.jpg">
        </div>
        <div class="content" data-index='3'>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-6">使用单位</div>
                    <div class="col-xs-3">开关机时间</div>
                    <div class="col-xs-3">附近/导航</div>
                </div>
            <!--  -->
            </div>
        </div>
        <div class="content" data-index='4'>
            <div class="firstQuestion">
                <p class="title">Q1:自助机办理驾驶证业务，需要提供什么资料？</p>
                <p>通过自助机办理的驾驶证业务需要提供：<span><a href="<?php echo $this->config->item('base_url')?>Zzj/example?type=1">驾驶证相片回执（180天内有效）</a>、<a href="<?php echo $this->config->item('base_url')?>Zzj/example?type=2">身份证正反面复印件</a>、<a href="<?php echo $this->config->item('base_url')?>Zzj/example?type=3">期满换证需要体检医院的体检表</a></span>（盖有医院体检专用章、医生签名、本人签名）。</p>
            </div>
            <img src="<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/img5.jpg">
            <img src="<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/img6.jpg">
            <img src="<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/img7.jpg">
            <img src="<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/img8.jpg">
            <img src="<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/img9.jpg">
            <img src="<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/img10.jpg">
            <img src="<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/img11.jpg">
            <img src="<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/img12.jpg">
            <img src="<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/img13.jpg">
            <img src="<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/img14.jpg">
            <img src="<?php echo $this->config->item('base_url')?>assets/images/selfServiceMachineGuide/img15.jpg">
        </div>
        <div id="tips">提示：开关机时间以医院实际的开关机为准</div>
        <div id="footer">暂无更多信息</div>
        
          <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.1.min.js') ?>"></script>
        <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
        <script type="text/javascript" src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo $this->config->item('base_url')?>assets/js/myAlert.js"></script>
        <script type="text/javascript"> 
            var base_url = "<?php echo $this->config->item('base_url')?>";
            var loadingStatus = "1";
            var remain, page = 1, lng, lat;
            function hideLoading(){
                var loading = document.getElementById('loading');
                if(loading){
                    $("#loading").modal('hide');
                }
            }
            wx.config({
                debug: false,
                appId: '<?php echo $appId; ?>',
                timestamp: <?php echo $timestamp; ?>,
                nonceStr: '<?php echo $noncestr; ?>',
                signature: '<?php echo $signature; ?>',
                jsApiList: [
                    'getLocation',
                    'openLocation'
                ]
            }); 
            var num = 1, index, type = "3";
            $(function () {
                chooseType(type);
                $(".header .col-xs-3").click(function () {
                    index = $(this).attr('data-index');
                    chooseType(index);
                    if (index == '3' && page == 1) {
                        showLoading();
                        wx.ready(function () {
                            wx.getLocation({
                                type: 'wgs84',
                                success: function (res) {
                                    lng = res.longitude;
                                    lat = res.latitude;
                                    var obj = {'lng': lng, 'lat': lat, 'page': page, 'pagesize': '15'};
                                    var url = base_url + 'Zzj/getMechineListByPage';
                                    $.post(url, obj, function (data) {
                                        data = JSON.parse(data);
                                        if (data.status == 'OK') {
                                            remain = data.remain;
                                            data = data.data;
                                            if (data.length > 0) {
                                                var html = '';
                                                for (var i = 0; i < data.length; i++) {
                                                    var distance = getDistance(lat, lng, data[i].LAT, data[i].LNG);
                                                    html += '<div class="row" data-lng="' + data[i].LNG + '" data-lat="' + data[i].LAT + '" data-useunit="' + data[i].USEUNIT + '" data-address="' + data[i].ADDRESS + '">' +
                                                            '<div class="col-xs-6"><span>' + num + '</span>' + data[i].USEUNIT + '</div>' +
                                                            '<div class="col-xs-3">08:00-18:00</div>' +
                                                            '<div class="col-xs-3">' + distance + 'KM<img src="' + base_url + 'assets/images/selfServiceMachineGuide/icon1.png"></div>' +
                                                            '</div>';
                                                    num++;
                                                }
                                                $(".content[data-index='3'] .container-fluid").append(html);
                                                toLink();
                                                hideLoading();
                                                page++;
                                            } else {
                                                showAlert("附近暂无医院信息", "确定");
                                                hideLoading();
                                                $("#footer").css('display', 'block');
                                            }
                                        } else {
                                            showAlert(data.msg, "确定");
                                            hideLoading();
                                        }
                                    });
                                }
                            });
                        });
                    }
                });

                $(window).scroll(function () {
                    if ($(document).scrollTop() >= $(document).height() - $(window).height()&&loadingStatus=="1") {
                        loadingStatus = "0";
                        if (remain > 0 && index == '3') {
                            var obj = {'lng': lng, 'lat': lat, 'page': page, 'pagesize': '15'};
                            var url = base_url + 'Zzj/getMechineListByPage';
                            $.post(url, obj, function (data) {
                                data = JSON.parse(data);
                                showLoading();
                                if (data.status == 'OK') {
                                    remain = data.remain;
                                    data = data.data;
                                    if (data.length > 0) {
                                        var html = '';
                                        for (var i = 0; i < data.length; i++) {
                                            var distance = getDistance(lat, lng, data[i].LAT, data[i].LNG);
                                            html += '<div class="row" data-lng="' + data[i].LNG + '" data-lat="' + data[i].LAT + '" data-useunit="' + data[i].USEUNIT + '" data-address="' + data[i].ADDRESS + '">' +
                                                    '<div class="col-xs-6"><span>' + num + '</span>' + data[i].USEUNIT + '</div>' +
                                                    '<div class="col-xs-3">08:00-18:00</div>' +
                                                    '<div class="col-xs-3">' + distance + 'KM<img src="' + base_url + 'assets/images/selfServiceMachineGuide/icon1.png"></div>' +
                                                    '</div>';
                                            num++;
                                        }
                                        $(".content[data-index='3'] .container-fluid").append(html);
                                        toLink();
                                        hideLoading();
                                        loadingStatus = "1";
                                    } else {
                                        loadingStatus = "1";
                                        showAlert("附近暂无医院信息", "确定");
                                        hideLoading();
                                        $("#footer").css('display', 'block');
                                    }
                                } else {
                                    loadingStatus = "1";
                                    showAlert(data.msg, "确定");
                                    hideLoading();
                                }
                            });
                        } else {
                            loadingStatus = "1";
                            $("#footer").css('display', 'block');
                        }
                    }
                });
                $(".header .col-xs-3:nth-child(3)").trigger('click');
            });
            function chooseType(type) {
                $(".header .col-xs-3").removeClass('active');
                $(".header .col-xs-3[data-index='" + type + "']").addClass('active');
                $(".content").hide();
                $(".content[data-index='" + type + "']").show();
            }
            function toLink() {
                $(".content .row").click(function () {
                    var lng = $(this).attr('data-lng');
                    var lat = $(this).attr('data-lat');
                    var useunit = $(this).attr('data-useunit');
                    var address = $(this).attr('data-address');

                    wx.ready(function () {
                        wx.openLocation({
                            latitude: parseFloat(lat),
                            longitude: parseFloat(lng),
                            name: useunit, // 位置名
                            address: address, // 地址详情说明
                            scale: 12, // 地图缩放级别,整形值,范围从1~28。默认为最大
                            infoUrl: '' // 在查看位置界面底部显示的超链接,可点击跳转
                        });
                    });
                });
            }

 
            var EARTH_RADIUS = 6378.137;
            function rad(d) {
                return d * Math.PI / 180.0;
            }
            /**
             * 计算两点的距离
             * lat1,lng1,lat2,lng2 起始纬度，起始经度，结束纬度，结束经度
             */
            function getDistance(lat1, lng1, lat2, lng2) {
                radLat1 = rad(lat1);
                radLat2 = rad(lat2);
                a = radLat1 - radLat2;
                b = rad(lng1) - rad(lng2);
                s = 2 * Math.asin(Math.sqrt(Math.pow(Math.sin(a / 2), 2) + Math.cos(radLat1) * Math.cos(radLat2) * Math.pow(Math.sin(b / 2), 2)));
                s = s * EARTH_RADIUS;
                s = Math.round(s * 10000) / 10000;
                return s.toFixed(1);
            }
        </script>
    </body>
</html>
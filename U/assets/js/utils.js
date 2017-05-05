/**
 * 后台js工具类
 */
var jsUtils={
	serializeJson:function(jq){
		var arr = jq.serializeArray();
		var ret = {};
		if (arr) {
			for (var i = 0; i < arr.length; i++) {
				var k = arr[i].name;
				var v = arr[i].value;
				if (typeof ret[k] != 'undefined') {
					if (ret[k] instanceof Array) {
						ret[k].push(v);
					}
					else {
						ret[k] = [ ret[k], v ];
					}	
				} else {
					ret[k] = v;
				}
			}
		}
		return ret;
	},
	
	gotoUrl:function(url,params){
		var edcodeParam='';
		if(url.length==0){
			console.error('参数错误：url为空');
		}else{
			if(params!=null&&params.length!=0){
				for(var i=0,len=params.length;i<len;i++){
					edcodeParam+=params[i].name+'='+encodeURI(params[i].value)+'&';
				}
				edcodeParam=edcodeParam.substring(0,edcodeParam.length-1);
				location.href=url+'?'+edcodeParam;
			}else{
				location.href=url;
			}
		}
	}
};
//异步请求方法  url请求路径，data参数，callback回调方法，type请求类型
function sendApiNoLoad(url, data, callback, type, scope, loadingEl) {
	jQuery.ajax({
		type : type,
		url : url,
		data : data,
		timeout : 30000, // 30秒超时
		success : function(result, textStatus) {
			callback.call(scope, result);
		},
		error : function(result) {
			alert(result.status+'请求错误，请稍后再试！');
		}
	});
}
//同步请求方法  url请求路径，data参数，callback回调方法，type请求类型
function sendApiNoLoadSync(url, data, callback, type, scope, loadingEl) {
	jQuery.ajax({
		async : false,
		type : type,
		url : url,
		data : data,
		timeout : 30000, // 30秒超时
		success : function(result, textStatus) {
			callback.call(scope, result);
		},
		error : function(result) {
			alert(result.status+'请求错误，请稍后再试！');
		}
	});
}
//异步请求方法  url请求路径，data参数，callback回调方法，type请求类型
function sendApi(url, data, callback, type, scope, loadingEl) {
	jQuery.ajax({
		type : type,
		url : url,
		data : data,
		timeout : 30000, // 30秒超时
		beforeSend : function () {
			$('#loading').addClass('loading-show');
		},
		success : function(result, textStatus) {
			$('#loading').removeClass('loading-show');
			callback.call(scope, result);
		},
		error : function(result) {
			$('#loading').removeClass('loading-show');
			alert(result.status+'请求错误，请稍后再试！');
		}
	});
}
//同步请求方法  url请求路径，data参数，callback回调方法，type请求类型
function sendApiSync(url, data, callback, type, scope, loadingEl) {
	jQuery.ajax({
		type : type,
		async : false,
		url : url,
		data : data,
		timeout : 30000, // 30秒超时
		beforeSend : function () {
			$('#loading').dialog('open');
		},
		success : function(result, textStatus) {
			$('#loading').dialog('close');
			callback.call(scope, result);
		},
		error : function(result) {
			$('#loading').dialog('close');
			alert(result.status+'请求错误，请稍后再试！');
		}
	});
}
function putApiNoLoad(url, data, callback, type, scope, loadingEl) {
	jQuery.ajax({
		type : type,
		url : url,
		data : $.extend(data,{_method:'PUT'}),
		timeout : 30000, // 30秒超时
		success : function(result, textStatus) {
			callback.call(scope, result);
		},
		error : function(result) {
			alert(result.status+'请求错误，请稍后再试！');
		}
	});
}
function putApiSyncNoLoad(url, data, callback, type, scope, loadingEl) {
	jQuery.ajax({
		type : type,
		url : url,
		async:false,
		data : $.extend(data,{_method:'PUT'}),
		timeout : 30000, // 30秒超时
		success : function(result, textStatus) {
			callback.call(scope, result);
		},
		error : function(result) {
			alert(result.status+'请求错误，请稍后再试！');
		}
	});
}
function deleteApiNoLoad(url, data, callback, type, scope, loadingEl) {
	jQuery.ajax({
		type : type,
		url : url,
		data : $.extend(data,{_method:'DELETE'}),
		timeout : 30000, // 30秒超时
		success : function(result, textStatus) {
			callback.call(scope, result);
		},
		error : function(result) {
			alert(result.status+'请求错误，请稍后再试！');
		}
	});
}
function deleteApiSyncNoLoad(url, data, callback, type, scope, loadingEl) {
	jQuery.ajax({
		type : type,
		url : url,
		async:false,
		data : $.extend(data,{_method:'DELETE'}),
		timeout : 30000, // 30秒超时
		success : function(result, textStatus) {
			callback.call(scope, result);
		},
		error : function(result) {
			alert(result.status+'请求错误，请稍后再试！');
		}
	});
}
Date.prototype.format = function(format)//
{
	var o = {
		"M+" : this.getMonth() + 1, // month
		"d+" : this.getDate(), // day
		"h+" : this.getHours(), // hour
		"m+" : this.getMinutes(), // minute
		"s+" : this.getSeconds(), // second
		"q+" : Math.floor((this.getMonth() + 3) / 3), // quarter
		"S" : this.getMilliseconds()
	// millisecond
	};
	if (/(y+)/.test(format))
		format = format.replace(RegExp.$1, (this.getFullYear() + "")
				.substr(4 - RegExp.$1.length));
	for ( var k in o)
		if (new RegExp("(" + k + ")").test(format))
			format = format.replace(RegExp.$1, RegExp.$1.length == 1 ? o[k]
					: ("00" + o[k]).substr(("" + o[k]).length));
	return format;
};

/** 返回数据处理 */
//时间处理
function getTimeFormat(val,fmt){
	/*
	 * val 时间戳     fmt 格式(如：yyyy-MM-dd h:m:s)
	 * */
	var timeStr = new Date(parseInt(val)).format(fmt);
	return timeStr;
}


function showTips(tips){
	
	$("#TipsDialog").show();
	$("#text-tips").text(tips);
	
	setTimeout(function(){
		$("#TipsDialog").hide();
	},2000);
}

//获取url中的参数
function getUrlParam(name) {
	 var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
	 var r = window.location.search.substr(1).match(reg); //匹配目标参数
	 if (r != null) return decodeURIComponent(encodeURIComponent(r[2])); return null; //返回参数值
}


var clock = '';
var nums = 30;
var btn;
var CAN_CLICK = true;
function sendCode(thisBtn){ 
	if(CAN_CLICK){
		btn = thisBtn;
		CAN_CLICK = false; //将按钮置为不可点击
		btn.innerHTML = '重新获取(' + nums + ')';
		clock = setInterval(doLoop, 1000); //一秒执行一次
	}

}
function doLoop(){
	nums--;
	if(nums > 0){
 		btn.innerHTML = '重新获取(' + nums + ')';
	}else{
	  	clearInterval(clock); //清除js定时器
	  	CAN_CLICK = true;
	  	btn.innerHTML = '获取验证码';
	  	nums = 30; //重置时间
	}
}

/*图片上传预览*/
function preview(input, img){
	var $file = $(input);
	var fileObj = $file[0];
	var windowURL = window.URL || window.webkitURL;
	var dataURL;
	var $img = $(img) || $(document.getElementById(img));
	if(fileObj && fileObj.files && fileObj.files[0]){
		dataURL = windowURL.createObjectURL(fileObj.files[0]);
		$img.attr('src',dataURL);
	}else{
		dataURL = $file.val();
		var imgObj = $img[0];
		imgObj.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
		console.log(imgObj.filters);
		imgObj.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = dataURL;
	}
}

/*图片上传*/
function doUpload(form,input,img){
	var formData = new FormData($(form)[0]);
	$.ajax({
		url: 'http://admin.92gzb.com/file-service/FileObject/upload',  //server script to process data  /file-service/FileObject/upload
		type: 'POST',
		xhr: function() {  // custom xhr
			return $.ajaxSettings.xhr();
		},
		//Ajax事件
		success: function(data){
			console.info(data);
			$(img).attr('_src',data.ossPath);
			preview(input,img);
		},
		// Form数据
		data: formData,
		//Options to tell JQuery not to process data or worry about content-type
		cache: false,
		contentType: false,
		processData: false,
		async:false
	})
}
/*根据长度省略*/
function omit(val,len){
	var str = '';
	(len) ? len = len : len = 8;
	if(val && val.length > len){
		str = val.substr(0,len-1)+'...';
	}else{
		str = val;
	}
	return str;
}

/*获取经纬度*/
function getGPS(address){
	$.ajax({
		url:"http://api.map.baidu.com/geocoder/v2/?ak=9iFThIAUUIM03oW414YtGgwRwyN8sssL&callback=renderOption&output=json&address="+address,
		async:false,
		dataType:'jsonp',
		success:function(data){
			if(data.count>0){
				var location = data.geocodes[0].location;
				var lngAndlat = location.split(",");
				$("#longtitude").val(lngAndlat[0]);
				$("#latitude").val(lngAndlat[1]);
			}
		}
	});
}
function center(obj){
	var div1=document.getElementById(obj);
	div1.style.top=($(document).height()-div1.offsetHeight$(window).scrollTop())/2+"px";
}

function dataURLtoBolb(dataurl) {
	var arr = dataurl.split(','),
		mime = arr[0].match(/:(.*?);/)[1],
		bstr = atob(arr[1]),
		n = bstr.length,
		u8arr = new Uint8Array(n);
	console.log(mime);
	while(n--){
		u8arr[n] = bstr.charCodeAt(n);
	}
	return new Blob([u8arr],{type:mime});
}

function calcuLeaveTime(time) {
	var nt = new Date().getTime();
	var l =  time-nt;
	var days = Math.floor(l/(24*3600*1000));
	var leave = l%(24*3600*1000);
	var hours=Math.floor(leave/(3600*1000));
	var str = '剩余时间：'+days+'天'+hours+'小时';

	return str;

}

function getRedirectURL(myUrl){
	var redirectURL = getUrlParam('redirectURL');
	var url = '';
	(redirectURL) ? url = myUrl+'?redirectURL='+redirectURL : url = myUrl;
	return url;
}

function uploadByBase64(fileStr,cb){
	var url = 'http://admin.92gzb.com/file-service/FileObject/upload4Base64';
	jQuery.ajax({
		type : 'POST',
		url : url,
		data : {'base64File':fileStr},
		timeout : 30000, // 30秒超时
		beforeSend : function () {
			$('#mask').show();
			$('#loading').show();
		},
		success : function(result) {
			$('#mask').hide();
			$('#loading').hide();
			cb(result);
		},
		error : function(result) {
			$('#mask').hide();
			$('#loading').hide();
			alert(result.status+'请求错误，请稍后再试！');
		}
	});
}

function toBase64Str(input,cb){
	var canvas = document.createElement('canvas');
	var ctx = canvas.getContext('2d');
	var files = input.files[0];
	var img = new Image();

	var reader = new FileReader();
	reader.onload = function(){
		var url = reader.result;
		img.src = url;
	};
	img.onload = function(){
		canvas.width = 200;
		canvas.height = 200;
		img.setAttribute('crossOrigin', 'anonymous');
		ctx.drawImage(img, 0, 0, 200, 200);
		//document.body.appendChild(canvas);
		var imageData = canvas.toDataURL('image/jpg',0.5);
		//console.log(imageData);
		uploadByBase64(imageData.substr(22),cb);
	};
	reader.readAsDataURL(files);
}









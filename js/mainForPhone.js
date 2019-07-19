// a标跳过渡动画
$(function(){
    $('a').click(function(){
        $('html,body').animate({scrollTop: ($($(this).attr('href')).offset().top  )},1000);
    });
});

// 辨识设备
function deviceInfo(a){
	var device=navigator.userAgent;
	console.log(device);
	if(device.indexOf('Android')>-1||device.indexOf('Linux')>-1||device.indexOf('iPhone')>-1||device.indexOf('iPad')>-1){
		console.log("欢迎访问手机端页面；");
		a.href="indexForPhone.html";
	}else if(device.indexOf('Windows')>-1){
		console.log("欢迎访问电脑端页面；");
		a.href="index.html";
	}
}

window.onscroll=function(){
		                 var topScroll =window.pageYOffset;//document.body.scrollTop无法获取滚动的距离,距离顶部的距离  所以使用pageYOffset
		                 var nav= document.getElementById("nav");//获取到导航栏id
						 var vHeight=window.getComputedStyle(document.getElementById("video"));//获取video的全部css数据  返回一个数组
		                 if(topScroll > parseInt(vHeight['height'])+30){
							console.log("Scroll success~");
		                    nav.style.position = 'fixed';
							nav.style.top = '0';
		                    nav.style.zIndex = '999';
		                }else{
		                     nav.style.position = 'relative';
		                 }
						}
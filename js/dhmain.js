// 用于首页头部导航栏的展开和关闭
function openlist(){
	var secondList=document.getElementById("secondList");
	secondList.style="display:block;";
}
function closelist(){
	 secondList.style="display:none;";
}
// 获得页面高度 
window.onload=autoHeight;
function autoHeight(){
	var Height=window.innerHeight;
	var banner=document.getElementsByClassName("banner")[0];
	var affix=document.getElementById("affix");/*顺便设置附加导航栏的顶部偏移量*/
	affix.setAttribute("data-offset-top",Height+30);
	banner.style.height=Height+"px";
	console.log("Autoheight success");
}
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
deviceInfo();
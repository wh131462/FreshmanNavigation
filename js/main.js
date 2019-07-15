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
// 切换背景图
function toggle(){
	var banner=document.getElementsByClassName("banner")[0];
	console.log(banner.style.backgroundImage);
	if(banner.style.backgroundImage=="url(\"images/background0.png\")"){
		banner.style.backgroundImage="url(\"images/background"+1+".png\")";
	}else{		
		banner.style.backgroundImage="url(\"images/background"+0+".png\")";
	}	
}
// a标跳过渡动画
$(function(){
    $('a').click(function(){
        $('html,body').animate({scrollTop: ($($(this).attr('href')).offset().top  )},1000);
    });
});

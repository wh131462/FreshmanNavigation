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
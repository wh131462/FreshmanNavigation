// 用于首页头部导航栏的展开和关闭
function openlist(){
	var secondList=document.getElementById("secondList");
	if(secondList.style.display=="none"){
		secondList.style="display:block;";
	}else{
		secondList.style="display:none;";
	}
	
}
function closelist(){
	 secondList.style="display:none;";
}

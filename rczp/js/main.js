
   // JavaScript Document
$(function(){
	//var pagename=$(".postiton span a:last").html();
	var pagename2=$(".fwmain_nright .label .label_title").html();
	//alert(pagename2);
	$("#ulMenu li a").removeClass("cur");
	
	if(pagename2=="招聘信息"){
		$("#ulMenu li:eq(1) a").addClass("cur");
	}else if(pagename2=="人才信息"){
		$("#ulMenu li:eq(2) a").addClass("cur");
	}else if(pagename2=="公司信息"){
		$("#ulMenu li:eq(3) a").addClass("cur");
	}else if(pagename2=="留言板"){
		$("#ulMenu li:eq(4) a").addClass("cur");
	}else {
		$("#ulMenu li:eq(0) a").addClass("cur");
	}
});

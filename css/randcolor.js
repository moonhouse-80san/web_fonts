jQuery(function($){
	for(var i=0 ; i < $(".random_colors").length; i++){
		var f_color = "#"+(parseInt(Math.random()*0xffffff)).toString(16);
		$(".random_colors").eq(i).css("color",f_color);
	}
});
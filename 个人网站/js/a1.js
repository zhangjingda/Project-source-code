
(function (){
	$(".mask").hover(function (){
	    $(".mask").stop().fadeTo("50",0.8);	
	});
	$(".mask").hover(function(){},function(){
		$(".mask").stop().fadeTo("50",0.1);	
	});
	
	var ss = $('.picbox');
	for(var i=0;i<ss.size();i++){
		(function(i){
			return $('.picbox').eq(i).hover(function(){
				        var index = $('.picbox').index($(this));
						$('.textcont').eq(index).css("display","block");
					},function(){
						var index = $('.picbox').index($(this));
						$('.textcont').eq(index).css("display","none");
					});    
		})(i);	
	}
})();
$(function(){
    $(".global_log_btn").bind("click",function(){
	$(".overburden,.login-window").css({"display":"block"});
	});
	$(".global_close").bind("click",function(){
		$(".overburden,.login-window").css({"display":"none"});
	});
})
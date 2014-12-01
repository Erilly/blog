$(function(){
    $(".global_log_btn").bind("click",function(){
	$(".overburden,.login-window").css({"display":"block"});
	});
	$(".global_close").bind("click",function(){
		$(".overburden,.login-window").css({"display":"none"});
	});
    
	//城市选择
	showprovince('live_province', 'live_city', '');
    showcity('live_city', '', 'live_province');
	showprovince('ht_province', 'ht_city', '');
    showcity('ht_city', '', 'ht_province');
})
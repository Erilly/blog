

/**
* 公共ajax函数
* @param string 	upto 提交的url地址
* @param json 		updata 提交的数据参数
* @param callback   callback 成功后执行的回调函数
* @return json
*/
function doAjax(upto,updata,callback){
	$.ajax({ url:upto, data:updata, dataType:"json", type:"post", success:callback});
}
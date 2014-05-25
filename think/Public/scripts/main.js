/*$(".droptodown").click(function(event) {
	if(!$(this).hasClass('dropclick')){
		$(".dropclick").trigger("click");
	}	
	$(this).find(".sub-menu").toggleClass("subshow");
	$(this).toggleClass('dropclick').siblings().removeClass('dropclick');
	
});*/

$(function() {
	(function() {
		var name = xh.cookies.getCookie('username')
		if (name) {
			$('.headreg')[0].innerHTML =
				'<li><a href="" data-toggle="modal" data-target="#ownInfo">' + name + '</a></li>' +
				'<li><a href="" data-toggle="modal" data-target="#modifypass">修改密码</a></li>' +
				'<li><a href="__APP__">退出</a></li>';
		    $('#login, #register').remove();
		}
	})();
	/*自适应屏幕高度*/
	(function() {
		var fn = function() {
			var realh = $(window).height() - 237;
			var conth = $(".content").height();
			if (realh > conth) {
				$(".content").css('height', realh);
			}
		};
		fn();
		var re;
		$(window).on('resize', function() {
			clearTimeout(re);
			re = setTimeout(fn, 200);
		});
	})();


	/*时间表*/
	(function() {
		$('#compet_start, #compet_end').datetimepicker({
			format: 'YYYY-MM-DD HH:mm:ss',
			pick12HourFormat: false
		});
	})();

	/*切换注册登录*/
	(function() {
		$('#logtoreg,#regtolog').click(function(event) {
			$('.close').click();
		});
	})();
});

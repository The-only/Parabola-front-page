if (typeof window.xh === "undefined") {
	window.xh = {};
}

xh.fromfn = {
	classHandle: function(elem, newclass) {
		elem.removeClass().addClass(newclass);
	},
	skipNext: function(currselect, nextselect) {
		$(document).on('keydown',currselect, function(event){
			if (event.keyCode === 13) {
				$(nextselect).trigger("focus");
			}
		});
	},
	forbiddenSpace: function(selector) {
		$(document).on('keydown',selector, function(event){
			if (event.keyCode === 32) {
				return false;
			}
		});
	}
};
xh.cookies = {
	setCookie: function(name, value, days) {
		var exp = new Date();
		var days = days||30; //默认30天
		exp.setTime(exp.getTime() + days * 24 * 60 * 60 * 1000); //此 cookie 将被保存 30 天
		document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
	},
	getCookie: function(name) {
		var arr = document.cookie.match(new RegExp("(^| )" + name + "=([^;]*)(;|$)"));
		if (arr != null) {
			return unescape(arr[2]);
		}
		return null;
	},
	delCookie: function(name) {
		var exp = new Date();
		exp.setTime(exp.getTime() - 1);
		var cval = this.getCookie(name);
		if (cval != null) {
			document.cookie = name + "=" + cval + ";expires=" + exp.toGMTString();
		}
	}
};
/*注册表单验证*/
$(function() {
	var jud_name = $('.r_name'),
	    jud_pass = $('.r_pass'),
	    jud_repass = $('.re_pass');
	var register = {
		init: function() {
			this.rule();
		},
		rule: function() {
			var elemselector = '#regName, #regPassword, #rePassword';
			xh.fromfn.forbiddenSpace(elemselector);
			this.enterKeyEvent();
			this.onEventHandle();
		},
		enterKeyEvent: function(){
			xh.fromfn.skipNext('#regName','#regPassword');
			xh.fromfn.skipNext('#regPassword','#rePassword');
			xh.fromfn.skipNext('#rePassword','#regsubmit');
		},
		onEventHandle: function() {
			//用户名的事件处理
			$(document).on({
				focus: function(event) {
					xh.fromfn.classHandle(jud_name,'r_name text-warning');
				},
				blur: function(event) {
					var nameval = $(this).val().match(/^[\-_a-zA-Z0-9\u4E00-\u9FA5]{2,20}$/g);
					if (nameval === null) {
						xh.fromfn.classHandle(jud_name, 'r_name text-danger');
					} else {
						xh.fromfn.classHandle(jud_name, 'r_name text-success');
					}
				}
			},'#regName');

			//密码的事件处理
			$(document).on({
				focus: function(event) {
					xh.fromfn.classHandle(jud_pass, 'r_pass text-warning');
				},
				change: function(event) {
					if (jud_repass.hasClass('text-success')) {
						xh.fromfn.classHandle(jud_repass, 're_pass text-danger');
					}
				},
				blur: function(event) {
					var passval = $(this).val().match(/^\S{6,16}$/g);
					if (passval === null) {
						xh.fromfn.classHandle(jud_pass, 'r_pass text-danger');
					} else {
						xh.fromfn.classHandle(jud_pass, 'r_pass text-success');
					}
				}
			},'#regPassword');

			//重新输入密码事件处理
			$(document).on({
				focus: function(event) {
					xh.fromfn.classHandle(jud_repass, 're_pass text-warning');
				},
				blur: function(event) {
					var repassval = $(this).val() === $('#regPassword').val() ? true : false;
					if (repassval === false || (!jud_pass.hasClass('text-success'))) {
						xh.fromfn.classHandle(jud_repass, 're_pass text-danger');
					} else {
						xh.fromfn.classHandle(jud_repass, 're_pass text-success');
					}
				}
			},'#rePassword');

			//提交注册表单
			$(document).on({
				click: function(event) {
					var that = this;
					var correct = $('.regnote .text-success').length;
					if (correct !== 3) {
						return false;
					}
					if (correct === 3) {
						var obj = {
							"name": $('#regName').val(),
							"password": $('#rePassword').val()
						}
						$.ajax({
							url: handleregisterUrl, //
							type: 'POST',
							dataType: 'json',
							data: obj,
							beforeSend: function() {
								$(that).text('注册中……');
							},
							success: function(data) {
								$('.close').trigger('click');
								console.log(data.name + "注册成功 欢迎~~");
								$(that).text('注册');
							},
							error: function() {
								console.log("注册失败");
							}
						});
					}
					return false;
				}
			}, '#regsubmit');
		}
	}
	register.init();
});
/*./注册表单验证*/

/*登陆表单验证*/
$(function(){
	var jud_name = $('.l_name'),
	    jud_pass = $('.l_pass');
	var login = {
		init: function() {
			this.rule();
		},
		rule: function() {
			xh.fromfn.forbiddenSpace('#inName, #inPassword');
			this.enterKeyEvent();
			this.onEventHandle();
		},
		enterKeyEvent: function(){
			xh.fromfn.skipNext('#inName','#inPassword');
			xh.fromfn.skipNext('#inPassword','#logsubmit');
		},
		onEventHandle: function() {
			//用户名事件处理
			$(document).on({
				focus: function(event){
					xh.fromfn.classHandle(jud_name, 'l_name text-warning');
				},
				blur: function(event) {
					var nameval = $(this).val().match(/^[\-_a-zA-Z0-9\u4E00-\u9FA5]{2,20}$/g);
					if (nameval === null) {
						xh.fromfn.classHandle(jud_name, 'l_name text-danger');
					} else {
						xh.fromfn.classHandle(jud_name, 'l_name text-success');
					}
				}
			},'#inName');

			//密码事件处理
			$(document).on({
				focus: function(){
					xh.fromfn.classHandle(jud_pass, 'l_pass text-warning');
				},
				blur: function(event) {
					var passval = $(this).val().match(/^\S{6,16}$/g);
					if (passval === null) {
						xh.fromfn.classHandle(jud_pass, 'l_pass text-danger');
					} else {
						xh.fromfn.classHandle(jud_pass, 'l_pass text-success');
					}
				}
			},'#inPassword');

			//登陆事件处理
			$(document).on({
					click: function(event) {
						var that = this;
						var correct = $('.lognote .text-success').length;
						if (correct !== 2) {
							return false;
						}
						if (correct === 2) {
							var obj = {
								"name": $('#inName').val(),
								"password": $('#inPassword').val()
							}
							$.ajax({
								url: handleloginUrl,
								type: 'POST',
								dataType: 'json',
								data: obj,
								beforeSend: function() {
									$(that).text('登陆中……');
								},
								success: function(data) {
							        xh.cookies.setCookie('username', data.name);
									console.log(data.name + "登陆成功");
									$(that).text('登陆');
									$('.close').trigger('click');
									$('.headreg')[0].innerHTML =
										'<li><a href="" data-toggle="modal" data-target="#ownInfo">' + data.name + '</a></li>' +
										'<li><a href="" data-toggle="modal" data-target="#modifypass">修改密码</a></li>' +
										'<li><a href="__APP__">退出</a></li>';
								},
								error: function() {
									console.log("登陆失败");
								}
							});
						}
						return false;
					}
			},'#logsubmit');
		}
	}
	login.init();
});
/*./登陆表单验证*/

/*修改密码验证*/
$(function(){
	var jud_opass = $('.o_pass');
	    jud_npass = $('.n_pass');
	var changePass = {
		init: function() {
			this.rule();
		},
		rule: function() {
			xh.fromfn.forbiddenSpace('#oldPassword, #newPassword');
			this.enterKeyEvent();
			this.onEventHandle();
		},
		enterKeyEvent: function(){
			xh.fromfn.skipNext('#oldPassword','#newPassword');
			xh.fromfn.skipNext('#newPassword','#changesubmit');
		},
		onEventHandle: function() {
			//旧密码事件处理
			$(document).on({
				focus: function(event){
					xh.fromfn.classHandle(jud_opass, 'o_pass text-warning');
				},
				blur: function(event){
					var passval = $(this).val().match(/^\S{6,16}$/g);
					if (passval === null) {
						xh.fromfn.classHandle(jud_opass, 'o_pass text-danger');
					} else {
						xh.fromfn.classHandle(jud_opass, 'o_pass text-success');
					}
				}
			},'#oldPassword');

			//新密码事件处理
			$(document).on({
				focus:function(event){
					xh.fromfn.classHandle(jud_npass, 'n_pass text-warning');
				},
				blur : function(event){
					var passval = $(this).val().match(/^\S{6,16}$/g);
					if (passval === null) {
						xh.fromfn.classHandle(jud_npass, 'n_pass text-danger');
					} else {
						xh.fromfn.classHandle(jud_npass, 'n_pass text-success');
					}
				}
			},'#newPassword');

			//确定修改事件处理
			$(document).on({
				click: function(event) {
					var that = this;
					var correct = $('.changenote .text-success').length;
					if (correct !== 2) {
						return false;
					}
					if (correct === 2) {
						var obj = {
							"name": $('.username').val(),
							"oldpassword": $('#oldPassword').val(),
							"newpassword": $('#newPassword').val()
						}
						// var json = JSON.stringify(obj);
						$.ajax({
							url: handlechangeUrl, 
							type: 'POST',
							dataType: 'json',
							data: obj,
							beforeSend: function() {
								$(that).text('提交中……');
							},
							success: function(data) {
								console.log(data + "修改成功");
								$(that).text('确定修改');
							},
							error: function() {
								console.log("修改失败");
							}
						});
					}
					return false;
				}
			}, '#changesubmit');
		}
	}
	changePass.init();
});
/*./修改密码验证*/

/*查询指定提交状态*/
$(function() {
	var search = {
		init: function() {
			this.showsubmit();
		},
		showsubmit: function() {
			$(document).on({
				click: function(event) {
					$.ajax({
						url: handleshowsubmitUrl, 
						type: "POST",
						data: $('#searchsubmit').serialize(),
						dataType: 'html',
						success: function(html) {
							$("#showsubmit").remove();
							$('.pagination').html(html);

							console.log("查找成功");
						},
						error: function() {
							console.log("查找失败");
						}
					});
					return false;
				}
			}, '#search_state');
		}
	};
	search.init();
});
/*./查询提交状态*/

/*查询指定题目*/
$(function() {
	var search = {
		init: function() {
			this.showsubject();
		},
		showsubject: function() {
			var that = this;
			$(document).on({
				click: function(event) {
					$.ajax({
						url: handleshowsubjectUrl,
						type: "POST",
						data: $('#searchsubject').serialize(),
						dataType: 'html',
						success: function(html) {
							$('.pagination').remove();
							$("#showsubject").html(html);
							console.log("查找成功");
						},
						error: function() {
							console.log("查找失败");
						}
					});
					return false;
				}
			}, '#search_question');
		}
	};
	search.init();
});
/*./查询指定题目*/


/*发起竞赛表单验证*/
$(function(){
	var Cname = $('#inputComName'),
	    Tstart = $("#compet_start input[type='text']"),
	    Tend = $("#compet_end input[type='text']"),
	    Cinvite = $('#invite');
	var editCompetition = {
		init: function() {
			this.rule();
		},
		rule: function() {
			xh.fromfn.forbiddenSpace('.lanchcomp input[type="text"]');
			this.onEventHandle();
		},
		onEventHandle: function(){
			//竞赛名字事件处理
			$(document).on({
				blur: function(event) {
					var Cnameval = $(this).val().match(/^[\-_a-zA-Z0-9\u4E00-\u9FA5]{1,40}$/g);
					if (Cnameval === null) {
						xh.fromfn.classHandle($(this), 'form-control has-error');
					} else {
						xh.fromfn.classHandle($(this), 'form-control has-success');
					}
				}
			},'#inputComName');

			//邀请同学事件处理
			$(document).on({
				keydown: function(event) {
					if (event.keyCode === 8) {
						var a = $(this).val();
						var str = a.split(";");
						var pos = a.lastIndexOf(";", a.length - 2);
						if (str.length >= 2) {
							$(this).val(a.slice(0, pos + 1));
							return false;
						}
					}
				},
				blur: function(event) {
					var Cinviteval = $(this).val().match(/^[^;].+;$/g);
					if (Cinviteval === null) {
						xh.fromfn.classHandle($(this), 'form-control has-error');
					} else {
						xh.fromfn.classHandle($(this), 'form-control has-success');
					}
				}
			},'#invite');

			//一个或多个题号事件处理
			$(document).on({
				blur: function(event) {
					var qidval = this.value.match(/^[1-9][0-9]{0,5}$/g);
					if (qidval === null) {
						xh.fromfn.classHandle($(this), 'form-control qid has-error');
					} else {
						xh.fromfn.classHandle($(this), 'form-control qid has-success');
					}
				}
			},'.qid');

			//题目战斗值事件处理
			$(document).on({
				blur: function(event) {
					var costsval = this.value.match(/^(?:[1-9]\d?|100)$/g);
					if (costsval === null) {
						xh.fromfn.classHandle($(this), 'form-control costs has-error');
					} else {
						xh.fromfn.classHandle($(this), 'form-control costs has-success');
					}
				}
			}, '.costs');

			//添加题目事件处理
			$(document).on({
				click: function(event) {
					if($('.qid').length>=10){
						alert("最多10道");
						return false;
					}
					$('.subjectadd')[0].innerHTML +=
						'<div class="delete">' +
						'    <div class="col-sm-5">' +
						'        <input type="text" class="form-control qid" placeholder="题号"></div>' +
						'    <div class="col-sm-5">' +
						'        <input type="text" class="form-control costs" placeholder="战斗值(1-100)"></div>' +
						'    <button type="button" class="close">&times;</button>' +
						'</div>';
				}
			}, '.goon_add');

			//删除题目事件处理
			$(document).on({
				mouseenter:function(event){
					$(this).siblings('.col-sm-5').addClass('has-warning');
				},
				mouseleave : function(event){
					$(this).siblings('.col-sm-5').removeClass('has-warning');
				},
				click : function(event){
					$(this).closest('.delete').remove();
				}
			},'.delete .close');

			$(document).on({
				click : function(event){
					if($('.qid').length>=10){
						alert("最多10道");
						return false;
					}
					var id = parseInt($(this).parent().parent().children(':first').text());
					if(this.checked){
						//添加题目
						$('.subjectadd')[0].innerHTML +=
						'<div class="delete">' +
						'    <div class="col-sm-5">' +
						'        <input type="text" class="form-control qid" placeholder="题号" value="'+id+'" disabled></div>' +
						'    <div class="col-sm-5">' +
						'        <input type="text" class="form-control costs" placeholder="战斗值(1-100)"></div>' +
						'    <button type="button" class="close">&times;</button>' +
						'</div>';
					}else{
						//删除题目
						var a = $('.qid:gt(0)');
						for (var i in a) {
							if (parseInt(a[i].value) === id) {
								$(a[i]).closest('.delete').remove();
							}
						}
					}
				}
			},'.compettable input[type="checkbox"]');

			//确定发起竞赛事件处理
			$(document).on({
				click: function(event) {
					var that = this;
					var obj = {};
					    obj.cin = {};
					    obj.quest = {};
					if (Cname.val() === "") {
						Cname.trigger('focus');
						return false;
					} else {
						obj.Cname = Cname.val();
					}

					if (Tstart.val() === "") {
						Tstart.trigger('focus');
						return false;
					} else {
						obj.Tstart = Tstart.val();
					}

					if (Tend.val() === "") {
						Tend.trigger('focus');
						return false;
					} else {
						obj.Tend = Tend.val();
					}

					if (Cinvite.val() === "") {
						Cinvite.trigger('focus');
						return false;
					} else {
						var str = Cinvite.val().split(';');
						for (var i = 0; i < str.length - 1; i++) {
							obj.cin['"' + i + '"'] = str[i];
						}
					}
					var qid = $('.qid');
					var costs = $('.costs');
					for (i = 0; i < qid.length; i++) {
						debugger;
						if (($('.qid')[i].value === "") || ($('.costs')[i].value === "")) {
							$('.qid')[i].trigger('focus');
							return false;
						} else {
							obj.quest['"' + qid[i].value + '"'] = costs[i].value;
						}
					}
					console.log(obj);
					// var json = JSON.stringify(obj);
					debugger;
					$.ajax({
						url: lanchcompetitionUrl, //
						type: 'POST',
						dataType: 'json',
						data: obj,
						beforeSend: function() {
							$(that).text('创建中……');
						},
						success: function(data) {
							console.log(data.name + "创建成功");
						},
						error: function() {
							console.log("创建失败");
						}
					});
					return false;
				}
			}, '#compet_edit');

		}
	}
	editCompetition.init();
});
/*./发起竞赛表单验证*/

/*代码提交*/
$(function() {
	var code = {
		init: function() {
			this.submitcode();
		},
		submitcode: function() {
			$(document).on({
				click: function(event) {

					if ($('#code').val() === "") {
						$('#code').trigger('focus');
						return false;
					}
					$.ajax({
						url: handlesubmitcodeUrl,
						type: "POST",
						data: $('.submitcode').serialize(),
						dataType: 'json',
						beforeSend: function() {
							$('#sc_state').text('正在提交……');
						},
						success: function(html) {
							$('#sc_state').addClass('text-success').removeClass('text-danger').text('成功');
							console.log("代码提交成功");
						},
						error: function() {
							console.log("代码提交失败");
						}
					});
					return false;
				}
			}, '#sub_code');
		}
	};
	code.init();
});
/*./代码提交*/

/*查看用户信息*/
$(function() {
	var search = {
		init: function() {
			this.showsubject();
		},
		showsubject: function() {
			$(document).on({
				click: function(event) {
					var obj = {
						"id" : $(this).attr('title')
					}
					$.ajax({
						url: handleuserinfoUrl,
						type: "POST",
						data: obj,
						dataType: 'html',
						success: function(html) {
							$('.detail_info').html(html);
							console.log("查找成功");
						},
						error: function() {
							console.log("查找失败");
						}
					});
					return false;
				}
			}, '.userinfo');
		}
	};
	search.init();
});
/*./查看用户信息*/



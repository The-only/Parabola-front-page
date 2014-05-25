<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="renderer" content="webkit">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
    <meta name="author" content="">

	 <!-- Bootstrap core CSS -->
    <link href="/think/Public/lib/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Bootstrap theme -->
    <link href="/think/Public/lib/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">

	<!--[if lte IE 6]>
	<link rel="stylesheet" type="text/css" href="/think/Public/lib/bootstrap/dist/css/bootstrap-ie6.css?1">
	<style type="text/css">
	/* 禁用响应式布局：重新设置container的宽度。如果没有后面三行的代码，在IE6环境下navbar-top会显示为940px宽度 */
	.container,
	.navbar-static-top .container,
	.navbar-fixed-top .container,
	.navbar-fixed-bottom .container {
	    width:1140px!important;
	}
	</style>
	<![endif]-->
	<!--[if lte IE 7]>
	<link rel="stylesheet" type="text/css" href="/think/Public/lib/bootstrap/dist/css/ie.css">
	<![endif]-->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
       <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
    <link rel="stylesheet" href="/think/Public/lib/bootstrap/dist/css/bootstrap-datetimepicker.min.css" />
	<!-- build:css(.tmp) styles/main.css -->
         <link rel="stylesheet" href="/think/Public/styles/public.css">
         <link rel="stylesheet" href="/think/Public/styles/font.css">
    <!-- endbuild -->
	<title>Data Structure Platform</title>
</head>
<body>
<!-- header -->
<div class="header">
	<div class="container">
		<div class="headlogo col-md-3">
			<a href="/think/index.php/"><img src="/think/Public/images/logo.png"/></a>
		</div>
		<ul class="headnav col-md-6">
			<li><a href="/think/index.php">首页</a></li>
			<li><a href="/think/index.php/Home/Subject/">练习</a></li>
			<li><a href="/think/index.php/Home/Competition/">竞赛</a></li>
			<li><a href="/think/index.php/Home/Rank/">排行榜</a></li>
			<li><a href="/think/index.php/Home/Submitstate/">提交状态</a></li>
			<li><a href="/think/index.php/Home/Study/">学习资料</a></li>
			<li><a href="/think/index.php/Home/BBS/">讨论版</a></li>
		</ul>
		<ul class="headreg pull-right">
			<li><a href="" data-toggle="modal" data-target="#login">登陆</a></li>
			<li><a href="" data-toggle="modal" data-target="#register">注册</a></li>
		</ul>
	</div>
</div>

<!-- loginModal -->
 <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
 	<div class="modal-dialog lr_pos">
 		<div class="modal-content">
 			<div class="modal-header">
 				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 				<h4 class="modal-title" id="loginLabel">parabola登陆</h4>
 			</div>
 			<div class="modal-body">
 				<div class="row wrap">
    <div class="col-md-offset-2 lognote">
    	<h4>登陆须知:</h4>
    	<p class="l_name text-info">用户名: 支持汉字，英文，数字，'-'，'_'，不超过20个字符</p>
    	<p class="l_pass text-info">密码: 由英文，数字，常用字符组成，6-16个字符</p>
    </div>
	<form class="form-horizontal login col-md-7" role="form">
		<div class="form-group">
			<label for="inName" class="col-md-3 control-label">用户名</label>
			<div class="col-md-9">
				<input type="text" class="form-control" id="inName"></div>
		</div>
		<div class="form-group">
			<label for="inPassword" class="col-md-3 control-label">密码</label>
			<div class="col-md-9">
				<input type="password" class="form-control" id="inPassword"></div>
		</div>
		<div class="form-group">
			<div class="col-md-offset-4 col-md-4">
				<div class="checkbox">
					<label>
						<input type="checkbox">记住我</label>
				</div>
			</div>
			<div class="col-md-4">
				<button type="submit" id="logsubmit" class="btn btn-info">登陆</button>
			</div>
		</div>
	</form>
	<div class="col-md-5">
		<p>
			还没有账号？
			<br>	
			<a href="#" id="logtoreg" data-toggle="modal" data-target="#register">立即注册</a>
		</p>
		<p>
			其他账号登陆:
			<br>	
			<a href="#">QQ</a>
			<a href="#">微博</a>
		</p>
	</div>
</div>
 			</div>
 		</div><!-- /.modal-content --> 
 	</div><!-- /.modal-dialog -->
 </div>
 <!-- /.modal --> 
<!-- endlloginModal -->

<!-- registerModal -->
 <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="registerLabel" aria-hidden="true">
 	<div class="modal-dialog lr_pos">
 		<div class="modal-content">
 			<div class="modal-header">
 				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 				<h4 class="modal-title" id="registerLabel">parabola注册</h4>
 			</div>
 			<div class="modal-body">
 				<div class="row wrap">
    <div class="col-md-offset-2 regnote">
    	<h4>注册须知:</h4>
    	<p class="r_name text-info">用户名: 支持汉字，英文，数字，'-'，'_'，2-20个字符</p>
    	<p class="r_pass text-info">密码: 由英文，数字或常用字符组成，6-16个字符</p>
    	<p class="re_pass text-info">重复密码: 需与上面一致</p>
    </div>
	<form class="form-horizontal register col-md-8" role="form" method="get" action="">
		<div class="form-group">
			<label for="regName" class="col-md-3 control-label">用户名</label>
			<div class="col-md-9">
				<input type="text" class="form-control" id="regName"></div>
		</div>
		<div class="form-group">
			<label for="regPassword" class="col-md-3 control-label">密码</label>
			<div class="col-md-9">
				<input type="password" class="form-control" id="regPassword"></div>
		</div>
		<div class="form-group">
			<label for="rePassword" class="col-md-3 control-label">重复密码</label>
			<div class="col-md-9">
				<input type="password" class="form-control" id="rePassword"></div>
		</div>
		<div class="form-group">
			<div class="col-md-offset-4 col-md-4">
				<button type="reset" class="btn btn-info">重置</button>
			</div>
			<div class=" col-md-4">
				<button id="regsubmit" type="submit" class="btn btn-info">注册</button>
			</div>
		</div>
	</form>
	<div class="col-md-4">
		<p>
			已有账号？
			<br>	
			<a href="#" id="regtolog" data-toggle="modal" data-target="#login">立即登陆</a>
		</p>
		<p>
			其他账号登陆:
			<br>	
			<a href="#">QQ</a>
			<a href="#">微博</a>
		</p>
	</div>
</div>
 			</div>
 		</div><!-- /.modal-content --> 
 	</div><!-- /.modal-dialog -->
 </div>
 <!-- /.modal --> 
<!-- endlregisterModal -->
<!-- content -->
<div class="content container">
    <!-- conthead -->
	<div class="row cont_head">
		<h3 class="text-muted col-md-7">题目列表</h3>
		<div class="col-md-5 serchquest">
			<form class="form-inline" id="searchsubject" role="form">
	<div class="form-group">
		<label class="sr-only" for="type">类型</label>
		<select name="type" class="form-control">
			<option value="1">按内容/题号</option>
			<option value="2">按主题</option>
			<option value="3">按时间</option>
		</select>
	</div>
	<div class="form-group">
		<label class="sr-only" for="text">搜索</label>
		<input placeholder="请输入题目或题号" name="text" id="text" class="form-control"></div>
	<div class="form-group">
		<button id="search_question" type="submit" class="btn btn-default">Go</button>
	</div>
</form>
		</div>
	</div>
	<!-- /.conthead -->
	<div class="main">

	  <ul class="pagination pull-right">
	<li>
		<a href="#">&laquo;</a>
	</li>
	<li>
		<a href="#">1</a>
	</li>
	<li>
		<a href="#">2</a>
	</li>
	<li>
		<a href="#">3</a>
	</li>
	<li>
		<a href="#">4</a>
	</li>
	<li>
		<a href="#">5</a>
	</li>
	<li>
		<a href="#">&raquo;</a>
	</li>
</ul>

      <table id="showsubject" class="table table-hover table-bordered">
	<tr>
		<th>题号</th>
		<th>题目</th>
		<th>RATIO(AC/SUB)</th>
		<th>添加时间</th>
		<th>主题</th>
	</tr>
	<tr>
		<td><a href="/think/index.php/Home/Subject/question">1</a></td>
		<td>
			<a href="/think/index.php/Home/Subject/question">好长的序列</a>
		</td>
		<td>29.59% (271/916)</td>
		<td>2014-03-07 15:15:00</td>
		<td>数据结构</td>
	</tr>
	<tr>
		<td><a href="">2</a></td>
		<td>
			<a href="">SpringBot机器人指令集</a>
		</td>
		<td>29.59% (271/916)</td>
		<td>2014-03-07 15:15:00</td>
		<td>ACM</td>
	</tr>
	<tr>
		<td><a href="">3</a></td>
		<td>
			<a href="">将一个整数线性表拆分成奇数和偶数线性表</a>
		</td>
		<td>29.59% (271/916)</td>
		<td>2014-03-07 15:15:00</td>
		<td>竞赛</td>
	</tr>
	<tr>
		<td><a href="">4</a></td>
		<td>
			<a href="">求二叉树中某结点在层序序列中的编号</a>
		</td>
		<td>29.59% (271/916)</td>
		<td>2014-03-07 15:15:00</td>
		<td>数据结构</td>
	</tr>
	<tr>
		<td><a href="">5</a></td>
		<td>
			<a href="">按层序输出二叉树根结点深度较小的子树中的结点</a>
		</td>
		<td>29.59% (271/916)</td>
		<td>2014-03-07 15:15:00</td>
		<td>考试</td>
	</tr>
	<tr>
		<td><a href="">6</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>29.59% (271/916)</td>
		<td>2014-03-07 15:15:00</td>
		<td>考试</td>
	</tr>
	<tr>
		<td><a href="">7</a></td>
		<td>
			<a href="">如此完美</a>
		</td>
		<td>29.59% (271/916)</td>
		<td>2014-03-07 15:15:00</td>
		<td>考试</td>
	</tr>
	<tr>
		<td><a href="">8</a></td>
		<td>
			<a href="">如此完美</a>
		</td>
		<td>29.59% (271/916)</td>
		<td>2014-03-07 15:15:00</td>
		<td>考试</td>
	</tr>
	<tr>
		<td><a href="">9</a></td>
		<td>
			<a href="">如此完美</a>
		</td>
		<td>29.59% (271/916)</td>
		<td>2014-03-07 15:15:00</td>
		<td>考试</td>
	</tr>
	<tr>
		<td><a href="">10</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>29.59% (271/916)</td>
		<td>2014-03-07 15:15:00</td>
		<td>考试</td>
	</tr>
	<tr>
		<td><a href="">11</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>29.59% (271/916)</td>
		<td>2014-03-07 15:15:00</td>
		<td>考试</td>
	</tr>
	<tr>
		<td><a href="">12</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>29.59% (271/916)</td>
		<td>2014-03-07 15:15:00</td>
		<td>考试</td>
	</tr>
	<tr>
		<td><a href="">13</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>29.59% (271/916)</td>
		<td>2014-03-07 15:15:00</td>
		<td>考试</td>
	</tr>
	<tr>
		<td><a href="">14</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>29.59% (271/916)</td>
		<td>2014-03-07 15:15:00</td>
		<td>考试</td>
	</tr>
	<tr>
		<td><a href="">15</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>29.59% (271/916)</td>
		<td>2014-03-07 15:15:00</td>
		<td>考试</td>
	</tr>
	<tr>
		<td><a href="">16</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>29.59% (271/916)</td>
		<td>2014-03-07 15:15:00</td>
		<td>考试</td>
	</tr>
	<tr>
		<td><a href="">17</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>29.59% (271/916)</td>
		<td>2014-03-07 15:15:00</td>
		<td>考试</td>
	</tr>
	<tr>
		<td><a href="">18</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>29.59% (271/916)</td>
		<td>2014-03-07 15:15:00</td>
		<td>考试</td>
	</tr>
	<tr>
		<td><a href="">19</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>29.59% (271/916)</td>
		<td>2014-03-07 15:15:00</td>
		<td>考试</td>
	</tr>
	<tr>
		<td><a href="">20</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>29.59% (271/916)</td>
		<td>2014-03-07 15:15:00</td>
		<td>考试</td>
	</tr>
</table>

	</div>
</div>
<!-- endcontent -->
 
<!-- footer -->
<div class="footer">
    <div class="container">
	    <div class="row">
	    	<p class="copyright col-md-8">
				<span class="glyphicon glyphicon-heart"></span>
				Copyright © 2014 大连民族学院 李锡祚工作室 Parabola团队   All Rights Reserved. v6.5.0
			</p>
			<ul class="extra col-md-4">
				<li><a href="#">后台登陆</a></li>
				<li><a href="#">关于</a></li>
				<li><a href="#">联系</a></li>
			</ul>
	    </div>
    </div>
</div>
<!-- endfooter -->


<!-- build:js scripts/vendor.js -->
<script src="/think/Public/lib/jquery/dist/jquery.min.js"></script>
<!-- endbuild -->

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script>

<!-- build:js scripts/plugins.js -->
<script type="text/javascript" src="/think/Public/lib/bootstrap/dist/js/moment.min.js"></script>
<script src="/think/Public/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/think/Public/lib/bootstrap/dist/js/bootstrap-datetimepicker.min.js"></script>
<!-- endbuild -->

<!-- build:js({app,.tmp}) scripts/user-defined -->
    <script src="/think/Public/scripts/selflib.js"></script>
    <script src="/think/Public/scripts/main.js"></script>
    <script src="/think/Public/scripts/judge.js"></script>
<!-- endbuild -->
<script>
	var handleloginUrl = '<?php echo U("Public/login", "", "");?>';
	var handleregisterUrl = '<?php echo U("Public/register", "", "");?>';
	var handlechangeUrl = '<?php echo U("Public/change", "", "");?>';
	var lanchcompetitionUrl = '<?php echo U("Competition/handlelanchcompet", "", "");?>';
	var handleshowsubmitUrl = '<?php echo U("Submitstate/showsubmit","","");?>';
	var handleshowsubjectUrl = '<?php echo U("Subject/showsubject","","");?>';
	var handlesubmitcodeUrl = '<?php echo U("Subject/submitcode","","");?>';
	var handleuserinfoUrl = '<?php echo U("Public/userinfo","","");?>';
</script>
</body>
</html>
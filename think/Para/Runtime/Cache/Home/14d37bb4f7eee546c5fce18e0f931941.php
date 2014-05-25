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
			<li><a href="" data-toggle="modal" data-target="#ownInfo">谢峰</a></li>
			<li><a href="" data-toggle="modal" data-target="#modifypass">修改密码</a></li>
			<li><a href="/think/index.php">退出</a></li>
		</ul>
	</div>
</div>

<!-- endheader -->
<!-- ownInfoModal -->
 <div class="modal fade" id="ownInfo" tabindex="-1" role="dialog" aria-labelledby="ownInfoLabel" aria-hidden="true">
 	<div class="modal-dialog lr_pos diawidth">
 		<div class="modal-content">
 			<div class="modal-header">
 				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 				<h4 class="modal-title" id="ownInfoLabel">个人信息</h4>
 			</div>
 			<div class="modal-body">
 				<div class="pre-scrollable">
	<table class="text-muted table-bordered">
		<tr class="row" class="row">
			<td class="col-md-2">基本信息</td>
			<td class="col-md-10">
				<p>姓名：谢峰</p>
				<p>注册时间：2011 05:12:03</p>
			</td>
		</tr>
		<tr class="row">
			<td class="col-md-2">成绩</td>
			<td class="col-md-10">
				<p>总排名：100</p>
				<p>AC率：19.05%(AC:4/Sub:21)</p>
			</td>
		</tr>
		<tr class="row">
			<td class="col-md-2">AC的题目</td>
			<td class="col-md-10">
				<p>
					(Total:400)：
					<a href="">620</a>
					<a href="">615</a>
					<a href="">113</a>
					<a href="">567</a>
					<a href="">194</a>
					<a href="">545</a>
					<a href="">403</a>
					<a href="">638</a>
					<a href="">550</a>
					<a href="">540</a>
					<a href="">591</a>
					<a href="">404</a>
					<a href="">696</a>
					<a href="">383</a>
					<a href="">691</a>
					<a href="">478</a>
					<a href="">416</a>
					<a href="">470</a>
					<a href="">342</a>
					<a href="">512</a>
					<a href="">695</a>
					<a href="">561</a>
					<a href="">346</a>
					<a href="">418</a>
					<a href="">331</a>
					<a href="">473</a>
					<a href="">474</a>
					<a href="">551</a>
					<a href="">372</a>
					<a href="">566</a>
					<a href="">467</a>
					<a href="">563</a>
					<a href="">623</a>
					<a href="">519</a>
					<a href="">376</a>
					<a href="">398</a>
					<a href="">325</a>
					<a href="">471</a>
					<a href="">480</a>
					<a href="">596</a>
					<a href="">560</a>
					<a href="">485</a>
					<a href="">401</a>
					<a href="">616</a>
					<a href="">529</a>
					<a href="">345</a>
					<a href="">549</a>
					<a href="">544</a>
					<a href="">111</a>
					<a href="">239</a>
					<a href="">457</a>
					<a href="">114</a>
					<a href="">460</a>
					<a href="">600</a>
					<a href="">240</a>
					<a href="">702</a>
					<a href="">652</a>
					<a href="">599</a>
					<a href="">528</a>
					<a href="">196</a>
					<a href="">407</a>
					<a href="">538</a>
					<a href="">547</a>
					<a href="">598</a>
					<a href="">340</a>
					<a href="">475</a>
					<a href="">601</a>
					<a href="">241</a>
					<a href="">27</a>
					<a href="">373</a>
					<a href="">535</a>
					<a href="">644</a>
					<a href="">632</a>
					<a href="">248</a>
					<a href="">456</a>
					<a href="">584</a>
					<a href="">643</a>
					<a href="">110</a>
					<a href="">412</a>
					<a href="">328</a>
					<a href="">635</a>
					<a href="">479</a>
					<a href="">606</a>
					<a href="">333</a>
					<a href="">433</a>
					<a href="">422</a>
					<a href="">597</a>
					<a href="">569</a>
					<a href="">568</a>
				</p>
			</td>
		</tr>
		<tr class="row">
			<td class="col-md-2">提交未AC</td>
			<td class="col-md-10">
				<p>
					(Total:50)：
					<a href="">620</a>
					<a href="">615</a>
					<a href="">113</a>
					<a href="">567</a>
					<a href="">194</a>
					<a href="">545</a>
					<a href="">403</a>
					<a href="">638</a>
					<a href="">550</a>
					<a href="">540</a>
					<a href="">591</a>
				</p>
			</td>
		</tr>
	</table>
</div>
 			</div>
 		</div><!-- /.modal-content --> 
 	</div><!-- /.modal-dialog -->
 </div>
 <!-- /.modal --> 
<!-- endlownInfoModal -->

<!-- modifypassModal -->
 <div class="modal fade" id="modifypass" tabindex="-1" role="dialog" aria-labelledby="modifypassLabel" aria-hidden="true">
 	<div class="modal-dialog lr_pos">
 		<div class="modal-content">
 			<div class="modal-header">
 				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 				<h4 class="modal-title" id="modifypassLabel">修改密码</h4>
 			</div>
 			<div class="modal-body">
 					<div class="col-md-offset-2 changenote">
    	<p class="o_pass text-info">旧密码: 由英文，数字，常用字符组成，6-16个字符</p>
    	<p class="n_pass text-info">新密码: 由英文，数字，常用字符组成，6-16个字符</p>
    </div>
	<form class="form-horizontal changepass" role="form" method="get" action="">
		<div class="form-group">
			<label class="col-md-3 control-label">用户名</label>
			<div class="col-md-9">
			   <p class="form-control-static" class="username">谢峰</p>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">注册时间</label>
			<div class="col-md-9">
			   <p class="form-control-static">2011 20:45:45</p>
			</div>
		</div>
		<div class="form-group">
			<label for="oldPassword" class="col-md-3 control-label">旧密码</label>
			<div class="col-md-6">
				<input type="password" class="form-control" id="oldPassword" placeholder="密码不超过16个字符"></div>
		</div>
		<div class="form-group">
			<label for="newPassword" class="col-md-3 control-label">新密码</label>
			<div class="col-md-6">
				<input type="password" class="form-control" id="newPassword" placeholder="密码不超过16个字符"></div>
		</div>
		<div class="form-group">
			<div class="col-md-4 col-md-offset-4">
				<button type="submit" id="changesubmit" class="btn btn-info  btn-lg btn-block">确定修改</button>
			</div>
		</div>
	</form>
 			</div>
 		</div><!-- /.modal-content --> 
 	</div><!-- /.modal-dialog -->
 </div>
 <!-- /.modal --> 
<!-- endlmodifypassModal -->

<!-- content -->
<div class="content container">
    <!-- conthead -->
	<div class="row cont_head">
		<h3 class="text-muted col-md-7">发起竞赛</h3>
		<div class="col-md-3 serchquest">
		  <a class="btn btn-info btn-block" href="/think/index.php/Home/Competition">参与竞赛</a>
		</div>
	</div>
	<!-- /.conthead -->
	<div class="main">
   
	   <div class="competrule">
   <h3>发起竞赛注意事项</h3>
   <ol>
     <li>竞赛名字不能超过40个字符，只能包含字母数字汉字"-""_"</li>
     <li>竞赛持续时间不少于10分钟，少于10分钟自动改为10分钟 时间通过点击图标编辑</li>
     <li>
       参赛人员不少于两人(包括自己),邀请方式：输入对方ID以 <strong>" ; "</strong>
       隔开，末尾无需加 <strong>" ; "</strong>
     </li>
     <li>添加题目方式：输入题号(最多五位数),题目不能超过10道，自定义战斗值(1-100)</li>
     <li>若以上信息输入错误，如：学生或题号不存在，申请失败</li>
   </ol>
 </div>
 <form class="form-horizontal lanchcomp" role="form">
   <div class="form-group">
     <label for="inputComName" class="col-sm-2 control-label">竞赛名字</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="inputComName" placeholder="不能超过40个字符"></div>
   </div>
   <div class="form-group">
     <label class="col-sm-2 control-label">起止时间</label>
     <div class='col-sm-4'>
       <div class='input-group date' id='compet_start'>
         <input type='text' class="form-control" placeholder="开始时间" disabled/> 
         <span class="input-group-addon">
           <span class="glyphicon glyphicon-calendar"></span>
         </span>
       </div>
     </div>

     <div class="col-sm-offset-1 col-sm-4">
       <div class='input-group date' id='compet_end'>
         <input type='text' class="form-control" placeholder="结束时间" disabled/> 
         <span class="input-group-addon">
           <span class="glyphicon glyphicon-calendar"></span>
         </span>
       </div>
     </div>
   </div>
   <div class="form-group">
     <label for="invite" class="col-sm-2 control-label">邀请同学</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="invite" placeholder="输入学生学号,以;隔开"></div>
   </div>
   <div class="form-group">
     <label class="col-sm-2 control-label">添加题目</label>
     <div class="col-sm-7">
       <div class="col-sm-5">
         <input type="text" class="form-control qid" placeholder="题号(最多5位数)"></div>
       <div class="col-sm-5">
         <input type="text" class="form-control costs" placeholder="战斗值(1-100)"></div>
       <div class="col-sm-1">
         <button type="button" class="btn btn-info goon_add">继续添加</button>
       </div>
     </div>
     <div class="subjectadd col-sm-7 col-sm-offset-2">
       <div class="delete">
         <div class="col-sm-5">
           <input type="text" class="form-control qid" placeholder="题号(最多5位数)"></div>
         <div class="col-sm-5">
           <input type="text" class="form-control costs" placeholder="战斗值(1-100)"></div>
         <button type="button" class="close">&times;</button>
       </div>
     </div>
   </div>
   <div class="form-group">
     <div class="col-sm-offset-2 col-sm-10">
       <button id="compet_edit" type="submit" class="btn btn-info">发起竞赛</button>
     </div>
   </div>
 </form>
	  
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
<table class="table table-hover table-bordered compettable">
	<tr>
		<th>题号</th>
		<th>题目</th>
		<th>添加时间</th>
		<th>选择</th>
	</tr>
	<tr>
		<td><a href="/think/index.php/Home/Subject/question">1</a></td>
		<td>
			<a href="/think/index.php/Home/Subject/question">好长的序列</a>
		</td>
		<td>2014-03-07 15:15:00</td>
		 <td><input type="checkbox"></td>
	</tr>
	<tr>
		<td><a href="">2</a></td>
		<td>
			<a href="">SpringBot机器人指令集</a>
		</td>
		<td>2014-03-07 15:15:00</td>
		 <td><input type="checkbox"></td>
	</tr>
	<tr>
		<td><a href="">3</a></td>
		<td>
			<a href="">将一个整数线性表拆分成奇数和偶数线性表</a>
		</td>
		<td>2014-03-07 15:15:00</td>
		 <td><input type="checkbox"></td>
	</tr>
	<tr>
		<td><a href="">4</a></td>
		<td>
			<a href="">求二叉树中某结点在层序序列中的编号</a>
		</td>
		<td>2014-03-07 15:15:00</td>
		 <td><input type="checkbox"></td>
	</tr>
	<tr>
		<td><a href="">5</a></td>
		<td>
			<a href="">按层序输出二叉树根结点深度较小的子树中的结点</a>
		</td>
		<td>2014-03-07 15:15:00</td>
		 <td><input type="checkbox"></td>
	</tr>
	<tr>
		<td><a href="">6</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>2014-03-07 15:15:00</td>
		 <td><input type="checkbox"></td>
	</tr>
	<tr>
		<td><a href="">7</a></td>
		<td>
			<a href="">如此完美</a>
		</td>
		<td>2014-03-07 15:15:00</td>
		 <td><input type="checkbox"></td>
	</tr>
	<tr>
		<td><a href="">8</a></td>
		<td>
			<a href="">如此完美</a>
		</td>
		<td>2014-03-07 15:15:00</td>
		 <td><input type="checkbox"></td>
	</tr>
	<tr>
		<td><a href="">9</a></td>
		<td>
			<a href="">如此完美</a>
		</td>
		<td>2014-03-07 15:15:00</td>
		 <td><input type="checkbox"></td>
	</tr>
	<tr>
		<td><a href="">10</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>2014-03-07 15:15:00</td>
		 <td><input type="checkbox"></td>
	</tr>
	<tr>
		<td><a href="">11</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>2014-03-07 15:15:00</td>
		 <td><input type="checkbox"></td>
	</tr>
	<tr>
		<td><a href="">12</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>2014-03-07 15:15:00</td>
		 <td><input type="checkbox"></td>
	</tr>
	<tr>
		<td><a href="">13</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>2014-03-07 15:15:00</td>
		 <td><input type="checkbox"></td>
	</tr>
	<tr>
		<td><a href="">14</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>2014-03-07 15:15:00</td>
		 <td><input type="checkbox"></td>
	</tr>
	<tr>
		<td><a href="">15</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>2014-03-07 15:15:00</td>
		 <td><input type="checkbox"></td>
	</tr>
	<tr>
		<td><a href="">16</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>2014-03-07 15:15:00</td>
		 <td><input type="checkbox"></td>
	</tr>
	<tr>
		<td><a href="">17</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>2014-03-07 15:15:00</td>
		 <td><input type="checkbox"></td>
	</tr>
	<tr>
		<td><a href="">18</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>2014-03-07 15:15:00</td>
		 <td><input type="checkbox"></td>
	</tr>
	<tr>
		<td><a href="">19</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>2014-03-07 15:15:00</td>
		 <td><input type="checkbox"></td>
	</tr>
	<tr>
		<td><a href="">20</a></td>
		<td>
			<a href="">A+B</a>
		</td>
		<td>2014-03-07 15:15:00</td>
		 <td><input type="checkbox"></td>
	</tr>
</table>
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
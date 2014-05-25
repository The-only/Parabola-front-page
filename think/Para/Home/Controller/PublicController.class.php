<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
    public function index(){
    	$this->display();
    }
    /**
     * 异步登陆处理
     */
    public function login(){
    	if(!IS_POST) E("页面不存在");

	    $data = array(
	    	   'name' => I('name'),
	    	   'password' => I('password')
	    	);
	    $this->ajaxReturn($data,'json');
    }
     /**
     * 异步注册处理
     */
    public function register(){
        if(!IS_POST) E("页面不存在");

        $data = array(
               'name' => I('name'),
               'password' => I('password')
            );
        $this->ajaxReturn($data,'json');
    }

    /**
     * 修改密码
     */
    public function change(){
        if(!IS_POST) E("页面不存在");
        $data = array(
               'name' => I('name'),
               'oldpassword' => I('oldpassword'),
               'newpassword' => I('newpassword')
            );
        $this->ajaxReturn($data,'json');

    }
    public function userInfo(){
    	$data = array(
    		'id' => I('id') 
    		);
    	$userinfo = '<table class="text-muted table-bordered">'.
		'<tr class="row" class="row">'.
			'<td class="col-md-2">基本信息</td>'.
			'<td class="col-md-10">'.
				'<p>姓名：谢峰</p>'.
				'<p>注册时间：2011 05:12:03</p>'.
			'</td>'.
		'</tr>'.
		'<tr class="row">'.
			'<td class="col-md-2">成绩</td>'.
			'<td class="col-md-10">'.
				'<p>总排名：'.$data['id'].'</p>'.
				'<p>AC率：19.05%(AC:4/Sub:21)</p>'.
			'</td>'.
		'</tr>'.
		'<tr class="row">'.
			'<td class="col-md-2">AC的题目</td>'.
			'<td class="col-md-10">'.
				'<p>'.
					'(Total:400)：'.
					'<a href="'.__APP__.'/Home/Subject/question">528</a> '.
					'<a href="">196</a> '.
					'<a href="">407</a> '.
					'<a href="">538</a> '.
					'<a href="">547</a> '.
					'<a href="">598</a> '.
					'<a href="">568</a> '.
				'</p>'.
			'</td>'.
		'</tr>'.
		'<tr class="row">'.
			'<td class="col-md-2">提交未AC</td>'.
			'<td class="col-md-10">'.
				'<p>'.
					'(Total:50)：'.
					'<a href="'.__APP__.'/Home/Subject/question">620</a> '.
					'<a href="">615</a> '.
					'<a href="">113</a> '.
					'<a href="">567</a> '.
					'<a href="">194</a> '.
					'<a href="">545</a> '.
					'<a href="">403</a> '.
					'<a href="">638</a> '.
					'<a href="">550</a> '.
					'<a href="">540</a> '.
					'<a href="">591</a> '.
				'</p>'.
			'</td>'.
		'</tr>'.
		'<tr class="row">'.
			'<td class="col-md-2">比一比</td>'.
			'<td class="col-md-10">'.
				'<p>'.
					'<span>你们都AC的题目</span>'.
					'(Total:3)：'.
					'<a href="'.__APP__.'/Home/Subject/question">379</a> '.
					'<a href="">379</a> '.
					'<a href="">379</a> '.
					'<a href="">379</a> '.
					'<a href="">379</a> '.
					'<a href="">379</a> '.
					'<a href="">379</a> '.
					'<a href="">379</a> '.
					'<a href="">379</a> '.
				'</p>'.

				'<p>'.
					'<span>你AC他却没有AC的题目</span>'.
					'(Total:1)：'.
					'<a href="'.__APP__.'/Home/Subject/question">616</a> '.
					'<a href="">616</a> '.
					'<a href="">616</a> '.
					'<a href="">616</a> '.
					'<a href="">616</a> '.
					'<a href="">616</a> '.
					'<a href="">616</a> '.
					'<a href="">616</a> '.
					'<a href="">616</a> '.
					'<a href="">616</a> '.

				'</p>'.

				'<p>'.
					'<span>他AC你却没有AC的题目</span>'.
					'(Total:1)：'.
					'<a href="'.__APP__.'/Home/Subject/question">616</a> '.
					'<a href="">616</a> '.
					'<a href="">616</a> '.
					'<a href="">616</a> '.
					'<a href="">616</a> '.
					'<a href="">616</a> '.
					'<a href="">616</a> '.
					'<a href="">616</a> '.
				'</p>'.

				'<p>'.
					'<span>你们都尝试过却没有AC的题目</span>'.
					'(Total:1)：'.
					'<a href="'.__APP__.'/Home/Subject/question">616</a> '.
					'<a href="">616</a> '.
					'<a href="">616</a> '.
					'<a href="">616</a> '.
					'<a href="">616</a> '.
					'<a href="">616</a> '.
				'</p>'.
			'</td>'.
		'</tr>'.
	'</table>';
	echo $userinfo;
    	// $this->ajaxReturn($data,'json');
    }
}
?>
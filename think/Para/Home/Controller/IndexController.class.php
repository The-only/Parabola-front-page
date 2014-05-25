<?php
/**
 * 前端首页控制器
 */
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	/**
	 * 首页视图
	 */
    public function index(){
    	$this->display();
    }
}
?>
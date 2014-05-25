<?php
namespace Home\Controller;
use Think\Controller;
class CompetitionController extends Controller {
    public function index(){
    	$this->display();
    }
    public function competcontent(){
    	$this->display();
    }
    public function handlelanchcompet(){
    	if(!IS_POST) E("页面不存在");

	    $data = array(
	    	   'name' => I('Cname'),
	    	   'tstart' => I('Tstart'),
	    	   'tend' => I('Tend'),
	    	   'people' => I('cin'),
	    	   'questions' => I('quest')
	    	);
	    $this->ajaxReturn($data,'json');
    }
}
?>
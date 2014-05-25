<?php
namespace Home\Controller;
use Think\Controller;
class SubmitstateController extends Controller {
    public function index(){
    	$this->display();
    }

    public function showsubmit(){
    	$num = I('questionnum',0);
    	$people = I('people','');
    	$state = I('state',0);
    	if($num != 0){
    	    $data['questionnum'] = $num;
	    } 
	    if($people != ''){
	    	$data['people'] = $people;
	    }
	    if($state != 0){
	    	$data['state'] = $state;
	    }
	    $this->ajaxReturn($data,'json');
    }
}
?>
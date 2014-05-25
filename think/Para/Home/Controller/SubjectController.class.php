<?php
namespace Home\Controller;
use Think\Controller;
class SubjectController extends Controller {
    public function index(){
    	$this->display();
    }
    public function question(){
    	$this->display();
    }
    public function showsubject(){

        if(!IS_POST) E("页面不存在");
    	$type = I('type',0);
    	$text = I('text','');
    	if($type != 0){
    	    $data['type'] = $type;
	    } 
	    if($text != ''){
	    	$data['text'] = $text;
	    }
	    $this->ajaxReturn($data,'json');
    }
    public function submitcode(){

        if(!IS_POST) E("页面不存在");

        $data = array(
               'lang' => I('lang'),
               'code' => I('code')
            );
        $this->ajaxReturn($data,'json');
    }
}
?>
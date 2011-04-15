<?php

class FoodOrdering extends Controller {

	function FoodOrdering()
	{
		parent::Controller();	
	}
	
	function index()
	{
		if (!$this->MemberSystem->isLogin()){
			$this->template->write_view('freeReg', 'common/freereg');
		}
		$this->template->write_view('navBar', 'common/nav');
		$this->template->write_view('loginStatus', 'common/loginStatus','',true);
		$this->template->write_view('content', 'foodOrdering/foodOrderingFlow.php');
		$this->template->render();
	}
	
	
	
}

/* End of file foodOrdering.php */
/* Location: ./system/application/controllers/foodOrdering.php */
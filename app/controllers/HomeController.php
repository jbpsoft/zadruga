<?php

class HomeController extends BaseController {

	public function home(){
		if (empty(Session::get('jezik')) && (empty($_GET['jezik']))) {
			
			Langauge::chooseLanguage('cir');

			return View::make('home');
		}

		if (!empty($_GET['jezik'])) {
		
			Langauge::chooseLanguage($_GET['jezik']);
		}
		return View::make('home');	
	}

	public function linkovi(){
		return View::make('linkovi');
	}
}

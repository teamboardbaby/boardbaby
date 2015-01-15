<?php

class HomeController extends BaseController {

	public function showLoginView()
	{
		return View::make('login');
	}

}

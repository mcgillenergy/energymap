<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showMap()
	{
		return View::make('map');
	}

	public function getAsset($filename) {
		$path = 'app/assets/' . $filename;
		$ext = pathinfo($path, PATHINFO_EXTENSION);
		$response = Response::make(File::get($path), 200);
		if ($ext == 'js') {
			$mime = 'text/javascript';
		} elseif ($ext == 'css') {
			$mime = 'text/css';
		}
		$response->header('content-type', $mime);
		return $response;
	}

}


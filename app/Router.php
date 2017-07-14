<?php

/**
* Main application router
*/
class Router
{
	
	protected $routes = [];


	public function addRoute($uri, $view, $auth = false)
	{
		$this->routes[$uri] = [
			"view" => $view,
			"auth" => $auth
		];
	}

	public function go($uri)
	{
		if( !isset($this->routes[$uri]) ){
			die("No route matched this request");
		}

		//If the user requested an "authorized only" page and we don't have
		//the user in the session, through the user to the login page.
		if($this->routes[$uri]["auth"] && !isset($_SESSION["user"])){
			header("Location: /login");
		}

		if($uri == "/login" && isset($_SESSION["user"])){
			header("Location: /");
		}

		require __DIR__ . '/../views/' . $this->routes[$uri]["view"];
	}
}
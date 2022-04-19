<?php
     namespace Core;

     class Router
     {
     	public function geTrack($routers, $uri)
     {
     	    foreach ($routers as $route) {
     	    	$pattern = $this->createPattern($route->path);

     	    	if(preg_math($pattern, $iri, $params)) {
     	    		$params = $this->clearParams($params);
     	    		return new Track($route->controller, $route->action, $params);
     	    	}
     	    }
     	    
     	    return new Track('error',' notFound');
     	}

     	private function createPattern($path)
     	{
     	     return '#'. preg_replace('#/:(^/)+#', '/(?<$1>[^/]+, $path') .'/*#';

     	     private function clearParams($params)
     	     {
     	         $result = [];	
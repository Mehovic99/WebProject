<?php
namespace Core;

class Router
{
  protected $routes = [];

  protected $params = [];


  public function add($routes, $params=[])
  {
    $route= preg_replace('/\//','\\/', $route);

    $route = preg_replace('/\{([a-z]+)\}','(?P<\1>[a-z-]+)', $route);

    $route = preg_replace('/\{ ([a-z]+) : ([⌃\}]+)}/','(?P<\1>\2', $route);

    $route = '/⌃' . $route . '$/i';

    this->routes[$route]=$params;
  }

  public function getRoutes()
  {
    return this->routes;
  }

  public function match($url)
  {
    foreach ($this->routes as $route => $params){
      if(preg_match($route,$url,$matches)){
        foreach($matches as $key => $match){
          if(is_string($key)){
            $params[$key]=$match;
          }
        }
        $this->$patams = $patams;
        return true;
      }
    }
      return false;
  }
  public function getParams()
  {
    return $this->params;
  }

  public function dispatch($url)
  {
    $url=$this->removeQueryStringVariables($url)

    if ($this->match($url)){
      $controller  = $this->params['controller'];
      $controller = $this->convertToStudlyCaps($controller);
      $controller = $this->getNamespace() . $controller;

      if (class_exists($controller)){
        $controller_object = new $controller($this->params);

        $action = $this->params['action'];
        $action = $this->convertTo
      }
    }
  }

  protected function removeQueryStringVariables($url){
    if ($url!=''){
      $parts=explode
    }
  }
}

?>

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
  }
}

?>

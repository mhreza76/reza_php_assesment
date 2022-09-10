<?php

class App {

  public function getRoute() {

    global $Routes;
    $uri = $_SERVER['REQUEST_URI'];

    if (!in_array(explode('?',$uri)[0], $Routes)) {
      die( 'Invalid route.' );
    }

    return $uri;

  }

  public function run() {
       $this->getRoute();
  }

}

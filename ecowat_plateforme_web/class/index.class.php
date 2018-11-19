<?php

class Index
{

	function __construct(){
      
	}

  public function View($view)
    {
      $view = '../view/'.$view.'.view.php';
      return $view;
    }

  	
}
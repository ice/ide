<?php

namespace Ice\Mvc\View;

interface ViewInterface
{


	public function getEngines();

    /**
     * @param mixed $file 
     * @param array $data 
     */
	public function render($file = null, $data = array());

}

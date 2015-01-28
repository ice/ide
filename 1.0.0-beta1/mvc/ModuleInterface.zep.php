<?php

namespace Ice\Mvc;

interface ModuleInterface
{


	public function registerAutoloaders();

    /**
     * @param mixed $di 
     */
	public function registerServices(\Ice\Di $di);

}

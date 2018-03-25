<?php

namespace Ice\Mvc\View;

/**
 * View interface.
 *
 * @package     Ice/View
 * @category    Interface
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
interface ViewInterface
{


    public function getEngines();

    /**
     * @param mixed $file
     * @param array $data
     */
    public function render($file = null, array $data = array());

}

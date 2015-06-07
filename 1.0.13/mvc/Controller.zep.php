<?php

namespace Ice\Mvc;

abstract class Controller extends \Ice\Di\Access
{

    /**
     * Controller constructor. Run onConstruct() if method exist.
     */
    public final function __construct() {}

}

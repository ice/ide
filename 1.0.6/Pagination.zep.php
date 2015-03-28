<?php

namespace Ice;

class Pagination extends \Ice\Arr
{

    protected $_di;

    protected $_tag;


	public function getDi() {}


	public function getTag() {}

    /**
     * Pagination constructor. Fetch di and tag.
     *
     * @param array $options 
     */
	public function __construct($options = array()) {}

    /**
     * Returns a slice of the resultset to show in the pagination.
     *
     * @return object 
     */
	public function calculate() {}

    /**
     * Prepare minimal pagination.
     * Previous 1 [2] 3 4 5 6 Next
     *
     * @param string $url URL with pagination
     * @param string $parameters UL attributes to adding
     * @return string 
     */
	public function minimal($url = null, $parameters = array()) {}

    /**
     * Prepare basic pagination.
     * First Previous 1 [2] 3 4 5 6 Next Last
     *
     * @param string $url URL with pagination
     * @param string $parameters UL attributes to adding
     * @return string 
     */
	public function basic($url = null, $parameters = array()) {}

    /**
     * Prepare floating pagination.
     * First Previous 1 2 3 ... 23 24 25 26 [27] 28 29 30 31 ... 48 49 50 Next Last
     *
     * @param string $url URL with pagination
     * @param string $parameters UL attributes to adding
     * @param int $countOut Number of page links in the begin and end of whole range
     * @param int $countIn Number of page links on each side of current page
     * @return string 
     */
	public function floating($url = null, $parameters = array(), $countOut = 0, $countIn = 2) {}

}

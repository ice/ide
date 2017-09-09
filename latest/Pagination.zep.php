<?php

namespace Ice;

/**
 * Provide the multi-page pagination component.
 *
 * @package     Ice/Pagination
 * @category    Library
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 * @uses        Ice\Tag
 */
class Pagination extends \Ice\Arr
{

    protected $di;


    protected $tag;



    public function getDi() {}


    public function getTag() {}

    /**
     * Pagination constructor. Fetch di and tag.
     *
     * @param array $options
     */
    public function __construct(array $options = array()) {}

    /**
     * Returns a slice of the resultset to show in the pagination.
     *
     * @return Pagination
     */
    public function calculate() {}

    /**
     * Prepare list button.
     *
     * @param mixed $page Name or page number
     * @param mixed $url URL with pagination
     * @param boolean $active If active create link else span
     * @param string $symbol HTML symbol to add
     * @return string
     */
    protected function prepareButton($page, $url = null, $active = false, $symbol = null) {}

    /**
     * Prepare minimal pagination.
     * Previous 1 [2] 3 4 5 6 Next
     *
     * @param mixed $url URL with pagination
     * @param array $parameters UL attributes to adding
     * @return string
     */
    public function minimal($url = null, array $parameters = array()) {}

    /**
     * Prepare basic pagination.
     * First Previous 1 [2] 3 4 5 6 Next Last
     *
     * @param mixed $url URL with pagination
     * @param array $parameters UL attributes to adding
     * @return string
     */
    public function basic($url = null, array $parameters = array()) {}

    /**
     * Prepare floating pagination.
     * First Previous 1 2 3 ... 23 24 25 26 [27] 28 29 30 31 ... 48 49 50 Next Last
     *
     * @param mixed $url URL with pagination
     * @param array $parameters UL attributes to adding
     * @param int $countOut Number of page links in the begin and end of whole range
     * @param int $countIn Number of page links on each side of current page
     * @return string
     */
    public function floating($url = null, array $parameters = array(), $countOut = 0, $countIn = 2) {}

}

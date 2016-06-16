<?php

namespace Ice\Db;

/**
 * Database driver interface.
 *
 * @package     Ice/Db
 * @category    Interface
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 */
interface DbInterface
{

    /**
     * @param string $from 
     * @param mixed $filters 
     * @param array $fields 
     * @param array $options 
     */
    public function findOne($from, $filters = array(), $fields = array(), $options = array());

    /**
     * @param string $from 
     * @param mixed $filters 
     * @param array $fields 
     * @param array $options 
     */
    public function find($from, $filters = array(), $fields = array(), $options = array());

    /**
     * @param string $from 
     * @param mixed $filters 
     * @param array $fields 
     * @param array $options 
     */
    public function select($from, $filters = array(), $fields = array(), $options = array());

    /**
     * @param string $from 
     * @param array $fields 
     */
    public function insert($from, $fields = array());

    /**
     * @param string $from 
     * @param mixed $filters 
     * @param array $fields 
     */
    public function update($from, $filters = array(), $fields = array());

    /**
     * @param string $from 
     * @param mixed $filters 
     */
    public function remove($from, $filters = array());

}

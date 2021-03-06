<?php

namespace Ice\Db;

/**
 * Database driver interface.
 *
 * @package     Ice/Db
 * @category    Interface
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
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
    public function findOne(string $from, $filters = array(), array $fields = array(), array $options = array());

    /**
     * @param string $from
     * @param mixed $filters
     * @param array $fields
     * @param array $options
     */
    public function find(string $from, $filters = array(), array $fields = array(), array $options = array());

    /**
     * @param string $from
     * @param mixed $filters
     * @param array $fields
     * @param array $options
     */
    public function select(string $from, $filters = array(), array $fields = array(), array $options = array());

    /**
     * @param string $from
     * @param array $fields
     */
    public function insert(string $from, array $fields = array());

    /**
     * @param string $from
     * @param mixed $filters
     * @param array $fields
     */
    public function update(string $from, $filters = array(), array $fields = array());

    /**
     * @param string $from
     * @param mixed $filters
     */
    public function delete(string $from, $filters = array());

}

<?php

namespace Ice\Db\Driver;

/**
 * MongoDB driver.
 *
 * @package     Ice/Db
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 */
class Mongodb implements \Ice\Db\DbInterface
{

    protected $id = "_id";


    protected $type = "NOSQL";


    protected $error;


    protected $client;


    protected $lastInsertId;



    public function getId() {}


    public function getType() {}


    public function getClient() {}


    public function getLastInsertId() {}

    /**
     * Instantiate mongo connection.
     *
     * @param string $dsn
     * @param string $dbname
     * @param array $options
     */
    public function __construct($dsn, $dbname = null, array $options = array()) {}

    /**
     * Get the id value.
     *
     * @param string $id
     * @return object
     */
    public function getIdValue($id) {}

    /**
     * Get a date time object.
     *
     * @param mixed $value
     * @param boolean $model
     * @return object
     */
    public function getDateTime($value = null, $model = false) {}

    /**
     * Find one document that match criteria.
     *
     * @param string $from Collection name
     * @param mixed $filters Criteria
     * @param array $options Options to limit/group results
     * @param array $fields Fields to retrieve, if not specified get all
     * @return Arr
     */
    public function findOne($from, $filters = array(), array $options = array(), array $fields = array()) {}

    /**
     * Find all documents that match criteria.
     *
     * <pre><code>
     *  $db->find("users", array("a" => 1, "b" => "q"));
     *  $db->find("users", array("age" => array(">" => 33)));
     *  $db->find("users", array("OR" => array(array("a" => 1), array("b" => 2))));
     * </code></pre>
     *
     * @param string $from Collection name
     * @param mixed $filters Criteria
     * @param array $options Options to limit/group results
     * @param array $fields Fields to retrieve, if not specified get all
     * @return Arr
     */
    public function find($from, $filters = array(), array $options = array(), array $fields = array()) {}

    /**
     * SELECT document(s) that match criteria.
     *
     * @param string $from Collection name
     * @param mixed $filters Criteria
     * @param array $options Options to limit/group results
     * @param array $fields Fields to retrieve, if not specified get all
     */
    public function select($from, $filters = array(), array $options = array(), array $fields = array()) {}

    /**
     * INSERT document into collection.
     *
     * @param string $from Collection name
     * @param array $fields Fields to insert, keys are the column names
     */
    public function insert($from, array $fields = array()) {}

    /**
     * UPDATE documents in the collection.
     *
     * @param string $from Collection name
     * @param mixed $filters Criteria
     * @param array $fields Fields to update, keys are the column names
     */
    public function update($from, $filters = array(), array $fields = array()) {}

    /**
     * Remove documents from the collection.
     *
     * @param string $from Collection name
     * @param mixed $filters Criteria
     */
    public function remove($from, $filters = array()) {}

    /**
     * Get an error message.
     *
     * @return mixed
     */
    public function getError() {}

}

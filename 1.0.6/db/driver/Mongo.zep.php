<?php

namespace Ice\Db\Driver;

class Mongo implements \Ice\Db\DbInterface
{

    protected $_id = "_id";

    protected $_type = "NOSQL";

    protected $_error;

    protected $_client;

    protected $_lastInsertId;


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
	public function __construct($dsn, $dbname = null, $options = array()) {}

    /**
     * Find one document that match criteria.
     *
     * @param string $from Collection name
     * @param mixed $filters Criteria
     * @param array $options Options to limit/group results
     * @param array $fields Fields to retrieve, if not specified get all
     * @return Arr 
     */
	public function findOne($from, $filters = array(), $options = array(), $fields = array()) {}

    /**
     * Find all documents that match criteria.
     * <pre><code>
     * $db->find("users", array("a" => 1, "b" => "q"));
     * $db->find("users", array("age" => array(">" => 33)));
     * $db->find("users", array("OR" => array(array("a" => 1), array("b" => 2))));
     * </code></pre>
     *
     * @param string $from Collection name
     * @param mixed $filters Criteria
     * @param array $options Options to limit/group results
     * @param array $fields Fields to retrieve, if not specified get all
     * @return Arr 
     */
	public function find($from, $filters = array(), $options = array(), $fields = array()) {}

    /**
     * SELECT document(s) that match criteria.
     *
     * @param string $from Collection name
     * @param mixed $filters Criteria
     * @param array $options Options to limit/group results
     * @param array $fields Fields to retrieve, if not specified get all
     */
	public function select($from, $filters = array(), $options = array(), $fields = array()) {}

    /**
     * INSERT document into collection.
     *
     * @param string $from Collection name
     * @param array $fields Fields to insert, keys are the column names
     */
	public function insert($from, $fields = array()) {}

    /**
     * UPDATE documents in the collection.
     *
     * @param string $from Collection name
     * @param mixed $filters Criteria
     * @param array $fields Fields to update, keys are the column names
     */
	public function update($from, $filters = array(), $fields = array()) {}

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

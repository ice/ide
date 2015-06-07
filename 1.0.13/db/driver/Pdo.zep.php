<?php

namespace Ice\Db\Driver;

class Pdo implements \Ice\Db\DbInterface
{

    protected $_id = "id";


    protected $_type = "SQL";


    protected $_error;


    protected $_client;



    public function getId() {}


    public function getType() {}


    public function getClient() {}

    /**
     * Instantiate pdo connection.
     *
     * @param string $dsn 
     * @param string $user 
     * @param string $password 
     * @param array $options 
     */
    public function __construct($dsn, $user = null, $password = null, $options = array()) {}

    /**
     * Get the id value.
     *
     * @param string $id 
     * @return int 
     */
    public function getIdValue($id) {}

    /**
     * Find one row that match criteria.
     *
     * @param string $from Table name
     * @param mixed $filters Filters to create WHERE conditions
     * @param array $options Options to limit/group results
     * @param array $fields Fields to retrieve, if not specified get all
     * @return Arr|false 
     */
    public function findOne($from, $filters = array(), $options = array(), $fields = array()) {}

    /**
     * Find all records that match criteria.
     * <pre><code>
     * //SELECTFROM users WHERE a=1 and b="q"
     * $db->find("users", array("a" => 1, "b" => "q"));
     * //SELECTFROM users WHERE age>33
     * $db->find("users", array("age" => array(">" => 33)));
     * //SELECTFROM users WHERE a=1 or b=2
     * $db->find("users", array("OR" => array(array("a" => 1), array("b" => 2))));
     * </code></pre>
     *
     * @param string $from Table name
     * @param mixed $filters Filters to create WHERE conditions
     * @param array $options Options to limit/group results
     * @param array $fields Fields to retrieve, if not specified get all
     * @return Arr 
     */
    public function find($from, $filters = array(), $options = array(), $fields = array()) {}

    /**
     * Prepare SQL WHERE condition.
     *
     * @params mixed filters
     * @params array values
     * @param mixed $filters 
     * @param array $values 
     * @return array 
     */
    private function where($filters = array(), $values = array()) {}

    /**
     * SELECT record(s) that match criteria.
     *
     * @param string $from Table name
     * @param mixed $filters Filters to create WHERE conditions
     * @param array $options Options to limit/group results
     * @param array $fields Fields to retrieve, if not specified get all
     */
    public function select($from, $filters = array(), $options = array(), $fields = array()) {}

    /**
     * INSERT record into table.
     *
     * @param string $from Table name
     * @param array $fields Fields to insert, keys are the column names
     */
    public function insert($from, $fields = array()) {}

    /**
     * UPDATE records in the table.
     *
     * @param string $from Table name
     * @param mixed $filters Filters to create WHERE conditions
     * @param array $fields Fields to update, keys are the column names
     */
    public function update($from, $filters = array(), $fields = array()) {}

    /**
     * Remove records from the table.
     *
     * @param string $from Table name
     * @param mixed $filters Filters to create WHERE conditions
     */
    public function remove($from, $filters = array()) {}

    /**
     * Get last inserted ID.
     *
     * @return int 
     */
    public function getLastInsertId() {}

    /**
     * Get an error message.
     *
     * @return mixed 
     */
    public function getError() {}

}

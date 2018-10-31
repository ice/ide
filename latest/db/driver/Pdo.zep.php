<?php

namespace Ice\Db\Driver;

/**
 * Pdo driver.
 *
 * @package     Ice/Db
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
class Pdo implements \Ice\Db\DbInterface
{

    protected $id = 'id';


    protected $type = 'SQL';


    protected $error;


    protected $client;


    protected $driverName;


    protected $identifier = '\\\"%s\\\"';



    public function getId() {}


    public function getType() {}


    public function getClient() {}


    public function getDriverName() {}

    /**
     * Instantiate pdo connection.
     *
     * @param string $dsn
     * @param string $user
     * @param string $password
     * @param array $options
     */
    public function __construct(string $dsn, string $user = null, string $password = null, array $options = array()) {}

    /**
     * Get the id value.
     *
     * @param string $id
     * @return int
     */
    public function getIdValue($id): int {}

    /**
     * Get a date time object.
     *
     * @param mixed $value
     * @param boolean $model
     * @return object
     */
    public function getDateTime($value = null, $model = false) {}

    /**
     * Find one row that match criteria.
     *
     * <pre><code>
     *  //SELECT x, y FROM users WHERE a=1 or b=2 ORDER BY a desc,b asc Limit 1
     *  $db->findOne("users", ["OR" => [["a" => 1], ["b" => 2]]], ["order" => ["a desc", "b asc"]], ["x","y"]);
     * </code></pre>
     *
     * @param string $from Table name
     * @param mixed $filters Filters to create WHERE conditions
     * @param array $options Options to limit/group results
     * @param array $fields Fields to retrieve, if not specified get all
     * @return Arr|false
     */
    public function findOne(string $from, $filters = array(), array $options = array(), array $fields = array()) {}

    /**
     * Find all records that match criteria.
     *
     * <pre><code>
     *  //SELECT FROM users WHERE a=1 and b="q"
     *  $db->find("users", ["a" => 1, "b" => "q"]);
     *
     *  //SELECT FROM users WHERE age>33
     *  $db->find("users", ["age" => [">" => 33]]);
     *
     *  //SELECT x, y FROM users WHERE a=1 or b=2 ORDER BY a desc,b asc
     *  $db->find("users", ["OR" => [["a" => 1], ["b" => 2]]], ["order" => ["a desc", "b asc"]], ["x","y"]);
     * </code></pre>
     *
     * @param string $from Table name
     * @param mixed $filters Filters to create WHERE conditions
     * @param array $options Options to limit[top]/group results
     * @param array $fields Fields to retrieve, if not specified get all
     * @return Arr
     */
    public function find(string $from, $filters = array(), array $options = array(), array $fields = array()) {}

    /**
     * Prepare SQL WHERE condition.
     *
     * @params mixed filters
     * @params array values
     * @param mixed $filters
     * @param array $values
     * @return array
     */
    protected function where($filters = array(), array $values = array()) {}

    /**
     * SELECT record(s) that match criteria.
     *
     * <pre><code>
     *  // MySQL: SELECT FROM users WHERE a=1 or b=2 ORDER BY a desc,b asc LIMIT 10
     *  // MSSQL: SELECT TOP 10 FROM users WHERE a=1 or b=2 ORDER BY a desc,b asc
     *  $db->select("users", ["OR" => [["a" => 1], ["b" => 2]]], ["order" => ["a desc", "b asc"], "limit" => 10]);
     *
     *  // MySQL: SELECT x, y FROM users WHERE a=1 or b=2 ORDER BY a desc,b asc LIMIT 10 offset 50
     *  // MSSQL: SELECT x, y FROM users WHERE a=1 or b=2 ORDER BY a desc,b asc offset 50 ROWS FETCH NEXT 10 ROWS ONLY
     *  $db->select("users", ["OR" => [["a" => 1], ["b" => 2]]], ["order" => ["a desc", "b asc"], "limit" => 10, "offset" => 50], ["x","y"]);
     * </code></pre>
     *
     * @param string $from Table name
     * @param mixed $filters Filters to create WHERE conditions
     * @param array $options Options to limit/offset/group results
     * @param array $fields Fields to retrieve, if not specified get all
     */
    public function select(string $from, $filters = array(), array $options = array(), array $fields = array()) {}

    /**
     * INSERT record into table.
     *
     * <pre><code>
     *  //INSERT INTO users (a,b) VALUES (1, 2)
     *  $db->insert("users", [["a" => 1], ["b" => 2]]);
     * </code></pre>
     *
     * @param string $from Table name
     * @param array $fields Fields to insert, keys are the column names
     */
    public function insert(string $from, array $fields = array()) {}

    /**
     * UPDATE records in the table.
     *
     * <pre><code>
     *  //UPDATE users SET a=1, b=2 WHERE id=10 OR foo="bar"
     *  $db->update("users", ["OR" => ["id" => 10, "foo" => "bar"]], [["a" => 1], ["b" => 2]]);
     * </code></pre>
     *
     * @param string $from Table name
     * @param mixed $filters Filters to create WHERE conditions
     * @param array $fields Fields to update, keys are the column names
     */
    public function update(string $from, $filters = array(), array $fields = array()) {}

    /**
     * Remove records from the table.
     *
     * <pre><code>
     *  //DELETE FROM users WHERE id=10 OR foo="bar"
     *  $db->delete("users", ["OR" => ["id" => 10, "foo" => "bar"]]);
     * </code></pre>
     *
     * @param string $from Table name
     * @param mixed $filters Filters to create WHERE conditions
     */
    public function delete(string $from, $filters = array()) {}

    /**
     * Query sql statement. execute the statement and populate into Model object:
     *
     * <pre><code>
     *  //select from t where id=1
     *  $m = $this->db->query('select from t where id=:id', [':id' => 1], new stdClass);
     *
     *  //select from t where id=1 OR foo='bar'
     *  $m = $this->db->query('select from t where id=? OR foo=?', [1, "bar"], '\Ice\Arr');
     * </code></pre>
     *
     * @param string $sql SQL with kinda of placeholders
     * @param array $values Replace placeholders in the sql
     * @param mixed $obj The classname or arr object will be populated from query result
     * @return PDOStatement|object|null fail return null
     */
    public function query(string $sql, array $values = array(), $obj = null) {}

    /**
     * Get last inserted ID.
     *
     * @return int
     */
    public function getLastInsertId(): int {}

    /**
     * Get an error message.
     *
     * @return mixed
     */
    public function getError() {}

}

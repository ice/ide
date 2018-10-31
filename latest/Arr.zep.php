<?php

namespace Ice;

/**
 * Access class as array and the same time as object.
 *
 * @package     Ice/Arr
 * @category    Helper
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
class Arr implements \ArrayAccess, \Countable, \IteratorAggregate
{

    protected $data = array();



    public function getData() {}

    /**
     * Arr constructor.
     *
     * @param array $data Initial array
     */
    public function __construct(array $data = array()) {}

    /**
     * Whether or not a data exists by key.
     *
     * @param string $key The data key
     * @return bool
     */
    public function has(string $key): bool {}

    /**
     * Retrieve a single key from an array.
     * If the key does not exist in the array, the default value will be returned.
     *
     * @param string $key The data key
     * @param mixed $defaultValue The value to return if data key does not exist
     * @return mixed
     */
    public function get(string $key, $defaultValue = null) {}

    /**
     * Assigns a value to the specified data.
     *
     * @param string $key The data key
     * @param mixed $value
     * @return object
     */
    public function set(string $key, $value) {}

    /**
     * Add data to set, replaces the existing data.
     *
     * @param array $data
     * @return Arr
     */
    public function replace(array $data) {}

    /**
     * Fetch all data.
     *
     * @return array
     */
    public function all() {}

    /**
     * Fetch some data.
     *
     * @param array $keys Keys to fetch
     * @param boolean $strict Fetch key only if exist
     * @return array
     */
    public function only(array $keys, bool $strict = true) {}

    /**
     * Gets value from data applying filters if needed.
     *
     * <pre><code>
     *  //Returns value from $arr["id"] without sanitizing
     *  $id = $arr->getValue("id");
     *
     *  //Returns value from $arr["title"] with sanitizing
     *  $title = $arr->getValue("title", "escape|repeats");
     *
     *  //Returns value from $arr["id"] with a default value
     *  $id = $arr->getValue("id", null, 150);
     * </code></pre>
     *
     * @param string $key Index to get
     * @param string|array $filters Filters to apply
     * @param mixed $defaultValue Default value if key not exist or value is empty and allowEmpty is false
     * @param boolean $allowEmpty
     * @return mixed
     */
    public function getValue(string $key, $filters = null, $defaultValue = null, bool $allowEmpty = false) {}

    /**
     * Set data, clears and overwrites the current data.
     *
     * @param array $data
     * @return void
     */
    public function setData(array $data = array()) {}

    /**
     * Fetch set data keys.
     *
     * @return array
     */
    public function keys() {}

    /**
     * Remove a data by key.
     *
     * @param string $key The data key
     * @return object
     */
    public function remove(string $key) {}

    /**
     * Clear all values.
     *
     * @return object
     */
    public function clear() {}

    /**
     * Count all elements in a data.
     *
     * @return int
     */
    public function count(): int {}

    /**
     * Get a data iterator.
     *
     * return ArrayIterator
     *
     * @return \ArrayIterator
     */
    public function getIterator(): ArrayIterator {}

    /**
     * Gets a value from an array using a dot separated path.
     *
     * <pre><code>
     *  // Get the value of $array['foo']['bar']
     *  $value = (new Arr($array))->getPath('foo.bar');
     * </code></pre>
     *
     * <pre><code>
     *  // Get the values of "color" in theme
     *  $colors = (new Arr($array))->getPath('theme..color');
     * </code></pre>
     *
     * @param mixed $path Key path string (delimiter separated) or array of keys
     * @param mixed $defaultValue Default value if the path is not set
     * @param string $delimiter Key path delimiter
     * @return mixed
     */
    public function getPath($path, $defaultValue = null, string $delimiter = '.') {}

    /**
     * Converts recursively the object to an array.
     *
     * @return array
     */
    public function toArray() {}

    /**
     * Whether or not an offset exists.
     *
     * @abstracting ArrayAccess
     * @param mixed $offset
     * @param string $An offset to check for
     * @return bool
     */
    public function offsetExists($offset): bool {}

    /**
     * Returns the value at specified offset.
     *
     * @abstracting ArrayAccess
     * @param mixed $offset
     * @param string $The offset to retrieve
     * @return mixed
     */
    public function offsetGet($offset) {}

    /**
     * Assigns a value to the specified offset.
     *
     * @abstracting ArrayAccess
     * @param mixed $offset
     * @param mixed $value
     * @param mixed $The value to set
     * @return void
     */
    public function offsetSet($offset, $value) {}

    /**
     * Unsets an offset.
     *
     * @abstracting ArrayAccess
     * @param mixed $offset
     * @param string $The offset to unset
     * @return void
     */
    public function offsetUnset($offset) {}

    /**
     * Magic isset, whether or not a key exists.
     *
     * @param string $key
     * @return bool
     */
    public function __isset(string $key): bool {}

    /**
     * Magic get, returns the value at specified key.
     * First check if property exist.
     *
     * @param mixed $key
     */
    public function __get($key) {}

    /**
     * Magic set, assigns a value to the specified key.
     * First check if property exist.
     *
     * @param string $key
     * @param mixed $value
     */
    public function __set(string $key, $value) {}

    /**
     * Magic unset, unsets a key.
     *
     * @param mixed $key
     */
    public function __unset($key) {}

}

<?php

namespace Ice;

/**
 * PSR-4 autoloader class.
 *
 * @package     Ice/Loader
 * @category    Library
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
class Loader
{

    protected $prefixes = array();


    /**
     * Register loader with SPL autoloader stack.
     *
     * @return void
     */
    public function register() {}

    /**
     * Adds a base directory for a namespace prefix.
     *
     * @param bool prepend If true, prepend the base directory to the stack instead of appending it; this causes it to
     * be searched first rather than last
     * @param string $prefix The namespace prefix
     * @param string $baseDir A base directory for class files in the namespace
     * @param bool $prepend
     * @return Loader
     */
    public function addNamespace(string $prefix, string $baseDir, bool $prepend = false) {}

    /**
     * Loads the class file for a given class name.
     *
     * @param string $className The fully-qualified class name
     * @return mixed mapped file name on success, or boolean false on failure
     */
    public function loadClass(string $className) {}

    /**
     * Load the mapped file for a namespace prefix and relative class.
     *
     * @param string $prefix The namespace prefix
     * @param string $relativeClass
     * @param string $relative_class The relative class name
     * @return mixed false if no mapped file can be loaded, or the name of the mapped file that was loaded
     */
    protected function loadMappedFile(string $prefix, string $relativeClass) {}

    /**
     * If a file exists, require it from the file system.
     *
     * @param string $file The file to require
     * @return bool if the file exists, false if not
     */
    protected function requireFile(string $file) {}

}

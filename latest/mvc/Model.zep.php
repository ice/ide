<?php

namespace Ice\Mvc;

/**
 * Model connects business objects and database tables to create a persistable domain model where logic and data are
 * presented in one wrapping (ORM & ODM).
 *
 * @package     Ice/Db
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
abstract class Model extends \Ice\Arr implements \Serializable
{

    const BELONGS_TO = 1;


    const HAS_ONE = 2;


    const HAS_MANY = 3;


    protected $di;


    protected $db;


    protected $service = 'db';


    protected $from;


    protected $primary;


    protected $autoincrement = true;


    protected $filters = array();


    protected $fields = array();


    protected $validation;


    protected $relations = array();


    protected $labels = array();


    protected $rules = array();


    protected $messages = array();


    protected $isLoaded = null;



    public function getDi() {}


    public function getDb() {}

    /**
     * @param mixed $from
     */
    public function setFrom($from) {}

    /**
     * @param mixed $primary
     */
    public function setPrimary($primary) {}


    public function getPrimary() {}

    /**
     * @param mixed $autoincrement
     */
    public function setAutoincrement($autoincrement) {}

    /**
     * @param mixed $filters
     */
    public function setFilters($filters) {}


    public function getFilters() {}

    /**
     * @param mixed $fields
     */
    public function setFields($fields) {}


    public function getFields() {}

    /**
     * @param mixed $validation
     */
    public function setValidation($validation) {}


    public function getValidation() {}


    public function getRelations() {}

    /**
     * @param mixed $labels
     */
    public function setLabels($labels) {}


    public function getMessages() {}

    /**
     * @param mixed $messages
     */
    public function setMessages($messages) {}

    /**
     * Model constructor. Fetch Di and set it as a property.
     *
     * @param mixed $filters
     * @param array $data
     * @param array $options Options to limit/group/orderby results when filters is not null
     */
    public function __construct($filters = null, array $data = array(), array $options = array()) {}

    /**
     * Get the id.
     *
     * @return mixed
     */
    public function getId() {}

    /**
     * Get the id key depending on db driver.
     *
     * @return string
     */
    public function getIdKey(): string {}

    /**
     * Get the date time object.
     *
     * @param mixed $key
     * @param boolean $model
     * @return object
     */
    public function getDateTime($key, $model = false) {}

    /**
     * Load one result to the current object.
     *
     * @param mixed $filters
     * @param array $options Options to limit/group/orderby results
     * @return this|false
     */
    public function loadOne($filters, array $options = array()) {}

    /**
     * Load results to the current object.
     *
     * @param mixed $filters
     * @param array $options
     * @return object
     */
    public function load($filters, array $options = array()) {}

    /**
     * Allows to query one record that match the specified conditions.
     *
     * <pre><code>
     *  //Get the user from users by id 2
     *  $user = Users::findOne(2);
     *  echo "The user name is ", $user->username;
     *
     *  //Get one active user with age > 18
     *  $user = Users::findOne(array("status" => 1, "age" => array(">" => 18)));
     * </code></pre>
     *
     * @param array $filters
     * @param array $options
     * @return this|false
     */
    public static function findOne($filters = null, array $options = array()) {}

    /**
     * Allows to query all records that match the specified conditions.
     *
     * <pre><code>
     *  //Get all active users with age > 18
     *  $user = Users::find(array("status" => 1, "age" => array(">" => 18)));
     * </code></pre>
     *
     * @param array $filters
     * @param array $options
     * @return object
     */
    public static function find($filters = null, array $options = array()) {}

    /**
     * Prepare fields for validation on create/update.
     *
     * @param mixed $fields Fields to save or valid fields
     * @param boolean $primary Keep primary key
     * @return array
     */
    protected function fields($fields = array(), bool $primary = true) {}

    /**
     * Insert a new object to the database.
     *
     * <pre><code>
     *  //Creating a new user
     *  $user = new Users();
     *  $user->lastname = "Kowalski";
     *  $user->status = 1;
     *  $user->create();
     * </code></pre>
     *
     * @param array $fields Fields to save or valid fields
     * @param object $extra Validation for fields such as a CSRF token, password verification, or a CAPTCHA
     * @return null|boolean validate fail return null, else return insert status
     */
    public function create($fields = array(), \Ice\Validation $extra = null) {}

    /**
     * Update an existing object in the database.
     *
     * <pre><code>
     *  //Updating a user last name
     *  $user = Users::findOne(100);
     *  $user->lastname = "Nowak";
     *  $user->update();
     * </code></pre>
     *
     * @param array $fields Fields to save or valid fields
     * @param object $extra Validation for fields such as a CSRF token, password verification, or a CAPTCHA
     * @return null|boolean validate fail return null, else return update status
     */
    public function update($fields = array(), \Ice\Validation $extra = null) {}

    /**
     * Inserts or updates a model instance. Returning true on success or false otherwise.
     *
     * <pre><code>
     *  //Creating a new user
     *  $user = new Users();
     *  $user->lastname = "Kowalski";
     *  $user->status = 1;
     *  $user->save();
     *
     *  //Updating a user last name
     *  $user = Users::findOne(100);
     *  $user->lastname = "Nowak";
     *  $user->save();
     * </code></pre>
     *
     * @param array $fields
     * @param Validation $extra
     * @return null|boolean validate fail return null, else return save status
     */
    public function save($fields = array(), \Ice\Validation $extra = null) {}

    /**
     * Removes a model instance(s). Returning true on success or false otherwise.
     *
     * <pre><code>
     *  //Remove current user
     *  $user = Users::findOne(100);
     *  $user->delete();
     *
     *  //Remove all unactive users
     *  $status = (new Users())->delete(["status" => 0]);
     * </code></pre>
     *
     * @param mixed $filters
     * @param filters
     * @return boolean
     */
    public function delete($filters = array()) {}

    /**
     * Get the record if exist.
     *
     * @param mixed $filters
     * @return Model|false
     */
    public function exists($filters = array()) {}

    /**
     * Get the last Db error.
     *
     * @return mixed
     */
    public function getError() {}

    /**
     * Setup a relation reverse 1-1 between two models.
     *
     * <pre><code>
     *  class Posts extends Model
     *  {
     *      public function initialize()
     *      {
     *          //Relation with user, be able to get post's author
     *          $this->belongsTo('user_id', __NAMESPACE__ . '\Users', 'id', ['alias' => 'User']);
     *      }
     *  }
     *
     *  //Get post's author
     *  $post = Posts::findOne(100);
     *  echo $post->getUser()->username;
     * </code></pre>
     *
     * @param string $field
     * @param string $referenceModel
     * @param string $referencedField
     * @param array $options
     * @return object
     */
    public function belongsTo(string $field, string $referenceModel, string $referencedField, array $options = array()) {}

    /**
     * Setup a 1-1 relation between two models
     *
     * <pre><code>
     *  class Users extends Model
     *  {
     *      public function initialize()
     *      {
     *          $this->hasOne('id', __NAMESPACE__ . '\UsersDescriptions', 'user_id', ['alias' => 'Description']);
     *      }
     *  }
     * </code></pre>
     *
     * @param string $field
     * @param string $referenceModel
     * @param string $referencedField
     * @param array $options
     * @return object
     */
    public function hasOne(string $field, string $referenceModel, string $referencedField, array $options = array()) {}

    /**
     * Setup a relation 1-n between two models.
     *
     * <pre><code>
     *  class Users extends Model
     *  {
     *      public function initialize()
     *      {
     *          //Relation with posts, be able to get user's posts
     *          $this->hasMany('id', __NAMESPACE__ . '\Posts', 'user_id', ['alias' => 'Posts']);
     *      }
     *  }
     *
     *  //Get user's posts
     *  $user = Users::findOne(2);
     *  foreach ($user->getPosts() as $post) {
     *      echo $post->title;
     *  }
     * </code></pre>
     *
     * @param string $field
     * @param string $referenceModel
     * @param string $referencedField
     * @param array $options
     * @return object
     */
    public function hasMany(string $field, string $referenceModel, string $referencedField, array $options = array()) {}

    /**
     * Get related models.
     *
     * @param string $alias
     * @param array $filters
     * @param array $options
     */
    public function getRelated(string $alias, array $filters = array(), array $options = array()) {}

    /**
     * Get rules for validation.
     *
     * <pre><code>
     *  // Get rules for one field
     *  $this->getRules('password');
     *
     *  // Get rules for multiple fields
     *  $this->getRules(['fullName', 'about']);
     *
     *  // Get all rules
     *  $this->getRules();
     * </code></pre>
     *
     * @param mixed $fields
     * @return mixed
     */
    public function getRules($fields = null) {}

    /**
     * Set rules for validation.
     *
     * @param array $rules
     * @param boolean $merge
     * @return object
     */
    public function setRules(array $rules = array(), bool $merge = true) {}

    /**
     * Serialize the model's data.
     *
     * @return string
     */
    public function serialize(): string {}

    /**
     * Unserialize and set the data.
     *
     * @param mixed $serialized
     * @return object
     */
    public function unserialize($serialized) {}

    /**
     * Magic call to get related models.
     *
     * @param string $method
     * @param mixed $arguments
     */
    public function __call(string $method, $arguments = null) {}

}

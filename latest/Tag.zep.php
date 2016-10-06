<?php

namespace Ice;

/**
 * Tag helper is designed to simplify building of HTML tags.
 *
 * @package     Ice/Tag
 * @category    Helper
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 * @uses        Ice\Mvc\Url
 */
class Tag
{

    const HTML32 = 1;


    const HTML401_STRICT = 2;


    const HTML401_TRANSITIONAL = 3;


    const HTML401_FRAMESET = 4;


    const HTML5 = 5;


    const XHTML10_STRICT = 6;


    const XHTML10_TRANSITIONAL = 7;


    const XHTML10_FRAMESET = 8;


    const XHTML11 = 9;


    const XHTML20 = 10;


    const XHTML5 = 11;


    protected $di;


    protected $values;


    protected $docType = 5;


    protected $title = null;


    protected $titleSeparator = " - ";


    protected $meta = array();


    protected $escape = true;



    public function getDi() {}


    public function getValues() {}

    /**
     * @param mixed $docType 
     */
    public function setDocType($docType) {}

    /**
     * @param mixed $title 
     */
    public function setTitle($title) {}


    public function getTitle() {}

    /**
     * @param mixed $titleSeparator 
     */
    public function setTitleSeparator($titleSeparator) {}


    public function getTitleSeparator() {}

    /**
     * @param mixed $meta 
     */
    public function setMeta($meta) {}


    public function getMeta() {}

    /**
     * @param mixed $escape 
     */
    public function setEscape($escape) {}

    /**
     * Tag constructor. Fetch Di and set it as a property.
     */
    public function __construct() {}

    /**
     * Appends a text to current document title.
     *
     * @param string $title 
     * @param string $separator 
     * @return void 
     */
    public function appendTitle($title, $separator = null) {}

    /**
     * Prepends a text to current document title.
     *
     * @param string $title 
     * @param string $separator 
     * @return void 
     */
    public function prependTitle($title, $separator = null) {}

    /**
     * Add meta tag to the container.
     *
     * @param array $parameters 
     * @return object 
     */
    public function addMeta(array $parameters) {}

    /**
     * Builds a HTML INPUT[type="text"] tag.
     * <pre><code>
     * // Phtml <input type="text" id="some" name="some" value="some_value">
     * $this->tag->textField(['some', 'some_value']);
     * // Sleet <input type="text" id="some1" name="some" value="some_value" class="field" style="width: 100%">
     * {{ text_field(['some', 'some_value', 'id' => 'some1', 'class' => 'field', 'style' => 'width: 100%']) }}
     * </code></pre>
     *
     * @param array $parameters 
     * @return string 
     */
    public function textField(array $parameters) {}

    /**
     * Builds a HTML INPUT[type="password"] tag.
     * <pre><code>
     * // Phtml <input type="password" id="pass" name="pass" class="form-control">
     * $this->tag->passwordField(['pass', 'class': 'form-control']);
     * // Sleet <input type="password" id="pass" name="pass" placeholder="My secret password">
     * {{ password_field(['pass', 'placeholder': 'My secret password']) }}
     * </code></pre>
     *
     * @param array $parameters 
     * @return string 
     */
    public function passwordField(array $parameters) {}

    /**
     * Builds a HTML INPUT[type="hidden"] tag.
     * <pre><code>
     * // Phtml <input type="hidden" id="secret" name="secret" value="some value">
     * $this->tag->hiddenField(['secret', 'some value']);
     * // Sleet <input type="hidden" id="my_id" name="secret" value="hidden value">
     * {{ hidden_field(['secret', 'hidden value', 'id': 'my_id']) }}
     * </code></pre>
     *
     * @param array $parameters 
     * @return string 
     */
    public function hiddenField(array $parameters) {}

    /**
     * Builds a HTML INPUT[type="file"] tag.
     * <pre><code>
     * // Sleet <input type="file" id="some" name="some" >
     * {{ file_field(['some']) }}
     * </code></pre>
     *
     * @param array $parameters 
     * @return string 
     */
    public function fileField(array $parameters) {}

    /**
     * Builds a HTML INPUT[type="submit"] tag.
     * <pre><code>
     * // Phtml <input type="submit" id="some" name="some" value="Submit">
     * $this->tag->submitButton(['some', 'Submit']);
     * // Sleet <input type="submit" id="some1" name="some" value="Submit" class="btn">
     * {{ submit_button(['some', 'value' => 'Submit', 'id' => 'some1', 'class' => 'btn']) }}
     * </code></pre>
     *
     * @param array $parameters 
     * @return string 
     */
    public function submitButton(array $parameters) {}

    /**
     * Builds a HTML BUTTON tag.
     * <pre><code>
     * // Phtml <button type="submit" id="some" name="some">content</button>
     * $this->tag->button(['some', 'content']);
     * // Sleet <button type="button" id="some1" name="some"><i class="icon">+</i> Submit</button>
     * {{ button(['some', '<i class="icon">+</i> ' . 'Submit', 'type' => 'button', 'id' => 'some1']) }}
     * </code></pre>
     *
     * @param array $parameters 
     * @return string 
     */
    public function button(array $parameters) {}

    /**
     * Builds a HTML INPUT[type="checkbox"] tag.
     * <pre><code>
     * // Phtml <input type="checkbox" id="agree" name="agree" value="yes">
     * $this->tag->checkField(['agree', 'yes']);
     * // Sleet <input type="checkbox" id="remember" name="remember" value="on" checked="checked">
     * {{ check_field(['remember', 'on', 'checked': 'checked']) }}
     * </code></pre>
     *
     * @param array $parameters 
     * @return string 
     */
    public function checkField(array $parameters) {}

    /**
     * Builds a HTML INPUT[type="radio"] tag.
     * <pre><code>
     * // Phtml <input type="radio" id="sex" name="sex" value="male">
     * $this->tag->radioField(['sex', 'male']);
     * // Sleet <input type="radio" id="sex" name="sex" value="female" checked="checked">
     * {{ radio_field(['sex', 'female', 'checked': 'checked']) }}
     * </code></pre>
     *
     * @param array $parameters 
     * @return string 
     */
    public function radioField(array $parameters) {}

    /**
     * Builds generic INPUT tags.
     *
     * @param string $type 
     * @param array $parameters 
     * @return string 
     */
    private function input($type, array $parameters) {}

    /**
     * Builds a HTML FORM tag.
     * <pre><code>
     * // Phtml <form action="/post/add" method="post">
     * $this->tag->form(['post/add']);
     * // <form action="http://example.com" method="post">
     * $this->tag->form(['http://example.com', 'local' => false]);
     * // Sleet <form method="post">
     * {{ form([false]) }}
     * // <form action="/post/add" class="form-horizontal" method="post" enctype="multipart/form-data">
     * {{ form(['post/add', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal']) }}
     * </code></pre>
     *
     * @param array $parameters 
     * @return string 
     */
    public function form(array $parameters) {}

    /**
     * Builds a HTML TEXTAREA tag.
     * <pre><code>
     * // Phtml <textarea id="description" name="description">content</textarea>
     * $this->tag->textArea(['description', 'content']);
     * // Sleet <textarea id="some" name="some" placeholder="Say something"></textarea>
     * {{ text_area(['some', 'placeholder' => 'Say something']) }}
     * </code></pre>
     *
     * @param array $parameters 
     * @return string 
     */
    public function textArea(array $parameters) {}

    /**
     * Alias of the `img` method.
     *
     * @param array $parameters 
     * @return string 
     */
    public function image(array $parameters) {}

    /**
     * Builds HTML IMG tags.
     * <pre><code>
     * // Phtml <img src="/img/logo.png" alt="Logo">
     * $this->tag->img(['img/logo.png', 'Logo']);
     * // Sleet <img src="http://example.com/img/logo.png" alt="Logo">
     * {{ image(['http://example.com/img/logo.png', 'Logo', 'local' => false]) }}
     * </code></pre>
     *
     * @param array $parameters 
     * @return string 
     */
    public function img(array $parameters) {}

    /**
     * Alias of the `a` method.
     *
     * @param array $parameters 
     * @return string 
     */
    public function linkTo(array $parameters) {}

    /**
     * Builds a HTML A tag using framework conventions.
     * <pre><code>
     * // Phtml <a href="/post/add" title="Add a post">Add</a>
     * $this->tag->a(['post/add', 'Add', 'Add a post']);
     * // Sleet <a href="http://google.com">Google</a>
     * {{ link_to(['http://google.com', 'Google', 'local' => false]) }}
     * </code></pre>
     *
     * @param array $parameters 
     * @return string 
     */
    public function a(array $parameters) {}

    /**
     * Builds a LINK[rel="stylesheet"] tag.
     * <pre><code>
     * // Phtml <link rel="stylesheet" type="text/css" href="/css/app.css">
     * $this->tag->link(['css/app.css']);
     * // Sleet <link rel="icon" type="image/x-icon" href="http://example.com/favicon.ico">
     * {{ link(['http://example.com/favicon.ico', 'type' => 'image/x-icon', 'rel' => 'icon', 'local' => false]) }}
     * </code></pre>
     *
     * @param array $parameters 
     * @return string 
     */
    public function link(array $parameters) {}

    /**
     * Builds a SCRIPT[type="javascript"] tag.
     * <pre><code>
     * // Phtml <script type="text/javascript" src="/js/plugins.js"></script>
     * $this->tag->script(['js/plugins.js']);
     * // Sleet <script type="text/javascript">alert("OK");</script>
     * {{ script(['content' => 'alert("OK");']) }}
     * </code></pre>
     *
     * @param array $parameters 
     * @return string 
     */
    public function script(array $parameters) {}

    /**
     * Builds a STYLE tag.
     * <pre><code>
     * // Sleet <style type="text/css">body { color: #444 }</style>
     * {{ style(['body { color: #444 }']) }}
     * </code></pre>
     *
     * @param array $parameters 
     * @return string 
     */
    public function style(array $parameters) {}

    /**
     * Builds a META tag.
     * <pre><code>
     * // Phtml <meta name="keywords" content="ice, framework">
     * $this->tag->meta(['ice, framework', 'keywords']);
     * // Sleet <meta property="og:description" content="Your description">
     * {{ meta(['Your description', 'property': 'og:description']) }}
     * </code></pre>
     *
     * @param array $parameters 
     * @return string 
     */
    public function meta(array $parameters) {}

    /**
     * Builds a SELECT tag.
     * <pre><code>
     * $countries = [1 => 'England', 2 => 'Poland'];
     * $this->tag->select('country', $countries);
     * </code></pre>
     *
     * @param array $parameters 
     * @return string 
     */
    public function select(array $parameters) {}

    /**
     * Builds a HTML tag.
     *
     * @param string $name Name of tag
     * @param array $parameters Parameters like id, style
     * @param array $defaultParams Default parameters
     * @param array $skip Skip parameters
     * @param string $content Parameter name to append content
     * @param boolean $close Close tag
     * @param boolean $eol Add end of line
     * @param boolean $single Void element, close a tag by " />" (depending on doctype)
     * @return string 
     */
    public function tagHtml($name, array $parameters = array(), array $defaultParams = array(), array $skip = array(), $content = null, $close = false, $eol = false, $single = false) {}

    /**
     * Builds a HTML close tag.
     * <pre><code>
     * // Sleet </form>
     * {{ end_tag('form') }}
     * </code></pre>
     *
     * @param string $name 
     * @param boolean $eol 
     * @return string 
     */
    public function endTag($name, $eol = true) {}

    /**
     * Renders parameters keeping order in html attributes.
     *
     * @param string $name 
     * @param array $attributes 
     * @param array $skip 
     * @param boolean $single 
     * @return string 
     */
    public function prepareTag($name, array $attributes, array $skip = array(), $single = false) {}

    /**
     * Check if a helper has a default value set using Ice\Tag::setValues or value from _POST.
     *
     * @param string $name 
     * @return boolean 
     */
    public function hasValue($name) {}

    /**
     * Assigns default values to generated tags by helpers.
     *
     * @param string $id 
     * @param mixed $value 
     * @return void 
     */
    public function setValue($id, $value) {}

    /**
     * Assigns default values to generated tags by helpers.
     *
     * @param array $values 
     * @param boolean $merge 
     * @return void 
     */
    public function setValues(array $values, $merge = false) {}

    /**
     * Every helper calls this function to check whether a component has a predefined value using Ice\Tag::setValue
     * or value from _POST.
     *
     * @param string $name 
     * @return mixed 
     */
    public function getValue($name) {}

    /**
     * Converts texts into URL-friendly titles.
     * <pre><code>
     * $title = "Mess'd up --text-- just (to) stress /test/ ?our! `little` \\clean\\ url fun.ction!?-->";
     * // 'messd-up-text-just-to-stress-test-our-little-clean-url-function'
     * $friendly = $this->tag->friendlyTitle($title);
     * </code></pre>
     *
     * @param string $text 
     * @param string $separator 
     * @param boolean $lowercase 
     * @param mixed $replace 
     * @return string 
     */
    public function friendlyTitle($text, $separator = "-", $lowercase = true, $replace = null) {}

    /**
     * Get the document type declaration of content.
     *
     * @return string 
     */
    public function getDocType() {}

}

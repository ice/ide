<?php

namespace Ice\I18n\Plural;

class Czech implements \Ice\I18n\Plural\PluralInterface
{

    /**
     * @param int $count 
     * @return string 
     */
	public function getCategory($count) {}

    /**
     * @param mixed $value 
     */
	protected function isInt($value) {}

}

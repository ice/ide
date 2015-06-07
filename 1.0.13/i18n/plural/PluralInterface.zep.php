<?php

namespace Ice\I18n\Plural;

interface PluralInterface
{

    /**
     * @param int $count 
     * @return string 
     */
    public function getCategory($count);

}

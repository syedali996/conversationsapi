<?php
/*
 * ConversationsAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ConversationsAPILib\Models;

use JsonSerializable;

/**
 *Template Component Currency Parameter type
 */
class TemplateComponentCurrencyParameter extends TemplateComponentParameter implements JsonSerializable
{
    /**
     * Currency Structure
     * @required
     * @var \ConversationsAPILib\Models\TemplateComponentCurrencyParameterBody $currency public property
     */
    public $currency;

    /**
     * Constructor to set initial or default values of member properties
     * @param TemplateComponentCurrencyParameterBody $currency Initialization value for $this->currency
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->currency = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['currency'] = $this->currency;
        $json = array_merge($json, parent::jsonSerialize());

        return $json;
    }
}

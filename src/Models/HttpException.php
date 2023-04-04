<?php
/*
 * ConversationsAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ConversationsAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class HttpException implements JsonSerializable
{
    /**
     * message
     * @required
     * @var string $message public property
     */
    public $message;

    /**
     * errors
     * @required
     * @var array $errors public property
     */
    public $errors;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $message Initialization value for $this->message
     * @param array  $errors  Initialization value for $this->errors
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->message = func_get_arg(0);
            $this->errors  = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['message'] = $this->message;
        $json['errors']  = $this->errors;

        return $json;
    }
}

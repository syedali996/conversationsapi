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
class AttachmentsStructure implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $url public property
     */
    public $url;

    /**
     * @todo Write general description for this property
     * @var string|null $latitude public property
     */
    public $latitude;

    /**
     * @todo Write general description for this property
     * @var string|null $longitude public property
     */
    public $longitude;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $address public property
     */
    public $address;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @required
     * @var \ConversationsAPILib\Models\ContactsMessageStructure[] $contacts public property
     */
    public $contacts;

    /**
     * @todo Write general description for this property
     * @required
     * @var \ConversationsAPILib\Models\OptionModel $option public property
     */
    public $option;

    /**
     * Constructor to set initial or default values of member properties
     * @param string      $type      Initialization value for $this->type
     * @param string      $url       Initialization value for $this->url
     * @param string      $latitude  Initialization value for $this->latitude
     * @param string      $longitude Initialization value for $this->longitude
     * @param string      $address   Initialization value for $this->address
     * @param string      $name      Initialization value for $this->name
     * @param array       $contacts  Initialization value for $this->contacts
     * @param OptionModel $option    Initialization value for $this->option
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->type      = func_get_arg(0);
            $this->url       = func_get_arg(1);
            $this->latitude  = func_get_arg(2);
            $this->longitude = func_get_arg(3);
            $this->address   = func_get_arg(4);
            $this->name      = func_get_arg(5);
            $this->contacts  = func_get_arg(6);
            $this->option    = func_get_arg(7);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type']      = $this->type;
        $json['url']       = $this->url;
        $json['latitude']  = $this->latitude;
        $json['longitude'] = $this->longitude;
        $json['address']   = $this->address;
        $json['name']      = $this->name;
        $json['contacts']  = $this->contacts;
        $json['option']    = $this->option;

        return $json;
    }
}

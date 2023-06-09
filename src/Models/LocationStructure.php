<?php
/*
 * ConversationsAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ConversationsAPILib\Models;

use JsonSerializable;

/**
 *Location Structure
 */
class LocationStructure implements JsonSerializable
{
    /**
     * latitude
     * @required
     * @var double $latitude public property
     */
    public $latitude;

    /**
     * longitude
     * @required
     * @var double $longitude public property
     */
    public $longitude;

    /**
     * name
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * address
     * @required
     * @var string $address public property
     */
    public $address;

    /**
     * Constructor to set initial or default values of member properties
     * @param double $latitude  Initialization value for $this->latitude
     * @param double $longitude Initialization value for $this->longitude
     * @param string $name      Initialization value for $this->name
     * @param string $address   Initialization value for $this->address
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 4:
                $this->latitude  = func_get_arg(0);
                $this->longitude = func_get_arg(1);
                $this->name      = func_get_arg(2);
                $this->address   = func_get_arg(3);
                break;

            default:
                $this->latitude = 37.758056;
                $this->longitude = -122.425332;
                $this->name = 'Facebook HQ';
                $this->address = 'Facebook HQ Address';
                break;
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['latitude']  = $this->latitude;
        $json['longitude'] = $this->longitude;
        $json['name']      = $this->name;
        $json['address']   = $this->address;

        return $json;
    }
}

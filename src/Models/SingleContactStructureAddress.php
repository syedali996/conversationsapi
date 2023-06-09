<?php
/*
 * ConversationsAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ConversationsAPILib\Models;

use JsonSerializable;

/**
 *Single Contact Structure address
 */
class SingleContactStructureAddress implements JsonSerializable
{
    /**
     * city
     * @required
     * @var string $city public property
     */
    public $city;

    /**
     * country
     * @required
     * @var string $country public property
     */
    public $country;

    /**
     * countryCode
     * @required
     * @var string $countryCode public property
     */
    public $countryCode;

    /**
     * state
     * @required
     * @var string $state public property
     */
    public $state;

    /**
     * street
     * @required
     * @var string $street public property
     */
    public $street;

    /**
     * type
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * zip
     * @required
     * @var string $zip public property
     */
    public $zip;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $city        Initialization value for $this->city
     * @param string $country     Initialization value for $this->country
     * @param string $countryCode Initialization value for $this->countryCode
     * @param string $state       Initialization value for $this->state
     * @param string $street      Initialization value for $this->street
     * @param string $type        Initialization value for $this->type
     * @param string $zip         Initialization value for $this->zip
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 7:
                $this->city        = func_get_arg(0);
                $this->country     = func_get_arg(1);
                $this->countryCode = func_get_arg(2);
                $this->state       = func_get_arg(3);
                $this->street      = func_get_arg(4);
                $this->type        = func_get_arg(5);
                $this->zip         = func_get_arg(6);
                break;

            default:
                $this->city = 'city';
                $this->country = 'KSA';
                $this->countryCode = 'SA';
                $this->state = 'State';
                $this->street = 'King Street';
                $this->type = 'WORK';
                $this->zip = '12345';
                break;
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['city']        = $this->city;
        $json['country']     = $this->country;
        $json['countryCode'] = $this->countryCode;
        $json['state']       = $this->state;
        $json['street']      = $this->street;
        $json['type']        = $this->type;
        $json['zip']         = $this->zip;

        return $json;
    }
}

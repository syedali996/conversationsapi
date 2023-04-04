<?php
/*
 * ConversationsAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ConversationsAPILib\Models;

use JsonSerializable;

/**
 *Single Contact Structure Name
 */
class SingleContactStructureName implements JsonSerializable
{
    /**
     * firstName
     * @required
     * @var string $firstName public property
     */
    public $firstName;

    /**
     * middleName
     * @required
     * @var string $middleName public property
     */
    public $middleName;

    /**
     * lastName
     * @required
     * @var string $lastName public property
     */
    public $lastName;

    /**
     * prefix
     * @required
     * @var string $prefix public property
     */
    public $prefix;

    /**
     * suffix
     * @required
     * @var string $suffix public property
     */
    public $suffix;

    /**
     * formattedName
     * @required
     * @var string $formattedName public property
     */
    public $formattedName;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $firstName     Initialization value for $this->firstName
     * @param string $middleName    Initialization value for $this->middleName
     * @param string $lastName      Initialization value for $this->lastName
     * @param string $prefix        Initialization value for $this->prefix
     * @param string $suffix        Initialization value for $this->suffix
     * @param string $formattedName Initialization value for $this->formattedName
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 6:
                $this->firstName     = func_get_arg(0);
                $this->middleName    = func_get_arg(1);
                $this->lastName      = func_get_arg(2);
                $this->prefix        = func_get_arg(3);
                $this->suffix        = func_get_arg(4);
                $this->formattedName = func_get_arg(5);
                break;

            default:
                $this->firstName = 'Mohammad';
                $this->middleName = 'middleName';
                $this->lastName = 'Ahmad';
                $this->prefix = 'prefix';
                $this->suffix = 'suffix';
                $this->formattedName = 'Mohammad Ahmad';
                break;
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['firstName']     = $this->firstName;
        $json['middleName']    = $this->middleName;
        $json['lastName']      = $this->lastName;
        $json['prefix']        = $this->prefix;
        $json['suffix']        = $this->suffix;
        $json['formattedName'] = $this->formattedName;

        return $json;
    }
}

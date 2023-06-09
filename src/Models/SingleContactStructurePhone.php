<?php
/*
 * ConversationsAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ConversationsAPILib\Models;

use JsonSerializable;

/**
 *Single Contact Structure
 */
class SingleContactStructurePhone implements JsonSerializable
{
    /**
     * phone
     * @required
     * @var string $phone public property
     */
    public $phone;

    /**
     * type
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * waId
     * @required
     * @var string $waId public property
     */
    public $waId;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $phone Initialization value for $this->phone
     * @param string $type  Initialization value for $this->type
     * @param string $waId  Initialization value for $this->waId
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 3:
                $this->phone = func_get_arg(0);
                $this->type  = func_get_arg(1);
                $this->waId  = func_get_arg(2);
                break;

            default:
                $this->phone = '+966568974512';
                $this->type = 'WORK';
                $this->waId = '+966568974512';
                break;
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['phone'] = $this->phone;
        $json['type']  = $this->type;
        $json['waId']  = $this->waId;

        return $json;
    }
}

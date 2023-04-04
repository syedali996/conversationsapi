<?php
/*
 * ConversationsAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ConversationsAPILib\Models;

use JsonSerializable;

/**
 *Product Message Structure
 */
class ProductMessageStructure implements JsonSerializable
{
    /**
     * type
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * body
     * @required
     * @var string $body public property
     */
    public $body;

    /**
     * footer
     * @required
     * @var \ConversationsAPILib\Models\MessageFooter $footer public property
     */
    public $footer;

    /**
     * catalogId
     * @required
     * @var string $catalogId public property
     */
    public $catalogId;

    /**
     * productRetailerId
     * @required
     * @var string $productRetailerId public property
     */
    public $productRetailerId;

    /**
     * Constructor to set initial or default values of member properties
     * @param string        $type              Initialization value for $this->type
     * @param string        $body              Initialization value for $this->body
     * @param MessageFooter $footer            Initialization value for $this->footer
     * @param string        $catalogId         Initialization value for $this->catalogId
     * @param string        $productRetailerId Initialization value for $this->productRetailerId
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 5:
                $this->type              = func_get_arg(0);
                $this->body              = func_get_arg(1);
                $this->footer            = func_get_arg(2);
                $this->catalogId         = func_get_arg(3);
                $this->productRetailerId = func_get_arg(4);
                break;

            default:
                $this->type = MessageContentTypeEnum::SINGLEPRODUCT;
                $this->body = 'body';
                $this->catalogId = '23525234234234';
                $this->productRetailerId = 'cat_234234';
                break;
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type']              = $this->type;
        $json['body']              = $this->body;
        $json['footer']            = $this->footer;
        $json['catalogId']         = $this->catalogId;
        $json['productRetailerId'] = $this->productRetailerId;

        return $json;
    }
}

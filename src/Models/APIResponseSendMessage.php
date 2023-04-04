<?php
/*
 * ConversationsAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ConversationsAPILib\Models;

use JsonSerializable;

/**
 *JSON Response 200 from Conversational Cloud
 */
class APIResponseSendMessage implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string $message public property
     */
    public $message = 'Message successfully queued.';

    /**
     * Sent Message ID in Conversational Cloud
     * @required
     * @var string $messageId public property
     */
    public $messageId;

    /**
     * Conversational Cloud application ID used to sent message
     * @required
     * @var string $applicationId public property
     */
    public $applicationId;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $message       Initialization value for $this->message
     * @param string $messageId     Initialization value for $this->messageId
     * @param string $applicationId Initialization value for $this->applicationId
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 3:
                $this->message       = func_get_arg(0);
                $this->messageId     = func_get_arg(1);
                $this->applicationId = func_get_arg(2);
                break;

            default:
                $this->message = 'Message successfully queued.';
                break;
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['message']       = $this->message;
        $json['messageId']     = $this->messageId;
        $json['applicationId'] = $this->applicationId;

        return $json;
    }
}
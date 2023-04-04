<?php
/*
 * ConversationsAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ConversationsAPILib\Models;

use JsonSerializable;

/**
 *Message Recipient Structure
 */
class MessageRecipientStructure implements JsonSerializable
{
    /**
     * The contact identifier of the user based on the channel (WhatsApp: Phone number, Messenger: psid,
     * Twitter: Twitter User ID (not screen name)))
     * @required
     * @var string $contact public property
     */
    public $contact;

    /**
     * Available channels: `whatsapp`, `sms`,  `messenger`, `twitter`
     * @required
     * @var string $channel public property
     */
    public $channel;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $contact Initialization value for $this->contact
     * @param string $channel Initialization value for $this->channel
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->contact = func_get_arg(0);
            $this->channel = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['contact'] = $this->contact;
        $json['channel'] = $this->channel;

        return $json;
    }
}
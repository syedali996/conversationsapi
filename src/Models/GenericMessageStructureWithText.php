<?php
/*
 * ConversationsAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ConversationsAPILib\Models;

use JsonSerializable;

/**
 *Generic Message Structure With Text
 */
class GenericMessageStructureWithText implements JsonSerializable
{
    /**
     * Object with information about the recipient of the message.
     * @required
     * @var \ConversationsAPILib\Models\MessageRecipientStructure $recipient public property
     */
    public $recipient;

    /**
     * Content can be different depending on the selected type (see Message Content Type enum).
     * @required
     * @var \ConversationsAPILib\Models\TextMessageStructure $content public property
     */
    public $content;

    /**
     * Fallback is optional. When whatsapp channel fail, message will be sent through sms channel
     * @var \ConversationsAPILib\Models\MessageFallbackStructure|null $fallback public property
     */
    public $fallback;

    /**
     * Constructor to set initial or default values of member properties
     * @param MessageRecipientStructure $recipient Initialization value for $this->recipient
     * @param TextMessageStructure      $content   Initialization value for $this->content
     * @param MessageFallbackStructure  $fallback  Initialization value for $this->fallback
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->recipient = func_get_arg(0);
            $this->content   = func_get_arg(1);
            $this->fallback  = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['recipient'] = $this->recipient;
        $json['content']   = $this->content;
        $json['fallback']  = $this->fallback;

        return $json;
    }
}
<?php
/*
 * ConversationsAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ConversationsAPILib\Models;

use JsonSerializable;

/**
 *Video as a message content type
 */
class VideoMessageStructure implements JsonSerializable
{
    /**
     * type
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * This field requires `https` protocol.
     * @required
     * @var string $url public property
     */
    public $url;

    /**
     * Optional content of the message. Not available for Messenger
     * @var string|null $text public property
     */
    public $text;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $type Initialization value for $this->type
     * @param string $url  Initialization value for $this->url
     * @param string $text Initialization value for $this->text
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 3:
                $this->type = func_get_arg(0);
                $this->url  = func_get_arg(1);
                $this->text = func_get_arg(2);
                break;

            default:
                $this->type = MessageContentTypeEnum::VIDEO;
                break;
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type'] = $this->type;
        $json['url']  = $this->url;
        $json['text'] = $this->text;

        return $json;
    }
}

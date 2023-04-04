<?php
/*
 * ConversationsAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ConversationsAPILib\Models;

use JsonSerializable;

/**
 *File as a message content type
 */
class FileMessageStructure implements JsonSerializable
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
     * fileName
     * @var string|null $fileName public property
     */
    public $fileName;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $type     Initialization value for $this->type
     * @param string $url      Initialization value for $this->url
     * @param string $text     Initialization value for $this->text
     * @param string $fileName Initialization value for $this->fileName
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 4:
                $this->type     = func_get_arg(0);
                $this->url      = func_get_arg(1);
                $this->text     = func_get_arg(2);
                $this->fileName = func_get_arg(3);
                break;

            default:
                $this->type = MessageContentTypeEnum::FILE;
                $this->fileName = 'fileName.pdf';
                break;
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type']     = $this->type;
        $json['url']      = $this->url;
        $json['text']     = $this->text;
        $json['fileName'] = $this->fileName;

        return $json;
    }
}

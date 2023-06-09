<?php
/*
 * ConversationsAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ConversationsAPILib\Models;

use JsonSerializable;

/**
 *Template messages can be used with WhatsApp channel only.
 */
class TemplateMessageStructure implements JsonSerializable
{
    /**
     * type
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * Template name from template created in Business Manager
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * Template components
     * @var \ConversationsAPILib\Models\TemplateComponentStructure[]|null $components public property
     */
    public $components;

    /**
     * Template namespace from template created in Business Manager
     * @maps namespace
     * @var string|null $mnamespace public property
     */
    public $mnamespace;

    /**
     * Language code object
     * @required
     * @var \ConversationsAPILib\Models\TemplateLanguageCodeStructure $language public property
     */
    public $language;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                        $type       Initialization value for $this->type
     * @param string                        $name       Initialization value for $this->name
     * @param array                         $components Initialization value for $this->components
     * @param string                        $mnamespace Initialization value for $this->mnamespace
     * @param TemplateLanguageCodeStructure $language   Initialization value for $this->language
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 5:
                $this->type       = func_get_arg(0);
                $this->name       = func_get_arg(1);
                $this->components = func_get_arg(2);
                $this->mnamespace = func_get_arg(3);
                $this->language   = func_get_arg(4);
                break;

            default:
                $this->type = MessageContentTypeEnum::TEMPLATE;
                break;
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type']       = $this->type;
        $json['name']       = $this->name;
        $json['components'] = $this->components;
        $json['namespace']  = $this->mnamespace;
        $json['language']   = $this->language;

        return $json;
    }
}

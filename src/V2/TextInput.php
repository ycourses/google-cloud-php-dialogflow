<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/session.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the natural language text to be processed.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.TextInput</code>
 */
class TextInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The UTF-8 encoded natural language text to be processed.
     * Text length must not exceed 256 bytes.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     */
    private $text = '';
    /**
     * Required. The language of this conversational query. See [Language
     * Support](https://dialogflow.com/docs/languages) for a list of the
     * currently supported language codes. Note that queries in the same session
     * do not necessarily need to specify the same language.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     */
    private $language_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $text
     *           Required. The UTF-8 encoded natural language text to be processed.
     *           Text length must not exceed 256 bytes.
     *     @type string $language_code
     *           Required. The language of this conversational query. See [Language
     *           Support](https://dialogflow.com/docs/languages) for a list of the
     *           currently supported language codes. Note that queries in the same session
     *           do not necessarily need to specify the same language.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The UTF-8 encoded natural language text to be processed.
     * Text length must not exceed 256 bytes.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Required. The UTF-8 encoded natural language text to be processed.
     * Text length must not exceed 256 bytes.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

    /**
     * Required. The language of this conversational query. See [Language
     * Support](https://dialogflow.com/docs/languages) for a list of the
     * currently supported language codes. Note that queries in the same session
     * do not necessarily need to specify the same language.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Required. The language of this conversational query. See [Language
     * Support](https://dialogflow.com/docs/languages) for a list of the
     * currently supported language codes. Note that queries in the same session
     * do not necessarily need to specify the same language.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak_kv.proto

namespace Basho\Riak\Api\Pb\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Counter value response
 *
 * Generated from protobuf message <code>RpbCounterGetResp</code>
 */
class RpbCounterGetResp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>sint64 value = 1;</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $value
     * }
     */
    public function __construct($data = NULL) {
        \Basho\Riak\Api\Pb\Message\RiakKv::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>sint64 value = 1;</code>
     * @return int|string
     */
    public function getValue()
    {
        return isset($this->value) ? $this->value : 0;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * Generated from protobuf field <code>sint64 value = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->value = $var;

        return $this;
    }

}


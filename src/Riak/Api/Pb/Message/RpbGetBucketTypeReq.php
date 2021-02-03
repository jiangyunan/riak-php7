<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak.proto

namespace Basho\Riak\Api\Pb\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Get bucket properties request
 *
 * Generated from protobuf message <code>RpbGetBucketTypeReq</code>
 */
class RpbGetBucketTypeReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes type = 1;</code>
     */
    protected $type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     * }
     */
    public function __construct($data = NULL) {
        \Basho\Riak\Api\Pb\Message\Riak::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>bytes type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, False);
        $this->type = $var;

        return $this;
    }

}


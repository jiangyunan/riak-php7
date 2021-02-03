<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak_yokozuna.proto

namespace Basho\Riak\Api\Pb\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DELETE request - Remove an index
 *
 * Generated from protobuf message <code>RpbYokozunaIndexDeleteReq</code>
 */
class RpbYokozunaIndexDeleteReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Index name
     *
     * Generated from protobuf field <code>bytes name = 1;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Index name
     * }
     */
    public function __construct($data = NULL) {
        \Basho\Riak\Api\Pb\Message\RiakYokozuna::initOnce();
        parent::__construct($data);
    }

    /**
     * Index name
     *
     * Generated from protobuf field <code>bytes name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Index name
     *
     * Generated from protobuf field <code>bytes name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, False);
        $this->name = $var;

        return $this;
    }

}

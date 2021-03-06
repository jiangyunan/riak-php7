<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak_kv.proto

namespace Basho\Riak\Api\Pb\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Preflist item
 *
 * Generated from protobuf message <code>RpbBucketKeyPreflistItem</code>
 */
class RpbBucketKeyPreflistItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 partition = 1;</code>
     */
    protected $partition = 0;
    /**
     * Generated from protobuf field <code>bytes node = 2;</code>
     */
    protected $node = '';
    /**
     * Generated from protobuf field <code>bool primary = 3;</code>
     */
    protected $primary = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $partition
     *     @type string $node
     *     @type bool $primary
     * }
     */
    public function __construct($data = NULL) {
        \Basho\Riak\Api\Pb\Message\RiakKv::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 partition = 1;</code>
     * @return int|string
     */
    public function getPartition()
    {
        return $this->partition;
    }

    /**
     * Generated from protobuf field <code>int64 partition = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPartition($var)
    {
        GPBUtil::checkInt64($var);
        $this->partition = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes node = 2;</code>
     * @return string
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * Generated from protobuf field <code>bytes node = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNode($var)
    {
        GPBUtil::checkString($var, False);
        $this->node = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool primary = 3;</code>
     * @return bool
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * Generated from protobuf field <code>bool primary = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setPrimary($var)
    {
        GPBUtil::checkBool($var);
        $this->primary = $var;

        return $this;
    }

}


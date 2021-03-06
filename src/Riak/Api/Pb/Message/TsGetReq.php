<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak_ts.proto

namespace Basho\Riak\Api\Pb\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>TsGetReq</code>
 */
class TsGetReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes table = 1;</code>
     */
    protected $table = '';
    /**
     * Generated from protobuf field <code>repeated .TsCell key = 2;</code>
     */
    private $key;
    /**
     * Generated from protobuf field <code>uint32 timeout = 3;</code>
     */
    protected $timeout = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $table
     *     @type \Basho\Riak\Api\Pb\Message\TsCell[]|\Google\Protobuf\Internal\RepeatedField $key
     *     @type int $timeout
     * }
     */
    public function __construct($data = NULL) {
        \Basho\Riak\Api\Pb\Message\RiakTs::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes table = 1;</code>
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Generated from protobuf field <code>bytes table = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTable($var)
    {
        GPBUtil::checkString($var, False);
        $this->table = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .TsCell key = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>repeated .TsCell key = 2;</code>
     * @param \Basho\Riak\Api\Pb\Message\TsCell[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKey($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Basho\Riak\Api\Pb\Message\TsCell::class);
        $this->key = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 timeout = 3;</code>
     * @return int
     */
    public function getTimeout()
    {
        return isset($this->timeout) ? $this->timeout : 0;
    }

    public function hasTimeout()
    {
        return isset($this->timeout);
    }

    public function clearTimeout()
    {
        unset($this->timeout);
    }

    /**
     * Generated from protobuf field <code>uint32 timeout = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeout($var)
    {
        GPBUtil::checkUint32($var);
        $this->timeout = $var;

        return $this;
    }

}


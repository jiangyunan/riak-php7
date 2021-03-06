<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak_dt.proto

namespace Basho\Riak\Api\Pb\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An operation to be applied to a value stored in a Map -- the
 * contents of an UPDATE operation. The operation field that is
 * present depends on the type of the field to which it is applied.
 *
 * Generated from protobuf message <code>MapUpdate</code>
 */
class MapUpdate extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.MapField field = 1;</code>
     */
    protected $field = null;
    /**
     * Generated from protobuf field <code>.CounterOp counter_op = 2;</code>
     */
    protected $counter_op = null;
    /**
     * Generated from protobuf field <code>.SetOp set_op = 3;</code>
     */
    protected $set_op = null;
    /**
     * There is only one operation on a register, which is to set its
     * value, therefore the "operation" is the new value.
     *
     * Generated from protobuf field <code>bytes register_op = 4;</code>
     */
    protected $register_op = null;
    /**
     * Generated from protobuf field <code>.MapUpdate.FlagOp flag_op = 5;</code>
     */
    protected $flag_op = null;
    /**
     * Generated from protobuf field <code>.MapOp map_op = 6;</code>
     */
    protected $map_op = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Basho\Riak\Api\Pb\Message\MapField $field
     *     @type \Basho\Riak\Api\Pb\Message\CounterOp $counter_op
     *     @type \Basho\Riak\Api\Pb\Message\SetOp $set_op
     *     @type string $register_op
     *           There is only one operation on a register, which is to set its
     *           value, therefore the "operation" is the new value.
     *     @type int $flag_op
     *     @type \Basho\Riak\Api\Pb\Message\MapOp $map_op
     * }
     */
    public function __construct($data = NULL) {
        \Basho\Riak\Api\Pb\Message\RiakDt::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.MapField field = 1;</code>
     * @return \Basho\Riak\Api\Pb\Message\MapField
     */
    public function getField()
    {
        return isset($this->field) ? $this->field : null;
    }

    public function hasField()
    {
        return isset($this->field);
    }

    public function clearField()
    {
        unset($this->field);
    }

    /**
     * Generated from protobuf field <code>.MapField field = 1;</code>
     * @param \Basho\Riak\Api\Pb\Message\MapField $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkMessage($var, \Basho\Riak\Api\Pb\Message\MapField::class);
        $this->field = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.CounterOp counter_op = 2;</code>
     * @return \Basho\Riak\Api\Pb\Message\CounterOp
     */
    public function getCounterOp()
    {
        return isset($this->counter_op) ? $this->counter_op : null;
    }

    public function hasCounterOp()
    {
        return isset($this->counter_op);
    }

    public function clearCounterOp()
    {
        unset($this->counter_op);
    }

    /**
     * Generated from protobuf field <code>.CounterOp counter_op = 2;</code>
     * @param \Basho\Riak\Api\Pb\Message\CounterOp $var
     * @return $this
     */
    public function setCounterOp($var)
    {
        GPBUtil::checkMessage($var, \Basho\Riak\Api\Pb\Message\CounterOp::class);
        $this->counter_op = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.SetOp set_op = 3;</code>
     * @return \Basho\Riak\Api\Pb\Message\SetOp
     */
    public function getSetOp()
    {
        return isset($this->set_op) ? $this->set_op : null;
    }

    public function hasSetOp()
    {
        return isset($this->set_op);
    }

    public function clearSetOp()
    {
        unset($this->set_op);
    }

    /**
     * Generated from protobuf field <code>.SetOp set_op = 3;</code>
     * @param \Basho\Riak\Api\Pb\Message\SetOp $var
     * @return $this
     */
    public function setSetOp($var)
    {
        GPBUtil::checkMessage($var, \Basho\Riak\Api\Pb\Message\SetOp::class);
        $this->set_op = $var;

        return $this;
    }

    /**
     * There is only one operation on a register, which is to set its
     * value, therefore the "operation" is the new value.
     *
     * Generated from protobuf field <code>bytes register_op = 4;</code>
     * @return string
     */
    public function getRegisterOp()
    {
        return isset($this->register_op) ? $this->register_op : '';
    }

    public function hasRegisterOp()
    {
        return isset($this->register_op);
    }

    public function clearRegisterOp()
    {
        unset($this->register_op);
    }

    /**
     * There is only one operation on a register, which is to set its
     * value, therefore the "operation" is the new value.
     *
     * Generated from protobuf field <code>bytes register_op = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRegisterOp($var)
    {
        GPBUtil::checkString($var, False);
        $this->register_op = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.MapUpdate.FlagOp flag_op = 5;</code>
     * @return int
     */
    public function getFlagOp()
    {
        return isset($this->flag_op) ? $this->flag_op : 0;
    }

    public function hasFlagOp()
    {
        return isset($this->flag_op);
    }

    public function clearFlagOp()
    {
        unset($this->flag_op);
    }

    /**
     * Generated from protobuf field <code>.MapUpdate.FlagOp flag_op = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setFlagOp($var)
    {
        GPBUtil::checkEnum($var, \Basho\Riak\Api\Pb\Message\MapUpdate\FlagOp::class);
        $this->flag_op = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.MapOp map_op = 6;</code>
     * @return \Basho\Riak\Api\Pb\Message\MapOp
     */
    public function getMapOp()
    {
        return isset($this->map_op) ? $this->map_op : null;
    }

    public function hasMapOp()
    {
        return isset($this->map_op);
    }

    public function clearMapOp()
    {
        unset($this->map_op);
    }

    /**
     * Generated from protobuf field <code>.MapOp map_op = 6;</code>
     * @param \Basho\Riak\Api\Pb\Message\MapOp $var
     * @return $this
     */
    public function setMapOp($var)
    {
        GPBUtil::checkMessage($var, \Basho\Riak\Api\Pb\Message\MapOp::class);
        $this->map_op = $var;

        return $this;
    }

}


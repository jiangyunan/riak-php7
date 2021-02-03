<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak_dt.proto

namespace Basho\Riak\Api\Pb\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The value of the fetched data type. If present in the response,
 * then empty values (sets, maps) should be treated as such.
 *
 * Generated from protobuf message <code>DtValue</code>
 */
class DtValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>sint64 counter_value = 1;</code>
     */
    protected $counter_value = null;
    /**
     * Generated from protobuf field <code>repeated bytes set_value = 2;</code>
     */
    private $set_value;
    /**
     * Generated from protobuf field <code>repeated .MapEntry map_value = 3;</code>
     */
    private $map_value;
    /**
     * We return an estimated cardinality of the Hyperloglog set
     * on fetch.
     *
     * Generated from protobuf field <code>uint64 hll_value = 4;</code>
     */
    protected $hll_value = null;
    /**
     * Generated from protobuf field <code>repeated bytes gset_value = 5;</code>
     */
    private $gset_value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $counter_value
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $set_value
     *     @type \Basho\Riak\Api\Pb\Message\MapEntry[]|\Google\Protobuf\Internal\RepeatedField $map_value
     *     @type int|string $hll_value
     *           We return an estimated cardinality of the Hyperloglog set
     *           on fetch.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $gset_value
     * }
     */
    public function __construct($data = NULL) {
        \Basho\Riak\Api\Pb\Message\RiakDt::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>sint64 counter_value = 1;</code>
     * @return int|string
     */
    public function getCounterValue()
    {
        return isset($this->counter_value) ? $this->counter_value : 0;
    }

    public function hasCounterValue()
    {
        return isset($this->counter_value);
    }

    public function clearCounterValue()
    {
        unset($this->counter_value);
    }

    /**
     * Generated from protobuf field <code>sint64 counter_value = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCounterValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->counter_value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes set_value = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSetValue()
    {
        return $this->set_value;
    }

    /**
     * Generated from protobuf field <code>repeated bytes set_value = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSetValue($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->set_value = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .MapEntry map_value = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMapValue()
    {
        return $this->map_value;
    }

    /**
     * Generated from protobuf field <code>repeated .MapEntry map_value = 3;</code>
     * @param \Basho\Riak\Api\Pb\Message\MapEntry[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMapValue($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Basho\Riak\Api\Pb\Message\MapEntry::class);
        $this->map_value = $arr;

        return $this;
    }

    /**
     * We return an estimated cardinality of the Hyperloglog set
     * on fetch.
     *
     * Generated from protobuf field <code>uint64 hll_value = 4;</code>
     * @return int|string
     */
    public function getHllValue()
    {
        return isset($this->hll_value) ? $this->hll_value : 0;
    }

    public function hasHllValue()
    {
        return isset($this->hll_value);
    }

    public function clearHllValue()
    {
        unset($this->hll_value);
    }

    /**
     * We return an estimated cardinality of the Hyperloglog set
     * on fetch.
     *
     * Generated from protobuf field <code>uint64 hll_value = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHllValue($var)
    {
        GPBUtil::checkUint64($var);
        $this->hll_value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes gset_value = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGsetValue()
    {
        return $this->gset_value;
    }

    /**
     * Generated from protobuf field <code>repeated bytes gset_value = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGsetValue($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->gset_value = $arr;

        return $this;
    }

}


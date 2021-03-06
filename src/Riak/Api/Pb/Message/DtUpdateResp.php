<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak_dt.proto

namespace Basho\Riak\Api\Pb\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The equivalent of KV's "RpbPutResp", contains the assigned key if
 * it was assigned by the server, and the resulting value and context
 * if return_body was set.
 *
 * Generated from protobuf message <code>DtUpdateResp</code>
 */
class DtUpdateResp extends \Google\Protobuf\Internal\Message
{
    /**
     * The key, if assigned by the server
     *
     * Generated from protobuf field <code>bytes key = 1;</code>
     */
    protected $key = null;
    /**
     * The opaque update context and value, if return_body was set.
     *
     * Generated from protobuf field <code>bytes context = 2;</code>
     */
    protected $context = null;
    /**
     * Generated from protobuf field <code>sint64 counter_value = 3;</code>
     */
    protected $counter_value = null;
    /**
     * Generated from protobuf field <code>repeated bytes set_value = 4;</code>
     */
    private $set_value;
    /**
     * Generated from protobuf field <code>repeated .MapEntry map_value = 5;</code>
     */
    private $map_value;
    /**
     * Generated from protobuf field <code>uint64 hll_value = 6;</code>
     */
    protected $hll_value = null;
    /**
     * Generated from protobuf field <code>repeated bytes gset_value = 7;</code>
     */
    private $gset_value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *           The key, if assigned by the server
     *     @type string $context
     *           The opaque update context and value, if return_body was set.
     *     @type int|string $counter_value
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $set_value
     *     @type \Basho\Riak\Api\Pb\Message\MapEntry[]|\Google\Protobuf\Internal\RepeatedField $map_value
     *     @type int|string $hll_value
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $gset_value
     * }
     */
    public function __construct($data = NULL) {
        \Basho\Riak\Api\Pb\Message\RiakDt::initOnce();
        parent::__construct($data);
    }

    /**
     * The key, if assigned by the server
     *
     * Generated from protobuf field <code>bytes key = 1;</code>
     * @return string
     */
    public function getKey()
    {
        return isset($this->key) ? $this->key : '';
    }

    public function hasKey()
    {
        return isset($this->key);
    }

    public function clearKey()
    {
        unset($this->key);
    }

    /**
     * The key, if assigned by the server
     *
     * Generated from protobuf field <code>bytes key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->key = $var;

        return $this;
    }

    /**
     * The opaque update context and value, if return_body was set.
     *
     * Generated from protobuf field <code>bytes context = 2;</code>
     * @return string
     */
    public function getContext()
    {
        return isset($this->context) ? $this->context : '';
    }

    public function hasContext()
    {
        return isset($this->context);
    }

    public function clearContext()
    {
        unset($this->context);
    }

    /**
     * The opaque update context and value, if return_body was set.
     *
     * Generated from protobuf field <code>bytes context = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setContext($var)
    {
        GPBUtil::checkString($var, False);
        $this->context = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>sint64 counter_value = 3;</code>
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
     * Generated from protobuf field <code>sint64 counter_value = 3;</code>
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
     * Generated from protobuf field <code>repeated bytes set_value = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSetValue()
    {
        return $this->set_value;
    }

    /**
     * Generated from protobuf field <code>repeated bytes set_value = 4;</code>
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
     * Generated from protobuf field <code>repeated .MapEntry map_value = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMapValue()
    {
        return $this->map_value;
    }

    /**
     * Generated from protobuf field <code>repeated .MapEntry map_value = 5;</code>
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
     * Generated from protobuf field <code>uint64 hll_value = 6;</code>
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
     * Generated from protobuf field <code>uint64 hll_value = 6;</code>
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
     * Generated from protobuf field <code>repeated bytes gset_value = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGsetValue()
    {
        return $this->gset_value;
    }

    /**
     * Generated from protobuf field <code>repeated bytes gset_value = 7;</code>
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


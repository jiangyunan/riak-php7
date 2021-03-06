<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak_ts.proto

namespace Basho\Riak\Api\Pb\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Each prospective subquery has a range of valid time values
 *
 * Generated from protobuf message <code>TsRange</code>
 */
class TsRange extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes field_name = 1;</code>
     */
    protected $field_name = '';
    /**
     * Generated from protobuf field <code>sint64 lower_bound = 2;</code>
     */
    protected $lower_bound = 0;
    /**
     * Generated from protobuf field <code>bool lower_bound_inclusive = 3;</code>
     */
    protected $lower_bound_inclusive = false;
    /**
     * Generated from protobuf field <code>sint64 upper_bound = 4;</code>
     */
    protected $upper_bound = 0;
    /**
     * Generated from protobuf field <code>bool upper_bound_inclusive = 5;</code>
     */
    protected $upper_bound_inclusive = false;
    /**
     * Some human readable description of the time range
     *
     * Generated from protobuf field <code>bytes desc = 6;</code>
     */
    protected $desc = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $field_name
     *     @type int|string $lower_bound
     *     @type bool $lower_bound_inclusive
     *     @type int|string $upper_bound
     *     @type bool $upper_bound_inclusive
     *     @type string $desc
     *           Some human readable description of the time range
     * }
     */
    public function __construct($data = NULL) {
        \Basho\Riak\Api\Pb\Message\RiakTs::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes field_name = 1;</code>
     * @return string
     */
    public function getFieldName()
    {
        return $this->field_name;
    }

    /**
     * Generated from protobuf field <code>bytes field_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFieldName($var)
    {
        GPBUtil::checkString($var, False);
        $this->field_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>sint64 lower_bound = 2;</code>
     * @return int|string
     */
    public function getLowerBound()
    {
        return $this->lower_bound;
    }

    /**
     * Generated from protobuf field <code>sint64 lower_bound = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLowerBound($var)
    {
        GPBUtil::checkInt64($var);
        $this->lower_bound = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool lower_bound_inclusive = 3;</code>
     * @return bool
     */
    public function getLowerBoundInclusive()
    {
        return $this->lower_bound_inclusive;
    }

    /**
     * Generated from protobuf field <code>bool lower_bound_inclusive = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setLowerBoundInclusive($var)
    {
        GPBUtil::checkBool($var);
        $this->lower_bound_inclusive = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>sint64 upper_bound = 4;</code>
     * @return int|string
     */
    public function getUpperBound()
    {
        return $this->upper_bound;
    }

    /**
     * Generated from protobuf field <code>sint64 upper_bound = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUpperBound($var)
    {
        GPBUtil::checkInt64($var);
        $this->upper_bound = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool upper_bound_inclusive = 5;</code>
     * @return bool
     */
    public function getUpperBoundInclusive()
    {
        return $this->upper_bound_inclusive;
    }

    /**
     * Generated from protobuf field <code>bool upper_bound_inclusive = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setUpperBoundInclusive($var)
    {
        GPBUtil::checkBool($var);
        $this->upper_bound_inclusive = $var;

        return $this;
    }

    /**
     * Some human readable description of the time range
     *
     * Generated from protobuf field <code>bytes desc = 6;</code>
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Some human readable description of the time range
     *
     * Generated from protobuf field <code>bytes desc = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDesc($var)
    {
        GPBUtil::checkString($var, False);
        $this->desc = $var;

        return $this;
    }

}


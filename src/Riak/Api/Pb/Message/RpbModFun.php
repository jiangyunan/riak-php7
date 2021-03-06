<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak.proto

namespace Basho\Riak\Api\Pb\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Module-Function pairs for commit hooks and other bucket properties
 * that take functions
 *
 * Generated from protobuf message <code>RpbModFun</code>
 */
class RpbModFun extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes module = 1;</code>
     */
    protected $module = '';
    /**
     * Generated from protobuf field <code>bytes function = 2;</code>
     */
    protected $function = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $module
     *     @type string $function
     * }
     */
    public function __construct($data = NULL) {
        \Basho\Riak\Api\Pb\Message\Riak::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes module = 1;</code>
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Generated from protobuf field <code>bytes module = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setModule($var)
    {
        GPBUtil::checkString($var, False);
        $this->module = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes function = 2;</code>
     * @return string
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Generated from protobuf field <code>bytes function = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFunction($var)
    {
        GPBUtil::checkString($var, False);
        $this->function = $var;

        return $this;
    }

}


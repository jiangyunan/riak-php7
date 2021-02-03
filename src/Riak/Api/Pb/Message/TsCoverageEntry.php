<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak_ts.proto

namespace Basho\Riak\Api\Pb\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Segment of a TS coverage plan
 *
 * Generated from protobuf message <code>TsCoverageEntry</code>
 */
class TsCoverageEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes ip = 1;</code>
     */
    protected $ip = '';
    /**
     * Generated from protobuf field <code>uint32 port = 2;</code>
     */
    protected $port = 0;
    /**
     * Opaque context to pass into follow-up request
     *
     * Generated from protobuf field <code>bytes cover_context = 3;</code>
     */
    protected $cover_context = '';
    /**
     * Might be other types of coverage queries/responses
     *
     * Generated from protobuf field <code>.TsRange range = 4;</code>
     */
    protected $range = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ip
     *     @type int $port
     *     @type string $cover_context
     *           Opaque context to pass into follow-up request
     *     @type \Basho\Riak\Api\Pb\Message\TsRange $range
     *           Might be other types of coverage queries/responses
     * }
     */
    public function __construct($data = NULL) {
        \Basho\Riak\Api\Pb\Message\RiakTs::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes ip = 1;</code>
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Generated from protobuf field <code>bytes ip = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIp($var)
    {
        GPBUtil::checkString($var, False);
        $this->ip = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 port = 2;</code>
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Generated from protobuf field <code>uint32 port = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkUint32($var);
        $this->port = $var;

        return $this;
    }

    /**
     * Opaque context to pass into follow-up request
     *
     * Generated from protobuf field <code>bytes cover_context = 3;</code>
     * @return string
     */
    public function getCoverContext()
    {
        return $this->cover_context;
    }

    /**
     * Opaque context to pass into follow-up request
     *
     * Generated from protobuf field <code>bytes cover_context = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCoverContext($var)
    {
        GPBUtil::checkString($var, False);
        $this->cover_context = $var;

        return $this;
    }

    /**
     * Might be other types of coverage queries/responses
     *
     * Generated from protobuf field <code>.TsRange range = 4;</code>
     * @return \Basho\Riak\Api\Pb\Message\TsRange
     */
    public function getRange()
    {
        return isset($this->range) ? $this->range : null;
    }

    public function hasRange()
    {
        return isset($this->range);
    }

    public function clearRange()
    {
        unset($this->range);
    }

    /**
     * Might be other types of coverage queries/responses
     *
     * Generated from protobuf field <code>.TsRange range = 4;</code>
     * @param \Basho\Riak\Api\Pb\Message\TsRange $var
     * @return $this
     */
    public function setRange($var)
    {
        GPBUtil::checkMessage($var, \Basho\Riak\Api\Pb\Message\TsRange::class);
        $this->range = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak_ts.proto

namespace Basho\Riak\Api\Pb\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Segmented TS coverage plan response
 *
 * Generated from protobuf message <code>TsCoverageResp</code>
 */
class TsCoverageResp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .TsCoverageEntry entries = 1;</code>
     */
    private $entries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Basho\Riak\Api\Pb\Message\TsCoverageEntry[]|\Google\Protobuf\Internal\RepeatedField $entries
     * }
     */
    public function __construct($data = NULL) {
        \Basho\Riak\Api\Pb\Message\RiakTs::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .TsCoverageEntry entries = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * Generated from protobuf field <code>repeated .TsCoverageEntry entries = 1;</code>
     * @param \Basho\Riak\Api\Pb\Message\TsCoverageEntry[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Basho\Riak\Api\Pb\Message\TsCoverageEntry::class);
        $this->entries = $arr;

        return $this;
    }

}


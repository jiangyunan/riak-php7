<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak_ts.proto

namespace Basho\Riak\Api\Pb\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>TsRow</code>
 */
class TsRow extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .TsCell cells = 1;</code>
     */
    private $cells;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Basho\Riak\Api\Pb\Message\TsCell[]|\Google\Protobuf\Internal\RepeatedField $cells
     * }
     */
    public function __construct($data = NULL) {
        \Basho\Riak\Api\Pb\Message\RiakTs::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .TsCell cells = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCells()
    {
        return $this->cells;
    }

    /**
     * Generated from protobuf field <code>repeated .TsCell cells = 1;</code>
     * @param \Basho\Riak\Api\Pb\Message\TsCell[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCells($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Basho\Riak\Api\Pb\Message\TsCell::class);
        $this->cells = $arr;

        return $this;
    }

}

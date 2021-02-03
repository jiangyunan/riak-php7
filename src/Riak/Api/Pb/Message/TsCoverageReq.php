<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak_ts.proto

namespace Basho\Riak\Api\Pb\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request a segmented coverage plan for this query
 *
 * Generated from protobuf message <code>TsCoverageReq</code>
 */
class TsCoverageReq extends \Google\Protobuf\Internal\Message
{
    /**
     * left optional to support parameterized queries in the future
     *
     * Generated from protobuf field <code>.TsInterpolation query = 1;</code>
     */
    protected $query = null;
    /**
     * Generated from protobuf field <code>bytes table = 2;</code>
     */
    protected $table = '';
    /**
     * For failure recovery
     *
     * Generated from protobuf field <code>bytes replace_cover = 3;</code>
     */
    protected $replace_cover = null;
    /**
     * Other coverage contexts that have failed to assist Riak in deciding what nodes to avoid
     *
     * Generated from protobuf field <code>repeated bytes unavailable_cover = 4;</code>
     */
    private $unavailable_cover;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Basho\Riak\Api\Pb\Message\TsInterpolation $query
     *           left optional to support parameterized queries in the future
     *     @type string $table
     *     @type string $replace_cover
     *           For failure recovery
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $unavailable_cover
     *           Other coverage contexts that have failed to assist Riak in deciding what nodes to avoid
     * }
     */
    public function __construct($data = NULL) {
        \Basho\Riak\Api\Pb\Message\RiakTs::initOnce();
        parent::__construct($data);
    }

    /**
     * left optional to support parameterized queries in the future
     *
     * Generated from protobuf field <code>.TsInterpolation query = 1;</code>
     * @return \Basho\Riak\Api\Pb\Message\TsInterpolation
     */
    public function getQuery()
    {
        return isset($this->query) ? $this->query : null;
    }

    public function hasQuery()
    {
        return isset($this->query);
    }

    public function clearQuery()
    {
        unset($this->query);
    }

    /**
     * left optional to support parameterized queries in the future
     *
     * Generated from protobuf field <code>.TsInterpolation query = 1;</code>
     * @param \Basho\Riak\Api\Pb\Message\TsInterpolation $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Basho\Riak\Api\Pb\Message\TsInterpolation::class);
        $this->query = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes table = 2;</code>
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Generated from protobuf field <code>bytes table = 2;</code>
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
     * For failure recovery
     *
     * Generated from protobuf field <code>bytes replace_cover = 3;</code>
     * @return string
     */
    public function getReplaceCover()
    {
        return isset($this->replace_cover) ? $this->replace_cover : '';
    }

    public function hasReplaceCover()
    {
        return isset($this->replace_cover);
    }

    public function clearReplaceCover()
    {
        unset($this->replace_cover);
    }

    /**
     * For failure recovery
     *
     * Generated from protobuf field <code>bytes replace_cover = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setReplaceCover($var)
    {
        GPBUtil::checkString($var, False);
        $this->replace_cover = $var;

        return $this;
    }

    /**
     * Other coverage contexts that have failed to assist Riak in deciding what nodes to avoid
     *
     * Generated from protobuf field <code>repeated bytes unavailable_cover = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnavailableCover()
    {
        return $this->unavailable_cover;
    }

    /**
     * Other coverage contexts that have failed to assist Riak in deciding what nodes to avoid
     *
     * Generated from protobuf field <code>repeated bytes unavailable_cover = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnavailableCover($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->unavailable_cover = $arr;

        return $this;
    }

}

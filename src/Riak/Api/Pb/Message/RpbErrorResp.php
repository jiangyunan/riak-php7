<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak.proto

namespace Basho\Riak\Api\Pb\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Error response - may be generated for any Req
 *
 * Generated from protobuf message <code>RpbErrorResp</code>
 */
class RpbErrorResp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes errmsg = 1;</code>
     */
    protected $errmsg = '';
    /**
     * Generated from protobuf field <code>uint32 errcode = 2;</code>
     */
    protected $errcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $errmsg
     *     @type int $errcode
     * }
     */
    public function __construct($data = NULL) {
        \Basho\Riak\Api\Pb\Message\Riak::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes errmsg = 1;</code>
     * @return string
     */
    public function getErrmsg()
    {
        return $this->errmsg;
    }

    /**
     * Generated from protobuf field <code>bytes errmsg = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setErrmsg($var)
    {
        GPBUtil::checkString($var, False);
        $this->errmsg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 errcode = 2;</code>
     * @return int
     */
    public function getErrcode()
    {
        return $this->errcode;
    }

    /**
     * Generated from protobuf field <code>uint32 errcode = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setErrcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->errcode = $var;

        return $this;
    }

}

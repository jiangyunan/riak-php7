<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak_kv.proto

namespace Basho\Riak\Api\Pb\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>RpbSetClientIdReq</code>
 */
class RpbSetClientIdReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Client id to use for this connection
     *
     * Generated from protobuf field <code>bytes client_id = 1;</code>
     */
    protected $client_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $client_id
     *           Client id to use for this connection
     * }
     */
    public function __construct($data = NULL) {
        \Basho\Riak\Api\Pb\Message\RiakKv::initOnce();
        parent::__construct($data);
    }

    /**
     * Client id to use for this connection
     *
     * Generated from protobuf field <code>bytes client_id = 1;</code>
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Client id to use for this connection
     *
     * Generated from protobuf field <code>bytes client_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setClientId($var)
    {
        GPBUtil::checkString($var, False);
        $this->client_id = $var;

        return $this;
    }

}


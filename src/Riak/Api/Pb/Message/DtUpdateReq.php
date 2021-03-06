<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak_dt.proto

namespace Basho\Riak\Api\Pb\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The equivalent of KV's "RpbPutReq", results in an empty response or
 * "DtUpdateResp" if `return_body` is specified, or the key is
 * assigned by the server. The request-time options are limited to
 * ones that are relevant to structured data-types.
 *
 * Generated from protobuf message <code>DtUpdateReq</code>
 */
class DtUpdateReq extends \Google\Protobuf\Internal\Message
{
    /**
     * The identifier
     *
     * Generated from protobuf field <code>bytes bucket = 1;</code>
     */
    protected $bucket = '';
    /**
     * missing key results in server-assigned key, like KV
     *
     * Generated from protobuf field <code>bytes key = 2;</code>
     */
    protected $key = null;
    /**
     * bucket type, not data-type (but the data-type is constrained per bucket-type)
     *
     * Generated from protobuf field <code>bytes type = 3;</code>
     */
    protected $type = '';
    /**
     * Opaque update-context
     *
     * Generated from protobuf field <code>bytes context = 4;</code>
     */
    protected $context = null;
    /**
     * The operations
     *
     * Generated from protobuf field <code>.DtOp op = 5;</code>
     */
    protected $op = null;
    /**
     * Request options
     *
     * Generated from protobuf field <code>uint32 w = 6;</code>
     */
    protected $w = null;
    /**
     * Generated from protobuf field <code>uint32 dw = 7;</code>
     */
    protected $dw = null;
    /**
     * Generated from protobuf field <code>uint32 pw = 8;</code>
     */
    protected $pw = null;
    /**
     * Generated from protobuf field <code>bool return_body = 9;</code>
     */
    protected $return_body = null;
    /**
     * Generated from protobuf field <code>uint32 timeout = 10;</code>
     */
    protected $timeout = null;
    /**
     * Experimental, may change/disappear
     *
     * Generated from protobuf field <code>bool sloppy_quorum = 11;</code>
     */
    protected $sloppy_quorum = null;
    /**
     * Experimental, may change/disappear
     *
     * Generated from protobuf field <code>uint32 n_val = 12;</code>
     */
    protected $n_val = null;
    /**
     * When return_body is true, should the context be returned too?
     *
     * Generated from protobuf field <code>bool include_context = 13;</code>
     */
    protected $include_context = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bucket
     *           The identifier
     *     @type string $key
     *           missing key results in server-assigned key, like KV
     *     @type string $type
     *           bucket type, not data-type (but the data-type is constrained per bucket-type)
     *     @type string $context
     *           Opaque update-context
     *     @type \Basho\Riak\Api\Pb\Message\DtOp $op
     *           The operations
     *     @type int $w
     *           Request options
     *     @type int $dw
     *     @type int $pw
     *     @type bool $return_body
     *     @type int $timeout
     *     @type bool $sloppy_quorum
     *           Experimental, may change/disappear
     *     @type int $n_val
     *           Experimental, may change/disappear
     *     @type bool $include_context
     *           When return_body is true, should the context be returned too?
     * }
     */
    public function __construct($data = NULL) {
        \Basho\Riak\Api\Pb\Message\RiakDt::initOnce();
        parent::__construct($data);
    }

    /**
     * The identifier
     *
     * Generated from protobuf field <code>bytes bucket = 1;</code>
     * @return string
     */
    public function getBucket()
    {
        return $this->bucket;
    }

    /**
     * The identifier
     *
     * Generated from protobuf field <code>bytes bucket = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBucket($var)
    {
        GPBUtil::checkString($var, False);
        $this->bucket = $var;

        return $this;
    }

    /**
     * missing key results in server-assigned key, like KV
     *
     * Generated from protobuf field <code>bytes key = 2;</code>
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
     * missing key results in server-assigned key, like KV
     *
     * Generated from protobuf field <code>bytes key = 2;</code>
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
     * bucket type, not data-type (but the data-type is constrained per bucket-type)
     *
     * Generated from protobuf field <code>bytes type = 3;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * bucket type, not data-type (but the data-type is constrained per bucket-type)
     *
     * Generated from protobuf field <code>bytes type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, False);
        $this->type = $var;

        return $this;
    }

    /**
     * Opaque update-context
     *
     * Generated from protobuf field <code>bytes context = 4;</code>
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
     * Opaque update-context
     *
     * Generated from protobuf field <code>bytes context = 4;</code>
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
     * The operations
     *
     * Generated from protobuf field <code>.DtOp op = 5;</code>
     * @return \Basho\Riak\Api\Pb\Message\DtOp
     */
    public function getOp()
    {
        return isset($this->op) ? $this->op : null;
    }

    public function hasOp()
    {
        return isset($this->op);
    }

    public function clearOp()
    {
        unset($this->op);
    }

    /**
     * The operations
     *
     * Generated from protobuf field <code>.DtOp op = 5;</code>
     * @param \Basho\Riak\Api\Pb\Message\DtOp $var
     * @return $this
     */
    public function setOp($var)
    {
        GPBUtil::checkMessage($var, \Basho\Riak\Api\Pb\Message\DtOp::class);
        $this->op = $var;

        return $this;
    }

    /**
     * Request options
     *
     * Generated from protobuf field <code>uint32 w = 6;</code>
     * @return int
     */
    public function getW()
    {
        return isset($this->w) ? $this->w : 0;
    }

    public function hasW()
    {
        return isset($this->w);
    }

    public function clearW()
    {
        unset($this->w);
    }

    /**
     * Request options
     *
     * Generated from protobuf field <code>uint32 w = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setW($var)
    {
        GPBUtil::checkUint32($var);
        $this->w = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 dw = 7;</code>
     * @return int
     */
    public function getDw()
    {
        return isset($this->dw) ? $this->dw : 0;
    }

    public function hasDw()
    {
        return isset($this->dw);
    }

    public function clearDw()
    {
        unset($this->dw);
    }

    /**
     * Generated from protobuf field <code>uint32 dw = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setDw($var)
    {
        GPBUtil::checkUint32($var);
        $this->dw = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 pw = 8;</code>
     * @return int
     */
    public function getPw()
    {
        return isset($this->pw) ? $this->pw : 0;
    }

    public function hasPw()
    {
        return isset($this->pw);
    }

    public function clearPw()
    {
        unset($this->pw);
    }

    /**
     * Generated from protobuf field <code>uint32 pw = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setPw($var)
    {
        GPBUtil::checkUint32($var);
        $this->pw = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool return_body = 9;</code>
     * @return bool
     */
    public function getReturnBody()
    {
        return isset($this->return_body) ? $this->return_body : false;
    }

    public function hasReturnBody()
    {
        return isset($this->return_body);
    }

    public function clearReturnBody()
    {
        unset($this->return_body);
    }

    /**
     * Generated from protobuf field <code>bool return_body = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setReturnBody($var)
    {
        GPBUtil::checkBool($var);
        $this->return_body = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 timeout = 10;</code>
     * @return int
     */
    public function getTimeout()
    {
        return isset($this->timeout) ? $this->timeout : 0;
    }

    public function hasTimeout()
    {
        return isset($this->timeout);
    }

    public function clearTimeout()
    {
        unset($this->timeout);
    }

    /**
     * Generated from protobuf field <code>uint32 timeout = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeout($var)
    {
        GPBUtil::checkUint32($var);
        $this->timeout = $var;

        return $this;
    }

    /**
     * Experimental, may change/disappear
     *
     * Generated from protobuf field <code>bool sloppy_quorum = 11;</code>
     * @return bool
     */
    public function getSloppyQuorum()
    {
        return isset($this->sloppy_quorum) ? $this->sloppy_quorum : false;
    }

    public function hasSloppyQuorum()
    {
        return isset($this->sloppy_quorum);
    }

    public function clearSloppyQuorum()
    {
        unset($this->sloppy_quorum);
    }

    /**
     * Experimental, may change/disappear
     *
     * Generated from protobuf field <code>bool sloppy_quorum = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setSloppyQuorum($var)
    {
        GPBUtil::checkBool($var);
        $this->sloppy_quorum = $var;

        return $this;
    }

    /**
     * Experimental, may change/disappear
     *
     * Generated from protobuf field <code>uint32 n_val = 12;</code>
     * @return int
     */
    public function getNVal()
    {
        return isset($this->n_val) ? $this->n_val : 0;
    }

    public function hasNVal()
    {
        return isset($this->n_val);
    }

    public function clearNVal()
    {
        unset($this->n_val);
    }

    /**
     * Experimental, may change/disappear
     *
     * Generated from protobuf field <code>uint32 n_val = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setNVal($var)
    {
        GPBUtil::checkUint32($var);
        $this->n_val = $var;

        return $this;
    }

    /**
     * When return_body is true, should the context be returned too?
     *
     * Generated from protobuf field <code>bool include_context = 13;</code>
     * @return bool
     */
    public function getIncludeContext()
    {
        return isset($this->include_context) ? $this->include_context : false;
    }

    public function hasIncludeContext()
    {
        return isset($this->include_context);
    }

    public function clearIncludeContext()
    {
        unset($this->include_context);
    }

    /**
     * When return_body is true, should the context be returned too?
     *
     * Generated from protobuf field <code>bool include_context = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeContext($var)
    {
        GPBUtil::checkBool($var);
        $this->include_context = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak_kv.proto

namespace Basho\Riak\Api\Pb\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Put request - if options.return_body is set then the updated metadata/data for
 *               the key will be returned.
 *
 * Generated from protobuf message <code>RpbPutReq</code>
 */
class RpbPutReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes bucket = 1;</code>
     */
    protected $bucket = '';
    /**
     * Generated from protobuf field <code>bytes key = 2;</code>
     */
    protected $key = null;
    /**
     * Generated from protobuf field <code>bytes vclock = 3;</code>
     */
    protected $vclock = null;
    /**
     * Generated from protobuf field <code>.RpbContent content = 4;</code>
     */
    protected $content = null;
    /**
     * Generated from protobuf field <code>uint32 w = 5;</code>
     */
    protected $w = null;
    /**
     * Generated from protobuf field <code>uint32 dw = 6;</code>
     */
    protected $dw = null;
    /**
     * Generated from protobuf field <code>bool return_body = 7;</code>
     */
    protected $return_body = null;
    /**
     * Generated from protobuf field <code>uint32 pw = 8;</code>
     */
    protected $pw = null;
    /**
     * Generated from protobuf field <code>bool if_not_modified = 9;</code>
     */
    protected $if_not_modified = null;
    /**
     * Generated from protobuf field <code>bool if_none_match = 10;</code>
     */
    protected $if_none_match = null;
    /**
     * Generated from protobuf field <code>bool return_head = 11;</code>
     */
    protected $return_head = null;
    /**
     * Generated from protobuf field <code>uint32 timeout = 12;</code>
     */
    protected $timeout = null;
    /**
     * Generated from protobuf field <code>bool asis = 13;</code>
     */
    protected $asis = null;
    /**
     * Experimental, may change/disappear
     *
     * Generated from protobuf field <code>bool sloppy_quorum = 14;</code>
     */
    protected $sloppy_quorum = null;
    /**
     * Experimental, may change/disappear
     *
     * Generated from protobuf field <code>uint32 n_val = 15;</code>
     */
    protected $n_val = null;
    /**
     * Bucket type, if not set we assume the 'default' type
     *
     * Generated from protobuf field <code>bytes type = 16;</code>
     */
    protected $type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bucket
     *     @type string $key
     *     @type string $vclock
     *     @type \Basho\Riak\Api\Pb\Message\RpbContent $content
     *     @type int $w
     *     @type int $dw
     *     @type bool $return_body
     *     @type int $pw
     *     @type bool $if_not_modified
     *     @type bool $if_none_match
     *     @type bool $return_head
     *     @type int $timeout
     *     @type bool $asis
     *     @type bool $sloppy_quorum
     *           Experimental, may change/disappear
     *     @type int $n_val
     *           Experimental, may change/disappear
     *     @type string $type
     *           Bucket type, if not set we assume the 'default' type
     * }
     */
    public function __construct($data = NULL) {
        \Basho\Riak\Api\Pb\Message\RiakKv::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes bucket = 1;</code>
     * @return string
     */
    public function getBucket()
    {
        return $this->bucket;
    }

    /**
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
     * Generated from protobuf field <code>bytes vclock = 3;</code>
     * @return string
     */
    public function getVclock()
    {
        return isset($this->vclock) ? $this->vclock : '';
    }

    public function hasVclock()
    {
        return isset($this->vclock);
    }

    public function clearVclock()
    {
        unset($this->vclock);
    }

    /**
     * Generated from protobuf field <code>bytes vclock = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setVclock($var)
    {
        GPBUtil::checkString($var, False);
        $this->vclock = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.RpbContent content = 4;</code>
     * @return \Basho\Riak\Api\Pb\Message\RpbContent
     */
    public function getContent()
    {
        return isset($this->content) ? $this->content : null;
    }

    public function hasContent()
    {
        return isset($this->content);
    }

    public function clearContent()
    {
        unset($this->content);
    }

    /**
     * Generated from protobuf field <code>.RpbContent content = 4;</code>
     * @param \Basho\Riak\Api\Pb\Message\RpbContent $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkMessage($var, \Basho\Riak\Api\Pb\Message\RpbContent::class);
        $this->content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 w = 5;</code>
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
     * Generated from protobuf field <code>uint32 w = 5;</code>
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
     * Generated from protobuf field <code>uint32 dw = 6;</code>
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
     * Generated from protobuf field <code>uint32 dw = 6;</code>
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
     * Generated from protobuf field <code>bool return_body = 7;</code>
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
     * Generated from protobuf field <code>bool return_body = 7;</code>
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
     * Generated from protobuf field <code>bool if_not_modified = 9;</code>
     * @return bool
     */
    public function getIfNotModified()
    {
        return isset($this->if_not_modified) ? $this->if_not_modified : false;
    }

    public function hasIfNotModified()
    {
        return isset($this->if_not_modified);
    }

    public function clearIfNotModified()
    {
        unset($this->if_not_modified);
    }

    /**
     * Generated from protobuf field <code>bool if_not_modified = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setIfNotModified($var)
    {
        GPBUtil::checkBool($var);
        $this->if_not_modified = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool if_none_match = 10;</code>
     * @return bool
     */
    public function getIfNoneMatch()
    {
        return isset($this->if_none_match) ? $this->if_none_match : false;
    }

    public function hasIfNoneMatch()
    {
        return isset($this->if_none_match);
    }

    public function clearIfNoneMatch()
    {
        unset($this->if_none_match);
    }

    /**
     * Generated from protobuf field <code>bool if_none_match = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setIfNoneMatch($var)
    {
        GPBUtil::checkBool($var);
        $this->if_none_match = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool return_head = 11;</code>
     * @return bool
     */
    public function getReturnHead()
    {
        return isset($this->return_head) ? $this->return_head : false;
    }

    public function hasReturnHead()
    {
        return isset($this->return_head);
    }

    public function clearReturnHead()
    {
        unset($this->return_head);
    }

    /**
     * Generated from protobuf field <code>bool return_head = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setReturnHead($var)
    {
        GPBUtil::checkBool($var);
        $this->return_head = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 timeout = 12;</code>
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
     * Generated from protobuf field <code>uint32 timeout = 12;</code>
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
     * Generated from protobuf field <code>bool asis = 13;</code>
     * @return bool
     */
    public function getAsis()
    {
        return isset($this->asis) ? $this->asis : false;
    }

    public function hasAsis()
    {
        return isset($this->asis);
    }

    public function clearAsis()
    {
        unset($this->asis);
    }

    /**
     * Generated from protobuf field <code>bool asis = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setAsis($var)
    {
        GPBUtil::checkBool($var);
        $this->asis = $var;

        return $this;
    }

    /**
     * Experimental, may change/disappear
     *
     * Generated from protobuf field <code>bool sloppy_quorum = 14;</code>
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
     * Generated from protobuf field <code>bool sloppy_quorum = 14;</code>
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
     * Generated from protobuf field <code>uint32 n_val = 15;</code>
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
     * Generated from protobuf field <code>uint32 n_val = 15;</code>
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
     * Bucket type, if not set we assume the 'default' type
     *
     * Generated from protobuf field <code>bytes type = 16;</code>
     * @return string
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : '';
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * Bucket type, if not set we assume the 'default' type
     *
     * Generated from protobuf field <code>bytes type = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, False);
        $this->type = $var;

        return $this;
    }

}

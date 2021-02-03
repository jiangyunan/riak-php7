<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak_kv.proto

namespace Basho\Riak\Api\Pb\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Content message included in get/put responses
 * Holds the value and associated metadata
 *
 * Generated from protobuf message <code>RpbContent</code>
 */
class RpbContent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes value = 1;</code>
     */
    protected $value = '';
    /**
     * the media type/format
     *
     * Generated from protobuf field <code>bytes content_type = 2;</code>
     */
    protected $content_type = null;
    /**
     * Generated from protobuf field <code>bytes charset = 3;</code>
     */
    protected $charset = null;
    /**
     * Generated from protobuf field <code>bytes content_encoding = 4;</code>
     */
    protected $content_encoding = null;
    /**
     * Generated from protobuf field <code>bytes vtag = 5;</code>
     */
    protected $vtag = null;
    /**
     * links to other resources
     *
     * Generated from protobuf field <code>repeated .RpbLink links = 6;</code>
     */
    private $links;
    /**
     * Generated from protobuf field <code>uint32 last_mod = 7;</code>
     */
    protected $last_mod = null;
    /**
     * Generated from protobuf field <code>uint32 last_mod_usecs = 8;</code>
     */
    protected $last_mod_usecs = null;
    /**
     * user metadata stored with the object
     *
     * Generated from protobuf field <code>repeated .RpbPair usermeta = 9;</code>
     */
    private $usermeta;
    /**
     * user metadata stored with the object
     *
     * Generated from protobuf field <code>repeated .RpbPair indexes = 10;</code>
     */
    private $indexes;
    /**
     * Generated from protobuf field <code>bool deleted = 11;</code>
     */
    protected $deleted = null;
    /**
     * Generated from protobuf field <code>uint32 ttl = 12;</code>
     */
    protected $ttl = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $value
     *     @type string $content_type
     *           the media type/format
     *     @type string $charset
     *     @type string $content_encoding
     *     @type string $vtag
     *     @type \Basho\Riak\Api\Pb\Message\RpbLink[]|\Google\Protobuf\Internal\RepeatedField $links
     *           links to other resources
     *     @type int $last_mod
     *     @type int $last_mod_usecs
     *     @type \Basho\Riak\Api\Pb\Message\RpbPair[]|\Google\Protobuf\Internal\RepeatedField $usermeta
     *           user metadata stored with the object
     *     @type \Basho\Riak\Api\Pb\Message\RpbPair[]|\Google\Protobuf\Internal\RepeatedField $indexes
     *           user metadata stored with the object
     *     @type bool $deleted
     *     @type int $ttl
     * }
     */
    public function __construct($data = NULL) {
        \Basho\Riak\Api\Pb\Message\RiakKv::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes value = 1;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>bytes value = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->value = $var;

        return $this;
    }

    /**
     * the media type/format
     *
     * Generated from protobuf field <code>bytes content_type = 2;</code>
     * @return string
     */
    public function getContentType()
    {
        return isset($this->content_type) ? $this->content_type : '';
    }

    public function hasContentType()
    {
        return isset($this->content_type);
    }

    public function clearContentType()
    {
        unset($this->content_type);
    }

    /**
     * the media type/format
     *
     * Generated from protobuf field <code>bytes content_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setContentType($var)
    {
        GPBUtil::checkString($var, False);
        $this->content_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes charset = 3;</code>
     * @return string
     */
    public function getCharset()
    {
        return isset($this->charset) ? $this->charset : '';
    }

    public function hasCharset()
    {
        return isset($this->charset);
    }

    public function clearCharset()
    {
        unset($this->charset);
    }

    /**
     * Generated from protobuf field <code>bytes charset = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCharset($var)
    {
        GPBUtil::checkString($var, False);
        $this->charset = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes content_encoding = 4;</code>
     * @return string
     */
    public function getContentEncoding()
    {
        return isset($this->content_encoding) ? $this->content_encoding : '';
    }

    public function hasContentEncoding()
    {
        return isset($this->content_encoding);
    }

    public function clearContentEncoding()
    {
        unset($this->content_encoding);
    }

    /**
     * Generated from protobuf field <code>bytes content_encoding = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setContentEncoding($var)
    {
        GPBUtil::checkString($var, False);
        $this->content_encoding = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes vtag = 5;</code>
     * @return string
     */
    public function getVtag()
    {
        return isset($this->vtag) ? $this->vtag : '';
    }

    public function hasVtag()
    {
        return isset($this->vtag);
    }

    public function clearVtag()
    {
        unset($this->vtag);
    }

    /**
     * Generated from protobuf field <code>bytes vtag = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setVtag($var)
    {
        GPBUtil::checkString($var, False);
        $this->vtag = $var;

        return $this;
    }

    /**
     * links to other resources
     *
     * Generated from protobuf field <code>repeated .RpbLink links = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * links to other resources
     *
     * Generated from protobuf field <code>repeated .RpbLink links = 6;</code>
     * @param \Basho\Riak\Api\Pb\Message\RpbLink[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLinks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Basho\Riak\Api\Pb\Message\RpbLink::class);
        $this->links = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 last_mod = 7;</code>
     * @return int
     */
    public function getLastMod()
    {
        return isset($this->last_mod) ? $this->last_mod : 0;
    }

    public function hasLastMod()
    {
        return isset($this->last_mod);
    }

    public function clearLastMod()
    {
        unset($this->last_mod);
    }

    /**
     * Generated from protobuf field <code>uint32 last_mod = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setLastMod($var)
    {
        GPBUtil::checkUint32($var);
        $this->last_mod = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 last_mod_usecs = 8;</code>
     * @return int
     */
    public function getLastModUsecs()
    {
        return isset($this->last_mod_usecs) ? $this->last_mod_usecs : 0;
    }

    public function hasLastModUsecs()
    {
        return isset($this->last_mod_usecs);
    }

    public function clearLastModUsecs()
    {
        unset($this->last_mod_usecs);
    }

    /**
     * Generated from protobuf field <code>uint32 last_mod_usecs = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setLastModUsecs($var)
    {
        GPBUtil::checkUint32($var);
        $this->last_mod_usecs = $var;

        return $this;
    }

    /**
     * user metadata stored with the object
     *
     * Generated from protobuf field <code>repeated .RpbPair usermeta = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUsermeta()
    {
        return $this->usermeta;
    }

    /**
     * user metadata stored with the object
     *
     * Generated from protobuf field <code>repeated .RpbPair usermeta = 9;</code>
     * @param \Basho\Riak\Api\Pb\Message\RpbPair[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUsermeta($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Basho\Riak\Api\Pb\Message\RpbPair::class);
        $this->usermeta = $arr;

        return $this;
    }

    /**
     * user metadata stored with the object
     *
     * Generated from protobuf field <code>repeated .RpbPair indexes = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIndexes()
    {
        return $this->indexes;
    }

    /**
     * user metadata stored with the object
     *
     * Generated from protobuf field <code>repeated .RpbPair indexes = 10;</code>
     * @param \Basho\Riak\Api\Pb\Message\RpbPair[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIndexes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Basho\Riak\Api\Pb\Message\RpbPair::class);
        $this->indexes = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool deleted = 11;</code>
     * @return bool
     */
    public function getDeleted()
    {
        return isset($this->deleted) ? $this->deleted : false;
    }

    public function hasDeleted()
    {
        return isset($this->deleted);
    }

    public function clearDeleted()
    {
        unset($this->deleted);
    }

    /**
     * Generated from protobuf field <code>bool deleted = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setDeleted($var)
    {
        GPBUtil::checkBool($var);
        $this->deleted = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ttl = 12;</code>
     * @return int
     */
    public function getTtl()
    {
        return isset($this->ttl) ? $this->ttl : 0;
    }

    public function hasTtl()
    {
        return isset($this->ttl);
    }

    public function clearTtl()
    {
        unset($this->ttl);
    }

    /**
     * Generated from protobuf field <code>uint32 ttl = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setTtl($var)
    {
        GPBUtil::checkUint32($var);
        $this->ttl = $var;

        return $this;
    }

}

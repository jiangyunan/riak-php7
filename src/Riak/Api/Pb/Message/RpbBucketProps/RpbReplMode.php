<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak.proto

namespace Basho\Riak\Api\Pb\Message\RpbBucketProps;

use UnexpectedValueException;

/**
 * Used by riak_repl bucket fixup
 *
 * Protobuf type <code>RpbBucketProps.RpbReplMode</code>
 */
class RpbReplMode
{
    /**
     * Generated from protobuf enum <code>FALSE = 0;</code>
     */
    const FALSE = 0;
    /**
     * Generated from protobuf enum <code>REALTIME = 1;</code>
     */
    const REALTIME = 1;
    /**
     * Generated from protobuf enum <code>FULLSYNC = 2;</code>
     */
    const FULLSYNC = 2;
    /**
     * Generated from protobuf enum <code>TRUE = 3;</code>
     */
    const TRUE = 3;

    private static $valueToName = [
        self::FALSE => 'FALSE',
        self::REALTIME => 'REALTIME',
        self::FULLSYNC => 'FULLSYNC',
        self::TRUE => 'TRUE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RpbReplMode::class, \Basho\Riak\Api\Pb\Message\RpbBucketProps_RpbReplMode::class);


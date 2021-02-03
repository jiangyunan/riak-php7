<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak_dt.proto

namespace Basho\Riak\Api\Pb\Message\DtFetchResp;

use UnexpectedValueException;

/**
 * Protobuf type <code>DtFetchResp.DataType</code>
 */
class DataType
{
    /**
     * Generated from protobuf enum <code>COUNTER = 0;</code>
     */
    const COUNTER = 0;
    /**
     * Generated from protobuf enum <code>SET = 1;</code>
     */
    const SET = 1;
    /**
     * Generated from protobuf enum <code>MAP = 2;</code>
     */
    const MAP = 2;
    /**
     * Generated from protobuf enum <code>HLL = 3;</code>
     */
    const HLL = 3;
    /**
     * Generated from protobuf enum <code>GSET = 4;</code>
     */
    const GSET = 4;

    private static $valueToName = [
        self::COUNTER => 'COUNTER',
        self::SET => 'SET',
        self::MAP => 'MAP',
        self::HLL => 'HLL',
        self::GSET => 'GSET',
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
class_alias(DataType::class, \Basho\Riak\Api\Pb\Message\DtFetchResp_DataType::class);


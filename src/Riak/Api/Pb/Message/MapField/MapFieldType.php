<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak_dt.proto

namespace Basho\Riak\Api\Pb\Message\MapField;

use UnexpectedValueException;

/**
 * The types that can be stored in a map are limited to counters,
 * sets, registers, flags, and maps.
 *
 * Protobuf type <code>MapField.MapFieldType</code>
 */
class MapFieldType
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
     * Generated from protobuf enum <code>REGISTER = 2;</code>
     */
    const REGISTER = 2;
    /**
     * Generated from protobuf enum <code>FLAG = 3;</code>
     */
    const FLAG = 3;
    /**
     * Generated from protobuf enum <code>MAP = 4;</code>
     */
    const MAP = 4;

    private static $valueToName = [
        self::COUNTER => 'COUNTER',
        self::SET => 'SET',
        self::REGISTER => 'REGISTER',
        self::FLAG => 'FLAG',
        self::MAP => 'MAP',
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
class_alias(MapFieldType::class, \Basho\Riak\Api\Pb\Message\MapField_MapFieldType::class);


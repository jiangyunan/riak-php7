<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak_ts.proto

namespace Basho\Riak\Api\Pb\Message;

use UnexpectedValueException;

/**
 * Protobuf type <code>TsColumnType</code>
 */
class TsColumnType
{
    /**
     * Generated from protobuf enum <code>VARCHAR = 0;</code>
     */
    const VARCHAR = 0;
    /**
     * Generated from protobuf enum <code>SINT64 = 1;</code>
     */
    const SINT64 = 1;
    /**
     * Generated from protobuf enum <code>DOUBLE = 2;</code>
     */
    const DOUBLE = 2;
    /**
     * Generated from protobuf enum <code>TIMESTAMP = 3;</code>
     */
    const TIMESTAMP = 3;
    /**
     * Generated from protobuf enum <code>BOOLEAN = 4;</code>
     */
    const BOOLEAN = 4;
    /**
     * Generated from protobuf enum <code>BLOB = 5;</code>
     */
    const BLOB = 5;

    private static $valueToName = [
        self::VARCHAR => 'VARCHAR',
        self::SINT64 => 'SINT64',
        self::DOUBLE => 'DOUBLE',
        self::TIMESTAMP => 'TIMESTAMP',
        self::BOOLEAN => 'BOOLEAN',
        self::BLOB => 'BLOB',
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


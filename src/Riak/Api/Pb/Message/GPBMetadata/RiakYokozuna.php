<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak_yokozuna.proto

namespace GPBMetadata;

class RiakYokozuna
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
riak_yokozuna.proto"^
RpbYokozunaIndex
name (
schema (H �
n_val (H�B	
_schemaB
_n_val"4
RpbYokozunaIndexGetReq
name (H �B
_name";
RpbYokozunaIndexGetResp 
index (2.RpbYokozunaIndex"\\
RpbYokozunaIndexPutReq 
index (2.RpbYokozunaIndex
timeout (H �B

_timeout")
RpbYokozunaIndexDeleteReq
name ("C
RpbYokozunaSchema
name (
content (H �B

_content"=
RpbYokozunaSchemaPutReq"
schema (2.RpbYokozunaSchema"\'
RpbYokozunaSchemaGetReq
name (">
RpbYokozunaSchemaGetResp"
schema (2.RpbYokozunaSchemabproto3'
        , true);

        static::$is_initialized = true;
    }
}


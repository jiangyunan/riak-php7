<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak_search.proto

namespace Basho\Riak\Api\Pb\Message;

class RiakSearch
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Basho\Riak\Api\Pb\Message\Riak::initOnce();
        $pool->internalAddGeneratedFile(
            '

riak_search.proto"(
RpbSearchDoc
fields (2.RpbPair"
RpbSearchQueryReq	
q (
index (
rows (H 
start (H
sort (H
filter (H
df (H
op (H

fl	 (
presort
 (HB
_rowsB
_startB
_sortB	
_filterB
_dfB
_opB

_presort"}
RpbSearchQueryResp
docs (2.RpbSearchDoc
	max_score (H 
	num_found (HB

_max_scoreB

_num_foundB8ΚBasho\\Riak\\Api\\Pb\\MessageβBasho\\Riak\\Api\\Pb\\Messagebproto3'
        , true);

        static::$is_initialized = true;
    }
}


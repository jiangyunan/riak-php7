<?php

namespace Basho\Riak\Command;

use Basho\Riak\Command;
use Basho\Riak\Location;

/**
 * Base class for Commands performing operations on Kv Objects
 *
 * @author Christopher Mancini <cmancini at basho d0t com>
 */
abstract class RObject extends Command
{
    /**
     * @var Object\Response|null
     */
    protected $response = NULL;

    /**
     * @var \Basho\Riak\RObject|null
     */
    protected $object = NULL;

    /**
     * @var Location|null
     */
    protected $location = NULL;

    protected $decodeAsAssociative = false;

    public function getObject()
    {
        return $this->object;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function getEncodedData()
    {
        return $this->getData();
    }

    public function getDecodedData($data, $contentType)
    {
        return static::decodeData($data, $contentType, $this->decodeAsAssociative);
    }

    public static function decodeData($data, $contentType = '', $decodeAsAssociative = false)
    {
        return $data;
    }

    public function getData()
    {
        return $this->object->getData();
    }

    /**
     * @return Command\Object\Response
     */
    public function execute()
    {
        return parent::execute();
    }
}

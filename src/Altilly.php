<?php

declare(strict_types=1);

namespace pxgamer\Altilly;

use pxgamer\Altilly\Adapter\HttpAdapter;

class Altilly
{
    /** @var HttpAdapter */
    protected $adapter;

    public function __construct(HttpAdapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function account(): Account
    {
        return new Account($this->adapter);
    }
}

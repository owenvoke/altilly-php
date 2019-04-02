<?php

declare(strict_types=1);

namespace pxgamer\Altilly\Api;

use pxgamer\Altilly\Adapter\HttpAdapter;

abstract class AbstractApi
{
    /** @var string */
    public const ENDPOINT = 'https://api.altilly.com/api';

    /** @var HttpAdapter */
    protected $adapter;

    /** @var string */
    protected $endpoint;

    public function __construct(HttpAdapter $adapter, ?string $endpoint = null)
    {
        $this->adapter = $adapter;
        $this->endpoint = $endpoint ?: static::ENDPOINT;
    }
}

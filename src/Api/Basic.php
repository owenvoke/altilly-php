<?php

declare(strict_types=1);

namespace pxgamer\Altilly\Api;

use pxgamer\Altilly\Entity\Symbol as SymbolEntity;
use function array_map;
use function json_decode;
use function sprintf;

final class Basic extends AbstractApi
{
    public function getSymbols(): array
    {
        $response = $this->adapter->get(sprintf('%s/public/symbol', $this->endpoint));

        $data = json_decode($response);

        return array_map(static function ($symbol) {
            return new SymbolEntity($symbol);
        }, $data);
    }

    public function getSymbol(string $symbol): SymbolEntity
    {
        $response = $this->adapter->get(sprintf('%s/public/symbol/%s', $this->endpoint, $symbol));

        $data = json_decode($response);

        return new SymbolEntity($data);
    }
}

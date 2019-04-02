<?php

declare(strict_types=1);

namespace pxgamer\Altilly\Entity;

final class Symbol extends AbstractEntity
{
    /** @var string */
    public $id;
    /** @var string */
    public $baseCurrency;
    /** @var string */
    public $quoteCurrency;
    /** @var float */
    public $quantityIncrement;
    /** @var float */
    public $tickSize;
    /** @var float */
    public $takeLiquidityRate;
    /** @var float */
    public $provideLiquidityRate;
    /** @var string */
    public $feeCurrency;
}

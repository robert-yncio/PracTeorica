<?php

declare(strict_types=1);

namespace GildedRose\Strategy;

use GildedRose\Item;

final class ItemTypeIdentifier
{
    private const AGED_BRIE = 'Aged Brie';

    private const BACKSTAGE_PASSES = 'Backstage passes to a TAFKAL80ETC concert';

    private const SULFURAS = 'Sulfuras, Hand of Ragnaros';

    private const CONJURED_PREFIX = 'Conjured';

    public function isAgedBrie(Item $item): bool
    {
        return $item->name === self::AGED_BRIE;
    }

    public function isBackstagePasses(Item $item): bool
    {
        return $item->name === self::BACKSTAGE_PASSES;
    }

    public function isSulfuras(Item $item): bool
    {
        return $item->name === self::SULFURAS;
    }

    public function isConjured(Item $item): bool
    {
        return str_starts_with($item->name, self::CONJURED_PREFIX);
    }
}

<?php

declare(strict_types=1);

namespace GildedRose\Strategy;

use GildedRose\Item;

trait QualityHelper
{
    private const MAX_QUALITY = 50;
    private const MIN_QUALITY = 0;

    protected function increaseQuality(Item $item): void
    {
        if ($item->quality < self::MAX_QUALITY) {
            $item->quality = $item->quality + 1;
        }
    }

    protected function decreaseQuality(Item $item, int $amount): void
    {
        if ($item->quality > 0) {
            $item->quality = max(self::MIN_QUALITY, $item->quality - $amount);
        }
    }
}

<?php

declare(strict_types=1);

namespace GildedRose\Strategy;

use GildedRose\Item;

final class BackstagePassesStrategy extends AbstractItemStrategy
{
    private const DAYS_FOR_DOUBLE_INCREASE = 11;
    private const DAYS_FOR_TRIPLE_INCREASE = 6;

    public function updateQuality(Item $item): void
    {
        $this->increaseQuality($item);

        if ($item->sellIn < self::DAYS_FOR_DOUBLE_INCREASE) {
            $this->increaseQuality($item);
        }

        if ($item->sellIn < self::DAYS_FOR_TRIPLE_INCREASE) {
            $this->increaseQuality($item);
        }
    }

    public function applyExpiredPenalty(Item $item): void
    {
        if ($item->sellIn < 0) {
            $item->quality = 0;
        }
    }
}

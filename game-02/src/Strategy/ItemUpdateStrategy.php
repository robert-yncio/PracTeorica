<?php

declare(strict_types=1);

namespace GildedRose\Strategy;

use GildedRose\Item;

interface ItemUpdateStrategy
{
    public function updateQuality(Item $item): void;
    public function updateSellIn(Item $item): void;
    public function applyExpiredPenalty(Item $item): void;
}

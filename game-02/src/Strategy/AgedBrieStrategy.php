<?php

declare(strict_types=1);

namespace GildedRose\Strategy;

use GildedRose\Item;

final class AgedBrieStrategy extends AbstractItemStrategy
{
    public function updateQuality(Item $item): void
    {
        $this->increaseQuality($item);
    }

    public function applyExpiredPenalty(Item $item): void
    {
        if ($this->isExpired($item)) {
            $this->increaseQuality($item);
        }
    }
}

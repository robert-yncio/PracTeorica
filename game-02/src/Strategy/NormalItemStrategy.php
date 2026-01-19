<?php

declare(strict_types=1);

namespace GildedRose\Strategy;

use GildedRose\Item;

final class NormalItemStrategy extends AbstractItemStrategy
{
    public function __construct(
        private readonly int $degradationRate = 1
    ) {
    }

    public function updateQuality(Item $item): void
    {
        $this->decreaseQuality($item, $this->degradationRate);
    }

    public function applyExpiredPenalty(Item $item): void
    {
        if ($this->isExpired($item)) {
            $this->decreaseQuality($item, $this->degradationRate);
        }
    }
}

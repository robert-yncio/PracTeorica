<?php

declare(strict_types=1);

namespace GildedRose\Strategy;

use GildedRose\Item;

final class ItemStrategyFactory
{
    public function __construct(
        private readonly ItemTypeIdentifier $itemTypeIdentifier = new ItemTypeIdentifier()
    ) {
    }

    public function createStrategy(Item $item): ?ItemUpdateStrategy
    {
        return match (true) {
            $this->itemTypeIdentifier->isSulfuras($item) => null,
            $this->itemTypeIdentifier->isAgedBrie($item) => new AgedBrieStrategy(),
            $this->itemTypeIdentifier->isBackstagePasses($item) => new BackstagePassesStrategy(),
            $this->itemTypeIdentifier->isConjured($item) => new NormalItemStrategy(degradationRate: 2),
            default => new NormalItemStrategy(),
        };
    }
}

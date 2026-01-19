<?php

declare(strict_types=1);

namespace GildedRose;

use GildedRose\Strategy\ItemStrategyFactory;
use GildedRose\Strategy\ItemUpdateStrategy;

final class GildedRose
{
    /**
     * @param Item[] $items
     */
    public function __construct(
        private array $items,
        private readonly ItemStrategyFactory $strategyFactory = new ItemStrategyFactory()
    ) {
    }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) {
            if (! $this->isValidItem($item)) {
                continue;
            }

            $strategy = $this->strategyFactory->createStrategy($item);

            if ($strategy === null) {
                continue;
            }

            $this->updateItem($item, $strategy);
        }
    }

    private function isValidItem(Item $item): bool
    {
        return $item !== null
            && $item->name !== ''
            && $item->quality >= 0
            && $item->quality <= 50;
    }

    private function updateItem(Item $item, ItemUpdateStrategy $strategy): void
    {
        $strategy->updateQuality($item);
        $strategy->updateSellIn($item);
        $strategy->applyExpiredPenalty($item);
    }
}

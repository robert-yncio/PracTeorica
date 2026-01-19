<?php

declare(strict_types=1);

namespace GildedRose;

final class GildedRose
{
    private const AGED_BRIE = 'Aged Brie';
    private const BACKSTAGE_PASSES = 'Backstage passes to a TAFKAL80ETC concert';
    private const SULFURAS = 'Sulfuras, Hand of Ragnaros';
    private const MAX_QUALITY = 50;
    private const MIN_QUALITY = 0;

    /**
     * @param Item[] $items
     */
    public function __construct(
        private array $items
    ) {
    }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) {
            $this->updateItem($item);
        }
    }

    private function updateItem(Item $item): void
    {
        if ($this->isSulfuras($item)) {
            return; 
        }

        $this->updateQualityForItem($item);
        $this->updateSellIn($item);
        $this->applyExpiredPenalty($item);
    }

    private function updateSellIn(Item $item): void
    {
        if (!$this->isSulfuras($item)) {
            $item->sellIn = $item->sellIn - 1;
        }
    }

    private function updateQualityForItem(Item $item): void
    {
        if ($this->isAgedBrie($item)) {
            $this->updateAgedBrie($item);
        } elseif ($this->isBackstagePasses($item)) {
            $this->updateBackstagePasses($item);
        } else {
            $this->updateNormalItem($item);
        }
    }

    private function updateAgedBrie(Item $item): void
    {
        $this->increaseQuality($item);
    }

    private function updateBackstagePasses(Item $item): void
    {
        $this->increaseQuality($item);

        if ($item->sellIn < 11) {
            $this->increaseQuality($item);
        }

        if ($item->sellIn < 6) {
            $this->increaseQuality($item);
        }
    }

    private function updateNormalItem(Item $item): void
    {
        $degradationRate = $this->getDegradationRate($item);
        $this->decreaseQuality($item, $degradationRate);
    }

    private function applyExpiredPenalty(Item $item): void
    {
        if ($item->sellIn >= 0) {
            return;
        }

        if ($this->isAgedBrie($item)) {
            $this->increaseQuality($item);
        } elseif ($this->isBackstagePasses($item)) {
            $item->quality = 0;
        } else {
            $degradationRate = $this->getDegradationRate($item);
            $this->decreaseQuality($item, $degradationRate);
        }
    }

    private function getDegradationRate(Item $item): int
    {
        return $this->isConjured($item) ? 2 : 1;
    }

    private function increaseQuality(Item $item): void
    {
        if ($item->quality < self::MAX_QUALITY) {
            $item->quality = $item->quality + 1;
        }
    }

    private function decreaseQuality(Item $item, int $amount): void
    {
        if ($item->quality > 0) {
            $item->quality = max(self::MIN_QUALITY, $item->quality - $amount);
        }
    }

    private function isAgedBrie(Item $item): bool
    {
        return $item->name === self::AGED_BRIE;
    }

    private function isBackstagePasses(Item $item): bool
    {
        return $item->name === self::BACKSTAGE_PASSES;
    }

    private function isSulfuras(Item $item): bool
    {
        return $item->name === self::SULFURAS;
    }

    private function isConjured(Item $item): bool
    {
        return str_starts_with($item->name, 'Conjured');
    }
}

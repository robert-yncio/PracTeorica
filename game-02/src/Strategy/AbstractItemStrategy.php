<?php

declare(strict_types=1);

namespace GildedRose\Strategy;

use GildedRose\Item;

abstract class AbstractItemStrategy implements ItemUpdateStrategy
{
    use QualityHelper;


    public function updateSellIn(Item $item): void
    {
        $item->sellIn = $item->sellIn - 1;
    }
}

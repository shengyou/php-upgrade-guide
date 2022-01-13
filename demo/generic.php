<?php

use Kraftsman\UpgradeGuide\Apple;

/**
 * @template T
 */
class Map
{
    private array $items = [];

    /** @param T $item */
    public function __construct(mixed $item)
    {
        $this->items[] = $item;
    }

    /** @return T|null */
    public function first(): mixed
    {
        return $this->items[0] = $this->items[0] ?? null;
    }
}

$map = new Map(
    new Apple(1, "Newton", 100)
);

<?php

namespace Kraftsman\UpgradeGuide;

abstract class Fruit implements Product
{
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
}

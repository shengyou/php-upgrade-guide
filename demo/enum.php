<?php

enum PhpStormVersion {
    case v2021_1;
    case v2021_2;
}

class Version {

    public function __construct($phpStormVersion)
    {
    }
}

$release = new Version("2021.2");

<?php
use Magento\Framework\Component\ComponentRegistrar;
use Tschallacka\MageCommands\Configuration\Config;
ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    Config::MODULE_NAME,
    __DIR__
);

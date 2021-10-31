<?php

namespace Tulpar\Extension\Contracts;

interface ExtensionInterface
{
    public static function getCommands(): array;

    public static function getFilters(): array;
}

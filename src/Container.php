<?php

namespace Tulpar\Extension;

use Tulpar\Contracts\Extension\ExtensionInterface;

class Container
{
    public array $providers = [];

    public function add(ExtensionInterface $extension, ...$arguments): static
    {
        $this->providers[$extension::class] = new $extension(...$arguments);
        return $this;
    }

    public function remove(ExtensionInterface $extension): static
    {
        unset($this->providers[$extension::class]);
        return $this;
    }

    public function get(ExtensionInterface $extension): mixed
    {
        return $this->providers[$extension::class] ?? null;
    }
}

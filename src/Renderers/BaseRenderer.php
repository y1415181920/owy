<?php

namespace Yjn\Owy\Renderers;

class BaseRenderer implements \JsonSerializable
{
    public string $type;

    public array $amisSchema = [];

    public static function make(): static
    {
        return new static();
    }

    public function __call($name, $arguments)
    {
        return $this->set($name, array_shift($arguments));
    }

    public function set($name, $value)
    {
        $this->amisSchema[$name] = $value;

        return $this;
    }

    public function jsonSerialize()
    {
        return $this->amisSchema;
    }

    public function toJson(): bool|string
    {
        return json_encode($this->amisSchema);
    }

    public function toArray(): array
    {
        return $this->amisSchema;
    }
}

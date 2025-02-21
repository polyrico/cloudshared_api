<?php

namespace Src\Domain\ValueObjects;

use Src\Domain\Traits\Stringable as TraitsStringable;
use Stringable;

final class Uuid implements Stringable {
    use TraitsStringable;

    private ?string $value;

    public function __construct(?string $uuid = null) {
        $this->value = $uuid;
    }

    public function getValue(): ?string {
        return $this->value;
    }
}
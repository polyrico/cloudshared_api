<?php

namespace Src\Domain\ValueObjects;

use Src\Domain\Traits\Stringable as TraitsStringable;
use Stringable;

class StringType implements Stringable {
    use TraitsStringable;

    private ?string $value;

    public function __construct(?string $value = null) {
        $this->value = $value;
    }

    public function getValue(): ?string {
        return $this->value;
    }
}
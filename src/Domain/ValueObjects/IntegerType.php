<?php

namespace Src\Domain\ValueObjects;

use Src\Domain\Traits\Stringable as TraitsStringable;
use Stringable;

class IntegerType extends Stringable {
    use TraitsStringable;
    
    private ?int $value;

    public function __construct(?int $value) {
        $this->value = $value;
    }

    public function getValue(): ?int {
        return $this->value;
    }
}
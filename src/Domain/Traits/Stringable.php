<?php

namespace Src\Domain\Traits;

trait Stringable {
    public function __toString(): string {
        return strval($this->value);
    }
}
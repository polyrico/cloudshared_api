<?php

namespace Src\Domain\ValueObjects;

class ArrayStringType {
    /**
     * @var StringType[]
     */
    private array $value;

    /**
     * @param array<StringType> $value
     */
    public function __construct(?array $value = []) {
        $this->value = $value;
    }

    /**
     * @return array<StringType>
     */
    public function getValue(): array {
        return $this->value;
    }

    public function __toString() {
        return array_map(
            function ($item) {
                return $item->getValue();
            },
            $this->value
        );
    }
}
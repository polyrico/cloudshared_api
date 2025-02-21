<?php

namespace Src\Domain;

use Src\Domain\ValueObjects\Uuid;

/**
 * Represent an entity with unique identifier
 */
abstract class UuidEntity {
    public function __construct(private Uuid $uuid) {}

    public function getUuid(): Uuid {
        return $this->uuid;
    }
}
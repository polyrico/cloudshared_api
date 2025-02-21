<?php

namespace Src\Domain\Entities;

use Src\Domain\UuidEntity;
use Src\Domain\ValueObjects\StringType;
use Src\Domain\ValueObjects\Uuid;

class Driver extends UuidEntity {
    public function __construct(
        Uuid $uuid,
        private User $user,
        private StringType $name,
    ) {
        parent::__construct($uuid);    
    }
}
<?php

namespace Src\Domain\Entities;

use Src\Domain\UuidEntity;
use Src\Domain\ValueObjects\StringType;
use Src\Domain\ValueObjects\Uuid;

class User extends UuidEntity {
    public function __construct(
        Uuid $uuid,
        private StringType $name,
        private StringType $email
    ) {
        parent::__construct($uuid);
    }
}
<?php

namespace Src\Domain\Entities;

use DateTime;
use Src\Domain\UuidEntity;
use Src\Domain\ValueObjects\StringType;
use Src\Domain\ValueObjects\Uuid;

class UserCloud extends UuidEntity {
    public function __construct(
        Uuid $uuid,
        private StringType $cloudName,
        private StringType $refreshToken,
        private DateTime $expirationTime,
        private User $user,
        private CloudCredential $cloudCredential
    ) {
        parent::__construct($uuid);
    }
}
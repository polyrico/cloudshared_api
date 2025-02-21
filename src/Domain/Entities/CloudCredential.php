<?php

namespace Src\Domain\Entities;

use Src\Domain\UuidEntity;
use Src\Domain\ValueObjects\ArrayStringType;
use Src\Domain\ValueObjects\StringType;
use Src\Domain\ValueObjects\Uuid;

class CloudCredential extends UuidEntity {
    public function __construct(
        Uuid $uuid,
        private StringType $name,
        private StringType $clientId,
        private StringType $clientSecret,
        private ArrayStringType $scopes,
        private StringType $redirectUrl
    ) {
        parent::__construct($uuid);
    }
}
<?php

namespace Src\Domain\Entities;

use Src\Domain\UuidEntity;
use Src\Domain\ValueObjects\IntegerType;
use Src\Domain\ValueObjects\StringType;
use Src\Domain\ValueObjects\Uuid;

class Partition extends UuidEntity {
    public function __construct(
        Uuid $uuid,
        private IntegerType $size,
        private IntegerType $order,
        private StringType $fileUuid,
        private UserCloud $userCloud,
        private StoreEntity $storeEntity
    ) {
        parent::__construct($uuid);
    }
}
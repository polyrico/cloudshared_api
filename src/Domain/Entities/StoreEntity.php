<?php

namespace Src\Domain\Entities;

use Src\Domain\UuidEntity;
use Src\Domain\ValueObjects\IntegerType;
use Src\Domain\ValueObjects\StringType;
use Src\Domain\ValueObjects\Uuid;

class StoreEntity extends UuidEntity {
    public function __construct(
        Uuid $uuid,
        private StringType $name,
        private StringType $extention,
        private IntegerType $size,
        private Driver $driver,
        private StoreEntity $parentStoreEntity
    ) {
        parent::__construct($uuid);
    }
}
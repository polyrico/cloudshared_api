<?php

namespace Src\Application\Ports\Utils;

interface IDataValidator {
    public function validate(array $data): array;
}
<?php

namespace Src\Application\Ports\Repositories;

interface ICloudCredentialRepository {
    public function find(array $conditionals = []): array;
    public function create(array $data): array;
    public function update(string $uuid, array $data): array;
    public function delete(string $uuid): bool;
}
<?php

namespace Src\Infraestructure\Laravel\Adapters\Persistence;

use App\Models\CloudCredential;
use Src\Application\Ports\Repositories\ICloudCredentialRepository;

class CloudCredentialRepository implements ICloudCredentialRepository {
    public function __construct(
        protected CloudCredential $model
    ) {}

    public function find(array $conditionals = []): array {
        $model = $this->model;

        if ($conditionals) {
            foreach ($conditionals as $key => $value) {
                $model = $model->where($key, $value);
            }
        }
        return $model->get()->toArray();
    }

    public function create(array $data): array {
        return $this->model->create($data)->toArray();
    }

    public function update(string $uuid, array $data): array {
        $credential = $this->model->where('uuid', $uuid)->first();
        $credential->update($data);
        return $credential->toArray();
    }

    public function delete(string $uuid): bool {
        return $this->model->where('uuid', $uuid)->delete();
    }
}
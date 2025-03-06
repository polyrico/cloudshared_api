<?php

namespace Src\Application\UseCases;

use Src\Application\Ports\Repositories\ICloudCredentialRepository;
use Src\Application\Ports\Utils\IDataValidator;

class storeCloudCredentialUseCase {

    public function __construct(
        protected ICloudCredentialRepository $repository,
        protected IDataValidator $validator
    ) {}

    public function execute(array $data): array {
        $this->validator->validate($data);
        return $this->repository->create($data);
    }
}
<?php

namespace Src\Application\UseCases;

use Src\Application\Ports\Repositories\ICloudCredentialRepository;

class listCloudCredentialsUseCase {

    public function __construct(
        protected ICloudCredentialRepository $repository
    ) {}

    public function execute(): array {
        return $this->repository->find();
    }
}
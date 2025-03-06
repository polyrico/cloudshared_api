<?php

namespace Src\Infraestructure\Laravel\Http;

use Src\Application\UseCases\listCloudCredentialsUseCase;

class CloudCredentialController {
    public function __construct(
        protected listCloudCredentialsUseCase $listCloudCredentialsUseCase
    ) {}

    public function index() {
        return $this->listCloudCredentialsUseCase->execute();
    }

    public function store() {
        return $this->useCase->execute();
    }
}
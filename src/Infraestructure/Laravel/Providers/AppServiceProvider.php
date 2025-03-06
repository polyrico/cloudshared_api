<?php

namespace Src\Infraestructure\Laravel\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Application\Ports\Repositories\ICloudCredentialRepository;
use Src\Application\UseCases\listCloudCredentialsUseCase;
use Src\Infraestructure\Laravel\Adapters\Persistence\CloudCredentialRepository;

class AppServiceProvider extends ServiceProvider
{
    public $bindings = [
        // Use Cases
        listCloudCredentialsUseCase::class,
        // Repositories
        ICloudCredentialRepository::class => CloudCredentialRepository::class
    ];
}
<?php

use Illuminate\Foundation\Application;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Contracts\Console\Kernel as ConsoleKernel;
use Illuminate\Contracts\Debug\ExceptionHandler;

// Création de l'instance d'application
$app = new Application($_ENV['APP_BASE_PATH'] ?? dirname(__DIR__));

// Liaison des interfaces importantes dans le conteneur de dépendances
$app->singleton(Kernel::class, App\Http\Kernel::class);
$app->singleton(ConsoleKernel::class, App\Console\Kernel::class);
$app->singleton(ExceptionHandler::class, App\Exceptions\Handler::class);

// Retourne l'instance de l'application
return $app;

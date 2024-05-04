<?php

namespace SaKanjo\FilamentLayoutInspector;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentLayoutInspectorServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-layout-inspector';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews()
            ->hasInstallCommand(fn (InstallCommand $command) => $command
                ->askToStarRepoOnGitHub('sakanjo/filament-layout-inspector')
            );
    }
}

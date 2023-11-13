<?php

namespace AymanAlhattami\FilamentApproval;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentApprovalServiceProvider extends PackageServiceProvider
{
    protected string $name = 'filament-approval';

    public function configurePackage(Package $package): void
    {
        $package
            ->name($this->name)
            ->hasConfigFile()
            ->hasViews();
    }
}

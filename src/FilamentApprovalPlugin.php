<?php

namespace AymanAlhattami\FilamentApproval;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentApprovalPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-approval';
    }

    public function register(Panel $panel): void
    {

    }

    public function boot(Panel $panel): void
    {

    }
}
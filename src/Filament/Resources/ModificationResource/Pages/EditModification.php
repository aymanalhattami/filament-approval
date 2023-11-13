<?php

namespace AymanAlhattami\FilamentApproval\Filament\Resources\ModificationResource\Pages;

use AymanAlhattami\FilamentApproval\Filament\Resources\ModificationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditModification extends EditRecord
{
    protected static string $resource = ModificationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

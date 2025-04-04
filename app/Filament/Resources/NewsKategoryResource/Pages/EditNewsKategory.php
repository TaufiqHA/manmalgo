<?php

namespace App\Filament\Resources\NewsKategoryResource\Pages;

use App\Filament\Resources\NewsKategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewsKategory extends EditRecord
{
    protected static string $resource = NewsKategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

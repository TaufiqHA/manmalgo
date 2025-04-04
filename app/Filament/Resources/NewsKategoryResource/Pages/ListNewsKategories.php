<?php

namespace App\Filament\Resources\NewsKategoryResource\Pages;

use App\Filament\Resources\NewsKategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNewsKategories extends ListRecords
{
    protected static string $resource = NewsKategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

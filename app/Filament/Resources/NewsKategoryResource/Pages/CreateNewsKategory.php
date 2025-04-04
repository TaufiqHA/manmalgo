<?php

namespace App\Filament\Resources\NewsKategoryResource\Pages;

use App\Filament\Resources\NewsKategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNewsKategory extends CreateRecord
{
    protected static string $resource = NewsKategoryResource::class;
}

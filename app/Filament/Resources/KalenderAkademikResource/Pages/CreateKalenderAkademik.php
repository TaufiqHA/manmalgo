<?php

namespace App\Filament\Resources\KalenderAkademikResource\Pages;

use App\Filament\Resources\KalenderAkademikResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKalenderAkademik extends CreateRecord
{
    protected static string $resource = KalenderAkademikResource::class;

    protected static ?string $title = 'Add Academic Calendar';
}

<?php

namespace App\Filament\Student\Resources\PelajaranResource\Pages;

use App\Filament\Student\Resources\PelajaranResource;
use Filament\Resources\Pages\EditRecord;

class EditPelajaran extends EditRecord
{
    protected static string $resource = PelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}

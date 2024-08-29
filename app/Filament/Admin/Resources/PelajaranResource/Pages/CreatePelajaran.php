<?php

namespace App\Filament\Admin\Resources\PelajaranResource\Pages;

use App\Filament\Admin\Resources\PelajaranResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePelajaran extends CreateRecord
{
    protected static string $resource = PelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}

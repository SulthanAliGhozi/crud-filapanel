<?php

namespace App\Filament\Student\Resources\PelajaranResource\Pages;

use App\Filament\Student\Resources\PelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPelajarans extends ListRecords
{
    protected static string $resource = PelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

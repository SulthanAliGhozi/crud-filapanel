<?php

namespace App\Filament\Employee\Widgets;

use Filament\Widgets\ChartWidget;

class TotalSiswa extends ChartWidget
{
    protected static ?string $heading = 'Total Siswa';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}

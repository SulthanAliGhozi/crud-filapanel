<?php

namespace App\Filament\Teacher\Widgets;

use Filament\Widgets\ChartWidget;

class TotalPelajaran extends ChartWidget
{
    protected static ?string $heading = 'Total Pelajaran';

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

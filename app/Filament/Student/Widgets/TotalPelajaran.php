<?php

namespace App\Filament\Student\Widgets;

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

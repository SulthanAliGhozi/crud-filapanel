<?php

namespace App\Filament\Teacher\Resources;

use App\Filament\Teacher\Resources\PelajaranResource\Pages;
use App\Models\Pelajaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PelajaranResource extends Resource
{
    protected static ?string $model = Pelajaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_pelajaran'),
                Forms\Components\TextInput::make('guru_mapel'),
                Forms\Components\TextInput::make('jam_mapel'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_pelajaran')->searchable(),
                Tables\Columns\TextColumn::make('guru_mapel')->searchable(),
                Tables\Columns\TextColumn::make('jam_mapel')->searchable(),
            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPelajarans::route('/'),
            'create' => Pages\CreatePelajaran::route('/create'),
            'edit' => Pages\EditPelajaran::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PelacakanBarangResource\Pages;
use App\Filament\Admin\Resources\PelacakanBarangResource\RelationManagers;
use App\Models\PelacakanBarang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PelacakanBarangResource extends Resource
{
    protected static ?string $model = PelacakanBarang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('barang_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('gudang_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('lokasi_rak')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('catatan')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pelacakans_id')
                    ->default(fn () => PelacakanBarang::latest('id')->first()?->id ?? 1)
                    ->searchable(),
                Tables\Columns\TextColumn::make('barang_id')
                    ->default(fn () => PelacakanBarang::latest('barang_id')->first()?->barang_id ?? 1)
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('gudang_id')
                    ->default(fn () => PelacakanBarang::latest('gudang_id')->first()?->gudang_id ?? 1)
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lokasi_rak')
                    ->searchable(),
                Tables\Columns\TextColumn::make('catatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPelacakanBarangs::route('/'),
            'create' => Pages\CreatePelacakanBarang::route('/create'),
            'edit' => Pages\EditPelacakanBarang::route('/{record}/edit'),
        ];
    }
}

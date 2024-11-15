<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\LaporanStokResource\Pages;
use App\Filament\Admin\Resources\LaporanStokResource\RelationManagers;
use App\Models\LaporanStok;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LaporanStokResource extends Resource
{
    protected static ?string $model = LaporanStok::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('gudang_id')
                    ->default(fn () => LaporanStok::latest('id')->first()?->gudang_id ?? 1)
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('tanggal_laporan')
                    ->required(),
                Forms\Components\TextInput::make('total_barang')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('total_kategori')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('barang_habis')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('barang_tersedia')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('catatan_laporan')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('laporan_id')
                    ->default(fn () => LaporanStok::latest('id')->first()?->id ?? 1)
                    ->searchable(),
                Tables\Columns\TextColumn::make('gudang_id')
                    ->default(fn () => LaporanStok::latest('id')->first()?->gudang_id ?? 1)
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_laporan')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_barang')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_kategori')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('barang_habis')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('barang_tersedia')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListLaporanStoks::route('/'),
            'create' => Pages\CreateLaporanStok::route('/create'),
            'edit' => Pages\EditLaporanStok::route('/{record}/edit'),
        ];
    }
}

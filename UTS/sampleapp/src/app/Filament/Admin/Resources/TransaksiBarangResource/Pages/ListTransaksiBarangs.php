<?php

namespace App\Filament\Admin\Resources\TransaksiBarangResource\Pages;

use App\Filament\Admin\Resources\TransaksiBarangResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTransaksiBarangs extends ListRecords
{
    protected static string $resource = TransaksiBarangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Admin\Resources\TransaksiBarangResource\Pages;

use App\Filament\Admin\Resources\TransaksiBarangResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTransaksiBarang extends EditRecord
{
    protected static string $resource = TransaksiBarangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Admin\Resources\PelacakanBarangResource\Pages;

use App\Filament\Admin\Resources\PelacakanBarangResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPelacakanBarang extends EditRecord
{
    protected static string $resource = PelacakanBarangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

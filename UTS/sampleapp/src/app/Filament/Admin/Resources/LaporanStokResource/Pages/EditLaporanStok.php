<?php

namespace App\Filament\Admin\Resources\LaporanStokResource\Pages;

use App\Filament\Admin\Resources\LaporanStokResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporanStok extends EditRecord
{
    protected static string $resource = LaporanStokResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Admin\Resources\PelacakanBarangResource\Pages;

use App\Filament\Admin\Resources\PelacakanBarangResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPelacakanBarangs extends ListRecords
{
    protected static string $resource = PelacakanBarangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

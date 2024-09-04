<?php

namespace App\Filament\Resources\ProductnumberResource\Pages;

use App\Filament\Resources\ProductnumberResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductnumbers extends ListRecords
{
    protected static string $resource = ProductnumberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

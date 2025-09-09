<?php

namespace App\Providers\Filament\Components;
use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
use Filament\Tables;

class BulkActionsComponent
{
     public function  run(){
        return [
            Tables\Actions\DeleteBulkAction::make(),
            // FilamentExportBulkAction::make('Export')->snappy(),//this will show export in bulk action to help us to choose which records we need to export
        ];
    }
}

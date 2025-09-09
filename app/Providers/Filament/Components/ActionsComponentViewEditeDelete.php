<?php

namespace App\Providers\Filament\Components;
use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
use App\Containers\AppSection\Filament\Tasks\ChangeStatusTask;
use Filament\Tables;

class ActionsComponentViewEditeDelete
{
     public function  run(){
        return [
            Tables\Actions\ActionGroup::make([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
             ]),
        ];
    }
}

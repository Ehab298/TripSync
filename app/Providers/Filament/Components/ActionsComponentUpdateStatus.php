<?php

namespace App\Providers\Filament\Components;

use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Notifications\Notification;

class ActionsComponentUpdateStatus
{
    public function run()
    {
        return [
            Tables\Actions\ActionGroup::make([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),

                Action::make('updateStatus')
                    ->label('Update Status')
                    ->icon('heroicon-o-arrow-path')
                    ->color('success')
                    ->form(function ($record) {
                        $options = [];
                        if ($record->status === 'scheduled') {
                            $options = [
                                'active'    => 'Active',
                                'cancelled' => 'Cancelled',
                            ];
                        } elseif ($record->status === 'active') {
                            $options = [
                                'completed' => 'Completed',
                                'cancelled' => 'Cancelled',
                            ];
                        }

                        return [
                            \Filament\Forms\Components\Select::make('status')
                                ->label('New Status')
                                ->options($options)
                                ->required(),
                        ];
                    })
                    ->action(function ($record, array $data) {
                        $record->update([
                            'status' => $data['status'],
                        ]);

                        Notification::make()
                            ->title('Trip status updated')
                            ->body("Status changed to: {$data['status']}")
                            ->success()
                            ->send();
                    })
                    ->visible(function ($record) {
                        return in_array($record->status, ['scheduled', 'active']);
                    }),
            ]),
        ];
    }
}

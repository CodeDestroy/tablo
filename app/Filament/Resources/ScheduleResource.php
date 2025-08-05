<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ScheduleResource\Pages;
use App\Filament\Resources\ScheduleResource\RelationManagers;
use App\Models\Schedule;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ScheduleResource extends Resource
{
    protected static ?string $model = Schedule::class;
    protected static ?string $pluralModelLabel  = 'Расписание';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('doctor_id')
                    ->label('Врач')
                    ->relationship('doctor', 'secondName') // выбираем врача по фамилии
                    ->required(),
                Forms\Components\DatePicker::make('date')->required()->label('Дата'),
                Forms\Components\TimePicker::make('start_time')->required()->label('Начало'),
                Forms\Components\TimePicker::make('end_time')->required()->label('Конец'),
                Forms\Components\TextInput::make('room')->label('Кабинет'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('doctor.secondName')->label('Врач'),
                Tables\Columns\TextColumn::make('date')->date()->label('Дата'),
                Tables\Columns\TextColumn::make('start_time')->label('Начало'),
                Tables\Columns\TextColumn::make('end_time')->label('Конец'),
                Tables\Columns\TextColumn::make('room')->label('Кабинет'),
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
            'index' => Pages\ListSchedules::route('/'),
            'create' => Pages\CreateSchedule::route('/create'),
            'edit' => Pages\EditSchedule::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GuiasResource\Pages;
use App\Filament\Resources\GuiasResource\RelationManagers;
use App\Models\Guias;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class GuiasResource extends Resource
{
    protected static ?string $model = Guias::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';

    protected static ?string $navigationGroup = 'Manejador de Guias';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('guia')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('aereolinea')
                    ->required()
                    ->maxLength(255),
                Forms\Components\ToggleButtons::make('status')
                ->label('Status')
                ->boolean()
                ->inline()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('guia')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('aereolinea')
                    ->searchable(),
                    Tables\Columns\ToggleColumn::make('status')
                    ->searchable(),
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
                    ExportBulkAction ::make()->exports([
                        ExcelExport::make('table')->fromTable()
                        ->withFilename('Guías_'.date('d-m-Y') . ' - export')
                        ->withWriterType(\Maatwebsite\Excel\Excel::XLSX),
                        //ExcelExport::make('form')->fromTable()
                    ]),
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
            'index' => Pages\ListGuias::route('/'),
            'create' => Pages\CreateGuias::route('/create'),
            'edit' => Pages\EditGuias::route('/{record}/edit'),
        ];
    }
}

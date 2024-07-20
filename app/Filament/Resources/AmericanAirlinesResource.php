<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AmericanAirlinesResource\Pages;
use App\Filament\Resources\AmericanAirlinesResource\RelationManagers;
use App\Models\AmericanAirlines;
use App\Models\Guias;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AmericanAirlinesResource extends Resource
{
    protected static ?string $model = AmericanAirlines::class;
    protected static ?string $navigationGroup = 'Aereolíneas';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('numero_de_air_waybill')
                    ->searchable()
                    ->required()
                    ->live()
                    ->label('Número de Air Waybill')
                    ->getSearchResultsUsing(fn (string $search): array => Guias::where('guia', 'like', "%{$search}%")->where('aereolinea', 'like', 'AEROMEXICO')->where('status', 'like', 1)->limit(50)->pluck('guia', 'guia')->toArray())
                    ->getOptionLabelUsing(fn ($value): ?string => Guias::find($value)?->name),


                Forms\Components\DatePicker::make('reservation_date')
                    ->required(),
                Forms\Components\DatePicker::make('airline_delivery')
                    ->required(),
                Forms\Components\TextInput::make('shipper')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('consignee')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('destination')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('codigo_agent')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('user_id')
                    ->relationship(name: 'user', titleAttribute: 'name')
                    ->required(),
                Forms\Components\TextInput::make('no_available')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('numero_de_air_waybill')
                    ->searchable(),
                Tables\Columns\TextColumn::make('reservation_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('airline_delivery')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('shipper')
                    ->searchable(),
                Tables\Columns\TextColumn::make('consignee')
                    ->searchable(),
                Tables\Columns\TextColumn::make('destination')
                    ->searchable(),
                Tables\Columns\TextColumn::make('codigo_agent')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('no_available')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListAmericanAirlines::route('/'),
            'create' => Pages\CreateAmericanAirlines::route('/create'),
            'edit' => Pages\EditAmericanAirlines::route('/{record}/edit'),
        ];
    }
}

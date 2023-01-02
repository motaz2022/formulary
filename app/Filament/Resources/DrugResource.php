<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DrugResource\Pages;
use App\Filament\Resources\DrugResource\RelationManagers;
use App\Models\Drug;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;

class DrugResource extends Resource
{
    protected static ?string $model = Drug::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('group')->label('Group'),
                        TextInput::make('subgroup')->label('Subgroup'),
                        TextInput::make('scientificname')->label('Scientific Name'),
                        TextInput::make('tradename')->label('Trade Name'),
                        TextInput::make('price')->label('Price')->numeric(),
                        RichEditor::make('se')->label('Side Effects'),
                        Textarea::make('note')->label('Note'),
                        Textarea::make('cautions')->label('Cautions'),
                        // RichEditor::make('note')->label('Note'),
                        Toggle::make('availability')->label('Availability')
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('scientificname')->label('Scientific Name')->sortable()->searchable(),
                TextColumn::make('tradename')->label('Trade Name')->sortable()->searchable(),
                TextColumn::make('price')->label('Price'),
                IconColumn::make('availability')->label('Availability')->boolean()
                    ->trueIcon('heroicon-o-badge-check')
                    ->falseIcon('heroicon-o-x-circle')
            ])
            ->filters([
                TernaryFilter::make('Availability')
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListDrugs::route('/'),
            'create' => Pages\CreateDrug::route('/create'),
            'edit' => Pages\EditDrug::route('/{record}/edit'),
        ];
    }
}

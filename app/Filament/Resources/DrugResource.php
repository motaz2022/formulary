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
use Filament\Forms\Components\MarkdownEditor;
use Filament\Widgets\Widget;
use Filament\Forms\Components\Select;

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
                        TextInput::make('group')->label('Group')->required(),
                        TextInput::make('subGroup')->label('Subgroup')->required(),
                        TextInput::make('genericName')->label('Generic Name')->required(),
                        TextInput::make('brandName')->label('Brand Name')->required(),
                        Select::make('dosageForm')
                            ->options([
                                'tablet' => 'Tablet',
                                'capsule' => 'Capsule',
                                'ampoule' => 'Ampoule',
                                'vial' => 'Vial',
                                'syringe' => 'Syringe',
                                'ointment' => 'Ointment',
                                'cream' => 'Cream',
                                'suppository ' => 'Suppository ',
                                'enema' => 'Enema',
                                'syrup' => 'Syrup',
                                'inhalers' => 'Inhalers',
                                'nebulizer' => 'Nebulizer',
                                'eye drops' => 'Eye Drops',
                                'ear drops' => 'Ear Drops',
                            ])->required(),
                        TextInput::make('price')->label('Price')->numeric()->required(),
                        RichEditor::make('sideEffects')->label('Side Effects'),
                        // Textarea::make('note')->label('Note'),
                        // Textarea::make('cautions')->label('Cautions'),
                        RichEditor::make('pregnancy')->label('Pregnancy'),
                        RichEditor::make('breastfeeding')->label('Breastfeeding'),
                        Toggle::make('msi')->label('Do you want to show safety medication safety issues?'),
                        Toggle::make('hams')->label('High alert medication'),
                        Toggle::make('highConc')->label('High concentrated electrolytes'),
                        RichEditor::make('soundLook')->label('Sound-alike/look-alike issues'),
                        Textarea::make('storage')->label('Storage'),
                        TextInput::make('reference')->label('Reference'),
                        Toggle::make('availability')->label('Availability')
                    ])
            ]);
    }

  
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('genericName')->label('Generic Name')->sortable()->searchable(),
                TextColumn::make('brandName')->label('Brand Name')->sortable()->searchable(),
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

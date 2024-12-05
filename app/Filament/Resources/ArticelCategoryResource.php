<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticelCategoryResource\Pages;
use App\Filament\Resources\ArticelCategoryResource\RelationManagers;
use App\Models\ArticelCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Articel;
use App\Models\Categories;

class ArticelCategoryResource extends Resource
{
    protected static ?string $model = ArticelCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Articel';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Article field
                Forms\Components\Select::make('article_id')
                    ->label('Article')
                    ->options(Articel::all()->pluck('title', 'id'))
                    ->required(),

                // Category field
                Forms\Components\Select::make('category_id')
                    ->label('Category')
                    ->options(Categories::all()->pluck('name', 'id'))
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no')
                    ->label('No')
                    ->getStateUsing(function ($record, $livewire): string {
                        return (string) $livewire->getTableRecords()->search(fn($item) => $item->id === $record->id) + 1;
                    }),
                // Article Title Column
                Tables\Columns\TextColumn::make('articel.title')
                    ->label('Article Title')
                    ->sortable()
                    ->searchable(),

                // Category Name Column
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Category Name')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListArticelCategories::route('/'),
            'create' => Pages\CreateArticelCategory::route('/create'),
            'edit' => Pages\EditArticelCategory::route('/{record}/edit'),
        ];
    }
}

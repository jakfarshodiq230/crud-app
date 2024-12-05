<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticelTagResource\Pages;
use App\Filament\Resources\ArticelTagResource\RelationManagers;
use App\Models\ArticelTag;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Articel;
use App\Models\Tag;

class ArticelTagResource extends Resource
{
    protected static ?string $model = ArticelTag::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
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
                Forms\Components\Select::make('tag_id')
                    ->label('Tags')
                    ->options(Tag::all()->pluck('name', 'id'))
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

                Tables\Columns\TextColumn::make('articel.content')
                    ->label('Article Title')
                    ->sortable()
                    ->searchable(),

                // Category Name Column
                Tables\Columns\TextColumn::make('tag.name')
                    ->label('Tags Name')
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
            'index' => Pages\ListArticelTags::route('/'),
            'create' => Pages\CreateArticelTag::route('/create'),
            'edit' => Pages\EditArticelTag::route('/{record}/edit'),
        ];
    }
}

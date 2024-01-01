<?php

namespace App\Filament\Resources;


use App\Filament\Resources\DatabundleResource\Pages;
use App\Filament\Resources\DatabundleResource\RelationManagers;
use App\Models\Databundle;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DatabundleResource extends Resource
{
    protected static ?string $model = Databundle::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Bill Payment';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListDatabundles::route('/'),
            // 'create' => Pages\CreateDatabundle::route('/create'),
            // 'view' => Pages\ViewDatabundle::route('/{record}'),
            // 'edit' => Pages\EditDatabundle::route('/{record}/edit'),
        ];
    }
}

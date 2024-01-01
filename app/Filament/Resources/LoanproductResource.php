<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LoanproductResource\Pages;
use App\Filament\Resources\LoanproductResource\RelationManagers;
use App\Models\Loanproduct;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LoanproductResource extends Resource
{
    protected static ?string $model = Loanproduct::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Loan';
    protected static ?int $navigationSort = 3;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('duration')
                    ->suffix(' Month(s)')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('interest')
                ->suffix(' %')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('duration')
                ->suffix(' Month(s)')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('interest')
                    ->suffix(' %')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListLoanproducts::route('/'),
            // 'create' => Pages\CreateLoanproduct::route('/create'),
            // 'view' => Pages\ViewLoanproduct::route('/{record}'),
            // 'edit' => Pages\EditLoanproduct::route('/{record}/edit'),
        ];
    }
}

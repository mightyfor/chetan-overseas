<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductnumberResource\Pages;
use App\Filament\Resources\ProductnumberResource\RelationManagers;
use App\Models\Brands;
use App\Models\MainProduct;
use App\Models\Productnumber;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductnumberResource extends Resource
{
    protected static ?string $model = Productnumber::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Product Number';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('product_name')
                    ->options(MainProduct::where('status',1)->pluck('product_name','product_name'))
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('product_make')
                    ->options(Brands::where('status',1)->pluck('name','name'))
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('product_number')
                    ->required()
                    ->maxLength(50),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('product_make')
                    ->searchable(),
                Tables\Columns\TextColumn::make('product_number')
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
            'index' => Pages\ListProductnumbers::route('/'),
            'create' => Pages\CreateProductnumber::route('/create'),
            'edit' => Pages\EditProductnumber::route('/{record}/edit'),
        ];
    }
}

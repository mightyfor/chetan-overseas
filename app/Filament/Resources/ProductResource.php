<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Brands;
use App\Models\MainProduct;
use App\Models\Product;
use App\Models\Productnumber;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Eloquent\Collection;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 4;

    public int | string $perPage = 50;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('product_name')
                    ->options(MainProduct::where('status',1)->pluck('product_name','product_name'))
                    ->afterStateUpdated(function($state , callable $set){
                        $set('slug', strtolower(str_replace(" ", "-", $state)).'-by-chetan-overseas');
                    })
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('product_make')
                    ->options(Brands::where('status',1)->pluck('name','name'))
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('product_number')
                    ->options(Productnumber::all()->pluck('product_number','product_number'))
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('product')
                    ->required()
                    ->maxLength(50),
                Forms\Components\Textarea::make('product_details')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('productimg')
                    ->disk('product-images')
                    ->visibility('public')
                    ->required(),
                Forms\Components\TextInput::make('seo_title')
                    ->maxLength(191),
                Forms\Components\Textarea::make('seo_description')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('seo_auther')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('keywords')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('slug')
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('productimg')->label('Image')->disk('product-images'),
                Tables\Columns\TextColumn::make('product_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('product_make')
                    ->searchable(),
                Tables\Columns\TextColumn::make('product_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('product')
                    ->searchable(),
                Tables\Columns\TextColumn::make('seo_title')
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
                    Tables\Actions\BulkAction::make('Assing seo Author')->action(function (Collection $request){
                        $request->each( function($request){
                            $request->seo_auther = 'Chetan Oversaeas';
                            $request->save();
                        });
                    }),
                    Tables\Actions\BulkAction::make('Assing seo title')->action(function (Collection $request){
                        $request->each( function($request){
                            $request->seo_title = $request->product_make.'|'.$request->product_name.'|'.$request->product;
                            $request->save();
                        });
                    })
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}

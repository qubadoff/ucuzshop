<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use App\Models\ProductCategory;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Məhsullar';

    protected static ?string $navigationGroup = 'Məhsullar';

    protected static ?int $navigationSort = 1;



    protected static ?string $label = 'Məhsul';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Select::make('category_id')
                        ->options(ProductCategory::all()->pluck('name', 'id'))
                        ->label('Kateqoriya')
                        ->required(),
                    TextInput::make('name')->label('Ad')->required()
                        ->live(debounce: '1000')
                        ->afterStateUpdated(fn (Set $set,?string  $state) => $set('slug', Str::slug($state))),
                    TextInput::make('slug')->label('Slug')->required(),
                    TextInput::make('price')->label('Qiymet')->required()->numeric(),
                    ])->columns(4),
                Section::make([
                    Textarea::make('description')->label('Məhsul haqqında'),
                    FileUpload::make('cover_image')
                        ->required()
                        ->label('Əsas şəkil')
                        ->image()
                        ->downloadable()
                        ->openable()
                        ->imageEditor()
                        ->imageEditorAspectRatios([
                            '16:9',
                            '4:3',
                            '1:1',
                        ]),

                    FileUpload::make('image')
                        ->required()
                        ->label('Digər şəkillər')
                        ->image()
                        ->multiple()
                        ->downloadable()
                        ->openable()
                        ->imageEditor()
                        ->imageEditorAspectRatios([
                            '16:9',
                            '4:3',
                            '1:1',
                        ]),
                ])->columns(3),
                Section::make([
                    Select::make('is_active')->options([
                        '1' => 'Aktiv',
                        '2' => 'Deaktiv',
                    ])->label('Status')->required(),
                    Select::make('is_featured')->options([
                        '1' => 'Bəli',
                        '2' => 'Xeyr',
                    ])->label('Sliderdə gorunsun ?')->required(),
                    Select::make('is_stock')->options([
                        '1' => 'Var',
                        '2' => 'Yoxdur',
                    ])->label('Anbarda var ?')->required(),
                ])->columns('3')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('name')->searchable()->label('Ad'),
                Tables\Columns\TextColumn::make('price')->searchable()->label('Qiymet')->money('AZN'),
                Tables\Columns\ImageColumn::make('cover_image')->label('Əsas şəkili')->circular(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])->reorderable('order')->defaultSort('created_at', 'desc');
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

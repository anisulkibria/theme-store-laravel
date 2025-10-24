<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ThemeResource\Pages;
use App\Models\Theme;
use Filament\Forms;
use Filament\Forms\Components;
use Filament\Resources\Resource;
use Filament\Schemas\Components as SchemaComponents;
use Filament\Actions;
use Filament\Tables;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ThemeResource extends Resource
{
    protected static ?string $model = Theme::class;

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                SchemaComponents\Section::make('Basic Information')
                    ->schema([
                        Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Components\TextInput::make('price')
                            ->required()
                            ->maxLength(255)
                            ->prefix('$'),
                        Components\TextInput::make('rating')
                            ->required()
                            ->numeric()
                            ->step(0.1)
                            ->minValue(0)
                            ->maxValue(5),
                        Components\TextInput::make('sales')
                            ->maxLength(255)
                            ->suffix('+'),
                        Components\Textarea::make('description')
                            ->required()
                            ->rows(3)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                SchemaComponents\Section::make('Media')
                    ->schema([
                        Components\FileUpload::make('image')
                            ->image()
                            ->disk('public')
                            ->directory('themes')
                            ->visibility('public'),
                        Components\FileUpload::make('preview_images')
                            ->image()
                            ->multiple()
                            ->disk('public')
                            ->directory('themes/previews')
                            ->visibility('public'),
                    ])
                    ->columns(1),

                SchemaComponents\Section::make('Theme Details')
                    ->schema([
                        Components\RichEditor::make('details_content')
                            ->label('')
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'strike',
                                'link',
                                'h2',
                                'h3',
                                'bulletList',
                                'orderedList',
                                'blockquote',
                                'codeBlock',
                            ])
                            ->columnSpanFull(),
                    ])
                    ->collapsible(),

                SchemaComponents\Section::make('URLs')
                    ->schema([
                        Components\TextInput::make('detail_url')
                            ->required()
                            ->maxLength(255)
                            ->prefix('/themes/'),
                        Components\TextInput::make('demo_url')
                            ->url()
                            ->maxLength(255),
                        Components\TextInput::make('purchase_url')
                            ->required()
                            ->url()
                            ->maxLength(255),
                    ])
                    ->columns(1),

                SchemaComponents\Section::make('Key Features')
                    ->schema([
                        Components\Repeater::make('features')
                            ->label('Features List')
                            ->schema([
                                Components\TextInput::make('item')
                                    ->label('Feature')
                                    ->hiddenLabel(),
                            ])
                            ->addActionLabel('Add Feature')
                            ->columnSpanFull()
                            ->defaultItems(0)
                            ->reorderable()
                            ->collapsible(false)
                            ->itemLabel(fn (array $state): ?string => $state['item'] ?? null),
                    ])
                    ->columns(1)
                    ->collapsible(),

                SchemaComponents\Section::make('Settings')
                    ->schema([
                        Components\Toggle::make('is_active')
                            ->default(true),
                        Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                    ])
                    ->columns(2),
            ])
            ->columns(2);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->imageSize(60)
                    ->circular()
                    ->disk('public')
                    ->visibility('public'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->money('USD')
                    ->sortable(),
                Tables\Columns\TextColumn::make('rating')
                    ->badge()
                    ->color('warning')
                    ->sortable(),
                Tables\Columns\TextColumn::make('sales')
                    ->badge()
                    ->color('success')
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sort_order')
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
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Status')
                    ->boolean()
                    ->trueLabel('Active themes only')
                    ->falseLabel('Inactive themes only')
                    ->native(false),
            ])
            ->recordActions([
                Actions\ViewAction::make(),
                Actions\EditAction::make(),
            ])
            ->toolbarActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('sort_order');
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
            'index' => Pages\ListThemes::route('/'),
            'create' => Pages\CreateTheme::route('/create'),
            'view' => Pages\ViewTheme::route('/{record}'),
            'edit' => Pages\EditTheme::route('/{record}/edit'),
        ];
    }
}

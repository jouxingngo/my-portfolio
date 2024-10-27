<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('description')
                    ->label('Description')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('img')
                    ->label('Image')
                    ->directory('images')
                    ->image()
                    ->nullable()
                    ->imageEditor()
                    ->columnSpanFull()
                    ->imageEditorAspectRatios([
                        '16:9',
                        '4:3',
                        '1:1',
                    ]),
                Repeater::make('technologies')
                    ->label('Technologies')
                    ->schema([
                        TextInput::make('name')
                            ->label('Technology Name')
                    ])
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('repo_link')
                    ->label("Repository Link")
                    ->nullable()
                    ->url(),
                TextInput::make('demo_link')
                    ->label("Demo Link")
                    ->nullable()
                    ->url()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->sortable()
                    ->searchable()
                    ->label('Title'),
                TextColumn::make('description')
                    ->label('Description')
                    ->html()
                    ->limit(20),
                ImageColumn::make('img')
                    ->sortable()
                    ->label("Image"),
                TextColumn::make('repo_link')
                    ->searchable()
                    ->limit(20)
                    ->sortable()
                    ->label("Repository Link"),
                TextColumn::make('demo_link')
                    ->sortable()
                    ->limit(20)
                    ->searchable()
                    ->label("Demo Link")
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}

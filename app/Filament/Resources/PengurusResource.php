<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengurusResource\Pages;
use App\Filament\Resources\PengurusResource\RelationManagers;
use App\Models\Pengurus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
// BARU
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class PengurusResource extends Resource
{
    protected static ?string $model = Pengurus::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('gambar')
                    ->required()
                    ->disk('public')
                    ->directory('pengurus')
                    ->image()
                    ->imageEditor(),
                TextInput::make('no_hp')
                    ->label('Nomor HP (WhatsApp)')
                    ->tel() // Tipe input telepon
                    ->maxLength(20),
                TextInput::make('instagram')
                    ->label('URL Profil Instagram')
                    ->url() // Tipe input URL
                    ->maxLength(255),
                TextInput::make('sosmed_lain')
                    ->label('URL Sosial Media Lainnya')
                    ->url()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar')
                    ->circular(), // Menampilkan gambar jadi lingkaran
                TextColumn::make('nama')
                    ->searchable(),
                TextColumn::make('no_hp')
                    ->label('Nomor HP'),
                TextColumn::make('instagram')
                    ->label('Instagram')
                    ->toggleable(isToggledHiddenByDefault: true), // Sembunyikan by default
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
            'index' => Pages\ListPenguruses::route('/'),
            'create' => Pages\CreatePengurus::route('/create'),
            'edit' => Pages\EditPengurus::route('/{record}/edit'),
        ];
    }
}

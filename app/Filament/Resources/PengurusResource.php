<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengurusResource\Pages;
use App\Models\Pengurus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str; // <-- Penting untuk slug

class PengurusResource extends Resource
{
    protected static ?string $model = Pengurus::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group'; // Ikon lebih sesuai

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Mengatur layout form menjadi 2 kolom
                Forms\Components\Group::make()->schema([
                    Forms\Components\TextInput::make('nama')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                    // FIELD JABATAN DITAMBAHKAN DI SINI
                    Forms\Components\TextInput::make('jabatan')
                        ->required()
                        ->maxLength(255),
                    
                    // Slug akan diisi otomatis, jadi disembunyikan di form Create
                    Forms\Components\TextInput::make('slug')
                        ->required()
                        ->maxLength(255)
                        ->disabled()
                        ->dehydrated()
                        ->unique(Pengurus::class, 'slug', ignoreRecord: true)
                        ->hidden(fn (string $operation): bool => $operation === 'create'),
                    
                    Forms\Components\RichEditor::make('deskripsi')
                        ->label('Deskripsi / Biodata')
                        ->columnSpanFull(),
                ])->columnSpan(2),

                // Kolom kanan untuk gambar dan sosmed
                Forms\Components\Group::make()->schema([
                    Forms\Components\FileUpload::make('gambar')
                        ->required()
                        ->disk('public')
                        ->directory('pengurus')
                        ->image()
                        ->imageEditor(),

                    Forms\Components\TextInput::make('no_hp')
                        ->label('Nomor HP (WhatsApp)')
                        ->tel()
                        ->maxLength(20),

                    Forms\Components\TextInput::make('instagram')
                        ->label('URL Profil Instagram')
                        ->url()
                        ->maxLength(255),
                ])->columnSpan(1),

            ])->columns(3); // Total 3 kolom
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('gambar')
                    ->circular(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable()
                    ->sortable(),
                
                // KOLOM JABATAN DITAMBAHKAN DI SINI
                Tables\Columns\TextColumn::make('jabatan')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('no_hp')
                    ->label('Nomor HP')
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListPenguruses::route('/'),
            'create' => Pages\CreatePengurus::route('/create'),
            'edit' => Pages\EditPengurus::route('/{record}/edit'),
        ];
    }
}
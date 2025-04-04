<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendaftaranResource\Pages;
use App\Filament\Resources\PendaftaranResource\RelationManagers;
use App\Models\Pendaftaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PendaftaranResource extends Resource
{
    protected static ?string $model = Pendaftaran::class;

    protected static ?string $navigationLabel = 'Pendaftar';

    protected static ?string $navigationGroup = 'Registrant Management';

    protected static ?string $navigationIcon = 'heroicon-o-user-plus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_lengkap')
                    ->required(),
                Forms\Components\TextInput::make('tempat_lahir')
                    ->required(),
                Forms\Components\TextInput::make('nisn')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_lahir')
                    ->required(),
                Forms\Components\TextInput::make('jenis_kelamin')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required(),
                Forms\Components\TextInput::make('nomor_telepon')
                    ->tel()
                    ->required(),
                Forms\Components\Textarea::make('alamat_lengkap')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('asal_sekolah')
                    ->required(),
                Forms\Components\TextInput::make('nilai_bahasa_indonesia')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nilai_bahasa_inggris')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nilai_matematika')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nama_ayah')
                    ->required(),
                Forms\Components\TextInput::make('nama_ibu')
                    ->required(),
                Forms\Components\TextInput::make('pekerjaan_ayah')
                    ->required(),
                Forms\Components\TextInput::make('pekerjaan_ibu')
                    ->required(),
                Forms\Components\TextInput::make('nomor_telepon_orang_tua')
                    ->tel()
                    ->required(),
                Forms\Components\TextInput::make('foto')
                    ->required(),
                Forms\Components\TextInput::make('ijazah_surat_keterangan_lulus')
                    ->required(),
                Forms\Components\TextInput::make('kartu_keluarga')
                    ->required(),
                Forms\Components\TextInput::make('status_pendaftaran')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_lengkap')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tempat_lahir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nisn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_lahir')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenis_kelamin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nomor_telepon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('asal_sekolah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nilai_bahasa_indonesia')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_bahasa_inggris')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_matematika')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_ayah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_ibu')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pekerjaan_ayah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pekerjaan_ibu')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nomor_telepon_orang_tua')
                    ->searchable(),
                Tables\Columns\TextColumn::make('foto')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ijazah_surat_keterangan_lulus')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kartu_keluarga')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status_pendaftaran')
                    ->searchable(),
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
            'index' => Pages\ListPendaftarans::route('/'),
            'create' => Pages\CreatePendaftaran::route('/create'),
            'edit' => Pages\EditPendaftaran::route('/{record}/edit'),
        ];
    }
}

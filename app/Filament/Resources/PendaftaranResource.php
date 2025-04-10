<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Pendaftaran;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PendaftaranResource\Pages;
use App\Filament\Resources\PendaftaranResource\RelationManagers;

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
                Forms\Components\Select::make('status_pendaftaran')
                    ->options([
                        'Menunggu Verifikasi' => 'Menugggu Verifikasi',
                        'Sedang Diproses' => 'Sedang Diproses',
                        'Lolos Seleksi' => 'Lolos Seleksi',
                        'Tidak Lolos' => 'Tidak Lolos',
                        'Verifikasi Dokumen Gagal' => 'Verifikasi Dokumen Gagal',
                        'Dibatalkan' => 'Dibatalkan',
                        'Selesai' => 'Selesai'
                    ]),
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
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Components\Section::make('Data Pribadi')
                    ->schema([
                        Components\TextEntry::make('nama_lengkap')
                            ->label('Nama Lengkap'),
                        Components\Grid::make(3)
                            ->schema([
                                Components\TextEntry::make('tempat_lahir')
                                    ->label('Tempat Lahir'),
                                Components\TextEntry::make('tanggal_lahir')
                                    ->label('Tanggal Lahir')
                                    ->date(),
                                Components\TextEntry::make('jenis_kelamin')
                                    ->label('Jenis Kelamin'),
                            ]),
                        Components\TextEntry::make('nisn')
                            ->label('NISN'),
                    ])
                    ->columns(1),
                    
                Components\Section::make('Informasi Kontak')
                    ->schema([
                        Components\Grid::make(2)
                            ->schema([
                                Components\TextEntry::make('email')
                                    ->label('Email'),
                                Components\TextEntry::make('nomor_telepon')
                                    ->label('Nomor Telepon'),
                            ]),
                        Components\TextEntry::make('alamat_lengkap')
                            ->label('Alamat Lengkap')
                            ->columnSpanFull(),
                    ])
                    ->columns(1),
                    
                Components\Section::make('Informasi Akademik')
                    ->schema([
                        Components\TextEntry::make('asal_sekolah')
                            ->label('Asal Sekolah'),
                        Components\Grid::make(3)
                            ->schema([
                                Components\TextEntry::make('nilai_bahasa_indonesia')
                                    ->label('Nilai Bahasa Indonesia'),
                                Components\TextEntry::make('nilai_matematika')
                                    ->label('Nilai Matematika'),
                                Components\TextEntry::make('nilai_bahasa_inggris')
                                    ->label('Nilai Bahasa Inggris'),
                            ]),
                    ])
                    ->columns(1),
                    
                Components\Section::make('Data Orang Tua')
                    ->schema([
                        Components\Grid::make(2)
                            ->schema([
                                Components\TextEntry::make('nama_ayah')
                                    ->label('Nama Ayah'),
                                Components\TextEntry::make('pekerjaan_ayah')
                                    ->label('Pekerjaan Ayah'),
                            ]),
                        Components\Grid::make(2)
                            ->schema([
                                Components\TextEntry::make('nama_ibu')
                                    ->label('Nama Ibu'),
                                Components\TextEntry::make('pekerjaan_ibu')
                                    ->label('Pekerjaan Ibu'),
                            ]),
                        Components\TextEntry::make('nomor_telepon_orang_tua')
                            ->label('Nomor Telepon Orang Tua'),
                    ])
                    ->columns(1),
                    
                Components\Section::make('Dokumen Pendaftaran')
                    ->schema([
                        Components\Actions::make([
                            Components\Actions\Action::make('downloadFoto')
                                ->label('Download Foto 3x4')
                                ->icon('heroicon-o-arrow-down-tray')
                                ->color('primary')
                                ->url(fn ($record) => url('storage/foto/' . $record->foto))
                                ->openUrlInNewTab(),
                                
                            Components\Actions\Action::make('downloadIjazah')
                                ->label('Download Ijazah/Surat Keterangan Lulus')
                                ->icon('heroicon-o-arrow-down-tray')
                                ->color('primary')
                                ->url(fn ($record) => url('storage/file/' . $record->ijazah_surat_keterangan_lulus))
                                ->openUrlInNewTab(),
                                
                            Components\Actions\Action::make('downloadKK')
                                ->label('Download Kartu Keluarga')
                                ->icon('heroicon-o-arrow-down-tray')
                                ->color('primary')
                                ->url(fn ($record) => url('storage/file/' . $record->kartu_keluarga))
                                ->openUrlInNewTab(),
                        ])
                    ])
                    ->columns(1),
                    
                Components\Section::make('Status Pendaftaran')
                    ->schema([
                        Components\TextEntry::make('status_pendaftaran')
                            ->badge()
                            ->color(fn (string $state): string => match ($state) {
                                'Menunggu Verifikasi' => 'gray',
                                'Sedang Diproses' => 'info',
                                'Lolos Seleksi' => 'success',
                                'Tidak Lolos' => 'danger',
                                'Verifikasi Dokumen Gagal' => 'warning',
                                'Dibatalkan' => 'danger',
                                'Selesai' => 'success',
                                default => 'gray',
                            }),
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

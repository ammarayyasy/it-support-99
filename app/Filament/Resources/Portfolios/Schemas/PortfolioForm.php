<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MultiSelect;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use PhpParser\Node\Expr\AssignOp\Mul;

class PortfolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('subtitle'),
                Textarea::make('description')
                    ->columnSpanFull(),
                FileUpload::make('thumbnail')
                    ->label('Unggah Gambar')
                    ->directory('portfolios')
                    ->image()
                    ->disk('public'),
                TextInput::make('pm'),
                TextInput::make('it_specialist'),
                TextInput::make('client'),
                MultiSelect::make('tags')
                    ->multiple()
                    ->relationship('tags', 'name')
                    ->preload(),
            ]);
    }
}

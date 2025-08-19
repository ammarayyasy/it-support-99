<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PortfolioInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title'),
                TextEntry::make('subtitle'),
                ImageEntry::make('thumbnail')
                    ->disk('public'),
                TextEntry::make('tags.name')
                    ->label('Tags')
                    ->badge()
                    ->separator(','),
                TextEntry::make('pm'),
                TextEntry::make('it_specialist'),
                TextEntry::make('client'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}

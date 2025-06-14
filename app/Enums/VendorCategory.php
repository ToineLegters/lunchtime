<?php

namespace App\Enums;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum VendorCategory: string implements HasIcon, HasLabel
{
    case Snackbar =   'snackbar';
    case Restaurant = 'restaurant';
    case Pizzeria =   'pizzeria';
    case Bakery =     'bakery';
    case Other =      'other';

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return match ($this) {
            self::Snackbar =>   'snackbar',
            self::Restaurant => 'restaurant',
            self::Pizzeria =>   'pizzeria',
            self::Bakery =>     'bakery',
            self::Other =>      'other',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Snackbar =>   'heroicon-m-fire',
            self::Restaurant => 'heroicon-m-building-storefront',
            self::Pizzeria =>   'heroicon-m-heart',
            self::Bakery =>     'heroicon-m-beaker',
            self::Other =>      'heroicon-m-question-mark-circle',
        };
    }
}

<?php

namespace App\Enums;

enum CategoryEnum: string
{
    case ELECTRONICS = 'Electronics';
    case FASHION = 'Fashion';
    case BOOKS = 'Books';
    case TOYS = 'Toys';

    public function getLabel(): string
    {
        return match ($this) {
            self::ELECTRONICS => '',
            self::FASHION => '',
            self::BOOKS => '',
            self::TOYS => '',
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::ELECTRONICS => '',
            self::FASHION => '',
            self::BOOKS => '',
            self::TOYS => '',
        };
    }

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }
}

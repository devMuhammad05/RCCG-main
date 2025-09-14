<?php

namespace App\Enums;

enum ArticleCategory: string
{
    case FamilyDevotion = 'family-devotion';
    case Single = 'singles';
    case Children = 'children';
    case Others = 'others';

    /**
     * Get the values of the enum.
     *
     * @return array<string, string>
     */
    public static function toArray(): array
    {
        return [
            self::FamilyDevotion->value => 'FamilyDevotion',
            self::Single->value => 'Single',
            self::Children->value => 'Children',
            self::Others->value => 'Others',
        ];
    }
}

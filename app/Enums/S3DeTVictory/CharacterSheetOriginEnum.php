<?php
/** @noinspection SpellCheckingInspection */
declare(strict_types=1);

namespace App\Enums\S3DeTVictory;

use JetBrains\PhpStorm\Pure;

enum CharacterSheetOriginEnum: string
{
    case Demo = 'demo';
    case PlayTest = 'playtest';
    case MB = 'modulo-basico';
    case DB = 'dragao-brasil';
    case Custom = 'custom';

    /**
     * @return string
     */
    #[Pure] public function label(): string
    {
        return self::getLabel($this);
    }

    /**
     * @param CharacterSheetOriginEnum $value
     * @return string
     */
    public static function getLabel(self $value): string
    {
        return match ($value) {
            self::Demo => 'Demo',
            self::PlayTest => 'Playtest',
            self::MB => 'Módulo Básico',
            self::DB => 'Dragão Brasil',
            self::Custom => 'Custom'
        };
    }
}

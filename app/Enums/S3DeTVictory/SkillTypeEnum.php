<?php
/** @noinspection SpellCheckingInspection */
declare(strict_types=1);

namespace App\Enums\S3DeTVictory;

use JetBrains\PhpStorm\Pure;

enum SkillTypeEnum: string
{
    case Vantagem = 'vantagem';
    case Desvantagem = 'desvantagem';
    case Pericia = 'pericia';
    case Arquetipo = 'arquetipo';
    case Kit = 'kit';

    /**
     * @return string
     */
    #[Pure] public function label(): string
    {
        return self::getLabel($this);
    }

    /**
     * @param SkillTypeEnum $value
     * @return string
     */
    public static function getLabel(self $value): string
    {
        return match ($value) {
            self::Vantagem => 'Vantagem',
            self::Desvantagem => 'Desvantagem',
            self::Pericia => 'Pericia',
            self::Arquetipo => 'Arquétipo',
            self::Kit => 'Kit'
        };
    }
}

<?php
declare(strict_types=1);

namespace App\Enums\S3DeTVictory;

use JetBrains\PhpStorm\Pure;

enum CharacterSheetTypeEnum: string
{
    case Jogador = 'jogador';
    case NPC = 'npc';
    case Template = 'template';

    /**
     * @return string
     */
    #[Pure] public function label(): string
    {
        return self::getLabel($this);
    }

    /**
     * @param CharacterSheetTypeEnum $value
     * @return string
     */
    public static function getLabel(self $value): string
    {
        return match ($value) {
            self::Jogador => 'Jogador',
            self::NPC => 'NPC',
            self::Template => 'Template'
        };
    }
}

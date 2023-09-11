<?php
declare(strict_types=1);

namespace App\Models\S3DeTVictory;

use App\Enums\S3DeTVictory\CharacterSheetOriginEnum;
use App\Enums\S3DeTVictory\CharacterSheetTypeEnum;
use App\Enums\S3DeTVictory\SkillTypeEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CharacterSheet extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 's3detv_character_sheets';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'description',
        'background',
        'type',
        'cost',
        'origin',
        'attribute_power',
        'attribute_ability',
        'attribute_resistance',
        'action_points',
        'mana_points',
        'life_points',
        'experience_points',
        'image_url',
        'image_path'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'type' => CharacterSheetTypeEnum::class,
        'origin' => CharacterSheetOriginEnum::class
    ];

    /**
     * @return BelongsToMany
     */
    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(
            Skill::class,
            's3detv_character_sheet_skill',
            'character_sheet_id',
            'skill_id'
        )->using(CharacterSheetSkill::class)
            ->withTimestamps();
    }

    /**
     * @return BelongsToMany
     */
    public function archetype(): BelongsToMany
    {
        return $this->skills()->wherePivot('type', SkillTypeEnum::Arquetipo);
    }

    /**
     * @return BelongsToMany
     */
    public function kits(): BelongsToMany
    {
        return $this->skills()->wherePivot('type', SkillTypeEnum::Kit);
    }

    /**
     * @return BelongsToMany
     */
    public function expertises(): BelongsToMany
    {
        return $this->skills()->wherePivot('type', SkillTypeEnum::Pericia);
    }

    /**
     * @return BelongsToMany
     */
    public function advantages(): BelongsToMany
    {
        return $this->skills()->wherePivot('type', SkillTypeEnum::Vantagem);
    }

    /**
     * @return BelongsToMany
     */
    public function disadvantages(): BelongsToMany
    {
        return $this->skills()->wherePivot('type', SkillTypeEnum::Desvantagem);
    }

    /**
     * @return BelongsTo
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

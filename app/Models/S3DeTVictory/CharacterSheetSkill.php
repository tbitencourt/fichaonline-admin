<?php
declare(strict_types=1);

namespace App\Models\S3DeTVictory;

use App\Enums\S3DeTVictory\SkillTypeEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CharacterSheetSkill extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 's3detv_character_sheet_skill';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'description',
        'type',
        'cost',
        'quantity',
        'image_url',
        'image_path'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'type' => SkillTypeEnum::class
    ];

    /**
     * @return BelongsTo
     */
    public function characterSheet(): BelongsTo
    {
        return $this->belongsTo(CharacterSheet::class);
    }

    /**
     * @return BelongsTo
     */
    public function skill(): BelongsTo
    {
        return $this->belongsTo(Skill::class);
    }

    /**
     * @return HasMany
     */
    public function items(): HasMany
    {
        return $this->hasMany(CharacterSheetSkillItem::class);
    }

    /**
     * @return BelongsTo
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

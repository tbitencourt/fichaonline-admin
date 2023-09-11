<?php
declare(strict_types=1);

namespace App\Models\S3DeTVictory;

use App\Enums\S3DeTVictory\SkillTypeEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CharacterSheetSkillItem extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 's3detv_character_sheet_skill_item';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'description',
        'cost',
        'quantity',
        'image_url',
        'image_path'
    ];

    /**
     * @return BelongsTo
     */
    public function characterSheetSkill(): BelongsTo
    {
        return $this->belongsTo(SkillTypeEnum::class);
    }

    /**
     * @return BelongsTo
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

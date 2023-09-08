<?php
declare(strict_types=1);

namespace App\Models\S3DeTVictory;

use App\Enums\S3DeTVictory\SkillOriginEnum;
use App\Enums\S3DeTVictory\SkillTypeEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SkillItem extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 's3detv_skill_items';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'description',
        'cost',
        'origin',
        'image_url',
        'image_path'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'type' => SkillTypeEnum::class,
        'origin' => SkillOriginEnum::class
    ];

    /**
     * @return BelongsTo
     */
    public function skill(): BelongsTo
    {
        return $this->belongsTo(Skill::class);
    }

    /**
     * @return BelongsTo
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

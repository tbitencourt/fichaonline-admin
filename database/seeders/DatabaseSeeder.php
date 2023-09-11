<?php
declare(strict_types=1);

namespace Database\Seeders;

use Database\Seeders\S3DeTVictory\SkillDemoAdvantageSeeder;
use Database\Seeders\S3DeTVictory\SkillDemoDisadvantageSeeder;
use Database\Seeders\S3DeTVictory\SkillDemoExpertiseSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SkillDemoExpertiseSeeder::class,
            SkillDemoAdvantageSeeder::class,
            SkillDemoDisadvantageSeeder::class
        ]);
    }
}

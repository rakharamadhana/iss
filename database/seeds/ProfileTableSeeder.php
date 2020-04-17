<?php

use Illuminate\Database\Seeder;

/**
 * Class ProfileTableSeeder
 */
class ProfileTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seeds.
     */
    public function run()
    {
        $this->disableForeignKeys();

        $this->call(FamilyTableSeeder::class);
        $this->call(PositionTableSeeder::class);
        $this->call(MentoringTableSeeder::class);
        $this->call(AcademicTableSeeder::class);
        $this->call(PersonalTableSeeder::class);
        $this->call(SocialAccountTableSeeder::class);

        $this->enableForeignKeys();
    }
}

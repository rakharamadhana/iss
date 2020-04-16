<?php

use App\Models\Auth\User;
use Carbon\Carbon;
use ParseCsv\Csv;
use Illuminate\Database\Seeder;

/**
 * Class FamilyTableSeeder
 */
class MentoringTableSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seed.
     * @throws Exception
     */
    public function run()
    {
        $this->disableForeignKeys();

        // Add the master administrator, user id of 1
        $mentoring = self::getMentoring();

        if (!empty($mentoring)) {

            foreach ($mentoring as $mentor) {
                // dd($user['password']);
                $user = User::query()->where('registration_number', $mentor['user_registration_number'])->first();
                $user_id = $user->getAttribute('id');
                $mentor['user_id'] = $user_id;

                if($mentor['is_mentor'] == 'Ya'){
                    $mentor['is_mentor'] = true;
                }else{
                    $mentor['is_mentor'] = false;
                }

                if($mentor['quran_recitation'] == ''){
                    $mentor['quran_recitation'] = null;
                }

                $mentor['created_at'] = Carbon::now('Asia/Jakarta');
                $mentor['updated_at'] = Carbon::now('Asia/Jakarta');

                DB::table('mentoring')->insert($mentor);
            }

        }

        $this->enableForeignKeys();
    }

    /**
     * Raw Data file path.
     *
     * @return string
     */
    protected static $path = __DIR__ . '/csv';

    /**
     * Get Data from CSV.
     *
     * @param string $path File Path.
     *
     * @return array
     */
    public static function getCsvData($path = '')
    {
        $csv = new Csv($path);

        return $csv->data;
    }

    /**
     * Get provinces data.
     *
     * @return array
     */
    public static function getMentoring()
    {
        return self::getCsvData(self::$path . '/mentoring.csv');
    }
}

<?php

use App\Models\Auth\User;
use Carbon\Carbon;
use ParseCsv\Csv;
use Illuminate\Database\Seeder;

/**
 * Class FamilyTableSeeder
 */
class PersonalTableSeeder extends Seeder
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
        $personals = self::getPersonals();

        if (!empty($personals)) {

            foreach ($personals as $personal) {
                // dd($user['password']);
                $user = User::query()->where('registration_number', $personal['user_registration_number'])->first();
                $user_id = $user->getAttribute('id');
                $personal['user_id'] = $user_id;

                $personal['birthdate'] = Carbon::parse($personal['birthdate'])->format('Y-m-d');;

                $personal['created_at'] = Carbon::now('Asia/Jakarta');
                $personal['updated_at'] = Carbon::now('Asia/Jakarta');

                DB::table('personals')->insert($personal);
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
    public static function getPersonals()
    {
        return self::getCsvData(self::$path . '/personals.csv');
    }
}

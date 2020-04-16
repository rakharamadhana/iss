<?php

use App\Models\Auth\User;
use Carbon\Carbon;
use ParseCsv\Csv;
use Illuminate\Database\Seeder;

/**
 * Class FamilyTableSeeder
 */
class FamilyTableSeeder extends Seeder
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
        $families = self::getFamilies();

        if (!empty($families)) {

            foreach ($families as $family) {
                // dd($user['password']);
                $user = User::query()->where('registration_number', $family['user_registration_number'])->first();
                $user_id = $user->getAttribute('id');
                $family['user_id'] = $user_id;

                if($family['child_number'] == ''){
                    $family['child_number'] = 1;
                    $family['child_total'] = $family['child_number'];
                }

                $family['created_at'] = Carbon::now('Asia/Jakarta');
                $family['updated_at'] = Carbon::now('Asia/Jakarta');

                DB::table('families')->insert($family);
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
    public static function getFamilies()
    {
        return self::getCsvData(self::$path . '/families.csv');
    }
}

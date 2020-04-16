<?php

use App\Models\Auth\User;
use Carbon\Carbon;
use ParseCsv\Csv;
use Illuminate\Database\Seeder;

/**
 * Class FamilyTableSeeder
 */
class PositionTableSeeder extends Seeder
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
        $positions = self::getPositions();

        if (!empty($positions)) {

            foreach ($positions as $position) {
                // dd($user['password']);
                $user = User::query()->where('registration_number', $position['user_registration_number'])->first();
                $user_id = $user->getAttribute('id');
                $position['user_id'] = $user_id;

                if($position['internal_leader_name'] == ''){
                    $position['internal_leader_name'] = null;
                }

                $position['created_at'] = Carbon::now('Asia/Jakarta');
                $position['updated_at'] = Carbon::now('Asia/Jakarta');

                DB::table('positions')->insert($position);
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
    public static function getPositions()
    {
        return self::getCsvData(self::$path . '/positions.csv');
    }
}

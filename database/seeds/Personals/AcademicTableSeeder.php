<?php

use App\Models\Auth\User;
use Carbon\Carbon;
use ParseCsv\Csv;
use Illuminate\Database\Seeder;

/**
 * Class FamilyTableSeeder
 */
class AcademicTableSeeder extends Seeder
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
        $academics = self::getAcademics();

        if (!empty($academics)) {

            foreach ($academics as $academic) {
                // dd($user['password']);
                $user = User::query()->where('registration_number', $academic['user_registration_number'])->first();
                $user_id = $user->getAttribute('id');
                $academic['user_id'] = $user_id;

                if($academic['payment_amount'] == 'Rp0.00'){
                    $academic['payment_amount'] = 0;
                }else if($academic['payment_amount'] == ''){
                    $academic['payment_amount'] = 0;
                }else if($academic['payment_amount'] == '-'){
                    $academic['payment_amount'] = 0;
                }

                if($academic['scholarship_status'] == 'YA'){
                    $academic['fund_source'] = 'BEASISWA';
                    $academic['scholarship_name'] = 'Beasiswa';
                }else{
                    $academic['fund_source'] = 'PRIBADI';
                }

                if($academic['scholarship_amount'] == 'Rp0.00'){
                    $academic['scholarship_amount'] = 0;
                }else if($academic['scholarship_amount'] == ''){
                    $academic['scholarship_amount'] = 0;
                }

                $academic['created_at'] = Carbon::now('Asia/Jakarta');
                $academic['updated_at'] = Carbon::now('Asia/Jakarta');

                DB::table('academics')->insert($academic);
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
    public static function getAcademics()
    {
        return self::getCsvData(self::$path . '/academics.csv');
    }
}

<?php

use App\Models\Auth\User;
use Carbon\Carbon;
use ParseCsv\Csv;
use Illuminate\Database\Seeder;

/**
 * Class FamilyTableSeeder
 */
class SocialAccountTableSeeder extends Seeder
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
        $socialAccounts = self::getSocialAccounts();

        if (!empty($socialAccounts)) {

            foreach ($socialAccounts as $socialAccount) {
                // dd($user['password']);
                $user = User::query()->where('registration_number', $socialAccount['user_registration_number'])->first();
                $user_id = $user->getAttribute('id');
                $socialAccount['user_id'] = $user_id;

                $socialAccount['created_at'] = Carbon::now('Asia/Jakarta');
                $socialAccount['updated_at'] = Carbon::now('Asia/Jakarta');

                DB::table('social_accounts')->insert($socialAccount);
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
    public static function getSocialAccounts()
    {
        return self::getCsvData(self::$path . '/social_accounts.csv');
    }
}

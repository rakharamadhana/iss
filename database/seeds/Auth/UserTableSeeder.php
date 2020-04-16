<?php

use Carbon\Carbon;
use ParseCsv\Csv;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

/**
 * Class UserTableSeeder.
 */
class UserTableSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seed.
     * @throws Exception
     */
    public function run()
    {
        $this->disableForeignKeys();

        $users = self::getUsers();

        if (!empty($users)) {

            foreach ($users as $user) {
                // dd($user['password']);
                $user['uuid'] = Uuid::uuid4()->toString();
                $user['password'] = bcrypt($user['password']);
                $user['confirmation_code'] = md5(uniqid(mt_rand(), true));
                $user['confirmed'] = true;
                $user['timezone'] = 'Asia/Jakarta';
                $user['created_at'] = Carbon::now('Asia/Jakarta');
                $user['updated_at'] = Carbon::now('Asia/Jakarta');

                DB::table('users')->insert($user);
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
    public static function getUsers()
    {
        return self::getCsvData(self::$path . '/users.csv');
    }
}

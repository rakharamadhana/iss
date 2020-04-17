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
                $name = explode(' ', $user['first_name']);

                switch (count($name))
                {
                    case 1:
                        $first_name = ucfirst($user['first_name']);
                        $last_name = ucfirst($user['last_name']);
                        break;
                    case 2:
                        $first_name = ucfirst($name[0]);
                        $last_name = ucfirst($name[1]);
                        break;
                    case 3:
                        $first_name = ucfirst($name[0]);
                        $last_name = ucfirst($name[1]) . ' ' . ucfirst($name[2]);
                        break;
                    case 4:
                        $first_name = ucfirst($name[0]);
                        $last_name = ucfirst($name[1]) . ' ' . ucfirst($name[2]) . ' ' . ucfirst($name[3]);
                        break;
                    case 5:
                        $first_name = ucfirst($name[0]);
                        $last_name = ucfirst($name[1]) . ' ' . ucfirst($name[2]) . ' ' . ucfirst($name[3]) . ' ' . ucfirst($name[4]);
                        break;
                    default:
                        $first_name = ucfirst($user['first_name']);
                        $last_name = ucfirst($user['last_name']);
                }

                $user['first_name'] = $first_name;
                $user['last_name'] = $last_name;
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

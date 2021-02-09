<?php
use App\User;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Customer Service',
                'email' => 'cs@rscyber.com',
                'password' => bcrypt('cs123'),
                'account_status' => 1,
            ]
        ];

        User::insert($users);
    }
}

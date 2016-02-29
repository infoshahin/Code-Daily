<?php
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
        	'firstname' => 'admin',
        	'lastname' => 'admin',
            'username' => 'admin',
            'password' => '$2y$10$rlWWxSBfUYgGYJbabhXTaea2S3f3dahibYzpqRmkRxDg34UtRNvZm',
            'email' => 'admin@gmail.com',
            'access_id' => 2,
            'status' => 1,
            'remember_token' => 1,
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
           'created_at' => \Carbon\Carbon::now(),
           'username' => 'Kusuma Yudha Ramadhani',
            'image' => '',
            'first_name' => 'Kusuma',
            'last_name' => 'Ramadhani',
            'email' => 'rrver@gmail.com',
            'password' => bcrypt('rrver123'),
            'status' => '1',
        ]);
    }
}

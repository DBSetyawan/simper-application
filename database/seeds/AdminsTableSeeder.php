<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return voids
     */
    public function run()
    {
        DB::table('admins')->insert([
           'created_at' => \Carbon\Carbon::now(),
           'username' => 'Kusuma Yudha Ramadhani',
            'image' => '',
            'first_name' => 'Kusuma',
            'last_name' => 'Ramadhani',
            'email' => 'rrever@gmail.com',
            'password' => bcrypt('rrever123'),
            'status' => '1',
        ]);
    }
}

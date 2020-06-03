<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return voids
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'Bpk. Teddy Wijaya',
                'image' => '',
                'first_name' => 'Teddy',
                'last_name' => 'Wijaya',
                'role' => 'admin',
                'email' => 'hrd@gmail.com',
                'password' => bcrypt('hrd123'),
                'status' => '1',
                'phone' => '9866567794',
                'address' => 'butwal',
                'gender' => 'male',
                'dob' => '2019-03-12',
                'join_date' => '2019-03-12',
                'job_type' => 'sales',
                'city' => 'butwal',
                'age' => '23',
            ],
            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'Daniel Budi Setyawan',
                'image' => '',
                'first_name' => 'Daniel',
                'last_name' => 'Setyawan',
                'role' => 'employee',
                'email' => 'daniel@employee.com',
                'password' => bcrypt('daniel123'),
                'status' => '1',
                'phone' => '986133131',
                'address' => 'butwal',
                'gender' => 'male',
                'dob' => '2019-03-12',
                'join_date' => '2019-03-12',
                'job_type' => 'IT',
                'city' => 'butwal',
                'age' => '22',
            ],

            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'nabin',
                'image' => '',
                'first_name' => 'nbn',
                'last_name' => 'bhandari',
                'role' => 'admin',
                'email' => 'nabin@gmail.com',
                'password' => bcrypt('admin123'),
                'status' => '1',
                'phone' => '9866454562',
                'address' => 'butwal',
                'gender' => 'male',
                'dob' => '2019-03-12',
                'join_date' => '2019-03-12',
                'job_type' => 'Developer',
                'city' => 'butwal',
                'age' => '21',
            ],

            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'abcd',
                'image' => '',
                'first_name' => 'xyz',
                'last_name' => 'pqr',
                'role' => 'employee',
                'email' => 'employee1@gmail.com',
                'password' => bcrypt('employee123'),
                'status' => '1',
                'phone' => '9866567794',
                'address' => 'butwal',
                'gender' => 'male',
                'dob' => '2019-03-12',
                'join_date' => '2019-03-12',
                'job_type' => 'Developer',
                'city' => 'butwal',
                'age' => '25',
            ],

            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'bishal',
                'image' => '',
                'first_name' => 'bishal',
                'last_name' => 'gc',
                'role' => 'employee',
                'email' => 'bishal@gmail.com',
                'password' => bcrypt('employee123'),
                'status' => '1',
                'phone' => '9866567794',
                'address' => 'butwal',
                'gender' => 'male',
                'dob' => '2019-03-12',
                'join_date' => '2019-03-12',
                'job_type' => 'designer',
                'city' => 'butwal',
                'age' => '25',
            ],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id'    => 59110440125,
            'first_name' => 'Nattapong',
            'last_name' => 'Samanpong',
            'email'    => 'nattapong.sa.000@ubu.ac.th',
            'password'   =>  Hash::make('password'),
            'branch' => 'Computer Science',
            'year' => 1,
            'phonenumber' => '0900470560',
            'remember_token' =>  str_random(10),
        ]);
    }
}

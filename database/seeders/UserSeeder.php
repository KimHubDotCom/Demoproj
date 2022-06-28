<?php

namespace Database\Seeders;
use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'name' => 'Kim Vincent Cucharo',
                'email' => 'kimvincentcucharo@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('cucharo143')
            ],
            [
                'name' => 'Karen Cucharo',
                'email' => 'karencucharo@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('karen143')
            ],
            [
                'name' => 'Kaven Cucharo',
                'email' => 'kavencucharo@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('kaven143')
            ],

        ];
        foreach($users as $user){
            User::create($user);

        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
            ['mpras','mpras@gmail.com'],
            ['darkun7','hartawan@smartserviced.id']
        ];
        foreach ($users as $key => $value) {
            $user = User::updateOrCreate([
                'id'    => $key+1,
            ], [
                'name' => $value[0],
                'username' => $value[0],
                'email' => $value[1],
                'email_verified_at' => now(),
                'password' => bcrypt('ijinmasuk'),
                'remember_token' => Str::random(10),
            ]);
        }
    }
}

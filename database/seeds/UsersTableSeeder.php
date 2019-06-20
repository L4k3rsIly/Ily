<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        'name' => 'ily',
        'email' => 'ily@gmail.com',
        'role' => User::ROLE_ADMIN,
        'password' => bcrypt('123456'),
        'remember_token' => str_random(20),
    ]);

        User::create([
            'name' => 'ily1',
            'email' => '12@gmail.com',
            'role' => User::ROLE_MANAGER,
            'password' => bcrypt('123456'),
            'remember_token' => str_random(20),
        ]);

        User::create([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(20),
        ]);
        factory(User::class,10)->create();
    }
}

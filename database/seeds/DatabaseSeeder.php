<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'cpf' => '01615225218',
            'name' => 'Herison',
            'phone' => '92991402755',
            'birth' => '1992-12-16',
            'gender' => 'M',
            'email' => 'herison@gmail.com',
            'password' => env('PASSWORD_HASH') ? bcrypt('herison@flex') : 'herison@flex'
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}

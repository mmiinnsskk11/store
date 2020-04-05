<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        /** Добавление первого пользователя при миграции */

        DB::table('users')->insert([
            'name' => 'SuperAdmin',
            'email' => 'admin@example.com',
            'password' => Hash::make('12345678'),
            'phone' => '375251234567',
            'email_verified_at' => now(),
            'phone_verified_at' => now(),
            'role' => 'superadmin',
            'created_at' => now(),
            'updated_at' => now(),
            'delete' => 0,
        ]);
    }
}

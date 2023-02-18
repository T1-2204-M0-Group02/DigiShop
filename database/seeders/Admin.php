<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2a$12$.W79KJ7i0iYYDMvzwrr.vuYo81SqzZBjZI5MySf4tivFnWb701mUi',// admin
            'remember_token' => Str::random(10),
            'is_admin' => true
        ]);
    }
}

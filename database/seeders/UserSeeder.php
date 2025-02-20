<?php

namespace Database\Seeders; // Ensure this is correct

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    public function run(): void {
        User::create([
            'name' => 'Kazama Iroha',
            'email' => 'iroha@hololive.com',
            'password' => Hash::make('password'),
        ]);
    }
}

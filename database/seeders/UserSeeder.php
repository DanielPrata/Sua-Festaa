<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        $user = new User();

        $user->name = 'Ian';
        $user->email = 'arnoldian2003@gmail.com';
        $user->password = Hash::make('ian123');

        $user->save();
    }
}

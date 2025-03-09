<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@mail.com',
            'password' => bcrypt('iamadmin'),
        ]);

        $dataEntry = User::create([
            'name' => 'Data Entry User',
            'email' => 'dataentry@mail.com',
            'password' => bcrypt('iamdataentry'),
        ]);

        $admin->assignRole('Administrator');
        $dataEntry->assignRole('Data Entry');
    }
}

<?php

namespace Database\Seeders;

use App\Models\Admins;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminseed = Admins::create([

            'full_name'=>'Programmer',
            'username'=>'admin',
            'email'=>'admin@admin.com',
            'password'=> bcrypt(123123),
        ]);
    }
}

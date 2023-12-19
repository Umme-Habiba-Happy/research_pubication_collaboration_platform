<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        //
        Admin::create([
            'name' => 'Umme Habiba Happy',
            'role'=>'admin',
            'phone' => '01993403311',
            'email'=> 'admin@gmail.com',
            'password'=> bcrypt('123456'),
            'image'=>'Admin_photo.jpg'
        ]);
    }
}

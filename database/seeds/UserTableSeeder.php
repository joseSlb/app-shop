<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'jose',
            'username' => 'jose.rs',
            'email'=>'jotaka199@gmail.com',
            'password'=>bcrypt('20207'),
            'admin'=> true
        ]);
    
    }
}

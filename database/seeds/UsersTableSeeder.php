<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $adminRole = Role::where('name','admin')->first();
        $userRole = Role::where('name','user')->first();

        $admin = User::create([
            'name'=>'admin',
            'email' =>'bross.tomass@gmail.com',
            'password' => bcrypt('password123'),
        ]);

        $user = User::create([
            'name'=>'user',
            'email' =>'tomass737@gmail.com',
            'password' => bcrypt('password123'),
        ]);

        $admin->roles()->attach($adminRole);
        $user->roles()->attach($userRole);
    }
}

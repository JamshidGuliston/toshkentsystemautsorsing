<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            $role = Role::where('name', 'admin')->firstOrFail();

            User::create([
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password_22'),
                'remember_token' => Str::random(60),
                'role_id'        => $role->id,
            ]);
            $role = Role::where('name', 'skladchi')->firstOrFail();
            User::create([

                'name'           => 'skladchi',
                'email'          => 'sklad@gmail.com',
                'password'       => bcrypt('123sklad'),
                'remember_token' => Str::random(60),
                'role_id'        => $role->id,
            ]);
            $role = Role::where('name', 'texnolog')->firstOrFail();
            User::create([
                'name'           => 'texnolog',
                'email'          => 'texnolog@gmail.com',
                'password'       => bcrypt('123texnolog'),
                'remember_token' => Str::random(60),
                'role_id'        => $role->id,
            ]);

            $role = Role::where('name', 'direktor')->firstOrFail();
            User::create([
                'name'           => 'direktor',
                'email'          => 'direktor@gmail.com',
                'password'       => bcrypt('123direktor'),
                'remember_token' => Str::random(60),
                'role_id'        => $role->id,
            ]);

            $role = Role::where('name', 'bugalter')->firstOrFail();
            User::create([
                'name'           => 'bugalter',
                'email'          => 'bugalter@gmail.com',
                'password'       => bcrypt('123bugalter'),
                'remember_token' => Str::random(60),
                'role_id'        => $role->id,
            ]);
        }
    }
}

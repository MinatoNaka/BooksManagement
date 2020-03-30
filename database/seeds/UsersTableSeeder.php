<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\User::class)->create([
            'name' => 'naka',
            'email' => 'minato.naka@asia-quest.jp',
        ])->assignRole('admin');

        factory(\App\Models\User::class, 30)->create()
            ->each(function ($user) {
                $role = Role::inRandomOrder()->first();
                $user->assignRole($role);
            });
    }
}

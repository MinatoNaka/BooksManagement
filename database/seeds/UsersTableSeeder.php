<?php

use Illuminate\Database\Seeder;

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
        ]);

        factory(\App\Models\User::class, 30)->create();
    }
}

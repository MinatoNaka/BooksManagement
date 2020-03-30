<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userView = Permission::create(['name' => 'user-view']);
        $userEdit = Permission::create(['name' => 'user-edit']);
        $categoryView = Permission::create(['name' => 'category-view']);
        $categoryEdit = Permission::create(['name' => 'category-edit']);
        $bookView = Permission::create(['name' => 'book-view']);
        $bookEdit = Permission::create(['name' => 'book-edit']);
        $reviewView = Permission::create(['name' => 'review-view']);
        $reviewEdit = Permission::create(['name' => 'review-edit']);

        Role::create(['name' => 'admin'])->givePermissionTo([
            $userView,
            $userEdit,
            $categoryView,
            $categoryEdit,
            $bookView,
            $bookEdit,
            $reviewView,
            $reviewEdit,
        ]);

        Role::create(['name' => 'general'])->givePermissionTo([
            $userView,
            $categoryView,
            $bookView,
            $reviewView,
        ]);
    }
}

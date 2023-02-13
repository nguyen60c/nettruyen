<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'admin.accounts.index',
            'admin.account.create',
            'admin.account.edit',
            'admin.account.delete',
            'admin.account.update',
            'admin.account.store',

            'admin.roles.index',
            'admin.role.create',
            'admin.role.edit',
            'admin.role.delete',
            'admin.role.update',
            'admin.role.store',

            'admin.permissions.index',
            'admin.permission.create',
            'admin.permission.edit',
            'admin.permission.delete',
            'admin.permission.update',
            'admin.permission.store',

            'admin.comicbooks.index',
            'admin.comicbook.create',
            'admin.comicbook.edit',
            'admin.comicbook.delete',
            'admin.comicbook.update',
            'admin.comicbook.store',
        ];

        foreach ($permissions as $permission){
            Permission::create(['name' => $permission]) ;
        }
    }
}

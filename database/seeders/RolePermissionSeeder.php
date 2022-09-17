<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          // Reset cached roles and permissions
          app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

          // create permissions
          Permission::create(['name' => 'create']);
          Permission::create(['name' => 'delete']);
          Permission::create(['name' => 'update ']);
          Permission::create(['name' => 'show ']);
  
        
         
          $role = Role::create(['name' => 'admin']);
          $role->givePermissionTo(Permission::all());
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder

{   

    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Permission::create(['name' => 'tambah-user']);
            Permission::create(['name' => 'edit-user']);
            Permission::create(['name' => 'hapus-user']);
            Permission::create(['name' => 'lihat-user']);

            Permission::create(['name' => 'tambah-produk']);
            Permission::create(['name' => 'hapus-produk']);
            Permission::create(['name' => 'lihat-produk']);
            Permission::create(['name' => 'edit-produk']);
            
            Role::create(['name' => 'admin']);
            Role::create(['name' => 'buyer']);
            Role::create(['name' => 'seller']);

            $roleAdmin = Role::findByName('admin');
            $roleAdmin->givePermissionTo('tambah-user');
            $roleAdmin->givePermissionTo('edit-user');
            $roleAdmin->givePermissionTo('hapus-user');
            $roleAdmin->givePermissionTo('lihat-user');

            $rolebuyer = Role::findByName('buyer');
            $rolebuyer->givePermissionTo('lihat-produk');

            $roleseller = Role::findByName('seller');
            $roleseller->givePermissionTo('tambah-produk');
            $roleseller->givePermissionTo('hapus-produk');
            $roleseller->givePermissionTo('lihat-produk');
            $roleseller->givePermissionTo('edit-produk');
            
        
    }
}

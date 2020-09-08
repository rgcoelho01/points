<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'create cursos']);
        Permission::create(['name' => 'read cursos']);
        Permission::create(['name' => 'update cursos']);
        Permission::create(['name' => 'delete cursos']);

        Permission::create(['name' => 'create disciplinas']);
        Permission::create(['name' => 'read disciplinas']);
        Permission::create(['name' => 'update disciplinas']);
        Permission::create(['name' => 'delete disciplinas']);

        Permission::create(['name' => 'create questoes']);
        Permission::create(['name' => 'read questoes']);
        Permission::create(['name' => 'update questoes']);
        Permission::create(['name' => 'delete questoes']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role1 = Role::create(['name' => 'aluno']);
        $role1->givePermissionTo('read cursos');
        $role1->givePermissionTo('read disciplinas');
        $role1->givePermissionTo('read questoes');

        $role2 = Role::create(['name' => 'professor']);
        $role2->givePermissionTo('read cursos');
        $role2->givePermissionTo('read disciplinas');
        $role2->givePermissionTo('read questoes');
        $role2->givePermissionTo('create questoes');

        $role3 = Role::create(['name' => 'administrador']);
        $role3->givePermissionTo(Permission::all());

        // or may be done by chaining


    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Teacher']);
        $role3 = Role::create(['name' => 'Student']);

        //Permisos de usuario
        Permission::create(['name'=> 'users.index'])->syncRoles([$role1]);
        Permission::create(['name'=> 'users.create'])->syncRoles([$role1]);
        Permission::create(['name'=> 'users.edit'])->syncRoles([$role1]);
        Permission::create(['name'=> 'users.destroy'])->syncRoles([$role1]);

        //Permisos para asignaturas
        Permission::create(['name' => 'subjects.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'subjects.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'subjects.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'subjects.destroy'])->syncRoles([$role1]);

        //permisos para docentes
        Permission::create(['name' => 'teachers.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'teachers.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'teachers.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'teachers.destroy'])->syncRoles([$role1]);

        //permisos para equipos
        Permission::create(['name' => 'teams.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'teams.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'teams.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'teams.destroy'])->syncRoles([$role1, $role2]);

        //permisos para estudiantes
        Permission::create(['name' => 'students.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'students.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'students.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'students.destroy'])->syncRoles([$role1]);

        //permisos para proyectos
        Permission::create(['name' => 'projects.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'projects.create'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'projects.edit'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'projects.destroy'])->syncRoles([$role1, $role2]);

        //permisos para las evaluaciones

        Permission::create(['name' => 'aspectos.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'aspectos.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'aspectos.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'aspectos.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'structures.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'structures.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'structures.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'structures.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'layoutpages.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'layoutpages.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'layoutpages.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'layoutpages.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'controls.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'controls.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'controls.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'controls.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'searchs.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'searchs.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'searchs.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'searchs.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'evaluations.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'evaluations.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'evaluations.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'evaluations.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'ayudas.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'ayudas.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'ayudas.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'ayudas.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'elements.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'elements.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'elements.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'elements.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'identitys.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'identitys.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'identitys.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'identitys.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'interactions.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'interactions.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'interactions.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'interactions.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'rotulados.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'rotulados.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'rotulados.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'rotulados.destroy'])->syncRoles([$role1, $role2]);

    }
}

<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = new Role();
        $role_employee->name = 'admin';
        $role_employee->description = 'A Admin User';
        $role_employee->save();

        $role_editor = new Role();
        $role_editor->name = 'editor';
        $role_editor->description = 'A Editor User';
        $role_editor->save();

        $role_user = new Role();
        $role_user->name = 'user';
        $role_user->description = 'A User';
        $role_user->save();
    }
}

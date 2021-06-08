<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_editor  = Role::where('name', 'editor')->first();
        $role_user  = Role::where('name', 'user')->first();
        $role_user_editor = Role::whereIn('name', ['user', 'editor'])->get();

        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('adminpass');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $editor = new User();
        $editor->name = 'Editor';
        $editor->email = 'editor@gmail.com';
        $editor->password = bcrypt('editorpass');
        $editor->save();
        $editor->roles()->attach($role_editor);

        $editor2 = new User();
        $editor2->name = 'Editor';
        $editor2->email = 'editor2@gmail.com';
        $editor2->password = bcrypt('editorpass');
        $editor2->save();
        $editor2->roles()->attach($role_editor);

        $user = new User();
        $user->name = 'User';
        $user->email = 'user@gmail.com';
        $user->password = bcrypt('userpass');
        $user->save();
        $user->roles()->attach($role_user);

        $user_editor = new User();
        $user_editor->name = 'User_Editor';
        $user_editor->email = 'user_editor@gmail.com';
        $user_editor->password = bcrypt('usereditpass');
        $user_editor->save();
        $user_editor->roles()->attach($role_user_editor);

    }
}

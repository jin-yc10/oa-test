<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;
use App\User;


class SuperUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        $u1 = \App\User::create(
//            ['name'=>'super_admin', 'email'=>'super_admin@oa.com', 'password'=>Hash::make('123456')]
//        );

        $user = \App\User::where('email', '=', 'super_admin@oa.com')->first();
        echo $user."\n";

//        $role = new \App\Models\Role();
//        $role->name         = 'SuperUser';
//        $role->display_name = '超级管理员'; // optional
//        $role->description  = '网站超管'; // optional
//        $role->save();
        $role = \App\Models\Role::where('name', '=', 'SuperUser')->first();
        echo $role."\n";
//
//        $user->attachRole($role);
//
        $permission = new \App\Models\Permission();
        $permission->name         = 'create-post';
        $permission->display_name = 'Create Posts'; // optional
        $permission->description  = 'create new blog posts'; // optional
        $permission->save();

        $role->attachPermission($permission);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'role_id'=> 1,
            'branch_id'=> 1,
            'company_id'=> 1,
            'name'=> 'John Kieyah',
            'username'=> 'johnk',
            'email'=>'admin@pacio.com',
            'password'=>bcrypt('admin1')
            ]);
            DB::table('users')->insert([
                'role_id'=> 2,
                'branch_id'=> 2,
                'company_id'=> 2,
                'name'=> 'Ibrahim Gathirwa',
                'username'=> 'igthirwa',
                'email'=>'ig@pacio.com',
                'password'=>bcrypt('admin2')
                ]);
            DB::table('users')->insert([
                    'role_id'=> 3,
                    'branch_id'=> 3,
                    'company_id'=> 3,
                    'name'=> 'Faith Doe',
                    'username'=> 'fdoe',
                    'email'=>'fd@pacio.com',
                    'password'=>bcrypt('staff')
                    ]);
    }
}
